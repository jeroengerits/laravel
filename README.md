# ⚡ My Laravel Starter Kit

A minimal yet powerful **Laravel 12** starter kit with sensible defaults to help you build secure, optimized, and maintainable applications quickly.

> 🚧 This project is a work in progress.

## ✨ Features

### 🔧 Code Quality

- Pre-configured with **Laravel Pint** and **Rector** for consistent code formatting and automated refactoring.
- Run `composer prepare` to automatically lint, check, format and test your codebase.

### 📦 Eloquent Models

- **Strict Mode Enabled**: Enforces best practices by:
  - Preventing lazy loading of relationships.
  - Blocking silent discarding of unknown attributes.
  - Disallowing access to missing attributes.
  - Learn more: [Should Be Strict](https://laravel-news.com/shouldbestrict)
- **Automatic Eager Loading**: Improves performance by automatically eager loading model relationships when needed.

### 💯 Testing Enhancements

- **Database Refreshing**: Automatically refreshes the database after each feature test.
- **No Stray Requests**: Prevents accidental external HTTP requests during tests by configuring Laravel’s HTTP facade.
- **Debug Bar**: Added debug bar in development enviroment.

### 🔒 Security Features

- **Enforced HTTPS**: All URLs generated in production are secure by default.
- **Safe Console Commands**: Prevents execution of destructive Artisan commands in production environments.

### 🧩 Blade Templates

- **AlpineJS**: - Installed AlineJS as a module
- `<x-layouts.html />` - plain HTML wrapper and default styles and scripts.


### 💨 Performance Optimizations

- **Aggressive Prefetching**: Utilizes Vite's aggressive prefetching for faster page loads.
- **Immutable Date Handling**: Uses `CarbonImmutable` to avoid unintended date mutations.
- **Named Root Route**: The root URL is named `home` for consistency.
- **Centralized Config**: Includes an `essentials.php` config file to manage key application settings.

### 🎨 Tailwind CSS + Extras

- **Noto Font Family**: Includes Noto Sans, Serif, and Mono for consistent typography.
- **Extended Color Palette**: Adds custom color palettes to enhance your design flexibility.
