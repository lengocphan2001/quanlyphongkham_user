@php($elements = [
    [ "icon" => "lock", "title" => "Security included" ],
    [ "icon" => "wind", "title" => "Easily theme-able" ],
    [ "icon" => "box", "title" => "Plugins included" ],
    [ "icon" => "sliders", "title" => "Professional tools" ],
    [ "icon" => "target", "title" => "Ready-to-use content" ],
    [ "icon" => "bar-chart", "title" => "Powerful analytics" ]
])
<!-- ./Features - grid -->
<x-utils.container class="{{ $class ?? '' }}" id="features" container-class="pb-5">
    <div class="section-heading mb-6 text-center">
        <span class="rounded-pill shadow-box badge bg-primary bold py-2 px-4">DashCore features</span>
        <h2 class="mt-3">What DashCore can do for you</h2>
    </div>

    <div class="row gap-y text-center">
        @foreach ($elements as $element)
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm shadow-hover">
                <div class="card-body py-4">
                    <i data-feather="{{ $element['icon'] }}" width="36" height="36" class="{{ $iconClass ?? '' }}"></i>
                    <h5 class="bold">{{ $element['title'] }}</h5>
                    <p class="{{ $textClass ?? '' }}">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolores ea
                        fugiat nesciunt quisquam. Assumenda dolore error nulla pariatur voluptatem?
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-utils.container>
