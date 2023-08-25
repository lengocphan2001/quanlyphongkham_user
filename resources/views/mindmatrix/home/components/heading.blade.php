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
        <div class="static-shape background-shape-main d-none d-md-block"></div>
    </div>

    <div class="container">
        <div class="row align-items-center gap-y">
            <div class="col-md-6">
                <h1 class="display-7 mt-3 text-primary"><span class="bold">POH - Sleep Training Course</span></h1>
                <p class="lead intro">We offer Sleep Training Courses and personalized 1-1 Sleep Consultant services to help your baby sleep well, allowing you to have precious time for yourself.</p>
                <a href="/courses" class="btn btn-primary more-link rounded-pill mt-5">
                    <span class="d-inline text-white">Find a course</span>
                    <i class="fas fa-angle-right ms-2 text-white"></i>
                </a>
            </div>

            <div class="col-md-6 d-none d-md-block text-right">
                <img style="width: 600px" src="/img/poh/home1.png" alt="...">
            </div>
        </div>
    </div>
</header>
