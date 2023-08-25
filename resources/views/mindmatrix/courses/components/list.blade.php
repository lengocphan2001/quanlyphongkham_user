<!-- Trending Products -->
<section class="trending-now">
    <div class="container">
        <div class="section-heading">
            <div class="text-primary bold display-7">Our courses</div>
        </div>

        <div class="row gap-y">
            @foreach ($courses as $course)
                <div class="col-sm-6 col-md-4 col-lg-3 shadow-hover">
                    <div class="card product-card border-0">

                        <a class="card-img-top d-block overflow-hidden" href="{{route('mindmatrix.courses.detail', array('alias' => $course->alias))}}">
                            <img src="{{ $course->thumbnail }}" class="img-responsive mx-auto" alt="">
                        </a>

                        <div class="card-body">
                            <h3 class="product-title font-sm">
                                <a href="{{route('mindmatrix.courses.detail', array('alias' => $course->alias))}}" class="text-darker">{{ $course->name }}</a>
                            </h3>

                            <div class="center-flex justify-content-between flex-wrap">
                                <div class="product-price d-flex align-items-end">
                                    <div class="text-primary light lead">
                                        <span>${{ formatNumber($course->price) }}.</span>
                                        <sup>00</sup>
                                    </div>

                                    @if ( isset($course->normal_price))
                                        <del class="text-muted light strike-through ms-2">
                                            <span>${{ formatNumber($course->normal_price) }}.</span>
                                            <sup>00</sup>
                                        </del>
                                    @endif
                                </div>
                            </div>
                            <p>{{$course->short_desc}}</p>
                        </div>

                        <div class="card-body card-body-hidden d-grid">
                            <a href="{{route('mindmatrix.courses.detail', array('alias' => $course->alias))}}" class="btn btn-primary mb-2 text-white">
                                <div class="d-flex align-items-center justify-content-center w-100">
                                    <span class="">Learn more</span>
                                    <i data-feather="chevron-right" class="me-1" width="16"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <hr class="d-sm-none">
                </div>
            @endforeach
        </div>
    </div>
</section>
