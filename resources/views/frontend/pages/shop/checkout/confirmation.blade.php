@extends('frontend.layouts.shop')

@section('title', __('Payment Method'))

@section('content')
    <x-shop.checkout-header title="Checkout" subtitle="Confirm Your Order" />

    @include ("frontend.pages.shop.checkout.confirmation.summary")
@endsection
