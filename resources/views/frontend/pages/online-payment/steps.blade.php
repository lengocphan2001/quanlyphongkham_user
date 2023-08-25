@php($steps = [
    [ "icon" => "user", "image" => [ "name" => "register", "class" => "w-50" ], "title" => "register free", "button" => [ "text" => "Sign Up Free" ] ],
    [ "icon" => "users-cog", "image" => [ "name" => "configure" ], "title" => "configure your sourcing", "button" => [ "text" => "Learn More" ] ],
    [ "icon" => "user-shield", "image" => [ "name" => "receive" ], "title" => "start receiving payments", "button" => [ "text" => "Learn More" ] ]
])
<!-- Features -->
<section class="section">
    <div class="shape-wrapper">
        <div class="shape shape-background shape-right"></div>
        <div class="shape shape-background top shape-left bg-info op-1"></div>
    </div>

    <div class="container">
        @foreach ($steps as $step)
        <div class="row align-items-center @if($loop->index > 0) py-5 @else pb-5 @endif">
            <div class="col-md-6 position-relative @if(($loop->index+1) % 2 == 0) order-md-2 @endif">
                <figure data-aos="@if(($loop->index+1) % 2 == 0) @rtl fade-right @else fade-left @endrtl @else @rtl fade-left @else fade-right @endrtl @endif">
                    <img src="{{ asset("img/shps/payments/{$step['image']['name']}.svg") }}" class="img-responsive {{ $step['image']['class'] ?? '' }}" alt="">

                    @if ($loop->index == 0)
                    <img src="{{ asset("img/shps/payments/register-click.svg") }}"
                        class="img-responsive absolute w-50" alt="" style="bottom: 10%; left: 125px;"
                        data-aos="fade-up">
                    @endif
                </figure>
            </div>

            <div class="col-md-6 @rtl text-end @endrtl">
                <div class="icon-xxl mb-4">
                    <div class="icon-shape">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.98 213.35"
                            class="shape shape-xxl drop-shadow">
                            <defs>
                                <style>
                                    .cls-shape {
                                        fill: #1fa2ff;
                                    }
                                </style>
                            </defs>
                            <title>shape-4</title>
                            <g id="layer_1" data-name="layer_1">
                                <g id="OBJECTS">
                                    <path class="cls-shape"
                                        d="M92.2.36c58.51-4,85.65,25.71,100.68,65.52s37.29,53.51,21.92,99.33-70.9,51.88-92.59,46.52S78,192.49,51,182.07C10.79,166.56.86,146.16.06,126.06-1.07,97.63,13.92,94.45,18.73,63.28,24.51,25.93,46.43,3.47,92.2.36Z" />
                                </g>
                            </g>
                        </svg>

                        <i class="icon fas fa-2x fa-{{ $step['icon'] }} center-xy text-contrast"></i>
                    </div>
                </div>

                <div class="mb-5">
                    <h2 class="bold text-capitalize">{{ $step['title'] }}</h2>
                    <p class="lead text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium autem dolorem
                        eaque est eum fugit harum maiores minima nisi nobis, possimus, quas qui quo ratione sequi suscipit
                        vel vero voluptas?
                    </p>
                </div>

                <a href="javascript:;" class="btn btn-rounded btn-primary">
                    {{ $step['button']['text'] }}
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>
