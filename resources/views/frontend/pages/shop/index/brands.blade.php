<!-- Brands -->
<section class="brands">
    <div class="container">
        <div class="section-heading">
            <span class="text-primary bold">Brands</span>
            <h3>We work with</h3>
        </div>

        <div class="row gap-y">
            @for ($brand = 1; $brand < 13; $brand++)
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card border-0 shadow-sm shadow-hover lift-hover">
                        <div class="card-body py-4">
                            <a href="#">
                                <img class="d-block mx-auto" style="max-height: 64px;" src="{{ asset("img/shop/brands/{$brand}.svg") }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
