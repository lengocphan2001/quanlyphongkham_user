<!-- ./Partners -->
<x-utils.container class="partners mt-n5" container-class="pt-0 pb-md-4">
    <div class="card shadow-lg">
        <div class="card-body p-4">
            <div class="swiper-container" data-sw-show-items="5" data-sw-space-between="30" data-sw-autoplay="2500">
                <div class="swiper-wrapper align-items-center">
                    @for ($i = 1; $i < 8; $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset("img/logos/{$i}.png") }}" class="img-responsive" alt="" style="max-height: 60px">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-utils.container>
