@extends('frontend.layouts.shop')

@section('title', __('Payment Method'))

@section('content')
    <x-shop.checkout-header title="Checkout" subtitle="Select your Payment Method" />

    @include ("frontend.pages.shop.checkout.payment.selection")
@endsection
