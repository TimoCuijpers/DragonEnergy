<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main class="bg-black grid grid-cols-9 sm:grid-cols-5 lg:grid-cols-7">
                <div class="col-start-2 col-span-7 sm:col-span-3 sm:col-start-2 lg:col-span-3 lg:col-start-3">
                    {{ $slot }}
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
    <footer>
        <x-footer />
    </footer>
</html>
