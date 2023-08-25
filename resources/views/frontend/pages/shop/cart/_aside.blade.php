<!-- Sidebar-->
<aside class="col-lg-4 pt-4 pt-lg-0">
    <div class="card shadow border-0 rounded-lg">
        <div class="card-body">
            <div class="accordion accordion-clean accordion-collapsed" id="cart-options">
                <!-- Shipping Options -->
                <div class="card">
                    <div class="card-header">
                        <a href="#" class="card-title btn bold" data-bs-toggle="collapse" data-bs-target="#clp-shipping">
                            <i class="fas fa-angle-down angle"></i>Shipping Options
                        </a>
                    </div>

                    <div id="clp-shipping" class="collapse show" data-bs-parent="#cart-options">
                        <div class="card-body">
                            <form class="form form-check-list" method="post" novalidate>
                                @php($shipping = [
                                    [ "title" => "Free Shipping", "description" => "1 month - Tuesday, Dec 3rd 2019", "price" => "$0.00" ],
                                    [ "title" => "Standard Shipping", "description" => "2 weeks - Tuesday, Dec 3rd 2019", "price" => "$9.99" ],
                                    [ "title" => "Express Shipping", "description" => "3 days - Tuesday, Dec 3rd 2019", "price" => "$29.99" ]
                                ])
                                @foreach ($shipping as $option )
                                    <div class="mb-3 shadow-sm p-3">
                                        <div class="d-flex flex-column flex-sm-row align-items-sm-center">
                                            <div>
                                                <div class="radio radio-primary">
                                                    <input class="form-control" type="radio" id="{{ $option['title'] }}" name="shipping-options">
                                                    <label class="control-label text-darker" for="{{ $option['title'] }}">{{ $option['title'] }}</label>
                                                </div>
                                                <p class="small text-muted my-0">{{ $option['description'] }}</p>
                                            </div>

                                            <div class="@rtl me-sm-auto @else ms-sm-auto @endrtl">
                                                <span class="font-sm text-primary">{{ $option['price'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Promo Options -->
                <div class="card">
                    <div class="card-header">
                        <a href="#" class="card-title btn bold" data-bs-toggle="collapse" data-bs-target="#clp-promo">
                            <i class="fas fa-angle-down angle"></i>Apply Promo Code
                        </a>
                    </div>

                    <div id="clp-promo" class="collapse" data-bs-parent="#cart-options">
                        <div class="card-body">
                            <form class="form" method="post" novalidate>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Promo Code" required>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-outline-primary" type="submit">Apply Promo Code</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TOTAL -->
            <hr class="my-4">
            <h6 class="text-darker">Shipping to</h6>
            <p class="text-muted">Your Address, 1234 Your Street, Your City</p>

            <div class="d-flex flex-wrap">
                <p class="bold text-darker text-uppercase my-0">Total</p>
                <p class="h5 bold price mb-0 @rtl me-auto @else ms-auto @endrtl">$654.00</p>
            </div>

            <!-- Proceed -->
            <div class="d-grid">
                <x-utils.link class="btn btn-primary mt-4" :href="route('frontend.checkout.customer')">
                    <i class="fas fa-credit-card @rtl ms-2 @else me-2 @endrtl"></i>Proceed to Checkout
                </x-utils.link>
            </div>
        </div>
    </div>
</aside>
