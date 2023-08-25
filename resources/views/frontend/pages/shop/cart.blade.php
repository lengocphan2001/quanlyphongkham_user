@extends('frontend.layouts.shop')

@section('title', __('Shopping Cart'))

@php
    $products = [
        [ "img" => "computerconnection.png", "category" => "Wireless &amp; Bluetooth", "name" => "Bluetooh Mouse", "price" => [ "current" => 25, "banned" => 45 ], "rating" => 5 ],
        [ "img" => "externalharddrive.png", "category" => "Computer &amp; Electronics", "name" => "External Hard Drive", "price" => [ "current" => 78 ], "rating" => 4 ],
        [ "img" => "modernspeakers.jpg", "category" => "Speakers", "name" => "Modern Speakers", "price" => [ "current" => 124, "banned" => 154 ], "rating" => 3 ],
        [ "img" => "vrglassesdual.png", "category" => "Virtual Reality", "name" => "Virtual Reality Glasses", "price" => [ "current" => 145 ], "rating" => 5 ],
        [ "img" => "dualshock.png", "category" => "Gaming &amp; Consoles", "name" => "Dual Shock Controller", "price" => [ "current" => 87, "banned" => 54 ], "rating" => 5 ],
        [ "img" => "wiredmouse.png", "category" => "Computer &amp; Electronics", "name" => "Wired Classic Mouse", "price" => [ "current" => 12 ], "rating" => 4 ],
        [ "img" => "audioclassicmic.png", "category" => "Professional Audio", "name" => "Classic Microphone", "price" => [ "current" => 25, "banned" => 54 ], "rating" => 4 ],
        [ "img" => "wireless-headphones.png", "category" => "Wireless &amp; Bluetooth", "name" => "Wireless Headphones", "price" => [ "current" => 45 ], "rating" => 5 ]
    ];
@endphp

@section('content')
    @include ("frontend.pages.shop.cart.heading")
    @include ("frontend.pages.shop.cart.products", $products)
@endsection
