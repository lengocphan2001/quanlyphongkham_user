<!-- ./Testimonials -->
<x-utils.container class="bg-light" container-class="bring-to-front py-0">
    <div class="shadow bg-contrast p-5 rounded">
        <div class="testimonials-slider swiper-center-nav">
            <div class="swiper-container pb-5">
                <div class="swiper-wrapper text-center w-50">
                    @for ($i = 1; $i < 6; $i++)
                    <div class="swiper-slide">
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset("img/avatar/{$i}.jpg") }}" alt=""
                                class="rounded-circle shadow mb-4">

                            <p class="w-75 lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusamus asperiores consequatur cum distinctio, dolorem earum error esse ex fugiat
                                inventore maiores minima, non placeat praesentium quam quas ut, vero voluptatem.</p>

                            <hr class="w-50">
                            <footer>
                                <cite class="bold text-primary text-capitalize">— Jane Doe,</cite>
                                <span class="small text-secondary mt-0">Awesome Company</span>
                            </footer>
                        </div>
                    </div>
                    @endfor
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- Prev button -->
            <div class="swiper-button swiper-button-prev nav-testimonial-prev rounded-circle shadow">
                <i data-feather="arrow-left"></i>
            </div>

            <!-- Next button -->
            <div class="swiper-button swiper-button-next nav-testimonial-next rounded-circle shadow">
                <i data-feather="arrow-right"></i>
            </div>
        </div>
    </div>
</x-utils.container>
