@php ($shapes = [
    [ "aos" => "fade-down-right", "duration" => "1500", "delay" => "100" ],
    [ "aos" => "fade-down", "duration" => "1000", "delay" => "100" ],
    [ "aos" => "fade-up-left", "duration" => "500", "delay" => "200" ],
    [ "aos" => "fade-up", "duration" => "500", "delay" => "200" ]
])
<!-- Alternative 2 Heading -->
<header class="header app-landing-2-header section">
    <div class="shapes-container">
        <!-- diagonal shapes -->
        @foreach ($shapes as $shape)
            <div class="shape shape-animated" data-aos="{{ $shape['aos'] }}" data-aos-duration="{{ $shape['duration'] }}" data-aos-delay="{{ $shape['delay'] }}"></div>
        @endforeach

        <!-- animated shapes -->
        <div class="animation-shape shape-triangle">
            <div class="animation--rotating"></div>
        </div>
        <div class="animation-shape shape-cross">
            <div class="animation--rotating"></div>
        </div>

        <!-- static shapes -->
        <div class="static-shape shape-ring shape-ring-1">
            <div class="animation animation--rotating"></div>
        </div>
        <div class="static-shape shape-ring shape-ring-2">
            <div class="animation animation--rotating-clockwise"></div>
        </div>

        <div class="static-shape pattern-dots-1"></div>
        <div class="static-shape pattern-dots-2"></div>

        <!-- main shape -->
        <div class="static-shape background-shape-main"></div>
    </div>

    <div class="container">
        <div class="row align-items-center gap-y">
            <div class="col-md-6">
                <span class="rounded-pill shadow-sm bg-contrast text-dark bold py-2 px-4">
                    <i class="far fa-lightbulb text-primary me-2"></i>
                    <span class="text-primary">Awesome</span> Landing Page
                </span>

                <h1 class="display-4 display-md-3 display-lg-2 mt-3"><span class="bold">{{ appName() }}</span></h1>
                <p class="lead bold text-primary">Premium Startup & <span class="head-line-2">App Landing Page</span></p>

                <p class="lead">Besides its beautiful design. {{ appName() }} is an incredibly rich core framework for you to showcase your App.</p>

                <div class="hero-form shadow-lg rounded-pill border mt-5">
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

            <div class="col-md-6">
                <div class="device-twin @rtl me-auto @else ms-auto @endrtl align-items-center">
                    <div class="mockup absolute" data-aos="fade-left">
                        <div class="screen">
                            <img src="{{ asset("img/screens/app/1.png") }}" alt="...">
                        </div>
                        <span class="button"></span>
                    </div>

                    <div class="iphone-x light front @rtl ms-0 @else me-0 @endrtl">
                        <div class="screen shadow-box">
                            <img src="{{ asset("img/screens/app/2.png") }}" alt="...">
                        </div>
                        <div class="notch"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
