<!-- ./App Landing - page header -->
<header class="section header text-contrast app-landing-header">
    <div class="shape-wrapper">
        <div class="shape shape-background shape-main bg-primary"></div>
        <div class="shape shape-background shape-top gradient gradient-primary-dark"></div>
    </div>

    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-md-6 col-lg-6">
                <p class="lead d-flex align-items-center my-0">
                    <i class="fas fa-award font-md @rtl ms-3 @else me-3 @endrtl"></i>1st Awarded App of 2020
                </p>
                <h1 class="bold text-contrast font-lg display-lg-2 mb-5">
                    Introducing
                    <span class="d-block light font-lg">App Landing Page</span>
                </h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore excepturi explicabo.</p>

                <div class="nav mt-5 align-items-center">
                    <a href="#" class="btn btn-rounded btn-lg btn-dark shadow @rtl ms-3 @else me-3 @endrtl px-4 text-capitalize">
                        Get Started - It's Free
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 @rtl me-lg-auto @else ms-lg-auto @endrtl position-relative">
                <div data-aos="fade-left">
                    <div class="mobile-device iphone-x">
                        <div class="screen">
                            <img src="{{ asset('img/screens/app/2.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="notch"></div>
                    </div>

                    <div class="absolute screen-highlight @rtl @else center-x @endrtl w-100">
                        <img src="{{ asset('img/screens/app/2-highlight.png') }}" alt=""
                            class="mx-auto shadow-lg rounded img-responsive" data-aos-delay="1000" data-aos="zoom-in">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
