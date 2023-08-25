@extends('frontend.layouts.pages')

@section('title', __('Online Payment'))

@section('content')
    @include ("frontend.pages.online-payment.heading")

    @include ("frontend.pages.online-payment.features")
    @include ("frontend.pages.online-payment.steps")

    <x-utils.divider color="darker" />

    @include ("frontend.pages.online-payment.customers-management")

    <x-utils.divider color="contrast" />

    @include ("frontend.pages.social.register")

    @include ("frontend.pages.online-payment.reviews")

    @include ("frontend.pages.shared.brands-using", [ "title" => "They trust us", "class" => "bg-light" ])

    @include ("frontend.pages.online-payment.bottom-line")

    @include ("frontend.blocks.cta.1", [ "class" => "bg-contrast edge top-left b-b", "containerClass" => "pt-5" ])
@endsection

@section('footer')
    @include ("frontend.blocks.footers.simple-3cols", [ "class" => "block bg-contrast", "containerClass" => "py-4" ])
@endsection
