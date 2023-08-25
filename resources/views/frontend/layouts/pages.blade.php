@extends('frontend.layouts.master')

@section('layout')
    @include('frontend.includes.stripe-nav')

    <main class="overflow-hidden {{ $mainClass ?? '' }}">
        @yield('content')
        @yield('footer')
    </main>
@endsection
