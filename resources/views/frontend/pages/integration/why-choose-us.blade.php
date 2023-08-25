<!-- Why Choose Us -->
<section class="section why-choose-us">
    <div class="shapes-container">
        <div class="pattern pattern-dots"></div>
    </div>

    <div class="container pb-8 bring-to-front">
        <div class="row gap-y">
            <div class="col-md-6">
                <div class="mb-5">
                    <p class="text-primary bold">Super easy</p>
                    <h2 class="bold">Ease external tools integration</h2>

                    <p class="text-muted lead">Easely integrates with another templates of our own creation.</p>
                </div>

                @php($features = [
                    [ "name" => "Integrations", "icon" => "box", "description" => "We designed DashCore to be able to integrate with additional templates designed by our team" ],
                    [ "name" => "Components", "icon" => "layers", "description" => "All its components share a core styling, this will allow to share multiple components where you need" ]
                ])
                @foreach ($features as $item)
                <div class="d-flex align-items-start @if ($loop->index < $loop->count) pb-3 @endif">
                    <div class="bg-light p-3 rounded d-flex align-items-center justify-content-center @rtl ms-3 @else me-3 @endrtl">
                        <i data-feather="{{ $item['icon'] }}" class="stroke-primary"></i>
                    </div>

                    <div class="flex-fill">
                        <h5>{{ $item['name'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
                @endforeach

                <hr class="my-5">
                <div class="text-center @rtl text-md-end @else text-md-start @endrtl">
                    <a href="#!" class="btn btn-primary btn-rounded">
                        Know More
                        <i class="fa fa-long-arrow-alt-right @rtl me-3 @else ms-3 @endrtl"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="rotated-mockups device-twin">
                    <div class="browser absolute shadow-lg">
                        <img src="{{ asset("img/screens/tablet/1.png") }}" alt="...">
                    </div>

                    <div class="front iphone-x">
                        <div class="screen">
                            <img src="{{ asset("img/screens/app/1.png") }}" alt="...">
                        </div>

                        <div class="notch"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
