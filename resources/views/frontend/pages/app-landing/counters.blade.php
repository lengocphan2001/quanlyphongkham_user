<!-- ./Counters -->
<x-utils.container class="counters bg-primary text-contrast" container-class="{{ $containerClass ?? '' }}">
    <div class="section-heading text-center">
        <h2 class="bold text-contrast">Millions business rely on {{ appName() }}</h2>
        <p class="lead">These amazing stats can be wrong, many happy customers around the world trust our service to boost their products</p>
    </div>

    <div class="row g-4">
        @php ( $counters = [
            [ "icon" => "box", "value" => 273, "title" => "Components" ],
            [ "icon" => "download-cloud", "value" => 654, "title" => "Downloads" ],
            [ "icon" => "anchor", "value" => 7941, "title" => "Followers" ],
            [ "icon" => "award", "value" => 654, "title" => "New users" ]
        ])
        @foreach ($counters as $c)
        <div class="col-6 col-md-3 text-center">
            <i data-feather="{{ $c['icon'] }}" width="36" height="36"></i>
            <p class="counter bold font-md mt-0 mb-1">{{ $c['value'] }}</p>
            <p class="m-0">{{ $c['title'] }}</p>
        </div>
        @endforeach
    </div>
</x-utils.container>
