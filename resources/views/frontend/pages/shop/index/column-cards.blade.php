<!-- Promos -->
<section class="section">
    <div class="container bring-to-front">
        <div class="row g-4">
            @foreach ($promos as $promo)
                <div class="col-lg-{{ $promo['col'] }} promo-column">
                    @foreach ($promo['items'] as $item)
                        <div class="rounded promo-block zoom-background{{ $loop->index > 0 ? " mt-4" : "" }}">
                            <div class="absolute top right bottom left image-background cover overlay overlay-{{ $item['overlay']['color'] }} alpha-{{ $item['overlay']['alpha'] }} w-100 h-100"
                                 style="background-image: url({{ asset("img/shop/products/{$item['img']}.jpg") }})"></div>

                            <div class="content position-relative p-4">
                                <h4 class="text-{{ $item['text']['title'] }} mt-0 bold">{{ $item['title'] }}</h4>
                                <p class="text-{{ $item['text']['description'] }} mt-0 semi-bold">{{ $item['description'] }}.</p>
                                <a href="javascript:;" class="btn btn-contrast">Shop {{ $item['title'] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
