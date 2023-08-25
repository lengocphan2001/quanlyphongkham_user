<!-- Customer info -->
<section class="section">
    <div class="container pt-0 mt-n8">
        <div class="row">
            <div class="col-lg-8 pt-9">
                <div class="row gap-y">
                    <div class="col-md-5 @rtl ms-md-auto @else me-md-auto @endrtl">
                        <h4 class="border-bottom mb-5 pb-3 bold">Returning Customer</h4>

                        <form class="form cozy">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <p class="my-0 small text-muted">Your registered email address</p>
                            </div>

                            <div class="form-group">
                                <div class="d-flex align-items-center">
                                    <label for="email" class="form-label">Password</label>
                                    <a href="javascript:;" class="@rtl pe-0 me-auto @else ps-0 ms-auto @endrtl small">Forgot your password?</a>
                                </div>

                                <input type="password" class="form-control" placeholder="Your Email Address">
                                <p class="my-0 small text-muted">Remember, password is case sensitive</p>
                            </div>

                            <div class="d-grid mt-5">
                                <button class="btn btn-primary">Checkout</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-5">
                        <h4 class="border-bottom mb-5 pb-3 bold">Guest Checkout</h4>

                        <p class="small text-muted">You can continue to checkout and you will have the chance to create an account later on.</p>

                        <x-utils.link :href="route('frontend.checkout.shipping')" class="btn btn-primary">Continue as Guest</x-utils.link>
                    </div>
                </div>
            </div>

            @include ("frontend.pages.shop.checkout._aside")
        </div>
    </div>
</section>
