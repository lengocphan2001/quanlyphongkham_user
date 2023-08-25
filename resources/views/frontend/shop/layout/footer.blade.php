<footer class="site-footer section bg-dark">
    <div class="container pb-5">
        <div class="row g-4 text-center text-md-left">
            <div class="col-sm-6 col-md-4">
                <h6 class="bold text-contrast">All Products</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-1" href="#">Headphones</a>
                    <a class="nav-item py-1" href="#">Portable Speakers</a>
                    <a class="nav-item py-1" href="#">Audio Accessories</a>
                    <a class="nav-item py-1" href="#">Earbuds</a>
                    <a class="nav-item py-1" href="#">Speakers</a>
                    <a class="nav-item py-1" href="#">Subwoofers</a>
                    <a class="nav-item py-1" href="#">Sound Bars</a>
                    <a class="nav-item py-1" href="#">Amplifiers</a>
                    <a class="nav-item py-1" href="#">Bluetooth</a>
                    <a class="nav-item py-1" href="#">LED TV's</a>
                    <a class="nav-item py-1" href="#">Blue-Ray</a>
                    <a class="nav-item py-1" href="#">DVD Players</a>
                    <a class="nav-item py-1" href="#">Watches</a>
                </nav>
            </div>

            <div class="col-sm-6 col-md-4">
                <h6 class="bold text-contrast">Categories</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-1" href="#">Wireless & Bluetooth</a>
                    <a class="nav-item py-1" href="#">Computer & Electronics</a>
                    <a class="nav-item py-1" href="#">Speakers</a>
                    <a class="nav-item py-1" href="#">Virtual Reality</a>
                    <a class="nav-item py-1" href="#">Gaming & Consoles</a>
                    <a class="nav-item py-1" href="#">TVs</a>
                </nav>

                <h6 class="bold text-contrast mt-4">Information</h6>
                <nav class="nav flex-column">
                    <a class="nav-item py-1" href="#">About company</a>
                    <a class="nav-item py-1" href="#">Brands</a>
                    <a class="nav-item py-1" href="#">Meet the Team</a>
                    <a class="nav-item py-1" href="#">Contact Info</a>
                    <a class="nav-item py-1" href="#">FAQs</a>
                </nav>
            </div>

            <div class="col-md-4">
                <h6 class="bold widget-title text-contrast pb-1">Our Newsletter</h6>

                <x-forms.register-input-group button-color="darker" />

                <h6 class="bold text-contrast mt-5 pb-1">Download the app</h6>
                <nav class="nav flex-column flex-xl-row justify-content-center justify-content-md-start align-items-center">
                    <a href="#" class="nav-link py-3 btn btn-download btn-darker text-light mb-4 mb-xl-0 @rtl ms-0 ms-xl-4 @else me-0 me-xl-4 @endrtl">
                        <img src="{{ asset('img/svg/apple.svg') }}" class="icon icon-md" alt="...">
                        <p class="@rtl me-2 @else ms-2 @endrtl">
                            <span class="small light">Get it on the</span>
                            <span class="d-block bold text-contrast">App Store</span>
                        </p>
                    </a>

                    <a href="#" class="nav-link py-3 btn btn-download btn-darker text-light">
                        <img src="{{ asset('img/svg/google-play.svg') }}" class="icon icon-md" alt="...">
                        <p class="@rtl me-2 @else ms-2 @endrtl">
                            <span class="small light">Download on</span>
                            <span class="d-block bold text-contrast">Google Play</span>
                        </p>
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <div class="bg-darker">
        <div class="container pt-5 pb-2">
            <div class="row g-4">
                @php ($items = [
                    [ "icon" => "072-sale", "name" => "Deals & Promotions" ],
                    [ "icon" => "026-delivery-truck-2", "name" => "Free Shipping" ],
                    [ "icon" => "060-package-1", "name" => "Easy Return" ],
                    [ "icon" => "056-box", "name" => "Order Tracking" ],
                    [ "icon" => "076-security", "name" => "Secure Checkout" ],
                    [ "icon" => "020-chat", "name" => "Customer Support" ],
                ])
                @foreach ($items as $item)
                    <div class="col-4 col-md-2">
                        <div class="bg-dark p-3 icon-xl rounded-circle center-flex mx-auto">
                            <img src="{{ asset("/img/shop/icons/fic/{$item['icon'] }.svg") }}" class="inline-it img-responsive fill-alternate" alt="">
                        </div>

                        <h6 class="mt-3 mb-0 text-center text-light bold">{{ $item['name'] }}</h6>
                    </div>
                @endforeach
            </div>

            <hr class="border-dark my-5">

            <div class="row g-4 align-items-center">
                <div class="col-md-4 d-flex">
                    <nav class="nav flex-wrap mx-auto ms-md-0">
                        <a class="nav-item py-1 @rtl ms-3 @else me-3 @endrtl" href="#">Support</a>
                        <a class="nav-item py-1 @rtl ms-3 @else me-3 @endrtl" href="#">Privacy</a>
                        <a class="nav-item py-1 @rtl ms-3 @else me-3 @endrtl" href="#">Terms of use</a>
                        <a class="nav-item py-1" href="#">Return Policy</a>
                    </nav>
                </div>

                <div class="col-md-4 text-center">
                    <a class="d-inline-block align-middle @rtl ms-3 @else me-3 @endrtl" href="#">
                        <img class="img-responsive logo" src="{{ asset('/img/logo-light.png') }}" alt="">
                    </a>
                </div>

                <div class="col-md-4 d-flex">
                    <nav class="nav mx-auto @rtl me-md-auto ms-md-0 @else ms-md-auto me-md-0 @endrtl">
                        <a class="btn btn-sm btn-dark @rtl ms-2 @else me-2 @endrtl" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm btn-dark @rtl ms-2 @else me-2 @endrtl" href="#"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-sm btn-dark @rtl ms-2 @else me-2 @endrtl" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-sm btn-dark @rtl ms-2 @else me-2 @endrtl" href="#"><i class="fab fa-pinterest"></i></a>
                        <a class="btn btn-sm btn-dark" href="#"><i class="fab fa-youtube"></i></a>
                    </nav>
                </div>
            </div>

            <div class="row align-items-center mt-4">
                <div class="col-md-6">
                    <p class="mt-4 small mb-md-0 text-center @rtl text-md-end @else text-md-start @endrtl">© 2021 <a href="5studios.net" target="_blank">5studios.net</a>. All Rights Reserved</p>
                </div>

                <div class="col-md-6">
                    <img class="img-responsive mx-auto @rtl me-md-auto ms-md-0 @else ms-md-auto me-md-0 @endrtl" style="max-width: 136px" src="{{ asset("img/shop/payment-methods.png") }}" alt="Payment methods">
                </div>
            </div>
        </div>
    </div>
</footer>
