<!-- Deals -->
<section class="section bg-light mt-n6">
    <div class="container bring-to-front pt-0">
        <div class="row gap-y">
            <div class="col-xl-8 col-lg-9">
                <div class="shadow-box shadow-hover bg-contrast p-3 rounded h-100">
                    <p class="text-darker bold mt-0 d-flex">
                        Weekend Deals
                        <a href="javascript:;" class="small text-muted ms-auto">View more</a>
                    </p>

                    <div class="row no-gutters text-center">
                        @foreach ($deals as $deal)
                            <div class="col-6 col-sm-3 d-flex flex-column{{ $loop->index ? " ps-0 pe-2" : " px-2" }}">
                                <a href="javascript:;" class="shadow-box p-2">
                                    <img src="{{ asset("img/shop/products/{$deal['img']}.jpg") }}" class="img-responsive rounded" alt="">

                                    <p class="mb-0 d-flex flex-wrap align-items-center">
                                        $<span class="price text-darker bold ms-1 me-auto">{{ $deal['price'] }}</span>
                                        <span class="badge bg-danger">{{ $deal['off'] }}% Off</span>
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-3">
                <div class="shadow-box shadow-hover bg-contrast p-3 rounded h-100">
                    <p class="bold text-darker mt-0">Register to get the best deals</p>
                    <p class="text-muted mb-5">By registering you accept the <a href="#!">Terms and Conditions</a> policy</p>

                    <form class="form">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
