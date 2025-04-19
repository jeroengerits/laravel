# ⚡ Laravel 12 Starter Kit

A minimal yet powerful **Laravel 12** starter kit with sensible defaults to help you build fast, secure, and maintainable applications.

> 🚧 This project is currently under active development.

## 🛠️ Tech Stack

- **Laravel 12**
- **Tailwind CSS**
- **Alpine.js**

## ✨ Features

### 🔧 Code Quality

- Preconfigured with **Laravel Pint** and **Rector** for automatic formatting and refactoring.
- Run `composer prepare` to lint, test, and format your codebase in one command.

### 📦 Eloquent Enhancements

- **Strict Mode Enabled** for improved developer discipline:
    - Prevents lazy loading.
    - Blocks unknown attributes.
    - Disallows access to missing attributes.
    - 👉 [Read more about Strict Mode](https://laravel-news.com/shouldbestrict)
- **Automatic Eager Loading**: Boosts performance by preloading relationships intelligently.

### 🎨 Styling & UI

- **Noto Font Family**: Includes Sans, Serif, and Mono variants for visual consistency.
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
