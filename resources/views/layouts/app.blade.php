<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link rel='shortcut icon' type='image/vnd.microsoft.icon' href='{{ asset('favicon.ico') }}'> <!-- IE -->
        <link rel='apple-touch-icon' type='image/png' href='{{ asset('favicon.ico') }}'> <!-- iPhone -->
        <link rel='apple-touch-icon' type='image/png' sizes='72x72' href='{{ asset('favicon.ico') }}'> <!-- iPad -->
        <link rel='apple-touch-icon' type='image/png' sizes='114x114' href='{{ asset('favicon.ico') }}'> <!-- iPhone4 -->
        <link rel='icon' type='image/png' href='{{ asset('favicon.ico') }}'> <!-- Opera Speed Dial, at least 144×114 px -->
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
