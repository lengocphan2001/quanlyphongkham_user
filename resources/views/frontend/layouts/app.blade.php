@extends('frontend.layouts.master')

@section('layout')
    @include('frontend.includes.nav')

    <main>
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')

        <header class="section header account-header bg-dark">
            <div class="container {{ $headerContainerCss ?? 'pb-10' }}">
                <div class="d-lg-flex align-items-lg-end justify-content-between">
                    <div class="text-center text-lg-start">
                        @yield('header')
                    </div>

                    <div class="order-lg- mt-4 mt-md-0">
                        @if (config('boilerplate.frontend_breadcrumbs'))
                            @include('frontend.includes.partials.breadcrumbs')
                        @endif
                    </div>
                </div>

                @yield('navigation')
            </div>
        </header>

        <x-utils.divider color="contrast" />

        @yield('content')
        @yield('footer')
    </main>
@endsection
