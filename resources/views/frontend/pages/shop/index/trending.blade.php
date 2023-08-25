<!-- Trending Products -->
<section class="trending-now">
    <div class="container">
        <div class="section-heading">
            <span class="text-primary bold">Discover</span>
            <h3>What's Trending Now</h3>
        </div>

        <div class="row gap-y">
            @foreach ($trends as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 shadow-hover">
                <div class="card product-card border-0">
                    <a class="btn btn-light btn-circle btn-sm absolute top right" href="javascript:;">
                       <i class="far fa-heart"></i>
                    </a>

                    <a class="card-img-top d-block overflow-hidden" href="javascript:;">
                        <img src="{{ asset("img/shop/products/{$product['img']}") }}" class="img-responsive mx-auto" alt="">
                    </a>

                    <div class="card-body">
                        <a class="product-category text-muted font-xs" href="javascript:;">{{ $product['category'] }}</a>
                        <h3 class="product-title font-sm">
                            <a href="javascript:;" class="text-darker">{{ $product['name'] }}</a>
                        </h3>

                        <div class="center-flex justify-content-between flex-wrap">
                            <div class="product-price d-flex align-items-end">
                                <div class="text-primary light lead">
                                    <span>${{ $product['price']['current'] }}.</span>
                                    <sup>00</sup>
                                </div>

                                @if ( isset($product['price']['banned'] ))
                                <del class="text-muted light strike-through ms-2">
                                    <span>${{ $product['price']['banned'] }}.</span>
                                    <sup>00</sup>
                                </del>
                                @endif
                            </div>

                            <div class="product-rating small text-alternate">
                                @for ($rating = 1; $rating < 7; $rating++)
                                    <i class="{{ $loop->index <= $product['rating'] ? "fas" : "far" }} fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <div class="card-body card-body-hidden d-grid">
                        <button class="btn btn-primary mb-2" type="button">
                            <i data-feather="shopping-cart" class="me-1" width="16"></i>Add to Cart
                        </button>

                        <div class="text-center">
                            <a class="font-ms small text-muted" href="#quick-view" data-bs-toggle="modal">
                                <i data-feather="eye" class="me-1" width="14"></i>Quick view
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="d-sm-none">
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a class="btn btn-outline-primary" href="javascript:;">
                More products
                <i class="fas fa-chevron-right ms-1"></i>
            </a>
        </div>
    </div>
</section>
