@php($reviews = [
    [ "position" => [ "left" => "calc(50% - 40px)", "top" => "75px" ] ],
    [ "position" => [ "left" => 0, "top" => "140px" ] ],
    [ "position" => [ "left" => "calc(100% - 80px)", "top" => "300px" ] ],
    [ "position" => [ "left" => "calc(100% - 80px)", "top" => "200px" ] ],
    [ "position" => [ "left" => "50%", "top" => "63%" ] ],
    [ "position" => [ "left" => "27%", "top" => "30%" ] ],
    [ "position" => [ "left" => "27%", "top" => "54%" ] ]
])
<!-- Testimonials - Map -->
<section class="section shape-testimonials bg-light">
    <div class="shapes-container">
        <div class="shape shape-triangle"><div></div></div>
    </div>

    <div class="container bring-to-front">
        <div class="row align-items-center">
            <div class="col-md-6 order-sm-last">
                <div class="image-background contain" style="background-image: url({{ asset("img/shps/map-dots.svg") }});">
                    <div class="user-reviews" id="user-review-nav">
                        @foreach ($reviews as $review)
                        <div class="review absolute user nav-item @if($loop->index == 0) active @endif"
                            style="left: {{ $review['position']['left'] }}; top: {{ $review['position']['top'] }};"
                            data-step="{{ $loop->index + 1 }}">
                                <img src="{{ asset("img/avatar/" . ($loop->index + 1) . ".jpg") }}"
                                    class="img-responsive shadow rounded-circle" alt="..." data-aos="zoom-in">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <div class="swiper-container" data-sw-navigation="#user-review-nav">
                            <div class="swiper-wrapper">
                                @foreach ($reviews as $review)
                                    <div class="swiper-slide">
                                        <blockquote>
                                            <i class="fas fa-quote-left fa-3x"></i>
                                            <p class="text-dark lead bold">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium,totam rem aperiam.</p>

                                            <hr class="w-10 mt-5">
                                            <div class="small">
                                                <span class="bold d-block">Jane Doe,</span>
                                                Marketing Director
                                            </div>
                                        </blockquote>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
