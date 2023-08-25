<!-- Shop Hero Slider -->
<section class="section">
    <div class="swiper-container shop-home-slider" data-sw-effect="fade">
        <div class="swiper-wrapper">
            @foreach ($banners as $item)
                <div class="swiper-slide">
                    <div class="slide-wrapper overlay overlay-primary alpha-3"
                         style="background-color: {{ $item['bg']['color'] }}; background-image: url({{ asset("img/shop/home/{$item['bg']['img']}.jpg") }});">
                    <div class="container py-10">
                        <div class="row gap-y align-items-center">
                            <div class="col-md-10">
                                <div class="text-center text-md-start text-xl-nowrap">
                                    <h4 class="text-light font-weight-light mb-0 pb-1">{{ $item['badge'] }}</h4>
                                    <h1 class="text-contrast bold display-4">{{ $item['title'] }}</h1>
                                    <p class="lead text-light pb-3">{{ $item['description'] }}</p>
                                    <a class="btn btn-primary" href="javascript:;">
                                        Shop Now
                                        <i class="fas fa-chevron-right ms-2 me-n1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination highlight-active text-md-right pe-md-6 pb-5 mb-5 mb-md-0"></div>

        <!-- navigation buttons -->
        <div class="swiper-button swiper-button-prev rounded-circle shadow">
            <i data-feather="arrow-left"></i>
        </div>
        <div class="swiper-button swiper-button-next rounded-circle shadow">
            <i data-feather="arrow-right"></i>
        </div>
    </div>
</section>
