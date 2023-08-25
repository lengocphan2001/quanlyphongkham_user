@php ($features = [
    [ "icon" => "headphones", "title" => 'First class support' ],
    [ "icon" => "box", "title" => 'Code snippets' ],
    [ "icon" => "headphones", "title" => 'Full documentation' ],
    [ "icon" => "lock", "title" => 'Total control of your code' ],
    [ "icon" => "airplay", "title" => 'Responsive design' ],
    [ "icon" => "monitor", "title" => 'Browser support' ]
])

<!-- ./Plans features -->
<x-utils.container>
    <div class="section-heading text-center">
        <h2 class="bold">All our plans include</h2>
        <p class="lead text-secondary">Get access to a ton of features out of the box</p>
    </div>

    <div class="row gap-y text-center">
        @foreach ($features as $feature)
        <div class="col-md-4">
            <i data-feather="{{ $feature['icon'] }}" width="36" height="36" class="stroke-info me-2 m-0"></i>
            <h5 class="bold my-3">{{ $feature['title'] }}</h5>
            <p class="my-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque beatae dicta
                dolores hic porro quam voluptatibus.</p>
        </div>
        @endforeach
    </div>
</x-utils.container>
