@extends('frontend.layouts.pages', [
    "useDarkLinks" => true,
    "useOnlyDarkLogo" => true
])

@section('title', __('Social'))

@section('content')
    @include ("frontend.pages.social.heading")

    @include ("frontend.pages.shared.3col-icons")
    @include ("frontend.pages.social.try-it")
    @include ("frontend.pages.social.analytics")
    @include ("frontend.pages.social.counters-map")

    <x-utils.divider color="primary"/>

    @include ("frontend.pages.social.timeline")
    @include ("frontend.pages.social.services")

    @include ("frontend.blocks.cta.2", [ "containerClass" => "bring-to-front" ])
    @include ("frontend.blocks.cta.1", [ "containerClass" => "pt-0" ])
@endsection

@section('footer')
    @include("frontend.blocks.footers.next", [ "containerClass" => "py-4" ])
@endsection
