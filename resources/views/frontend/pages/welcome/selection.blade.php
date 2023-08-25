@php ($demos = [
    [
        "title" =>  'Payment Services',
        "urls" =>  [[
            "link" =>  'payment-services',
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" => "14",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Ecommerce",
        "urls" =>  [[
            "link" =>  "shop-index",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "13",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Business Solutions",
        "urls" =>  [[
            "link" =>  "business-solutions",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "12",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "App Landing",
        "urls" =>  [[
            "link" =>  "app-landing-2",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "10",
        "btn" =>  [ "class" =>  "warning" ],
    ],
    [
        "title" =>  "Integration",
        "urls" =>  [[
            "link" =>  "integration",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "11",
        "btn" =>  [ "class" =>  "warning" ],
    ],
    [
        "title" =>  "Corporate",
        "urls" =>  [[
            "link" =>  "corporate",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "1",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Startup",
        "urls" =>  [[
            "link" =>  "startup",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "2",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Saas",
        "urls" =>  [[
            "link" =>  "saas",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "3",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Developer",
        "urls" =>  [[
            "link" =>  "developers",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "4",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Payment",
        "urls" =>  [[
            "link" =>  "online-payment",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "6",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Business",
        "urls" =>  [[
            "link" =>  "smart-business",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "7",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Marketing",
        "urls" =>  [[
            "link" =>  "automate-social",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]],
        "cover" =>  "8",
        "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "Social",
        "urls" =>  [[
            "link" =>  "social",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]], "cover" =>  "5", "btn" =>  [ "class" =>  "warning" ]
    ],
    [
        "title" =>  "App Landing",
        "urls" =>  [[
            "link" =>  "app-landing",
            "icon" =>  "fas fa-desktop",
            "text" => "Demo"
        ]], "cover" =>  "9", "btn" =>  [ "class" =>  "warning" ]
    ]
])

<section class="section" id="demos">
    <div class="container-fluid">
        <div class="section-heading text-center">
            <h2 class="bold">@Lang('Demo Selection')</h2>
            <p class="lead text-secondary">
                @Lang('We have created multiple pre-made demos for you, please select the one you like the most to give it a try')
            </p>
        </div>

        <div class="row g-4">
            @foreach ($demos as $demo)
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="card card-demo card--blog shadow-box border-0">
                    <div class="card-body d-flex align-items-center">
                        @if ( isset($demo['new']) && $demo['new'] )
                            <span class="is-new badge badge-danger badge-pill">@Lang('New')</span>
                        @endif
                        <h4 class="card-title mb-0 text-capitalize">{{ $demo['title'] }}</h4>

                        <nav class="btn-group @rtl me-auto @else ms-auto @endrtl">
                        @foreach ($demo['urls'] as $url)
                            <a href="{{ $url['link'] }}" target="_blank" class="btn btn-{{ $demo['btn']['class'] }} rounded-pill">
                                <i class="icon {{ $url['icon'] }}"></i>
                                <span class="demo-link-text d-none d-sm-inline">{{ $url['text'] }}</span>
                            </a>
                        @endforeach
                        </nav>
                    </div>

                    <figure class="preview-overlay m-0">
                        <div class="preview-pane" data-ps>
                            <div class="preview-page">
                                <img class="card-img-bottom img-responsive" src="{{ asset('img/demo/screen/'. $demo['cover'] .'.png') }}" alt="">
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
