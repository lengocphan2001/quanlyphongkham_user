@extends('frontend.layouts.pages')

@section('title', __('App Landing'))

@section('content')
    @include("frontend.pages.app-landing.heading")

    @include("frontend.pages.app-landing.integration-icons")
    @include("frontend.pages.app-landing.feature-cards")

    @include("frontend.pages.app-landing.twin-phone+list-right")
    @include("frontend.pages.app-landing.twin-phone+list-left")

    <x-utils.divider color="primary" />

    @include ("frontend.pages.app-landing.counters")

    <x-utils.divider color="contrast" />

    @include ("frontend.pages.app-landing.screenshots")

    @include ("frontend.blocks.testimonials.1", [ "class" => "bg-light b-t edge bottom-right pt-0" ])

    @include ("frontend.pages.app-landing.download")

    @include ("frontend.blocks.cta.1", [ "containerClass" => "pt-0" ])
@endsection

@section('footer')
    @include("frontend.blocks.footers.yalp", [ "class" => "block bg-contrast", "containerClass" => "py-4" ])
@endsection
