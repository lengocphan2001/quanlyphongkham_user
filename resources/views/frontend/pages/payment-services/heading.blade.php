<!-- Payment Services Heading -->
<header class="header payment-services-header section" id="home">
    <div class="shapes-container">
        <div class="static-shape shape-main cutout x2 bottom-right" data-aos="fade-down" data-aos-delay="300"></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center @rtl text-md-end @else text-md-start @endrtl">
                <span class="py-2" data-aos="@rtl fade-left @else fade-right @endrtl">Online Payments  —</span>
                <h1 class="bold font-md display-lg-2 mt-3" data-aos="@rtl fade-left" @else fade-right @endrtl data-aos-delay="100">Pay Online <span class="d-block">Anywhere, anytime</span></h1>

                <p class="lead" data-aos="@rtl fade-left" @else fade-right @endrtl data-aos-delay="200">Besides its beautiful design. {{ appName() }} is an incredibly rich core framework for you to showcase your App.</p>

                <div class="my-5" data-aos="@rtl fade-left" @else fade-right @endrtl data-aos-delay="400">
                    <a href="#!" class="btn btn-rounded btn-lg btn-primary px-4 mx-auto @rtl ms-md-0 @else me-md-0 @endrtl">Know more <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                </div>
            </div>

            <div class="col-md-6 position-relative">
                <div class="shapes-container">
                    <div class="static-shape pattern-dots" data-aos="zoom-out-left" data-aos-delay="100"></div>
                </div>

                <figure class="figure-box mockup cutout x2 bottom-right">
                    <div class="screens">
                        <img src="{{ asset("img/payment-services/bg.png") }}" alt="..." data-aos="fade-down">
                        <img src="{{ asset("img/payment-services/person.png") }}" class="position-absolute" data-aos="fade-up" data-aos-delay="200" alt="...">
                    </div>

                    <div class="promo-box card shadow-lg border-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-body p-5 text-center">
                            <figure class="icon-xxl mx-auto">
                                <img src="{{ asset("img/payment-services/secure.svg") }}" alt="...">
                            </figure>

                            <p class="mt-4 text-muted mb-0">Fast and Secure</p>
                            <hr class="my-3 mx-auto w-25">
                            <h6 class="h6 mb-0">Commission free</h6>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</header>
