<!-- ./Top-notch appearance - Big Screen Left -->
<x-utils.container container-class="container-wide">
    <div class="section-heading text-center">
        <p class="rounded-pill py-2 px-4 bold badge bg-info">Built to Last</p>
        <h2 class="bold">What you will get with Dashcore</h2>
        <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna</p>
    </div>

    <div class="row gap-y align-items-center">
        <div class="col-10 col-lg-6 col-xl-4 mx-auto">
            <div class="row gap-y text-center @rtl text-md-end @else text-md-start @endrtl">
                @php($features = [
                    [ "icon" => 'pie-chart', "title" => 'Dashboard' ],
                    [ "icon" => 'dollar-sign', "title" => 'Save money' ],
                    [ "icon" => 'sliders', "title" => 'Design tools' ],
                    [ "icon" => 'download', "title" => 'Updates' ]
                ])
                @foreach ($features as $f)
                <div class="col-md-6">
                    <i data-feather="{{ $f['icon'] }}" width="36" height="36" class="stroke-primary mb-3"></i>
                    <p class="my-0 bold lead text-dark">{{ $f['title'] }}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor.</p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-12 col-lg-6 @rtl ps-0 @else pe-0 @endrtl">
            <img src="{{ asset("img/screens/dash/2.png") }}" alt="" class="img-responsive shadow" data-aos="@rtl fade-right @else fade-left @endrtl">
        </div>
    </div>
</x-utils.container>

<!-- ./Lightweight HTML - Big Screen Right -->
<x-utils.container container-class="container-wide bring-to-front">
    <div class="row g-4 align-items-center">
        <div class="col-12 col-lg-6 @rtl pe-0 @else ps-0 @endrtl position-relative">
            <div class="device-twin free-width align-items-center mt-4 mt-lg-0">
                <div class="browser shadow" data-aos="@rtl fade-start @else fade-end @endrtl">
                    <img src="{{ asset("img/screens/dash/4.png") }}" alt="...">
                </div>

                <div class="front iphone-x absolute d-none d-sm-block" data-aos="fade-up" data-aos-delay=".5"
                    style="right: 0; bottom: -1.5rem;">
                    <div class="screen">
                        <img src="{{ asset("img/screens/app/1.png") }}" alt="...">
                    </div>

                    <div class="notch"></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-5 mx-auto @rtl text-end @endrtl">
            <div class="section-heading">
                <span class="bold py-2">
                    <i data-feather="bar-chart" class="stroke-primary @rtl ms-2 @else me-2 @endrtl"></i>
                    <span class="bold text-info">Dashboard included</span>
                </span>

                <h2 class="mt-3">Every thing you need to get started</h2>

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna</p>
            </div>

            <p>Nullam vitae scelerisque est, sed tempus metus. Donec convallis volutpat enim consequat viverra. Nam
                blandit est eu ipsum elementum, ac pellentesque nibh placerat. Quisque venenatis pulvinar nulla, non
                vestibulum urna ultrices accumsan.</p>

            <a href="#" class="btn px-4 btn-rounded btn-primary mt-4">Learn more</a>
        </div>
    </div>
</x-utils.container>
