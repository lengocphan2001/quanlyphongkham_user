<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <title>@yield('title') | {{ appName() }}</title>
    <meta name="description" content="@yield('meta_description', appDescription())">
    <meta name="author" content="@yield('meta_author', '5studios.net Team')">
    @yield('meta')

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <link href="{{ mix('css/docs/app.css') }}" rel="stylesheet">
</head>

<body>

<div class="overflow-hidden">
    @include('docs.includes.header')

    <main class="main-wrapper">
        <div class="container pt-5">
            <div id="doc-header" class="py-4 mb-4 border-bottom">
                <h2 class="text-primary">Quick Start Guide</h2>
                <div class="text-muted small">
                    <i class="far fa-clock"></i> Last updated: Sep 01, 2021
                </div>
            </div>

            <div class="row">
                <div class="col-md-9 order-md-last">
                    <div class="content-inner">
                        @yield ('content')
                    </div>
                </div>

                <div class="sidebar col-md-3 d-none d-md-flex">
                    <div id="doc-nav">
                        <nav class="nav nav-menu flex-column sticky" >
                            @include('docs.includes.nav')
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('docs.includes.footer')
</div>

<script src="{{ mix('js/frontend/manifest.js') }}"></script>
<script src="{{ mix('js/frontend/vendor.js') }}"></script>
<script src="{{ mix('js/docs/app.js') }}"></script>

</body>
</html>
