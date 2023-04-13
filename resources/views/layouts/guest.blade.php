<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-green-600 scroll-smooth">
@php
    $random = rand(1, 1000);
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (request()->routeis('ComingSoon.index'))
            Coming soon!
        @else
            {{ config('app.name', 'laravel') }}
        @endif
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-green-600">
    <x-guest-navigation></x-guest-navigation>


    <div class="flex justify-center py-0 sm:py-[5rem] @if ($random == 88) bg-red-500 @endif ">
        <div class="sm:w-[65rem] w-screen sm:rounded-lg">
            <div class="bg-white p-8 sm:rounded-xl shadow-xl animate-[spin_500000s_infinite]">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
