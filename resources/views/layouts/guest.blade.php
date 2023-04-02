<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if(request()->routeis('ComingSoon.index'))Coming soon! @else {{ config('app.name','laravel')}} @endif </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script src="https://cdn.jsdelivr..net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
    {{-- <x-guest-navigation></x-guest-navigation> --}}
        <div class="min-h-screen bg-[#7199ff] flex items-center justify-center">
            <div class="w-[1000px] h-[700px] sm:rounded-lg">
                <div class="bg-white h-full w-full rounded-xl shadow-xl">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
