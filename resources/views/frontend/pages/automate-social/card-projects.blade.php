@php ($features = [
    [ "title" => [ "Social ", "Integration" ],  "description" => "Consequuntur ea sapiente ut" ],
    [ "title" => [ "Design ", "Strategy" ],     "description" => "Alias eum expedita illo rem!" ],
    [ "title" => [ "Save ", "Money" ],          "description" => "Consectetur adipisicing elit" ],
    [ "title" => [ "Business ", "Brain" ],      "description" => "Rem repellendus rerum, vel!" ],
    [ "title" => [ "Worldwide ", "Support" ],   "description" => "Consectetur adipisicing elit" ],
    [ "title" => [ "Social ", "Settings" ],     "description" => "Facilis numquam odio sit amet." ],
    [ "title" => [ "Insightful", "Statistics" ], "description" => "facere quasi rem suscipit!" ]
])
<!-- Features Carousel -->
<x-utils.container class="features-carousel border-bottom" container-class="pt-0">
    <div class="cards-wrapper">
        <div class="swiper-container"
             data-sw-autoplay="3500"
             data-sw-loop="true"
             data-sw-nav-arrows=".features-nav"
             data-sw-show-items="1"
             data-sw-space-between="30"
             data-sw-breakpoints='{"768": {"slidesPerView": 3}, "992": {"slidesPerView": 4}}'>
            <div class="swiper-wrapper px-1">
                @foreach ($features as $feature)
                <div class="swiper-slide px-2 px-sm-1">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="logo mx-auto my-3">
                                <img src="{{ asset("img/automate-social/icons/{$loop->index}.svg") }}"
                                    class="img-responsive" alt="">
                            </div>

                            <hr class="w-50 mx-auto my-3">

                            <p class="bold mt-4">{{ $feature['title'][0] }} {{ $feature['title'][1] }}</p>
                            <p class="regular small text-secondary">{{ $feature['description'] }}</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-around">
                            <div class="roi">
                                <p class="text-darker lead bold mb-0">1.5k</p>
                                <p class="text-secondary small mt-0">New subscribers</p>
                            </div>
                            <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Add Arrows -->
            <div class="text-primary features-nav features-nav-next">
                <span class="text-uppercase small">Next</span>
                <i class="features-nav-icon fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
    </div>
</x-utils.container>
