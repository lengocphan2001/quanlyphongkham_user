@php($plans = [[
    "icon" => "box",
    "plan" => [
        "name" => "Standard",
        "price" => [ "monthly" => 0.99, "yearly" => 0.78 ],
        "description" => "Everything you can get from a professional solution to keep your business on its way to success"
    ],
    "features" => [[
        "name" => "Lorem ipsum dolor sit amet ipsa",
        "icon" => "box"
    ], [
        "name" => "Ab architecto blanditiis consectetur",
        "icon" => "airplay"
    ], [
        "name" => "Blanditiis dignissimos ipsa ipsam odio",
        "icon" => "lock"
    ], [
        "name" => "Dolorem ducimus ea earum ipsam laborum",
        "icon" => "repeat"
    ]]
]])
<!-- ./Pricing -->
<x-utils.container class="bg-light edge top-left" container-class="bring-to-front pb-0 pt-3">
    <div class="section-heading">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center">
                <h2 class="bold">Affordable pricing plans</h2>

                <p class="lead text-muted">
                    Because every company is different, DashCore comes with multiple licensing plans that fit your needs.
                </p>
            </div>
        </div>

        <div class="text-center mt-4">
            <div class="btn-group btn-group-toggle pricing-table-basis" data-toggle="buttons">
                <input type="radio" name="pricing-value" value="monthly" autocomplete="off" class="btn-check" id="pricing-value-monthly" checked>
                <label class="btn btn-outline-info" for="pricing-value-monthly">Monthly basis</label>

                <input type="radio" name="pricing-value" value="yearly" autocomplete="off" class="btn-check" id="pricing-value-yearly">
                <label class="btn btn-outline-info" for="pricing-value-yearly">Annual basis</label>
            </div>
            <p>(Save up to 30% off on annual plans)</p>
        </div>
    </div>

    <div class="row align-items-center g-0">
        @foreach ($plans as $plan)
            <div class="col-md-{{ 12 / (count($plans) + 1) }}" style="z-index: 1">
                <div class="card border-0 rounded-lg shadow-lg mb-4 mb-md-0" data-aos="fade-up">
                    <div class="card-body py-4">
                        <div class="row">
                            <div class="col-xl-9 mx-auto">
                                <div class="pricing text-center mb-5">
                                    <h5 class="bold text-uppercase text-primary">{{ $plan['plan']['name'] }}</h5>
                                    <hr class="my-4">

                                    <p>{{ $plan['plan']['description'] }}</p>

                                    <div class="pricing-value">
                                        <span class="price display-lg-4 semibold odometer text-dark" data-monthly-price="{{ $plan['plan']['price']['monthly'] }}" data-yearly-price="{{ $plan['plan']['price']['yearly'] }}">
                                            {{ $plan['plan']['price']['monthly'] }}
                                        </span>
                                    </div>
                                </div>

                                <ul class="list-unstyled">
                                    @foreach ( $plan['features'] as $feature )
                                        <li>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="icon-md bg-success p-2 rounded-circle center-flex @rtl ms-3 @else me-3 @endrtl">
                                                    <i data-feather="{{ $feature['icon'] }}" class="stroke-contrast"></i>
                                                </div>

                                                <div class="flex-fill">
                                                    {{ $feature['name'] }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="#!" class="btn btn-primary btn-lg btn-block rounded-top-0 rounded-bottom py-4">
                        Get it now
                        <i data-feather="arrow-right" class="@rtl me-3 @else ms-3 @endrtl"></i>
                    </a>
                </div>
            </div>
        @endforeach

        <div class="col-md-{{ 12 / (count($plans) + 1) }} ms-md-n3">
            <div class="card border-0 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body py-4">
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <div class="text-center">
                                <h5 class="bold text-uppercase">Custom</h5>
                                <hr class="my-4">

                                <p class="lead bold">Need a custom design?</p>

                                <p class="text-muted">We offer more than an Enterprise solution, contact us now and request a custom build for your business.</p>

                                <div class="row g-0">
                                    @php($xtras = [
                                        [ "icon" => "dollar-sign", "title" => "Large Sales Volume", "border" => "r" ],
                                        [ "icon" => "bell", "title" => "Custom Feature" ],
                                        [ "icon" => "activity", "title" => "Important Feature", "border" => "r" ],
                                        [ "icon" => "box", "title" => "Unique Feature" ]
                                    ])
                                    @foreach ($xtras as $xtra)
                                        <div class="col-6 @if(isset($xtra['border'])) border-{{ $xtra['border'] }} @endif @if($loop->index > 1) border-top @endif">
                                            <div class="text-center p-3">
                                                <i data-feather="{{ $xtra['icon'] }}" width="32" height="32" class="stroke-primary"></i>
                                                <p class="mb-0">{{ $xtra['title'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#!" class="btn btn-light btn-lg btn-block rounded-top-0 rounded-bottom py-4">
                    Contact us
                    <i data-feather="arrow-right" class="@rtl me-3 @else ms-3 @endrtl"></i>
                </a>
            </div>
        </div>
    </div>
</x-utils.container>
