@extends('frontend.layouts.master')

@section('layout')
    @include('frontend.includes.stripe-nav')

    <main class="overflow-hidden">
        @yield('content')

        <x-utils.divider color="dark" />

        @include ("frontend.shop.layout.footer")
    </main>
@endsection
