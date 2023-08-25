@extends('frontend.layouts.pages', [
    "useDarkLinks" => true,
    "useOnlyDarkLogo" => true
])

@section('title', __('Payment Services'))

@section('content')
    @include ("frontend.pages.payment-services.heading")

    @include ("frontend.pages.payment-services.credit-cards")
    @include ("frontend.pages.payment-services.gifts")
    @include ("frontend.pages.payment-services.security")
    @include ("frontend.pages.payment-services.wallets")

    @include ("frontend.pages.payment-services.features")
    @include ("frontend.pages.payment-services.partners")

    @include ("frontend.pages.payment-services.try-it")
@endsection

@section('footer')
    @include ("frontend.blocks.footers.4cols", [ "containerClass" => "pb-4" ])
@endsection
