@extends('mindmatrix.layout.master')

@section('layout')
    @include('mindmatrix.common.stripe-nav')

    <main class="overflow-hidden {{ $mainClass ?? '' }}" id="{{ $mainId ?? '' }}">
        @yield('content')
        @yield('footer')
    </main>
@endsection
