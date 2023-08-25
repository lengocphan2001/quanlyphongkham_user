@extends('frontend.layouts.pages', [
    "useDarkLinks" => true,
    "useOnlyDarkLogo" => true
])

@section('title', __('500 Error'))

@section('content')
    <div class="container-fluid">
        <div class="fullscreen row align-items-center">
            <div class="col-md-4 mx-md-auto text-center">
                <div class="center-xy text-light bold" style="font-size: 25rem; z-index: -1;">500</div>

                <img src="{{ asset("img/section/status/500.svg") }}" class="img-responsive w-70 mx-auto" alt="">

                <h2 class="bold text-danger mt-5">Ouhh.. Something went out of our hands</h2>

                <p class="text-secondary">We are working hard to get this issue fixed.<br>You may want refresh the page or try again later.</p>

                <x-utils.link :href="route(homeRoute())" class="btn btn-info text-contrast rounded-pill mt-5 py-3">
                    <i class="icon fas fa-long-arrow-alt-left"></i>
                    @Lang('Back to home')
                </x-utils.link>
            </div>
        </div>
    </div>
@endsection
