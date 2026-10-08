---
extends: _layouts.post
section: content
title: Model Collapse Isn't New, Nor Is It Specific to AI
article_title: Model Collapse Isn't New, Nor Is It Specific to AI
date: 2026-10-08
description: When one oracle advises everybody, the rare and the weird disappear first. AI researchers call it model collapse. Humanity has lived through it before, and found its way out.
cover_image: /assets/img/model-collapse/model-collapse-cover.png
---

We've all heard the usual complaint, that AI just remixes open-source code it was trained on. That's true, and it's been argued to death, but something quieter is happening, and I think it matters more.

You open the chat and type "Help me build a note-taking app". AI suggests features, then a name, a color palette, a pricing model and a launch strategy. You pick the ones that you like and feel like the architect.

Nothing is wrong with that, until you zoom out and realize you didn't design anything. **You just chose from a menu someone else wrote.** In some cases, your original goal has quietly been replaced by something you might or might not need.

<!-- more -->

And it doesn't stop at your product. In a study of 1,506 people, those who wrote with an opinionated AI assistant didn't just write differently. Their own opinions shifted toward the AI's.[^jakesch]

When one entity has processed nearly all the information in the world, it develops a very specific sense of what's "correct": the best practice, the balanced take, the optimal answer. And it doesn't just advise you. It advises everybody.

Millions of people, one oracle, one answer. Then they publish it, and it becomes tomorrow's training data.

Researchers have already measured what happens next, at least inside the machines. In a 2024 _Nature_ paper, Ilia Shumailov and his colleagues found that training AI on AI-generated content _"causes irreversible defects in the resulting models, in which tails of the original content distribution disappear."_ They called it **model collapse**.[^shumailov]

The "tails" are the rare stuff: the unusual, the weird, the one-in-a-million. In other words, exactly the things that drive progress.

The answer isn't wrong. In many ways, **it _is_ the truth. That's the problem**.

It is an averaged truth. It is correct. It is polished. It is optimized for agreeableness. But, it lacks the dynamo of real life, it lacks **the mistake that turned into a discovery** that no other entity in the world has discovered before.

<figure class="my-8">
    <img src="/assets/img/model-collapse/model-collapse-comic.png" alt="A three-panel comic. The best car: three identical race cars whose drivers say 'Same engine', 'Same tires', 'Same everything'. The heretic: an engineer holds up a sketch of a car with a tail while the team boss shouts 'A tail?! That's anti-aerodynamic!'. The tail: a car with a rear wing; airflow hits the wing ('a little less aerodynamics') while green arrows press the car into the track ('a lot more grip'), under a lap-time board where the tail car beats the best car." class="w-full rounded-lg">
    <figcaption class="mt-3 text-center">
        <span class="block text-gray-900 font-semibold">Everyone got the best car. Nobody built the next one.</span>
        <span class="block text-gray-500 text-sm md:text-base">(The textbook was right. About the wrong problem.)</span>
    </figcaption>
</figure>

We've seen this before, long before the machines.

For centuries, much of Europe ran on a single source of truth: a sacred text, and an institution that interpreted it.[^harari] You didn't need to work things out for yourself. You asked, and you received the answer, the same answer everyone else received. This isn't a judgment on faith, which has given people meaning, community and a moral compass for thousands of years. It's about what happens to thinking when everyone consults the same source. Questions start to look like heresy, and variation starts to look like error. Interpretation becomes stable, coherent and very, very slow.[^numbers] The tails disappear.

The sacred text was never the problem (internet data). The monopoly on interpreting it was (AI version of truth).

Then something broke the monopoly. The printing press put the text in more hands than any institution could supervise. People read it for themselves, disagreed and argued, and some of them were burned for it. The tails came back, and with them came the Reformation, the scientific revolution and the messy, noisy, self-correcting world we live in today.[^eisenstein]

## The Difference

This time, in the age of AI, there's a twist.

Nobody forced this oracle on us. No institution demands our obedience, and there's no penalty for heresy. You can close the tab whenever you like.

We chose it, because it's convenient.

And convenience is a far more effective authority than force. Nobody rebels against something that saves them time. There's nothing to smuggle when nothing is forbidden. There's just one very helpful answer. Each of us gets a better answer, and together we all get the same one.[^doshi]

The printing press broke a monopoly that was imposed on people. But nobody has invented a printing press for a new monopoly we all signed up for. Not yet.

## The Way Out

The way out isn't to stop using AI. Use it, build with it and let it save you time.

Just don't let it be the only voice in the room.

**Seek the second opinion:**<br>
When the AI gives you the answer, ask a human. Better still, ask someone who disagrees with you.

**Find the stranger:**<br>
Show your idea to someone outside your field, your feed and your industry. They haven't been trained on the same data you have.

**Keep a heretic around:**<br>
Every team needs the person who says _"that's the best practice, so let's try the opposite."_ **They'll be wrong most of the time. The time they're right is the discovery.**

**Protect your original goal:**<br>
Before you open the chat, write down what you actually wanted to build. When you're done, compare. **If the AI's version won, make sure it won on merit and not on convenience.**

**Take advice, but don't outsource your taste:**<br>
AI can tell you what's correct. Only you can decide what's _yours_.

Model collapse isn't new. Humanity has lived through it before and found its way out, through stubborn, inconvenient people who refused to take the same answer as everyone else.

Be inconvenient.

[^jakesch]: Jakesch, M., Bhat, A., Buschek, D., Zalmanson, L., & Naaman, M. (2023). Co-Writing with Opinionated Language Models Affects Users' Views. *Proceedings of the 2023 CHI Conference on Human Factors in Computing Systems.* <https://doi.org/10.1145/3544548.3581196>

[^shumailov]: Shumailov, I., Shumaylov, Z., Zhao, Y., Papernot, N., Anderson, R., & Gal, Y. (2024). AI models collapse when trained on recursively generated data. *Nature*, 631, 755–759. <https://doi.org/10.1038/s41586-024-07566-y>

[^harari]: Harari, Y. N. (2024). *Nexus: A Brief History of Information Networks from the Stone Age to AI.* Random House. Harari argues that treating a holy book as infallible doesn't eliminate human fallibility. It shifts authority to its interpreters, and he contrasts this with science's self-correcting mechanisms.

[^numbers]: Historians rightly caution against the "Dark Ages" myth. The medieval Church also preserved texts, founded universities and supported early science. The point here is narrower: what happens when a single source holds the monopoly on interpretation. See Numbers, R. L. (Ed.). (2009). *Galileo Goes to Jail and Other Myths about Science and Religion.* Harvard University Press.

[^eisenstein]: Eisenstein, E. L. (1979). *The Printing Press as an Agent of Change.* Cambridge University Press.

[^doshi]: Doshi, A. R., & Hauser, O. P. (2024). Generative AI enhances individual creativity but reduces the collective diversity of novel content. *Science Advances*, 10(28), eadn5290. <https://doi.org/10.1126/sciadv.adn5290>
