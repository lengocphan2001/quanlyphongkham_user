@extends('frontend.layouts.pages')

@section('title', __('Automate Social'))

@section('content')
    @include ("frontend.pages.automate-social.heading")

    @include ("frontend.pages.automate-social.card-projects")
    @include ("frontend.pages.automate-social.get-started")
    @include ("frontend.pages.automate-social.why-us")
    @include ("frontend.pages.automate-social.wave-features")
    @include ("frontend.pages.automate-social.counters")

    @include ("frontend.blocks.counters.1")
    @include ("frontend.pages.shared.brands-using", [ "title" => "Part of our happy customers", "class" => "bg-light" ])
    @include ("frontend.pages.automate-social.testimonials")
    @include ("frontend.blocks.cta.1", [ "class" => "bg-contrast edge top-left", "containerClass" => "pt-5" ])
@endsection

@section('footer')
    @include("frontend.blocks.footers.4cols", [ "containerClass" => "pb-3 border-top" ])
@endsection
