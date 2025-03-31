---
extends: _layouts.post
section: content
title: Whats New in Laravel 12 
date: 2025-03-17
description: Solid improvements that make development smoother.
cover_image: /assets/img/post-cover-image-001.png
---

# What's New in Laravel 12?

Laravel 12 is here, and while it doesn't completely flip the table on how we build apps, it does bring some solid improvements that make development smoother, cleaner, and more enjoyable. Whether you're just starting with Laravel or you've been in the game for a while, you'll find something here that makes your life easier.

Let's dive in!

## 1. Simplified Middleware Registration
Middleware has always been a core part of Laravel, but registering it used to require some extra steps. In Laravel 12, the process is now more streamlined. Instead of manually defining middleware in `Kernel.php`, you can now register middleware directly within the routes file.

### Before (Laravel 11 and earlier):
```php
protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\VerifyCsrfToken::class,
    ],
];
```

### Now (Laravel 12):
```php
Route::middleware([
    \App\Http\Middleware\VerifyCsrfToken::class,
])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
```
This makes your middleware setup more explicit and easier to manage.

## 2. Improved Eloquent Performance
Laravel 12 optimizes how Eloquent handles large datasets. A new internal query builder mechanism reduces redundant queries, making it significantly faster when dealing with large relationships.

### Example:
```php
$users = User::with('posts')->get();
```
This query now executes more efficiently, reducing memory overhead and improving response times.

## 3. Native Support for Feature Flags
No more third-party packages for feature flags! Laravel 12 introduces built-in support for feature flags, making it easier to enable or disable parts of your app dynamically.

### Example:
```php
if (Feature::active('new-dashboard')) {
    return view('new-dashboard');
} else {
    return view('old-dashboard');
}
```
This is great for A/B testing and rolling out new features without deploying new code.

## 4. Blade Components Get Even Better
Blade components are already powerful, but Laravel 12 introduces a way to automatically pass data to nested components without explicitly passing props every time.

### Example:
```php
<x-alert>
    This is a message inside an alert component!
</x-alert>
```
If your alert component requires a message, Laravel 12 automatically detects it from the slot content—less boilerplate, more productivity.

## 5. Artisan Command Enhancements
Artisan gets a boost with better autocompletion and improved output formatting. Running `php artisan list` now provides clearer descriptions and command suggestions, making it easier to find what you need.

## 6. New Validation Rules
Laravel 12 adds a few more validation rules to make form handling even more robust. For example, the new `uuid` rule ensures an input is a valid UUID.

### Example:
```php
$request->validate([
    'transaction_id' => 'required|uuid',
]);
```

## Final Thoughts
Laravel 12 isn't about drastic changes—it’s about making an already great framework even better. The improvements in middleware handling, Eloquent performance, Blade components, and feature flags all contribute to a smoother, more efficient development experience.

If you're working on a Laravel project, upgrading to Laravel 12 is a smart move. It's faster, cleaner, and more developer-friendly. What’s not to love?

So, what’s the first Laravel 12 feature you’ll try out? 🚀

