@php ($elements = [
    [ "icon" => "star", "title" => "Powerful Design", "description" => "Ab ad aliquam assumenda beatae commodi distinctio dolore dolorum earum error et, exercitationem" ],
    [ "icon" => "camera", "title" => "Professional Tools", "description" => "Blanditiis cumque, eius error est et exercitationem, explicabo hic natus nobis odit porro quia" ],
    [ "icon" => "sun", "title" => "Creative Content", "description" => "A animi aperiam cupiditate eum incidunt, magni mollitia nam nemo non officia omnis, quasi quisquam" ]
])
<!-- ./App features -->
<x-utils.container class="features" id="features">
    <div class="section-heading text-center">
        <h2 class="bold">Premium features</h2>
        <p class="lead text-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nulla,
            voluptates. Architecto eum minima necessitatibus quo reiciendis! Aliquam culpa doloremque eaque esse
            illo, nemo nesciunt nobis quia sapiente tenetur veniam.
        </p>
    </div>

    <div class="row gap-y text-center @rtl text-md-end @else text-md-start @endrtl">
        @foreach ($elements as $element)
        <div class="col-md-4">
            <div class="card shadow-hover lift-hover">
                <div class="card-body p-3 p-lg-5">
                    <i data-feather="{{ $element['icon'] }}" width="36" height="36" class="mb-3 stroke-primary"></i>
                    <h5 class="bold">{{ $element['title'] }}</h5>
                    <p>{{ $element['description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-utils.container>
