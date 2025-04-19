@props([
    'title' => config('app.name', 'Laravel'),
    'description' => null,
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        @if ($description)
            <meta name="description" content="{{ $description }}">
        @endif
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body {{ $attributes->merge(['class' => 'text-primary dark:text-secondary']) }}>
       {{  $slot }}
    </body>
</html>
