<!-- .Screenshots -->
<x-utils.container class="screenshots coverflow">
    <div class="section-heading text-center">
        <h2 class="bold display-4">App Screenshots</h2>
        <p class="text-secondary">A picture is worth a thousand words</p>
    </div>

    <div class="swiper-container"
         data-sw-centered-slides="true"
         data-sw-autoplay="2500"
         data-sw-show-items="2"
         data-sw-space-between="0"
         data-sw-breakpoints='{"992": {"slidesPerView": 3}, "1200": {"slidesPerView": 5}}'
    >
        <div class="swiper-wrapper">
            @for ($i = 1; $i < 7; $i++)
            <div class="swiper-slide">
                <img class="img-responsive" src="{{ asset("/img/screens/app/{$i}.png") }}" alt="...">
            </div>
            @endfor
        </div>

        <!-- Add Nav Arrows -->
        <div class="swiper-button @rtl swiper-button-prev @else swiper-button-next @endrtl rounded-circle shadow">
            <i data-feather="arrow-right"></i>
        </div>
        <div class="swiper-button @rtl swiper-button-next @else swiper-button-prev @endrtl rounded-circle shadow">
            <i data-feather="arrow-left"></i>
        </div>
    </div>
</x-utils.container>
