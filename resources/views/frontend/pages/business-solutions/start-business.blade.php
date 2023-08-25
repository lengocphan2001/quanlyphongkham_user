<section class="quick-start-your-business">
    <div class="container-fluid bring-to-front pb-lg-10">
        <div class="row gap-y align-items-center">
            <div class="col-10 col-lg-4 mx-auto order-md-2">
                <div class="mb-5 text-center @rtl text-lg-end @else text-lg-start @endrtl">
                    <h2>Quick start your business <br> <span class="text-primary">with the right tools</span></h2>

                    <p class="lead text-muted">
                        {{ appName() }} helps you Build a modern & beautiful web presence.
                        Our growing set of components will make your life waaaay easier.
                    </p>
                </div>

                @php ($features = [
                    [ "title" => "Perfect for modern and growing Apps & Startups", "icon" => "arrow-right" ],
                    [ "title" => "Predesigned growing set of modern web components", "icon" => "arrow-right" ],
                    [ "title" => "Modern & eye-catching design to enchant your visitors", "icon" => "arrow-right" ],
                    [ "title" => "Focus on your business, don't worry about your website", "icon" => "arrow-right" ]
                ])
                <ul class="list-unstyled">
                    @foreach ($features as $feature)
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div class="icon-md bg-primary p-2 rounded-circle center-flex @rtl ms-3 @else me-3 @endrtl">
                                    <i data-feather="{{ $feature['icon'] }}" class="stroke-contrast"></i>
                                </div>

                                <p class="my-0">{{ $feature['title'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <a href="#!" class="btn btn-primary btn-rounded mt-4">Know More</a>
            </div>

            <div class="col-12 col-lg-6 ps-0 order-md-1">
                <div class="browser shadow" data-aos="@rtl fade-left @else fade-right @endrtl">
                    <div class="screen">
                        <img src="{{ asset("img/screens/dash/1.png") }}" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
