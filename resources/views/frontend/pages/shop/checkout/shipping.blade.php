@extends('frontend.layouts.shop')

@section('title', __('Shipping Address'))

@section('content')
    <x-shop.checkout-header title="Checkout" subtitle="Select your Shipping Address" />

    @include ("frontend.pages.shop.checkout.shipping.address")
@endsection
