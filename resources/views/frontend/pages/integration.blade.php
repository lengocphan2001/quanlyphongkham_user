@extends('frontend.layouts.pages', [
    "useDarkLinks" => "dark-link",
    "useOnlyDarkLogo" => true
])

@section('title', __('Corporate'))

@section('content')
    @include ("frontend.pages.integration.heading")

    @include ("frontend.pages.integration.how-it-works")
    @include ("frontend.pages.integration.built-tech")
    @include ("frontend.pages.integration.extend-core")
    @include ("frontend.pages.integration.latest-projects")

    @include ("frontend.pages.integration.register")
    @include ("frontend.pages.integration.why-choose-us")

    @rtl
        @include ("frontend.pages.shared.brands-using", [ "class" => "bg-light edge top-right", "containerClass" => "bring-to-front" ])
    @else
        @include ("frontend.pages.shared.brands-using", [ "class" => "bg-light edge top-left", "containerClass" => "bring-to-front" ])
    @endrtl

    @include ("frontend.blocks.testimonials.3", [ "hasTitle" => true, "class" => "bg-light", "containerClass" => "bring-to-front" ])

    @rtl
        @include ("frontend.blocks.cta.1",[ "class" => "bg-contrast edge top-right", "containerClass" => "pt-5" ])
    @else
        @include ("frontend.blocks.cta.1",[ "class" => "bg-contrast edge top-left", "containerClass" => "pt-5" ])
    @endrtl
@endsection

@section('footer')
    @include ("frontend.blocks.footers.yalp", [ "containerClass" => "pb-3" ])
@endsection
