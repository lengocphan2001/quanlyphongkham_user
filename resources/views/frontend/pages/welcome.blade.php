@extends('frontend.layouts.pages')

@section('title', __('Welcome'))

@section('content')

    @include ("frontend.pages.welcome.heading")
    @include ("frontend.pages.welcome.features")
    @include ("frontend.pages.welcome.selection")

@endsection

@section('footer')
    @include ("frontend.pages.welcome.footer")
@endsection
