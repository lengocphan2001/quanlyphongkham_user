@extends('frontend.layouts.pages')

@section('title', __('Startup'))

@section('content')
    @include ("frontend.pages.startup.heading")

    @include ("frontend.pages.startup.features", [ "class" => "edge bottom-right bg-contrast", "iconClass" => "text-info mb-2", "textClass" => "text-secondary" ])
    @include ("frontend.pages.shared.bring-to-life")
    @include ("frontend.pages.startup.engage")
    @include ("frontend.pages.startup.video-cards")

    <x-utils.divider color="light" />

    @include ("frontend.pages.app-landing.integration-icons", [ "class" => "bg-light", "containerClass" => "icons-list" ])
    @include ("frontend.pages.shared.join-developer-designer")
    @include ("frontend.blocks.cta.1", [ "class" => "bg-contrast edge top-left b-b", "containerClass" => "pt-5" ])
@endsection

@section('footer')
    @include("frontend.blocks.footers.4cols", [ "containerClass" => "pb-3" ])
@endsection
