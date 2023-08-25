<!-- ./Why Us -->
<section class="section why-us">
    <div class="shapes-container">
        <div class="absolute shape-background top @rtl left @else right @endrtl"></div>
    </div>

    <div class="container">
        <div class="section-heading text-center">
            <h2 class="bold">Why DashCore</h2>
            <p class="lead text-secondary">
                Our mission is to provide you with an all-in-one template so you don't have to look
                aside in order to get what you need
            </p>
        </div>

        <div class="row gap-y">
            @php ($features = [
                [ "name" => "Integrations", "icon" => "cloud", "color" => "info", "description" => "Aut debitis deserunt ea explicabo hic id incidunt, minus" ],
                [ "name" => "Payments", "icon" => "dollar-sign", "color" => "success", "description" => "Amet assumenda aut consequatur, corporis dolorum ea esse" ],
                [ "name" => "Marketing", "icon" => "thumbs-up", "color" => "alternate", "description" => "Aliquam amet assumenda debitis dicta distinctio eaque enim" ],
                [ "name" => "Analytics", "icon" => "pie-chart", "color" => "danger", "description" => "Accusantium consequuntur eaque eius itaque labore, neque" ]
            ])

            <div class="col-md-5 position-relative">
                <ul class="list-unstyled why-icon-list">
                    @foreach ($features as $feature)
                    <li class="list-item">
                        <div class="d-flex align-items-start">
                            <div class="rounded-circle bg-{{ $feature['color'] }} shadow-{{ $feature['color'] }} text-contrast p-3 icon-xl d-flex align-items-center justify-content-center @rtl ms-3 @else me-3 @endrtl">
                                <i data-feather="{{ $feature['icon'] }}" width="36" height="36" class="{{ $feature['icon'] }}"></i>
                            </div>

                            <div class="flex-fill">
                                <h5 class="bold">{{ $feature['name'] }}</h5>
                                <p class="my-0">{{ $feature['description'] }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-7">
                <figure data-aos="@rtl fade-right @else fade-left @endrtl">
                    <img src="{{ asset("img/automate-social/build.svg") }}" class="img-responsive" alt="">
                </figure>
            </div>
        </div>

        <div class="mt-5 text-center">
            <a href="javascript:;" class="btn btn-primary btn-rounded">Register for a free demo</a>
            <p class="small">- or -</p>
            <a href="javascript:;" class="btn btn-link">Contact us</a>
        </div>
    </div>
</section>
