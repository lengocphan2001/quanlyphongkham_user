<!doctype html>
<html lang="{{ htmlLang() }}" @rtl dir="rtl" @endrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ appName() }}</title>
    <meta name="description" content="@yield('meta_description', appDescription())">
    <meta name="author" content="@yield('meta_author', '5studios.net Team')">
    @yield('meta')

    @stack('before-styles')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    @stack('before-styles')
    <link href="{{ mix('css/frontend/app.css') }}" rel="stylesheet">
    @stack('after-styles')
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @yield('layout')

    @include('includes.partials.messages')

    @stack('before-scripts')
    <script src="{{ mix('js/frontend/manifest.js') }}"></script>
    <script src="{{ mix('js/frontend/vendor.js') }}"></script>
    <script src="{{ mix('js/frontend/app.js') }}"></script>
    @stack('after-scripts')
</body>
</html>
