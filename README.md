# ⚡ Laravel 12 Starter Kit

A minimal yet powerful **Laravel 12** starter kit with sensible defaults to help you build fast, secure, and maintainable applications.

> 🚧 This project is currently under active development.

## 🚧 Todo

- Add fluent classname builder and merger

## 🛠️ Tech Stack

- **Laravel 12** - with essential defaults
- **Tailwind 4** - and custom colors, fonts and config
- **Livewire 3** - includes AlpineJS

## ✨ Features

### 🤏🏻 Minimal

- Does **not include** authentication pages (login, register, etc)

### 🔧 Code Quality

- Preconfigured with **Laravel Pint**, **PHPStan** and **Rector** for automatic formatting, type checking and refactoring.
- Run `composer prepare` to fix code issues in one single command.

### 📦 Eloquent Enhancements

- **Strict Mode Enabled** for improved developer discipline:
    - Prevents lazy loading.
    - Blocks unknown attributes.
    - Disallows access to missing attributes.
    - 👉 [Read more about Strict Mode](https://laravel-news.com/shouldbestrict)
- **Automatic Eager Loading**: Boosts performance by preloading relationships intelligently.
    - 👉 [Read more about Eager Loading](https://laravel-news.com/laravel-12-8-0)

### 🎨 Styling & UI

- **Noto Font Family**: Includes [Noto Family](https://fonts.google.com/noto) for Sans, Serif, and Mono variants for visual consistency.
- **Custom Color Palette**: Extended Tailwind palette for greater design flexibility.
- **Blade Icons**: Uses [Fluent System](https://fluenticons.co) icons by default.

### 🧩 Blade Layouts

- `<x-layouts.html />`: A base layout with minimal HTML, default scripts, and styles for rapid prototyping.

### 💯 Testing Improvements

- **Database Refreshing**: Resets the database after every feature test for clean state.
- **No External Requests**: Prevents outbound HTTP requests during testing using Laravel’s HTTP fake.
- **Laravel Debugbar**: Integrated for better insight during local development.

### 🔒 Security Features

- **Forced HTTPS**: All URLs are automatically HTTPS in production.
- **Safe Console Commands**: Blocks destructive Artisan commands in production environments.

### 🚀 Performance Optimizations

- **Vite Prefetching**: Enables aggressive prefetching for faster navigation.
- **Immutable Dates**: Uses `CarbonImmutable` to avoid unintentional date mutations.
- **Named Root Route**: Root route is named `home` for clarity and consistency.
- **Centralized Config**: Includes a custom `essentials.php` config file for managing core app settings.
