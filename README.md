# ⚡ Laravel 12 Starter Kit

A minimal yet powerful **Laravel 12** starter kit with sensible defaults to help you build fast, secure, and maintainable applications.

> This project is currently under active development.

## 🚧 Todo

- Add fluent classname builder and merger
- Use Volt for Livewire components

## 🛠️ Stack

- **Laravel 12** - with essential defaults
- **Tailwind 4** - and custom colors, fonts and config
- **Livewire 3** - includes AlpineJS

## 🤏🏻 Minimal

- Does **not include** authentication pages (login, register, etc)

## ✨ Features

### 🔧 Code Quality

- Preconfigured with **Laravel Pint**, **PHPStan** and **Rector** for automatic formatting, type checking and refactoring.
- Run `composer prepare` to fix code issues in one single command.

### 📦 Eloquent Enhancements

- **Strict Mode Enabled**
    - 👉 [Read more about Strict Mode](https://laravel-news.com/shouldbestrict)
- **Automatic Eager Loading**
    - 👉 [Read more about Eager Loading](https://laravel-news.com/laravel-12-8-0)

### 🎨 Styling and Theme

- **Noto Font Family**: - includes Sans, Serif, and Mono
    - 👉 [Check Noto Font Family](https://fonts.google.com/noto)
- **Blade Icons**: includes Fluent UI System icons
    - 👉 [Search Fluent UI System](https://fluenticons.co)
- **Custom Color Palette**: extended Tailwind color palette

### 🧩 Blade Layouts

- `<x-layouts.html />`: A base layout with minimal HTML, default scripts, and styles for rapid prototyping.
    - 👉 todo: add link

### 💯 Testing Improvements

- **Database Refreshing**: Refreshes the database after a test
    - 👉 [Read more about Refresh Database](https://dev.to/daniel_werner/under-the-hood-how-refreshdatabase-works-in-laravel-tests-2728)
- **No External Requests**: Prevents outbound HTTP requests during testing using Laravel’s HTTP fake.
    - 👉 todo: add link
- **Laravel Debugbar**: Integrated for better insight during local development.
    - 👉 todo: add link

### 🔒 Security Additions

- **Forced HTTPS**: All URLs are automatically HTTPS in production.
    - 👉 todo: add link
- **Safe Console Commands**: Blocks destructive Artisan commands in production environments.
    - 👉 todo: add link

### 🚀 Performance Optimizations

- **Vite Prefetching**: Enables aggressive prefetching for faster navigation.
    - 👉 todo: add link
- **Immutable Dates**: Uses `CarbonImmutable` to avoid unintentional date mutations.
    - 👉 todo: add link
- **Named Root Route**: Root route is named `home` for clarity and consistency.
    - 👉 todo: add link
- **Centralized Config**: Includes a custom `essentials.php` config file for managing core app settings.
    - 👉 todo: add link
