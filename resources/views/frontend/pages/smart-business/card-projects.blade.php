@php($features = [
    [ "icon" => "chat", "title" => [ "Social ", "Integration" ] ],
    [ "icon" => "strategy", "title" => [ "Design ", "Strategy" ] ],
    [ "icon" => "money", "title" => [ "Save ", "Money" ] ],
    [ "icon" => "user", "title" => [ "Business ", "Brain" ] ],
    [ "icon" => "worldwide", "title" => [ "Worldwide ", "Support" ] ],
    [ "icon" => "like", "title" => [ "Social ", "Settings" ] ],
    [ "icon" => "graph", "title" => [ "Insightful", "Statistics" ] ]
])
<!-- Features Carousel -->
<x-utils.container class="features-carousel border-bottom" container-class="pt-0">
    <div class="swiper-container"
         data-sw-autoplay="3500"
         data-sw-loop="true"
         data-sw-nav-arrows=".features-nav"
         data-sw-show-items="1"
         data-sw-space-between="30"
         data-sw-breakpoints='{"768": {"slidesPerView": 3}, "992": {"slidesPerView": 3}, "1200": {"slidesPerView": 4}}'>
        <div class="swiper-wrapper px-1">
            @foreach ($features as $feature)
            <div class="swiper-slide px-2 px-sm-1">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="rounded-circle bg-light p-3 d-flex align-items-center justify-content-center shadow icon-xl">
                            <img src="{{ asset("img/smart-business/icons/{$feature['icon']}.svg") }}" class="img-responsive" alt="">
                        </div>

                        <h4 class="mt-4">{{ $feature['title'][0] }} <br><span class="bold">{{ $feature['title'][1] }}</span></h4>

                        <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis
                            donec consequat adipiscing.</p>
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
</x-utils.container>
