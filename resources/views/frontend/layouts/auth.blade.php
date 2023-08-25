@extends('frontend.layouts.master')

@section('layout')
<section class="section">
    <div class="container-fluid auth--layout pt-0 pb-md-0">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7 fullscreen-md d-flex justify-content-center align-items-center overlay overlay-primary alpha-8 image-background cover"
                 style="background-image:url(https://picsum.photos/1920/1200/?random&gravity=south)">
                <div class="content pt-5">
                    <x-utils.link :href="route('frontend.index')">
                        <img src="{{ asset('img/logo-light.png') }}" class="logo img-responsive mb-4 mb-md-6" alt="" />
                    </x-utils.link>

                    <h2 class="display-4 display-md-3 display-lg-2 text-contrast mt-5 mt-md-0">
                        Welcome to <span class="bold d-block">{{ appName() }}</span>
                    </h2>
                    <p class="lead text-contrast">The only tool you'll ever need</p>

                    <hr class="mt-md-6 w-25" />
                    <div class="d-flex flex-column">
                        <p class="small bold text-contrast">Login, Register or sign in with</p>

                        <nav class="nav mb-4">
                            <a class="btn rounded-pill btn-outline-contrast me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn rounded-pill btn-outline-contrast me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn rounded-pill btn-outline-contrast" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <?php
                            // TODO: @include('frontend.auth.includes.social')
                            ?>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-4 d-flex justify-content-center mx-auto">
                <div class="auth-form mt-5 mt-md-0">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
