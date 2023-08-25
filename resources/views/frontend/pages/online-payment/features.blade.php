@php($elements = [
    [ "icon" => "credit-card", "title" => "seamless payment" ],
    [ "icon" => "pie-chart", "title" => "insightfull analytics" ],
    [ "icon" => "book", "title" => "online wallet" ]
])
<!-- ./Online Payment - Features -->
<section id="features" class="section payment-features bg-contrast edge @rtl top-right @else top-left @endrtl">
    <div class="container">
        <div class="section-heading mb-6 text-center">
            <h5 class="text-primary bold small">Reasons to use DashCore</h5>
            <h2 class="bold">Know what you can do Online</h2>
        </div>

        <div class="row gap-y text-center text-md-start">
            @foreach ($elements as $element)
            <div class="col-md-4 py-4 position-relative text-center">
                <div class="card lift-hover shadow-hover">
                    <div class="card-body p-4">
                        <div class="icon-shape mb-4">
                            <div class="shape shape-circle"></div>
                            <i data-feather="{{ $element['icon'] }}" width="36" height="36" class="stroke-contrast icon center-xy"></i>
                        </div>

                        <h5 class="bold text-capitalize">{{ $element['title'] }}</h5>
                        <p class="{{ $textClass ?? '' }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolores ea
                            fugiat nesciunt quisquam. Assumenda dolore error nulla pariatur voluptatem?</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
