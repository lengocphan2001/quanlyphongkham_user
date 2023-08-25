
<!-- ./Offers -->
<section class="section bg-light border-bottom">
    <div class="container pt-0">
        <div class="row gap-y">
            @foreach ($offers as $offer)
            <div class="col-md-6">
                <div class="rounded bg-{{ $offer['bg'] }} shadow image-background off-left-background lift-hover p-4 ps-6 ps-md-9"
                     style="background-image: url({{ asset("img/shop/products/{$offer['img']}.png") }})">
                    <div class="ps-lg-3">
                        <h3 class="bold text-contrast mt-0">{{ $offer['title'] }}</h3>
                        <p class="text-light mt-0">{{ $offer['description'] }}</p>
                        <a href="#!" class="btn btn-contrast">Shop {{ $offer['title'] }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
