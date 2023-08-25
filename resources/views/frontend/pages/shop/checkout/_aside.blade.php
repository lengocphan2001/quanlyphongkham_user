@php($products = [
    [ "img" => "computerconnection.png", "category" => "Wireless &amp; Bluetooth", "name" => "Bluetooh Mouse", "price" => [ "current" => 25, "banned" => 45 ], "rating" => 5 ],
    [ "img" => "externalharddrive.png", "category" => "Computer &amp; Electronics", "name" => "External Hard Drive", "price" => [ "current" => 78 ], "rating" => 4 ],
    [ "img" => "modernspeakers.jpg", "category" => "Speakers", "name" => "Modern Speakers", "price" => [ "current" => 124, "banned" => 154 ], "rating" => 3 ],
    [ "img" => "vrglassesdual.png", "category" => "Virtual Reality", "name" => "Virtual Reality Glasses", "price" => [ "current" => 145 ], "rating" => 5 ],
    [ "img" => "dualshock.png", "category" => "Gaming &amp; Consoles", "name" => "Dual Shock Controller", "price" => [ "current" => 87, "banned" => 54 ], "rating" => 5 ],
    [ "img" => "wiredmouse.png", "category" => "Computer &amp; Electronics", "name" => "Wired Classic Mouse", "price" => [ "current" => 12 ], "rating" => 4 ],
    [ "img" => "audioclassicmic.png", "category" => "Professional Audio", "name" => "Classic Microphone", "price" => [ "current" => 25, "banned" => 54 ], "rating" => 4 ],
    [ "img" => "wireless-headphones.png", "category" => "Wireless &amp; Bluetooth", "name" => "Wireless Headphones", "price" => [ "current" => 45 ], "rating" => 5 ]
])
<!-- Sidebar-->
<aside class="col-lg-4 pt-4 pt-lg-0">
    <div class="card shadow border-0 rounded-lg">
        <div class="card-body">
            <h6>Order Summary</h6>
            @foreach ($products as $product)
                <div class="border-bottom py-3">
                    <div class="media d-block text-center d-sm-flex @rtl text-sm-end @else text-sm-start @endrtl"">
                        <a class="@rtl ms-sm-4 @else me-sm-4 @endrtl" href="javascript:;">
                            <img src="{{ asset("img/shop/products/{$product['img']}") }}" class="img-responsive mx-auto" style="max-width: 80px" alt="">
                        </a>

                        <div class="media-body">
                            <a class="product-category text-muted font-xs" href="javascript:;">{{ $product['category'] }}</a>
                            <h6 class="product-title bold d-flex">
                                <a href="javascript:;" class="text-darker @rtl ms @else me-auto @endrtl">{{ $product['name'] }}</a>
                                <span class="badge badge-light badge-pill light">x 1</span>
                            </h6>

                            <div class="text-primary light mt-3">
                                <span>${{ $product['price']['current'] }}.</span>
                                <sup>00</sup>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="card-body">
            <ul class="list-unstyled font-size-sm pb-2 border-bottom">
                <li class="d-flex justify-content-between align-items-center"><span class="@rtl ms-2 @else me-2 @endrtl">Subtotal:</span><span class="@rtl text-start @else text-end @endrtl">$654.<sup>00</sup></span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="@rtl ms-2 @else me-2 @endrtl">Shipping:</span><span class="@rtl text-start @else text-end @endrtl">—</span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="@rtl ms-2 @else me-2 @endrtl">Taxes:</span><span class="@rtl text-start @else text-end @endrtl">$3.<sup>40</sup></span></li>
                <li class="d-flex justify-content-between align-items-center"><span class="@rtl ms-2 @else me-2 @endrtl">Discount:</span><span class="@rtl text-start @else text-end @endrtl">—</span></li>
            </ul>

            <h3 class="@rtl text-start @else text-end @endrtl my-4">$657.<sup>40</sup></h3>
        </div>
    </div>
</aside>
