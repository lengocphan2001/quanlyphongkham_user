<!-- ./Top-notch appearance - Big screen left -->
<section class="section">
    <div class="shape-wrapper shape-wrapper-screen">
        <img src="{{ asset("img/shps/abs-shp-3.svg") }}" class="top @rtl shape-screen-right @else shape-screen-left @endrtl" alt="...">
    </div>

    <div class="container-wide bring-to-front">
        <div class="row gap-y align-items-center text-center @rtl text-lg-end @else text-lg-start @endrtl">
            <div class="col-10 col-lg-4 mx-auto order-md-2">
                <div class="mb-5">
                    <i data-feather="image" class="stroke-primary" width="36" height="36"></i>
                    <h2>Designed to provide top-notch appearance</h2>

                    <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <p>Nullam vitae scelerisque est, sed tempus metus. Donec convallis volutpat enim consequat viverra. Nam
                    blandit est eu ipsum elementum, ac pellentesque nibh placerat. Quisque venenatis pulvinar nulla, non
                    vestibulum urna ultrices accumsan.</p>

                <a href="#" class="btn btn-primary btn-rounded mt-4">Learn More</a>
            </div>

            <div class="col-12 col-lg-6 @rtl pe-0 @else ps-0 @endrtl order-md-1">
                <div class="device browser" data-aos="@rtl fade-left @else fade-right @endrtl">
                    <div class="screen">
                        <img src="{{ asset("img/screens/dash/1.png") }}" alt="" class="img-responsive shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
