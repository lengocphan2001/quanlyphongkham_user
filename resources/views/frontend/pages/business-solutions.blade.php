@extends('frontend.layouts.pages')

@section('title', __('Business Solutions'))

@section('content')
    @include ("frontend.pages.business-solutions.heading")

    <x-utils.divider color="contrast" />

    @include ("frontend.pages.business-solutions.integration-icons")
    @include ("frontend.pages.business-solutions.start-business")

    @include ("frontend.pages.business-solutions.features-slider")

    @include ("frontend.blocks.testimonials.3", [ "containerClass" => "bring-to-front pt-10" ])

    @include ("frontend.pages.business-solutions.pricing")

    <x-utils.divider color="darker" class="mt-n12" />

    @include ("frontend.pages.business-solutions.pricing-include")
    @include ("frontend.pages.business-solutions.get-theme")

    <x-utils.divider color="contrast" />
@endsection

@section('footer')
    @include("frontend.blocks.footers.4cols", [ "containerClass" => "pb-3" ])
@endsection
