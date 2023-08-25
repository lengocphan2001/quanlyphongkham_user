@extends('frontend.layouts.pages')

@section('title', __('Corporate'))

@section('content')
    @include ("frontend.pages.developers.heading")

    <x-utils.divider color="darker" />

    @include ("frontend.pages.shared.ribbon.learn-more")
    @include ("frontend.pages.shared.integration-api")

    @rtl
        @include ("frontend.blocks.counters.1", [ "class" => "bg-contrast edge bottom-left" ])
    @else
        @include ("frontend.blocks.counters.1", [ "class" => "bg-contrast edge bottom-right" ])
    @endrtl

    @include ("frontend.pages.shared.bring-to-life")
    @include ("frontend.pages.shared.developers")
    @include ("frontend.pages.integrations.colored-cards")

    @include ("frontend.pages.shared.brands-using", [ "class" => "bg-light", "title" => "They trust us" ])

    @include ("frontend.pages.shared.join-developer-designer")

    @include ("frontend.blocks.cta.1", [ "class" => "bg-contrast edge top-left border-bottom" ])
@endsection

@section('footer')
    @include ("frontend.blocks.footers.4cols", [ "containerClass" => "pb-3" ])
@endsection
