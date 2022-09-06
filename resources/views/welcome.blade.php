<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
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
        <div class="absolute top-0 right-0">
            <x-theme-switcher></x-theme-switcher>
        </div>
        <div
            class="
                m-12 p-12
                text-3xl font-bold text-center
                flex flex-col items-center
            ">
            <span>{{ config('app.name') }}</span>
        </div>
    <x-footer></x-footer>
    </body>
</html>
