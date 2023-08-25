@extends('frontend.layouts.pages', [
    "navPrimaryClass" => "stick-right",
    "useOnlyDarkLogo" => true
])

@section('title', __('Smart Business'))

@section('content')
    @include ("frontend.pages.smart-business.heading")

    @include ("frontend.pages.smart-business.card-projects")
    @include ("frontend.pages.smart-business.why-us-progress")

    <x-utils.divider color="primary" />

    @include ("frontend.pages.smart-business.deserve-better")
    @include ("frontend.pages.smart-business.icons")

    @rtl
        @include ("frontend.pages.integration.extend-core", [ "class" => "bg-light edge bottom-left" ])
    @else
        @include ("frontend.pages.integration.extend-core", [ "class" => "bg-light edge bottom-right" ])
    @endrtl

    @include ("frontend.pages.smart-business.reviews")

    @rtl
        @include ("frontend.blocks.cta.1", [ "class" => "bg-light edge top-right", "containerClass" => "pt-5" ])
    @else
        @include ("frontend.blocks.cta.1", [ "class" => "bg-light edge top-left", "containerClass" => "pt-5" ])
    @endrtl
@endsection

@section('footer')
    @include("frontend.blocks.footers.yalp")
@endsection
