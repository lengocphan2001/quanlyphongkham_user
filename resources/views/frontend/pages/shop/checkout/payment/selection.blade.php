<!-- Payment Method -->
<section class="section">
    <div class="container pt-0 mt-n8">
        <div class="row">
            <div class="col-lg-8 pt-9">
                <h4 class="bold mb-5">Payment Selection</h4>

                <div class="accordion accordion-clean accordion-collapsed" id="payment-options">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="d-flex align-items-center">
                                    <!-- <i class="fas fa-angle-down angle"></i> -->
                                    <div class="radio radio-primary">
                                        <input class="form-control" type="radio" id="po-credit-card" name="payment-options" checked>
                                        <label class="control-label text-darker" for="po-credit-card" data-bs-toggle="collapse" data-bs-target="#clp-payment-credit-card">Credit Card</label>
                                    </div>
                                </div>

                                <p class="small text-muted my-0 ms-4">
                                    Pay with Visa, Amex, MasterCard and many other credit and debit cards
                                </p>
                            </div>
                        </div>

                        <div id="clp-payment-credit-card" class="collapse show" data-bs-parent="#payment-options">
                            <div class="card-body">
                                <div class="row gap-y align-items-center">
                                    <div class="col-md-7">
                                        <div class='card-wrapper'></div>
                                    </div>

                                    <div class="col-md-5">
                                        <x-forms.post class="checkout-cc-payment-form">
                                            <div class="mb-4">
                                                <label for="card-number" class="form-label">Card Number</label>
                                                <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                                            </div>

                                            <div class="mb-4">
                                                <label for="card-holder-name" class="form-label">Card Holder Name</label>
                                                <input class="form-control" type="text" name="name" placeholder="Card holder name" required>
                                            </div>

                                            <div class="row g-2">
                                                <div class="col-sm-6">
                                                    <label for="expiration" class="form-label">Expiration</label>
                                                    <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="cvc" class="form-label">CVC</label>
                                                    <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                                                </div>
                                            </div>
                                        </x-forms.post>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="d-flex align-items-center">
                                    <!-- <i class="fas fa-angle-down angle"></i> -->
                                    <div class="radio radio-primary">
                                        <input class="form-control" type="radio" id="po-paypal" name="payment-options">
                                        <label class="control-label text-darker" for="po-paypal" data-bs-toggle="collapse" data-bs-target="#clp-payment-paypal">Paypal</label>
                                    </div>
                                </div>

                                <p class="small text-muted my-0 ms-4">
                                    Pay easily, fast and secure with PayPal
                                </p>
                            </div>
                        </div>

                        <div id="clp-payment-paypal" class="collapse" data-bs-parent="#payment-options">
                            <div class="card-body text-center">
                                <p class="text-muted">
                                    You will be redirected to PayPal website to complete the payment
                                </p>

                                <button class="btn btn-info text-contrast" type="button">
                                    <i class="fab fa-paypal me-2"></i>
                                    Take me to PayPal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6 d-grid">
                        <x-utils.link class="btn btn-gray text-contrast" :href="route('frontend.checkout.shipping')">
                            <i class="fas fa-chevron-left me-2"></i>
                            <span>Back to Shipping</span>
                        </x-utils.link>
                    </div>

                    <div class="col-6 d-grid">
                        <x-utils.link class="btn btn-primary" :href="route('frontend.checkout.confirmation')">
                            <span class="me-2">Confirm your Order</span>
                            <i class="fas fa-chevron-right"></i>
                        </x-utils.link>
                    </div>
                </div>
            </div>

            @include ("frontend.pages.shop.checkout._aside")
        </div>
    </div>
</section>
