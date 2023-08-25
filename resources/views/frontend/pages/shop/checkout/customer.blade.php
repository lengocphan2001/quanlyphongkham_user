@extends('frontend.layouts.shop')

@section('title', __('Checkout Customer'))

@section('content')
    <x-shop.checkout-header title="Checkout" subtitle="Customer Signup" />

    @include ("frontend.pages.shop.checkout.customer.signup")
@endsection
