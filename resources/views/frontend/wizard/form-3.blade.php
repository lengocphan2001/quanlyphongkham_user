<!-- Step 3, Select a Plan -->
@php (
$plans = [[
    "icon" => "pe-7s-plugin",
    "plan" => [
        "name" => "Personal",
        "price" => 0.99,
        "description" => "Includes simple but powerful functionality for individuals and small teams. You can upgrade on the way"
    ],
    "features" => [
        [ "name" => "Cras justo odio", "class" => "strike-through" ],
        [ "name" => "Dapibus ac facilisis in", "class" => "strike-through" ],
        [ "name" => "Morbi leo risus", "class" => "strike-through"],
        [ "name" => "Porta ac consectetur ac"],
        [ "name" => "Vestibulum at eros"]
    ]
], [
    "icon"  => "pe-7s-cloud-download",
    "best" => true,
    "plan" => [
        "name" => "Business",
        "price" => 29.99,
        "description" => "For settle companies looking to stay competitive in the market and growing with the technology"
    ],
    "features" => [
        [ "name" => "Cras justo odio", "class" => "strike-through"],
        [ "name" => "Dapibus ac facilisis in", "class" => "strike-through"],
        [ "name" => "Morbi leo risus"],
        [ "name" => "Porta ac consectetur ac"],
        [ "name" => "Vestibulum at eros"]
    ]
], [
    "icon"  => "pe-7s-tools",
    "plan" => [
        "name" => "Enterprise",
        "price" => 99.99,
        "description" => "Everything you can get from a professional solution to keep your business on its way to success"
    ],
    "features" => [
        [ "name" => "Cras justo odio" ],
        [ "name" => "Dapibus ac facilisis in"],
        [ "name" => "Morbi leo risus"],
        [ "name" => "Porta ac consectetur ac"],
        [ "name" => "Vestibulum at eros" ]
    ]
]
])

<h5 class="my-4 b-b pb-2"><i class="icon fas fa-play"></i> Select <span class="bold">Plan</span></h5>

<x-forms.post action="wizard/post-form/" class="form form-account cozy pt-4 pb-5" name="form-personal" id="form-step-3">
    <div class="row">
        @foreach ($plans as $plan)
        @php( $planName = strtolower($plan["plan"]["name"]) )
        @php( $planId = "plan_{$planName}" )
        @php( $isBest = isset($plan["best"]) && $plan["best"] )
        <div class="col-md-4">
            <div class="card text-center shadow {{ $isBest ? 'b b-3' : '' }}">
                <div class="pricing card-body d-flex align-items-center flex-column">
                    <div class="checkbox">
                        <input type="radio" value="{{ $planName }}" name="Plan[plan]" id="{{ $planId }}" autocomplete="off" {{ $isBest ? 'checked' : '' }}>
                        <label class="text-capitalize {{ $isBest ? 'active' : '' }}" for="{{ $planId }}">
                            {{ $planName }}
                        </label>
                    </div>

                    <div class="pricing-value"><span class="price bold">{{ $plan["plan"]["price"] }}</span></div>
                </div>

                <a class="btn btn-link collapsed" data-bs-toggle="collapse" href="#{{ $planName }}">Details</a>

                <ul class="list-group list-group-flush collapse" id="{{ $planName }}">
                    @foreach ($plan["features"] as $feature)
                    <li class="list-group-item {{ $feature["class"] ?? '' }}">{{ $feature["name"] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</x-forms.post>
