---
extends: _layouts.post
section: content
title: Optimistic UI is a concurrency problem wearing a UX costume
article_title: Optimistic UI is a concurrency problem wearing a UX costume
date: 2026-09-27
description: The moment the screen stops waiting for the server, your app stops doing one thing at a time. Five places where "instant" cracked while building Rulrmail, and how we fixed them.
cover_image: /assets/img/optimistic-ui/optimistic-ui-cover.png
---

While building Rulrmail, an open-source, email-first CRM, I wanted one small thing: when you star an email, the star should light up *now*, not after a round trip to a mail server somewhere.

The technique has a friendly name: **optimistic UI**. It means the interface acts on what you asked for straight away, as if the server had already said yes. The request goes off in the background, and in the rare case the server says no, the interface quietly undoes the change and tells you why.

<!-- more -->

<figure class="my-8">
    <img src="/assets/img/optimistic-ui/optimistic-ui-comic.png" alt="A two-panel comic. Waiting UI: a waiter on the phone asks the chef if salmon is possible while the customer has turned into a skeleton. Optimistic UI: the waiter says 'Salmon? Great choice!' and heads to the kitchen while the customer enjoys a glass of wine." class="w-full rounded-lg">
    <figcaption class="mt-3 text-center">
        <span class="block text-gray-900 font-semibold">Same slow kitchen. You just didn't have to watch it.</span>
        <span class="block text-gray-500 text-sm md:text-base">(Out of salmon? He comes back and says sorry. That's the rollback.)</span>
    </figcaption>
</figure>

![Waiting UI vs optimistic UI](/assets/img/optimistic-ui/optimistic-ui-timeline.png)

Most frameworks make it look like a one-liner. With Inertia (Laravel + Vue) it really is:

```js
router.post(`/mailbox/${account}/actions`, { uids, action: 'star' }, {
    optimistic: (props) => ({
        messages: starred(props.messages, uids),
    }),
})
```

So it looks like a UI tweak. It isn't. It's the moment your app stops doing one thing at a time.

![Where "instant" cracked, layer by layer](/assets/img/optimistic-ui/optimistic-ui-cracks.png)

## 1. Clicks start overlapping

Before, every click waited its turn. Now you can star three messages in a second. By default, a new visit cancels the one in flight, and the screen briefly "un-stars" the first message.

The fix is to let requests run side by side:

```js
router.post(url, data, {
    async: true,          // don't cancel the other clicks
    preserveState: true,  // keep selection, scroll, open panes
    optimistic: () => changes,
})
```

## 2. Feedback lags behind the change

The star was instant, but the little "Starred · Undo" toast still waited for the server. The screen said *done* while the confirmation said *wait*.

The fix flips who's in charge. The page shows the toast itself, with an id, and sends that id along. The server answers with the same id, so its toast *updates* the one on screen instead of adding a second one.

```js
const toastId = uuid()
toasts.show({ id: toastId, message: 'Starred 1 message.', undo: pending })
router.post(url, { ...data, toast_id: toastId }, options)
```

```php
// The server's toast replaces the page's, or turns it into an error.
return back()->with('toast', Toast::success($message)->toArray($request->toastId()));
```

## 3. Users act before the server has

With an instant Undo, people click it before the original change has even reached the server. There's nothing to undo yet.

So the page puts things back immediately, remembers the request, and sends the real undo the moment the server's answer arrives:

```js
if (toast.undo.token === null) {
    waitingForToken.set(toast.id, restore)  // send it when the answer comes
    router.replace({ props: (current) => ({ ...current, ...restore(current) }) })
}
```

## 4. Shared state starts racing

Two requests in flight at once meant a message the server had stored in the session "for the next page load" got picked up by the wrong request and vanished. Anything that quietly assumed *one request at a time* broke. The cure is the same as above: the page keeps what it needs instead of relying on server leftovers.

<figure class="my-8">
    <img src="/assets/img/optimistic-ui/optimistic-ui-shared-state.png" alt="A two-panel comic at a kitchen pass. One waiter: the chef calls 'Order up!' and the only waiter takes the plate to table 4. Two waiters: the chef calls 'Order up!' and both waiters grab the same plate, shouting 'Mine!' and 'No, mine!', while table 9 asks where its salmon is." class="w-full rounded-lg">
    <figcaption class="mt-3 text-center">
        <span class="block text-gray-900 font-semibold">"For whoever asks next" only works when one person is asking.</span>
        <span class="block text-gray-500 text-sm md:text-base">(The fix: write the table number on the plate. That's why every toast now has an id.)</span>
    </figcaption>
</figure>

## 5. The database notices

Even the local database complained. SQLite allows one writer at a time, and our parallel requests collided until `database is locked` showed up in the logs.

You might say: who cares about SQLite, that's just local development. Well, I do. It's a red flag anyway: if two requests can collide on my laptop, they can collide in production too, just less often and much harder to reproduce. Local is where that kind of bug is cheapest to catch. A few settings fixed it: wait for the lock instead of failing, let reads and writes happen side by side, and take the write lock up front.

```php
// config/database.php
'sqlite' => [
    // …
    'busy_timeout' => 5000,            // wait for the lock, don't fail
    'journal_mode' => 'wal',           // readers and the writer don't block each other
    'synchronous' => 'normal',
    'transaction_mode' => 'IMMEDIATE', // a read that becomes a write can't wait
],
```

## 6. The last details: the illusion is fragile

A loading bar for a change that's already on screen tells users you don't believe your own UI:

```js
router.post(url, data, { showProgress: false, optimistic: () => changes })
```

And a browser API that only exists on HTTPS (`crypto.randomUUID()`) silently broke every action on a plain-HTTP dev domain, while the tests, running on `127.0.0.1` (which counts as secure), stayed green:

```js
export function uuid() {
    const bytes = crypto.getRandomValues(new Uint8Array(16)) // works on plain HTTP too
    bytes[6] = (bytes[6] & 0x0f) | 0x40
    bytes[8] = (bytes[8] & 0x3f) | 0x80
    const hex = [...bytes].map((b) => b.toString(16).padStart(2, '0')).join('')
    return `${hex.slice(0, 8)}-${hex.slice(8, 12)}-${hex.slice(12, 16)}-${hex.slice(16, 20)}-${hex.slice(20)}`
}
```

## The lesson

Optimistic UI isn't a coat of paint. The moment the screen stops waiting for the server, you've built a system where:

- requests overlap,
- the screen and the server briefly disagree,
- users act on things that don't exist yet,
- and every layer, from the browser to the database, has to cope.

Plan it like an architecture change, not a feature. Decide early who owns the truth at each moment, how you roll back, and what happens when two things happen at once.

Done well, nobody notices any of this. The star just lights up. That's the point.

---

*Rulrmail is open source: free as in freedom, and free as in beer. Contributions and feedback are welcome.*
