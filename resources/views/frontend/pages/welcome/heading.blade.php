<header class="header section text-contrast overlay overlay-primary alpha-7 parallax cover" style="background-image: url({{ asset('img/bg/sunrise.jpg') }})">
    <div class="container-fluid pb-9">
        <div class="row text-center">
            <div class="col-12 col-lg-6 mx-auto">
                <img src="{{ asset('img/logo-light.png') }}" alt="">

                <h1 class="text-contrast bold display-4 display-md-3 text-capitalize mt-5">@Lang('Meet DashCore')</h1>
                <p class="lead bold">@Lang('Powerful Responsive SaaS, Startup & Software Template')</p>

                <nav class="nav d-flex justify-content-evenly mb-5 mt-7 gap-2">
                    <x-utils.link href="https://themeforest.net/item/dashcore-saas-software-bootstrap-5-laravel-template/33686274"
                        class="btn btn-rounded btn-success text-contrast px-md-5">
                        Buy now <i class="fas fa-long-arrow-alt-right ms-2"></i>
                    </x-utils.link>
                    <x-utils.link href="#demos" class="btn btn-rounded btn-outline-light px-md-5 scrollto">@Lang('Explore demos')</x-utils.link>
                    <x-utils.link href="changelog" target="_blank" class="btn btn-rounded btn-contrast px-md-5">@Lang('Review Changelog')</x-utils.link>
                </nav>
            </div>
        </div>
    </div>
</header>
