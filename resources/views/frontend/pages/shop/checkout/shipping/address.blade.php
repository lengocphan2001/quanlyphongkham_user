@php ($addresses = [[
    "name" => "Mrs. Karen Ellis",
    "phone" => "0161 431 6407",
    "location" => [
        "street" => [
            "number" => 5291,
            "name" => "Highfield Road"
        ],
        "city" => "Cambridge",
        "state" => "County Tyrone",
        "country" => "United Kingdom",
        "postcode" => "SY4T 1TH",
        "coordinates" => [
            "latitude" => "56.7393",
            "longitude" => "106.9346"
        ]
    ]
], [
    "name" => "Mr. Philip Moore",
    "phone" => "016977 8197",
    "location" => [
        "street" => [
            "number" => 2307,
            "name" => "Main Road"
        ],
        "city" => "Londonderry",
        "state" => "Strathclyde",
        "country" => "United Kingdom",
        "postcode" => "PV19 0RD",
        "coordinates" => [
            "latitude" => "43.6932",
            "longitude" => "-76.6654"
        ]
    ]
] ])

@php ($shipping = [
    [ "title" => "Free Shipping", "description" => "1 month - Tuesday, Dec 3rd 2019", "price" => "$0.00" ],
    [ "title" => "Standard Shipping", "description" => "2 weeks - Tuesday, Dec 3rd 2019", "price" => "$9.99" ],
    [ "title" => "Express Shipping", "description" => "3 days - Tuesday, Dec 3rd 2019", "price" => "$29.99" ]
])

<!-- Shipping Address -->
<section class="section">
    <div class="container pt-0 mt-n8">
        <div class="row">
            <div class="col-lg-8 pt-9">
                <h4 class="bold mb-5">Shipping Information</h4>

                @foreach ( $addresses as $address )
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <address>
                                        <div class="radio radio-primary">
                                            <input class="form-control" type="radio" id="{{ $address['name'] }}" name="shipping-address" @if($loop->index == 0) checked @endif>
                                            <label class="control-label text-darker" for="{{ $address['name'] }}">{{ $address['name'] }}</label>
                                        </div>

                                        <div class="@rtl me-4 @else ms-4 @endrtl">
                                            {{ $address['location']['street']['number'] }} {{ $address['location']['street']['name'] }}<br>
                                            {{ $address['location']['city'] }}, {{ $address['location']['state'] }}<br>
                                            {{ $address['location']['postcode'] }}<br>
                                            Tel: {{ $address['phone'] }}<br>
                                        </div>
                                    </address>

                                    <button class="btn btn-link"><i class="fas fa-edit @rtl ms @else me-2 @endrtl"></i> Edit Address</button>
                                </div>

                                <div class="col-md-6"></div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <h4 class="bold my-5">Shipping Method</h4>

                <div class="row gap-y">
                    @foreach ( $shipping as $option )
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column flex-sm-row align-items-sm-center">
                                        <div class="radio radio-primary">
                                            <input class="form-control" type="radio" id="{{ $option['title'] }}" name="shipping-options" @if ($loop->index == 1) checked @endif>
                                            <label class="control-label text-darker" for="{{ $option['title'] }}">{{ $option['title'] }}</label>
                                        </div>

                                        <div class="@rtl me-sm-auto @else ms-sm-auto @endrtl">
                                            <span class="font-sm text-primary">{{ $option['price'] }}</span>
                                        </div>
                                    </div>

                                    <p class="small text-muted my-0 @rtl me-4 @else ms-4 @endrtl">{{ $option['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-5">
                    <div class="col-6 d-grid">
                        <x-utils.link class="btn btn-gray text-contrast" :href="route('frontend.checkout.customer')">
                            <i class="fas fa-chevron-left @rtl ms-2 @else me-2 @endrtl"></i>
                            <span>Back to Customer</span>
                        </x-utils.link>
                    </div>

                    <div class="col-6 d-grid">
                        <x-utils.link class="btn btn-primary" :href="route('frontend.checkout.payment')">
                            <span class="@rtl ms @else me-2 @endrtl">Proceed to Payment</span>
                            <i class="fas fa-chevron-right"></i>
                        </x-utils.link>
                    </div>
                </div>
            </div>

            @include ("frontend.pages.shop.checkout._aside")
        </div>
    </div>
</section>
