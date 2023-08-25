<!-- Cart Products -->
<section class="section">
    <div class="container pt-0 mt-n8">
        <div class="row">
            <div class="col-lg-8 pt-8">
                @foreach ($products as $product)
                    <div class="row border-bottom py-4">
                        <div class="col-md-8 col-lg-9 col-xl-10">
                            <div class="media d-block text-center d-sm-flex @rtl text-sm-end @else text-sm-start @endrtl">
                                <a class="@rtl ms-sm-4 @else me-sm-4 @endrtl" href="javascript:;">
                                    <img src="{{ asset("img/shop/products/{$product['img']}") }}" class="img-responsive mx-auto" style="max-width: 120px" alt="">
                                </a>

                                <div class="media-body">
                                    <a class="product-category text-muted font-xs" href="javascript:;">{{ $product['category'] }}</a>
                                    <h6 class="product-title bold">
                                        <a href="javascript:;" class="text-darker">{{ $product['name'] }}</a>
                                    </h6>
                                    <p class="my-0 text-muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                    <div class="text-primary light lead mt-3">
                                        <span>${{ $product['price']['current'] }}.</span>
                                        <sup>00</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-2">
                            <form class="form text-center @rtl text-sm-end @else text-sm-start @endrtl">
                                <div class="form-group mb-0">
                                    <label class="control-label font-sm text-dark" for="q{{ $loop->index }}">Quantity</label>
                                    <select class="form-select" id="q{{ $loop->index }}">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <button class="btn btn-link px-0 text-danger" type="button">
                                    <i class="fas fa-times @rtl ms-2 @else me-2 @endrtl"></i>
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach

                <div class="d-grid">
                    <button class="btn btn-outline-primary mt-4" type="button">
                        <i class="fas fa-redo @rtl ms-2 @else me-2 @endrtl"></i>Update cart
                    </button>
                </div>
            </div>

            @include ("frontend.pages.shop.cart._aside")
        </div>
    </div>
</section>
