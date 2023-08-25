<!-- ./Page header -->
<header class="header section social-media-heading ">
    <img src="{{ asset("img/bg/social/bg-shape.svg") }}" class="social-bg-shape absolute" alt="..." data-aos="fade-left">

    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-lg-6 col-xl-5 text-center @rtl text-lg-end @else text-lg-start @endrtl">
                <p class="badge bg-contrast text-dark rounded-pill shadow bold px-4 py-2">
                    <span class="text-primary">80% Off</span>
                    when registering
                </p>
                <h1 class="font-md extra-bold display-md-4">Social Media Services</h1>
                <p class="lead my-5">It all begins by choosing the right tools, start with a complete set of design
                    blocks to achieve your next success.</p>

                <div class="shadow-lg rounded-pill border mt-5">
                    <x-forms.post>
                        <div class="input-group-register">
                            <input type="text" class="form-control rounded-pill" placeholder="Your Email">
                            <button type="submit" class="btn btn-primary more-link rounded-pill">
                                <i data-feather="mail" class="d-inline d-md-none"></i>
                                <span class="d-none d-md-inline">Subscribe Now</span>
                            </button>
                        </div>
                    </x-forms.post>
                </div>
            </div>

            <div class="col-lg-6 ms-lg-auto text-center @rtl text-lg-start @else text-lg-end @endrtl">
                <img src="{{ asset("img/bg/social/social.svg") }}" class="social-image" alt="" data-aos-delay="800" data-aos="zoom-in">
            </div>
        </div>
    </div>
</header>

<section class="section">
    <div class="container py-4">
        <div class="card border-dark bw-2 shadow-lg">
            <div class="card-body p-4">
                <div class="swiper-container" data-sw-show-items="5" data-sw-space-between="30" data-sw-autoplay="2500">
                    <div class="swiper-wrapper align-items-center">
                        @for ($i = 1; $i < 8; $i++)
                            <div class="swiper-slide">
                                <img src="{{ asset("img/logos/{$i}.png") }}" class="img-responsive" alt="" style="max-height: 60px">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
