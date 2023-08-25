@php
    $useDarkLinks = $useDarkLinks ?? false;
    $useOnlyDarkLogo = $useOnlyDarkLogo ?? false;
    $navPrimaryClass = $navPrimaryClass ?? 'stick-right';
@endphp
    <!-- ./Making stripe menu navigation -->
<nav class="st-nav navbar main-nav navigation fixed-top{{ $useDarkLinks ? ' dark-link' : '' }}" id="main-nav">
    <div class="container">
        <ul class="st-nav-menu nav navbar-nav">
            <li class="st-nav-section nav-item">
                <a href="/" class="navbar-brand">
                    @if ( $useOnlyDarkLogo )
                        <img src="{{ asset('img/logo.png') }}" alt="{{ appName() }}" class="logo logo-sticky">
                    @else
                        <img src="{{ asset('img/logo.png') }}" alt="{{ appName() }}}}" class="logo logo-sticky d-inline-block d-lg-none">
                        <img src="{{ asset('img/logo-light.png') }}" alt="{{ appName() }}" class="logo d-none d-lg-inline-block">
                    @endif
                </a>
            </li>
            <li class="st-nav-section st-nav-primary nav-item {{ $navPrimaryClass }}">
                <x-utils.link class="st-root-link item-products st-has-dropdown nav-link" :href="route('mindmatrix.courses.all')" data-dropdown="blocks" :text="__('Courses')" />
                <x-utils.link class="st-root-link nav-link" :href="route('mindmatrix.review')" :text="__('Reviews')" />
                <x-utils.link class="st-root-link nav-link" :href="route('mindmatrix.blogs.all')" :text="__('Blog')" />
                <x-utils.link class="st-root-link nav-link" :href="route('mindmatrix.about-us')" :text="__('About us')" />
            </li>
{{--            <li class="st-nav-section st-nav-secondary nav-item">--}}
{{--                @guest--}}
{{--                    <x-utils.link class="btn btn-outline rounded-pill @rtl ms-3 @else me-3 @endrtl px-3" :href="route('frontend.auth.login')" target="_blank">--}}
{{--                        <i class="fas fa-sign-in-alt d-none d-md-inline me-md-0 me-lg-2"></i>--}}
{{--                        <span class="d-md-none d-lg-inline">@Lang('Login')</span>--}}
{{--                    </x-utils.link>--}}

{{--                    @if (config('template.access.user.registration'))--}}
{{--                        <x-utils.link class="btn btn-solid rounded-pill px-3" :href="route('frontend.auth.register')" target="_blank">--}}
{{--                            <i class="fas fa-user-plus d-none d-md-inline me-md-0 me-lg-2"></i>--}}
{{--                            <span class="d-md-none d-lg-inline">@Lang('Signup')</span>--}}
{{--                        </x-utils.link>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    @include('includes.partials.user')--}}
{{--                @endguest--}}
{{--            </li>--}}

            <!-- Mobile Navigation -->
            <li class="st-nav-section st-nav-mobile nav-item">
                <button class="st-root-link navbar-toggler" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="st-popup">
                    <div class="st-popup-container">
                        <a class="st-popup-close-button">@Lang('Close')</a>
                        <div class="st-dropdown-content-group">
                            <h4 class="text-uppercase regular">@Lang('Pages')</h4>

                            @php ($options = [
                                [ "page" => "courses", "name" => "Courses", "icon-img" => "/img/poh/menu-icons/course.png", "color" => "text-primary" ],
                                [ "page" => "review", "name" => "Review", "icon-img" => "/img/poh/menu-icons/review.png", "color" => "text-success" ],
                                [ "page" => "blogs", "name" => "Blog", "icon-img" => "/img/poh/menu-icons/blog.png", "color" => "text-warning" ],
                                [ "page" => "about-us", "name" => "About us", "icon" => "far fa-question-circle", "color" => "text-info" ]
                            ])
                            @foreach ($options as $option)
                                <x-utils.link class="regular {{ $option['color'] }}" :href="$option['page']">
                                    @if(!empty($option['icon']))<i class="{{ $option['icon'] }} @rtl ms-2 @else me-2 @endrtl"></i>@endif
                                    @if(!empty($option['icon-img']))<img src="{{$option['icon-img']}}" class="mobile-menu-icon"/>@endif
                                        {{ __($option['name']) }}
                                </x-utils.link>
                            @endforeach
                        </div>

                        <div class="st-dropdown-content-group border-top bw-2">
                            <h4 class="text-uppercase regular">@Lang('Courses')</h4>

                            <div class="row">
                                <div class="col @rtl ms-4 @else me-4 @endrtl">
                                    @foreach($courseMenu as $course)
                                        <a class="dropdown-item" href="{{route('mindmatrix.courses.detail', array('alias' => $course->alias))}}">{{$course->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

{{--                        <div class="st-dropdown-content-group bg-light b-t">--}}
{{--                            <x-utils.link :href="route('frontend.auth.login')" target="_blank">--}}
{{--                                @Lang('Sign in') <i class="fas fa-arrow-right"></i>--}}
{{--                            </x-utils.link>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="st-dropdown-root">
        <div class="st-dropdown-bg">
            <div class="st-alt-bg"></div>
        </div>
        <div class="st-dropdown-arrow"></div>
        <div class="st-dropdown-container">
            <div class="st-dropdown-section" data-dropdown="blocks">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <div class="row">
                            <div class="col @rtl ms-4 @else me-4 @endrtl">
                                @foreach($courseMenu as $course)
                                <a class="dropdown-item" href="{{route('mindmatrix.courses.detail', array('alias' => $course->alias))}}">{{$course->name}}</a>
                                @endforeach
                            </div>
{{--                            <div class="col @rtl ms-4 @else me-4 @endrtl">--}}
{{--                                <a class="dropdown-item" target="_blank" href="blocks-calltoaction">@Lang('Course 2')</a>--}}
{{--                            </div>--}}
{{--                            <div class="col">--}}
{{--                                <a class="dropdown-item" target="_blank" href="blocks-calltoaction">@Lang('Course 3')</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>

{{--                    <div class="st-dropdown-content-group">--}}
{{--                        <h3 class="link-title">--}}
{{--                            <i class="fas fa-long-arrow-alt-right icon"></i> @Lang('Coming soon')--}}
{{--                        </h3>--}}
{{--                        <div class="ms-5">--}}
{{--                            <span class="dropdown-item text-secondary">--}}
{{--                                @Lang('Dividers')--}}
{{--                            </span>--}}
{{--                            <span class="dropdown-item text-secondary">--}}
{{--                                @Lang('Gallery')--}}
{{--                            </span>--}}
{{--                            <span class="dropdown-item text-secondary">--}}
{{--                                @Lang('Screenshots')--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</nav>
