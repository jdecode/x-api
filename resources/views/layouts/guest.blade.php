<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('fonts/material-icons.css') }}" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body class="antialiased text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-900">
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <x-footer></x-footer>
    </body>
</html>
