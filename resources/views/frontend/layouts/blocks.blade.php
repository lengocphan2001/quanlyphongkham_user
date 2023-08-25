@extends('frontend.layouts.pages')

@section('content')
    <x-frontend.header subtitle="{{ $subtitle ?? '' }}">
        @yield('title')
    </x-frontend.header>

    <x-utils.divider color="light" />

    <div class="container-fluid py-3 demo-blocks">
        @yield('main')
    </div>
@endsection

@section('footer')
    <footer class="site-footer section text-center border-top">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mx-auto">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="logo">
                    <h2 class="extra-bold text-dark mb-4">{{ appName() }}</h2>
                    <p class="mt-2 mb-0 text-secondary small">© 2021 <a class="brand bold" target="_blank" href="https://5studios.net">5studios.net</a>. @Lang('All Rights Reserved')</p>
                </div>
            </div>
        </div>
    </footer>
@endsection
