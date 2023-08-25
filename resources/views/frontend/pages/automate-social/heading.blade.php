<!-- ./Page header -->
@php($bubbles = [
    [ "icon" => "like" ],
    [ "icon" => "smile" ],
    [ "icon" => "heart" ],
    [ "icon" => "heart" ],
    [ "icon" => "smile" ],
    [ "icon" => "like" ],
    [ "icon" => "smile" ],
    [ "icon" => "heart" ],

    [ "icon" => "smile" ],
    [ "icon" => "like" ],
    [ "icon" => "like" ],
    [ "icon" => "heart" ],
    [ "icon" => "like" ],
    [ "icon" => "heart" ],
    [ "icon" => "smile" ],
    [ "icon" => "like" ]
])
<header class="section header text-contrast automate-social-header">
    <div class="shape-wrapper">
        <div class="shape shape-background shape-main gradient gradient-blue-purple"></div>
        <div class="shape shape-background shape-main shadow"></div>
        <div class="shape shape-background shape-top"></div>
        <div class="shape shape-background shape-right"></div>
    </div>

    <div class="container overflow-hidden">
        <div class="row gap-y">
            <div class="col-lg-6">
                <h1 class="text-contrast extra-bold display-md-3 display-lg-2 font-lg mb-5">Automate <span
                        class="d-block light font-md">campaign management</span></h1>
                <p class="text-contrast lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore
                    excepturi explicabo, harum in laudantium nulla officiis reprehenderit!
                </p>

                <x-forms.post class="form" novalidate>
                    <div class="input-group-register py-4">
                        <input type="email" name="Subscribe[email]"
                            class="form-control shadow-lg bg-contrast rounded-pill"
                            placeholder="Enter your email" required>
                        <button class="btn btn-rounded btn-primary btn-lg rounded-pill" type="submit">
                            <i class="fa fa-rocket d-inline d-md-none"></i>
                            <span class="d-none d-md-inline">Start Free Trial</span>
                        </button>
                    </div>
                </x-forms.post>
            </div>
        </div>
    </div>

    <div class="main-shape-wrapper">
        <div class="bubbles-wrapper">
            <div data-aos="fade-up">
                <figure>
                    <img src="{{ asset("img/automate-social/header/main-shape.svg") }}" class="img-responsive main-shape floating" alt="">
                </figure>
            </div>

            <ul class="animations m-0">
                @foreach ($bubbles as $bubble)
                <li
                    class="bubble icon icon-{{ $loop->index % 2 == 0 ? "xl" : ($loop->index % 3 == 0 ? "lg" : "xxl") }}">
                    <img src="{{ asset("img/automate-social/header/{$bubble['icon']}.svg") }}" alt="" class="img-responsive">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
