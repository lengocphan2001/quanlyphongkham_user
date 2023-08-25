@extends('frontend.layouts.shop')

@section('title', __('Shop Home'))

@php
    $banners = [
        [ "title" => "The Headphones Collection", "description" => "Discover our selection of the best Headphones", "badge" => "What you were waiting for?", "bg" => [ "img" => "blue-headphones", "color" => "rgb(0, 157, 206)" ] ],
        [ "title" => "Shop on the Go", "description" => "Get the best of our store at your fingertips", "badge" => "Download the App", "bg" => [ "img" => "app-deals", "color" => "rgb(92, 216, 217)" ] ],
        [ "title" => "What's makes you happy", "description" => "We have all the products to make your life easier", "badge" => "Enjoy your world", "bg" => [ "img" => "happy-girl", "color" => "rgb(240, 197, 87)" ] ],
        [ "title" => "Best performing products", "description" => "We have what you're looking for in all tech industry", "badge" => "Get them all", "bg" => [ "img" => "enjoy", "color" => "rgb(226, 162, 113)" ] ]
    ];

    $deals = [
        [ "price" => "12.15", "off" => "25", "img" => "earphones" ],
        [ "price" => "1.45", "off" => "15", "img" => "speaker" ],
        [ "price" => "19.99", "off" => "45", "img" => "headphone" ],
        [ "price" => "29.99", "off" => "18", "img" => "vrglasses" ]
    ];

    $offers = [
        [ "img" => "vrglasses", "bg" => "info", "title" => "VR Glasses", "description" => "Discover what's new on Virtual Reality" ],
        [ "img" => "monitor", "bg" => "primary", "title" => "Monitors", "description" => "$30 Off on selected monitors" ]
    ];

    $trends = [
        [ "img" => "computerconnection.png", "category" => "Wireless &amp; Bluetooth", "name" => "Bluetooh Mouse", "price" => [ "current" => 25, "banned" => 45 ], "rating" => 5 ],
        [ "img" => "externalharddrive.png", "category" => "Computer &amp; Electronics", "name" => "External Hard Drive", "price" => [ "current" => 78 ], "rating" => 4 ],
        [ "img" => "modernspeakers.jpg", "category" => "Speakers", "name" => "Modern Speakers", "price" => [ "current" => 124, "banned" => 154 ], "rating" => 3 ],
        [ "img" => "vrglassesdual.png", "category" => "Virtual Reality", "name" => "Virtual Reality Glasses", "price" => [ "current" => 145 ], "rating" => 5 ],
        [ "img" => "dualshock.png", "category" => "Gaming &amp; Consoles", "name" => "Dual Shock Controller", "price" => [ "current" => 87, "banned" => 54 ], "rating" => 5 ],
        [ "img" => "wiredmouse.png", "category" => "Computer &amp; Electronics", "name" => "Wired Classic Mouse", "price" => [ "current" => 12 ], "rating" => 4 ],
        [ "img" => "audioclassicmic.png", "category" => "Professional Audio", "name" => "Classic Microphone", "price" => [ "current" => 25, "banned" => 54 ], "rating" => 4 ],
        [ "img" => "wireless-headphones.png", "category" => "Wireless &amp; Bluetooth", "name" => "Wireless Headphones", "price" => [ "current" => 45 ], "rating" => 5 ],
    ];

    $promos = [
        [
            "col" => 3,
            "items" => [
                [ "title" => "Wearable", "description" => "Smart electronic devices for your day to day life", "img" => "wearable", "overlay" => [ "color" => "dark", "alpha" => 1 ], "text" => [ "title" => "contrast", "description" => "light" ] ],
                [ "title" => "Innovative", "description" => "Make your life easeier with these smart solutions", "img" => "innovative", "overlay" => [ "color" => "dark", "alpha" => 1 ], "text" => [ "title" => "contrast", "description" => "light" ] ]
            ]
        ],
        [
            "col" => 6,
            "items" => [
                [ "title" => "Smartphones", "description" => "Your personal smartphone are just one click away", "img" => "smartphone", "overlay" => [ "color" => "light", "alpha" => 3 ], "text" => [ "title" => "darker", "description" => "darker" ] ]
            ]
        ],
        [
            "col" => 3,
            "items" => [
                [ "title" => "Wifi", "description" => "Exclusive high quality wifi technology to extend your network", "img" => "wifi", "overlay" => [ "color" => "light", "alpha" => 3 ], "text" => [ "title" => "darker", "description" => "darker" ] ],
                [ "title" => "Headphones", "description" => "Enjoy your favorite playlist with an amazing sound quality", "img" => "headphones-yellow-bg", "overlay" => [ "color" => "dark", "alpha" => 1 ], "text" => [ "title" => "contrast", "description" => "light" ] ]
            ]
        ]
    ]
@endphp

@section('content')
    @include ("frontend.pages.shop.index.heading", $banners)
    @include ("frontend.pages.shop.index.deals", $deals)
    @include ("frontend.pages.shop.index.offers", $offers)
    @include ("frontend.pages.shop.index.trending", $trends)
    @include ("frontend.pages.shop.index.cta-tech-off")
    @include ("frontend.pages.shop.index.column-cards", $promos)
    @include ("frontend.pages.shop.index.cta-dual")
    @include ("frontend.pages.shop.index.brands")
@endsection
