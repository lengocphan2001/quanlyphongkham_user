<!-- ./Services -->
<x-utils.container class="bg-light edge top-left bottom-right">
    <div class="section-heading text-center">
        <h2 class="bold">What We Offer</h2>
        <p class="text-secondary lead">
            {{ appName() }} is a complete set of design and developing tools. Either your
            business is just starting or have years on the market, you can take advantage of it.
        </p>
    </div>

    @php($cards = [
        [ "icon" => [ "name" => "mail", "class" => "text-info" ], "title" => [ "text" => "Inbox" ] ],
        [ "icon" => [ "name" => "activity" ], "title" => [ "text" => "Reports" ], "class" => " text-contrast bg-info" ],
        [ "icon" => [ "name" => "calendar", "class" => "text-danger" ], "title" => [ "text" => "Calendar" ] ],

        [ "icon" => [ "name" => "file", "class" => "text-success" ], "title" => [ "text" => "Invoices" ] ],
        [ "icon" => [ "name" => "target", "class" => "text-primary" ], "title" => [ "text" => "Content" ] ]
    ])
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
        @foreach ($cards as $card)
        <div class="card shadow lift-hover border-0{{ $card['class'] ?? '' }}">
            <div class="card-body p-md-5 text-center">
                <i data-feather="{{ $card['icon']['name'] }}" class="{{ $card['icon']['class'] ?? '' }}" width="36" height="36"></i>
                <p class="bold {{ $card['title']['class'] ?? '' }}">{{ $card['title']['text'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</x-utils.container>
