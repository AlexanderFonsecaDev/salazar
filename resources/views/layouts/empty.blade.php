<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #1227e9 0%, #35db55 100%);
        }
    </style>
    <link rel='shortcut icon' type='image/vnd.microsoft.icon' href='{{ asset('favicon.ico') }}'> <!-- IE -->
    <link rel='apple-touch-icon' type='image/png' href='{{ asset('favicon.ico') }}'> <!-- iPhone -->
    <link rel='apple-touch-icon' type='image/png' sizes='72x72' href='{{ asset('favicon.ico') }}'> <!-- iPad -->
    <link rel='apple-touch-icon' type='image/png' sizes='114x114' href='{{ asset('favicon.ico') }}'> <!-- iPhone4 -->
    <link rel='icon' type='image/png' href='{{ asset('favicon.ico') }}'> <!-- Opera Speed Dial, at least 144×114 px -->
</head>


@livewireStyles
</head>
<body>

<div>
    {{ $slot }}
</div>

@livewireScripts
</body>
</html>
