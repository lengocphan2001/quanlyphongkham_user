@php( $address = [
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
])

@php ($shipping = [
    "title" => "Free Shipping",
    "description" => "1 month - Tuesday, Dec 3rd 2019",
    "price" => "$0.00"
])

@php( $products = [
    [ "img" => "computerconnection.png", "category" => "Wireless &amp; Bluetooth", "name" => "Bluetooh Mouse", "price" => [ "current" => 25, "banned" => 45 ], "rating" => 5 ],
    [ "img" => "externalharddrive.png", "category" => "Computer &amp; Electronics", "name" => "External Hard Drive", "price" => [ "current" => 78 ], "rating" => 4 ],
    [ "img" => "modernspeakers.jpg", "category" => "Speakers", "name" => "Modern Speakers", "price" => [ "current" => 124, "banned" => 154 ], "rating" => 3 ],
    [ "img" => "vrglassesdual.png", "category" => "Virtual Reality", "name" => "Virtual Reality Glasses", "price" => [ "current" => 145 ], "rating" => 5 ],
    [ "img" => "dualshock.png", "category" => "Gaming &amp; Consoles", "name" => "Dual Shock Controller", "price" => [ "current" => 87, "banned" => 54 ], "rating" => 5 ],
    [ "img" => "wiredmouse.png", "category" => "Computer &amp; Electronics", "name" => "Wired Classic Mouse", "price" => [ "current" => 12 ], "rating" => 4 ],
    [ "img" => "audioclassicmic.png", "category" => "Professional Audio", "name" => "Classic Microphone", "price" => [ "current" => 25, "banned" => 54 ], "rating" => 4 ],
    [ "img" => "wireless-headphones.png", "category" => "Wireless &amp; Bluetooth", "name" => "Wireless Headphones", "price" => [ "current" => 45 ], "rating" => 5 ]
])

<!-- Payment Method -->
<section class="section">
    <div class="container pt-0 mt-n8">
        <div class="row">
            <div class="col-lg-7 @rtl ms-auto @else me-auto @endrtl pt-9">
                <h4 class="bold mb-5">Confirm your Order</h4>

                @foreach ($products as $product)
                    <div class="@if($loop->index < $loop->count) border-bottom @endif py-4">
                        <div class="d-block text-center d-sm-flex @rtl text-sm-end @else text-sm-start @endrtl">
                            <a class="@rtl ms @else me-sm-4 @endrtl" href="javascript:;">
                                <img src="{{ asset("img/shop/products/{$product['img']}") }}" class="img-responsive mx-auto" style="max-width: 120px" alt="">
                            </a>

                            <div class="flex-fill">
                                <a class="product-category text-muted font-xs" href="javascript:;">{{ $product['category'] }}</a>
                                <h6 class="product-title bold">
                                    <a href="javascript:;" class="text-darker">{{ $product['name'] }}</a>
                                </h6>

                                <div class="d-flex align-items-center">
                                    <span class="bold @rtl ms-3 @else me-3 @endrtl">1 X</span>
                                    <div class="text-dark light">
                                        <span>${{ $product['price']['current'] }}.</span>
                                        <sup>00</sup>
                                    </div>

                                    <div class="text-primary bold lead @rtl me-auto @else ms-auto @endrtl">
                                        <div class="text-primary light lead">
                                            <span>${{ $product['price']['current'] }}.</span>
                                            <sup>00</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <aside class="col-lg-4 pt-4 pt-lg-0">
                <div class="card shadow border-0 rounded-lg mb-4">
                    <div class="card-body">
                        <h6 class="mb-4 text-uppercase">Order summary</h6>
                        <ul class="list-unstyled font-sm pb-2 border-bottom">
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="@rtl ms-2 @else me-2 @endrtl">Subtotal:</span>
                                <span class="@rtl text-start @else text-end @endrtl">$654.<sup>00</sup></span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="@rtl ms-2 @else me-2 @endrtl">Shipping:</span>
                                <span class="@rtl text-start @else text-end @endrtl">—</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="@rtl ms-2 @else me-2 @endrtl">Taxes:</span>
                                <span class="@rtl text-start @else text-end @endrtl">$3.<sup>40</sup></span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span class="@rtl ms-2 @else me-2 @endrtl">Discount:</span>
                                <span class="@rtl text-start @else text-end @endrtl">—</span>
                            </li>
                        </ul>
                        <h4 class="d-flex align-items-center mt-2 mb-4 text-success bold">
                            <span class="@rtl ms @else me-auto @endrtl h6 mb-0 bold">Total Amount</span>
                            <span>$657.<sup>40</sup></span>
                        </h4>
                    </div>

                    <div class="card-body">
                        <h6 class="mb-4 text-uppercase">Shipping Method</h6>

                        <div class="d-flex flex-column flex-sm-row align-items-sm-center">
                            <p class="mb-0">{{ $shipping['title'] }}</p>
                            <div class="@rtl me-sm-auto @else ms-sm-auto @endrtl">
                                <span class="font-sm text-primary">{{ $shipping['price'] }}</span>
                            </div>
                        </div>

                        <p class="small text-muted my-0">{{ $shipping['description'] }}</p>
                    </div>

                    <div class="card-body">
                        <h6 class="mb-4 text-uppercase">Shipping Address</h6>

                        <address>
                            {{ $address['name'] }}<br>
                            {{ $address['location']['street']['number'] }} {{ $address['location']['street']['name'] }}<br>
                            {{ $address['location']['city'] }}, {{ $address['location']['state'] }}<br>
                            {{ $address['location']['postcode'] }}<br>
                            Tel: {{ $address['phone'] }}<br>
                        </address>
                    </div>

                    <div class="card-body">
                        <h6 class="mb-4 text-uppercase">Payment Method</h6>
                        <p class="@rtl ms @else me-2 @endrtl">Credit Card <span class="text-muted @rtl me @else ms-2 @endrtl">**** **** **** 1234</span></p>
                    </div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary">Place Order</button>
                </div>

                <p class="text-muted small">Once you click 'Place Order' your credit card will be charged for the total amount</p>
            </aside>
        </div>
    </div>
</section>
