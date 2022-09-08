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
    <body class="antialiased text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-900 min-h-screen flex flex-col justify-between">
        <div class="absolute top-0 right-0">
            <x-theme-switcher></x-theme-switcher>
        </div>
        <div
            class="
                m-12 p-12
                text-3xl text-center
                flex flex-col items-center
            ">
            <span>
                <x-application-logo></x-application-logo>
            </span>
            <span>{{ config('app.name') }}</span>
            <div class="mt-8 text-base">
                <div>
                    <a href="{{route('api.v1')}}">
                        API base URL<br />
                        <span class="text-tdl-500">{{route('api.v1')}}</span>
                    </a>
                    <a href="{{ route('api.v1') }}" target="_blank" class="text-tdl-500">
                        <span class="material-icons-outlined">open_in_new</span>
                    </a>
                </div>
                <div class="mt-4">
                    <a href="{{route('admin.loginForm')}}">
                        Admin Login:<br />
                        <span class="text-tdl-500">{{route('admin.loginForm')}}</span>
                    </a>
                    <a href="{{ route('admin.loginForm') }}" target="_blank" class="text-tdl-500">
                        <span class="material-icons-outlined">open_in_new</span>
                    </a>
                </div>
            </div>
        </div>
    <x-footer></x-footer>
    </body>
</html>
