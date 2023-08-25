@php($features = [
    [ "title" => "Dashboard", "img" => "4" ],
    [ "title" => "Invoicing", "img" => "invoice" ],
    [ "title" => "Calendar", "img" => "calendar" ],
    [ "title" => "Inbox", "img" => "inbox" ]
])
<!-- Features -->
<section class="section bg-light">
    <div class="container-fluid bring-to-front py-5">
        <div class="row g-4">
            <div class="col-lg-4 col-xl-3 mx-auto py-4 py-lg-0 @rtl text-end @endif">
                @php ($items = [
                    [ "icon" => "activity", "title" => "Real time activity", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea expedita illo ipsum labore maxime molestias mollitia" ],
                    [ "icon" => "upload-cloud", "title" => "Instant deploy", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, cupiditate debitis dolorem error expedita" ]
                ])
                <div class="row g-4">
                    @foreach ($items as $item)
                    <div class="col-md-6 col-lg-12">
                        <div class="card shadow-sm text-muted border-0 lift-hover">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="@rtl ms-3 @else me-3 @endrtl">
                                        <i data-feather="{{ $item['icon'] }}" width="36" height="36" class="stroke-primary"></i>
                                    </div>

                                    <div class="flex-fill">
                                        <h5 class="text-dark bold">{{ $item['title'] }}</h5>
                                        <p>{{ $item['description'] }}</p>

                                        <a href="#!" class="btn btn-rounded btn-outline-success">Learn more <i class="fas fa-long-arrow-alt-right @rtl me-2 @else ms-2 @endrtl"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-7 mt-lg-n6 d-flex align-items-center position-relative">
                <div class="swiper-container" data-sw-effect="fade" data-sw-space-between="0" data-sw-pagination=".tools-pagination" data-sw-nav-arrows="false">
                    <div class="swiper-wrapper">
                        @foreach ($features as $feature)
                            <div class="swiper-slide">
                                <figure class="mb-0">
                                    <img src="{{ asset("img/screens/dash/dash/{$feature['img']}.png") }}" class="img-responsive" alt="">
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card bg-success border-0 shadow tool-description-card">
                    <div class="card-body p-lg-5">
                        <div class="swiper-container pb-5" data-sw-dynamic-bullets="false" data-sw-pagination=".tools-pagination" data-sw-nav-arrows="false">
                            <div class="swiper-wrapper">
                                @foreach ($features as $feature)
                                    <div class="swiper-slide">
                                        <h4 class="bold heading-line">{{ $feature['title'] }}</h4>
                                        <p class="text-contrast py-4 d-none--d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur facere hic, ipsa ipsum obcaecati odio optio quidem quod totam!</p>

                                        <a href="#!" class="more-link text-contrast dotted">Learn more <i class="fas fa-long-arrow-alt-right @rtl me-2 @else ms-2 @endrtl"></i></a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="swiper-pagination tools-pagination @rtl text-end @else text-start @endrtl highlight-active"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
