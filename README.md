# ⚡ My Starter Kit

A bare **Laravel 12** starter kit with a sane defaults.


## ✨ Features

### 🔧 Code Quality

- Includes opinionated configuration of **Pint** and **Rector**. 
    > Run `composer format` clean your code.

### 📦 Models

- **Should Be Strict** - more info [about should be strict](https://laravel-news.com/shouldbestrict)
    1. Prevents lazy loading 
    2. Prevents silently discarding attributes
    3. Prevents accessing missing attributes.
- **Auto Eager Loading** - Enabled automatic eager loading of relationships

### 💯 Testing

- **Refresh Database** - refreshes the database after running feature tests. 
- **Prevents Stray Requests** - configures Laravel Http Facade to prevent stray requests.

### 🔒 Security

- **Force HTTPS** - forces secure generated urls on production environment.
- **Safe Console** - blocks destructive Artisan commands in production 

### 🧩 Blade

#### 📄 Layouts

##### HTML
```blade
<x-layouts.html title="ONBOARD.VIP">
    ...
</x-layouts.html>
```
### 💨 Optimisations

- **Aggresive Prefetching** - Utilizes Vite aggresive prefetching 
- **Immutable Dates** - Uses CarbonImmutable instead of mutable date objects
- **Route Name** - Added `home` as route name for root url.
- **Essentials Config** - Added `essentials.php` config file to configure essential features.

### 🎨 Tailwind CSS

- **Noto Fonts** - with sans, serif and mono.
- **Improved Colors** - with additional palettes.
---