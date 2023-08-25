<!-- ./Page header -->
<header class="header alter2-header section parallax image-background center-bottom cover overlay overlay-primary alpha-8 text-contrast" style="background-image: url('{{ asset("img/bg/grid.jpg") }}')">
    <x-dividers.waves />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-md-7 @rtl text-end @endrtl">
                <h1 class="text-contrast bold">
                    Ultimate HTML template
                    <span class="d-block light">for your awesome product</span>
                </h1>
                <p class="lead">Your amazing product deserves an outstanding way to show it. Dashcore will provide you
                    with a quality template no matter what your idea is about.</p>

                <nav class="nav mt-5">
                    <a href="#" class="@rtl ms-3 @else me-3 @endrtl btn btn btn-rounded btn-contrast">
                        <i class="fas fa-tag @rtl ms-3 @else me-3 @endrtl"></i> Plans & pricing
                    </a>

                    <a href="#" class="btn btn-rounded btn-success text-contrast">
                        Start now
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
