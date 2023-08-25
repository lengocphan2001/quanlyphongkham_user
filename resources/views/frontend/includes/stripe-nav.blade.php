@php
    $useDarkLinks = $useDarkLinks ?? false;
    $useOnlyDarkLogo = $useOnlyDarkLogo ?? false;
    $navPrimaryClass = $navPrimaryClass ?? '';
@endphp
<!-- ./Making stripe menu navigation -->
<nav class="st-nav navbar main-nav navigation fixed-top{{ $useDarkLinks ? ' dark-link' : '' }}" id="main-nav">
    <div class="container">
        <ul class="st-nav-menu nav navbar-nav">
            <li class="st-nav-section nav-item">
                <a href="#main" class="navbar-brand">
                    @if ( $useOnlyDarkLogo )
                        <img src="{{ asset('img/logo.png') }}" alt="{{ appName() }}" class="logo logo-sticky">
                    @else
                        <img src="{{ asset('img/logo.png') }}" alt="{{ appName() }}}}" class="logo logo-sticky d-inline-block d-lg-none">
                        <img src="{{ asset('img/logo-light.png') }}" alt="{{ appName() }}" class="logo d-none d-lg-inline-block">
                    @endif
                </a>
            </li>
            <li class="st-nav-section st-nav-primary nav-item {{ $navPrimaryClass }}">
                <x-utils.link class="st-root-link nav-link" :href="route('frontend.index')" :text="__('Home')" />
                <x-utils.link class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="blocks" :text="__('Blocks')" />
                <x-utils.link class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="pages" :text="__('Pages')" />
                <x-utils.link class="st-root-link item-company st-has-dropdown nav-link" data-dropdown="components" :text="__('UI Components')" />
                <x-utils.link class="st-root-link item-blog st-has-dropdown nav-link" data-dropdown="blog" :text="__('Blog')" />
                <x-utils.link class="st-root-link item-shop st-has-dropdown nav-link" href="shop-index" data-dropdown="shop" :text="__('Shop')" />
            </li>
            <li class="st-nav-section st-nav-secondary nav-item">
                @guest
                    <x-utils.link class="btn btn-outline rounded-pill @rtl ms-3 @else me-3 @endrtl px-3" :href="route('frontend.auth.login')" target="_blank">
                        <i class="fas fa-sign-in-alt d-none d-md-inline me-md-0 me-lg-2"></i>
                        <span class="d-md-none d-lg-inline">@Lang('Login')</span>
                    </x-utils.link>

                    @if (config('template.access.user.registration'))
                        <x-utils.link class="btn btn-solid rounded-pill px-3" :href="route('frontend.auth.register')" target="_blank">
                            <i class="fas fa-user-plus d-none d-md-inline me-md-0 me-lg-2"></i>
                            <span class="d-md-none d-lg-inline">@Lang('Signup')</span>
                        </x-utils.link>
                    @endif
                @else
                    @include('includes.partials.user')
                @endguest
            </li>

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
                                [ "page" => "about", "name" => "About", "icon" => "far fa-building", "color" => "text-primary" ],
                                [ "page" => "contact", "name" => "Contact", "icon" => "far fa-envelope", "color" => "text-success" ],
                                [ "page" => "pricing", "name" => "Pricing", "icon" => "fas fa-hand-holding-usd", "color" => "text-warning" ],
                                [ "page" => "faqs", "name" => "FAQs", "icon" => "far fa-question-circle", "color" => "text-info" ]
                            ])
                            @foreach ($options as $option)
                                <x-utils.link class="regular {{ $option['color'] }}" :href="$option['page']">
                                    <i class="{{ $option['icon'] }} @rtl ms-2 @else me-2 @endrtl"></i> {{ __($option['name']) }}
                                </x-utils.link>
                            @endforeach
                        </div>

                        <div class="st-dropdown-content-group border-top bw-2">
                            <h4 class="text-uppercase regular">@Lang('Components')</h4>

                            <div class="row">
                                <div class="col @rtl ms-4 @else me-4 @endrtl">
                                    <a target="_blank" href="ui-alerts">@Lang('Alerts')</a>
                                    <a target="_blank" href="ui-badges">@Lang('Badges')</a>
                                    <a target="_blank" href="ui-buttons">@Lang('Buttons')</a>
                                    <a target="_blank" href="ui-colors">@Lang('Colors')</a>
                                    <a target="_blank" href="ui-accordion">@Lang('Accordion')</a>
                                    <a target="_blank" href="ui-cookielaw">@Lang('Cookielaw')</a>
                                </div>

                                <div class="col @rtl ms-4 @else me-4 @endrtl">
                                    <a target="_blank" href="ui-overlay">@Lang('Overlay')</a>
                                    <a target="_blank" href="ui-progress">@Lang('Progress')</a>
                                    <a target="_blank" href="ui-lightbox">@Lang('Lightbox')</a>
                                    <a target="_blank" href="ui-tabs">@Lang('Tabs')</a>
                                    <a target="_blank" href="ui-tables">@Lang('Tables')</a>
                                    <a target="_blank" href="ui-typography">@Lang('Typography')</a>
                                </div>
                            </div>
                        </div>

                        <div class="st-dropdown-content-group bg-light b-t">
                            <x-utils.link :href="route('frontend.auth.login')" target="_blank">
                                @Lang('Sign in') <i class="fas fa-arrow-right"></i>
                            </x-utils.link>
                        </div>
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
                                <a class="dropdown-item" target="_blank" href="blocks-calltoaction">@Lang('Call to actions')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-contact">@Lang('Contact')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-counter">@Lang('Counters')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-faqs">@Lang('FAQs')</a>
                            </div>
                            <div class="col @rtl ms-4 @else me-4 @endrtl">
                                <a class="dropdown-item" target="_blank" href="blocks-footer">@Lang('Footers')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-form">@Lang('Forms')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-navbar">@Lang('Navbar')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-navigation">@Lang('Navigation')</a>
                            </div>
                            <div class="col">
                                <a class="dropdown-item" target="_blank" href="blocks-pricing">@Lang('Pricing')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-slider">@Lang('Sliders')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-team">@Lang('Team')</a>
                                <a class="dropdown-item" target="_blank" href="blocks-testimonials">@Lang('Testimonials')</a>
                            </div>
                        </div>
                    </div>

                    <div class="st-dropdown-content-group">
                        <h3 class="link-title">
                            <i class="fas fa-long-arrow-alt-right icon"></i> @Lang('Coming soon')
                        </h3>
                        <div class="ms-5">
                            <span class="dropdown-item text-secondary">
                                @Lang('Dividers')
                            </span>
                            <span class="dropdown-item text-secondary">
                                @Lang('Gallery')
                            </span>
                            <span class="dropdown-item text-secondary">
                                @Lang('Screenshots')
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="pages">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <div class="mb-4">
                            <h3 class="text-darker light text-nowrap">
                                <span class="bold regular">Useful pages</span>you'll need
                            </h3>
                            <p class="text-secondary mt-0">@Lang('Get a complete design stack')</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <ul class="@rtl ms-4 @else me-4 @endrtl">
                                    <li>
                                        <h4 class="text-uppercase regular">@Lang('Error')</h4>
                                    </li>
                                    <li><a target="_blank" href="403">@Lang('403 Error')</a></li>
                                    <li><a target="_blank" href="404">@Lang('404 Error')</a></li>
                                    <li><a target="_blank" href="500">@Lang('500 Error')</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="@rtl ms-4 @else me-4 @endrtl">
                                    <li>
                                        <h4 class="text-uppercase regular">@Lang('User')</h4>
                                    </li>
                                    <li><x-utils.link target="_blank" :href="route('frontend.auth.login')" :text="__('Login')" /></li>
                                    <li><x-utils.link target="_blank" :href="route('frontend.auth.register')" :text="__('Register')" /></li>
                                    <li><x-utils.link target="_blank" :href="route('frontend.auth.password.request')" :text="__('Forgot')" /></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li>
                                        <h4 class="text-uppercase regular">@Lang('Extra')</h4>
                                    </li>
                                    <li><x-utils.link target="_blank" href="pricing" :text="__('Pricing')" /></li>
                                    <li><x-utils.link target="_blank" href="terms" :text="__('Terms')" /></li>
                                    <li><x-utils.link target="_blank" href="faqs" :text="__('FAQ')" /></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="st-dropdown-content-group">
                        <a class="dropdown-item bold" href="about">
                            <i class="far fa-building icon"></i> @Lang('About')
                        </a>
                        <a class="dropdown-item bold" href="contact">
                            <i class="far fa-envelope icon"></i> @Lang('Contact')
                        </a>
                        <a class="dropdown-item bold" href="pricing">
                            <i class="fas fa-hand-holding-usd icon"></i> @Lang('Pricing')
                        </a>
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="components">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        @php ($options = [
                            [ "page" => "colors", "bg" => "dark", "name" => "Colors", "text" => "Get to know DashCore color options", "icon" => "fas fa-palette" ],
                            [ "page" => "formcontrols", "bg" => "secondary", "name" => "Forms", "text" => "All forms elements", "icon" => "fab fa-wpforms" ],
                            [ "page" => "accordion", "bg" => "success", "name" => "Accordion", "text" => "Useful accordion elements", "icon" => "fas fa-bars" ],
                            [ "page" => "cookielaw", "bg" => "info", "name" => "CookieLaw", "text" => "Comply with the hideous EU Cookie Law", "icon" => "fas fa-cookie-bite" ]
                        ])
                        @foreach ($options as $option)
                            <a class="dropdown-item" target="_blank" href="ui-{{ $option['page']  }}">
                                <div class="d-flex align-items-center {{ $loop->index < $loop->count ? 'mb-3' : 'mb-4' }}">
                                    <div class="bg-{{ $option['bg'] }} text-contrast icon-md center-flex rounded-circle @rtl ms-2 @else me-2 @endrtl">
                                        <i class="{{ $option['icon'] }}"></i>
                                    </div>

                                    <div class="flex-fill">
                                        <h3 class="link-title m-0">{{ $option['name'] }}</h3>
                                        <p class="m-0 text-secondary">{{ $option['text'] }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                        <h4 class="text-uppercase regular">@Lang('Huge components list')</h4>
                        <div class="row">
                            <div class="col @rtl ms-4 @else me-4 @endrtl">
                                <a class="dropdown-item" target="_blank" href="ui-alerts">@Lang('Alerts')</a>
                                <a class="dropdown-item" target="_blank" href="ui-badges">@Lang('Badges')</a>
                                <a class="dropdown-item" target="_blank" href="ui-buttons">@Lang('Buttons')</a>
                            </div>

                            <div class="col @rtl ms-4 @else me-4 @endrtl">
                                <a class="dropdown-item" target="_blank" href="ui-overlay">@Lang('Overlay')</a>
                                <a class="dropdown-item" target="_blank" href="ui-progress">@Lang('Progress')</a>
                                <a class="dropdown-item" target="_blank" href="ui-lightbox">@Lang('Lightbox')</a>
                            </div>

                            <div class="col @rtl ms-4 @else me-4 @endrtl">
                                <a class="dropdown-item" target="_blank" href="ui-tabs">@Lang('Tabs')</a>
                                <a class="dropdown-item" target="_blank" href="ui-tables">@Lang('Tables')</a>
                                <a class="dropdown-item" target="_blank" href="ui-typography">@Lang('Typography')</a>
                            </div>
                        </div>
                    </div>

                    <div class="st-dropdown-content-group">
                        <a class="dropdown-item" target="_blank" href="ui-wizard">@Lang('Wizard')</a>
                        <span class="dropdown-item d-flex align-items-center text-muted">
                            @Lang('Timeline') <i class="fas fa-ban @rtl me-auto @else ms-auto @endrtl"></i>
                        </span>
                        <span class="dropdown-item d-flex align-items-center text-muted">
                            @Lang('Process') <i class="fas fa-ban @rtl me-auto @else ms-auto @endrtl"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="blog">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <div class="row">
                            <div class="col me-4">
                                <h4 class="regular text-uppercase">@Lang('Full width')</h4>
                                <a class="dropdown-item" target="_blank" href="blog-post">@Lang('Single post')</a>
                                <a class="dropdown-item" target="_blank" href="blog-grid">@Lang('Posts Grid')</a>
                            </div>
                            <div class="col me-4">
                                <h4 class="regular text-uppercase">@Lang('Sidebar left')</h4>
                                <a class="dropdown-item" target="_blank" href="blog-postsidebarleft">@Lang('Single post')</a>
                                <a class="dropdown-item" target="_blank" href="blog-gridsidebarleft">@Lang('Posts Grid')</a>
                            </div>
                            <div class="col me-4">
                                <h4 class="regular text-uppercase">@Lang('Sidebar right')</h4>
                                <a class="dropdown-item" target="_blank" href="blog-postsidebarright">@Lang('Single post')</a>
                                <a class="dropdown-item" target="_blank" href="blog-gridsidebarright">@Lang('Posts Grid')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-dropdown-section" data-dropdown="shop">
                <div class="st-dropdown-content">
                    <div class="st-dropdown-content-group">
                        <a class="dropdown-item mb-4" target="_blank" href="shop-index">
                            <div class="d-flex align-items-center">
                                <div class="bg-success text-contrast icon-md center-flex rounded-circle @rtl ms-2 @else me-2 @endrtl">
                                    <i class="fas fa-shopping-basket"></i>
                                </div>

                                <div class="flex-fill">
                                    <h3 class="link-title m-0">@Lang('Home')</h3>
                                    <p class="m-0 text-secondary">@Lang('Online store home with an outstanding UX')</p>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item" target="_blank" href="shop-cart">
                            <div class="d-flex align-items-center">
                                <div class="bg-info text-contrast icon-md center-flex rounded-circle @rtl ms-2 @else me-2 @endrtl">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>

                                <div class="flex-fill">
                                    <h3 class="link-title m-0">@Lang('Cart')</h3>
                                    <p class="m-0 text-secondary">@Lang('Online store shopping cart')</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="st-dropdown-content-group">
                        <h3 class="link-title">
                            <i class="fas fa-money-check-alt icon"></i> @Lang('Checkout')
                        </h3>

                        <div class="ms-5">
                            <x-utils.link class="dropdown-item text-secondary" target="_blank" :href="route('frontend.checkout.customer')">
                                @Lang('Customer')
                                <i class="fas fa-angle-right ms-2"></i>
                            </x-utils.link>
                            <x-utils.link class="dropdown-item text-secondary" target="_blank" :href="route('frontend.checkout.shipping')">
                                @Lang('Shipping Information')
                                <i class="fas fa-angle-right ms-2"></i>
                            </x-utils.link>
                            <x-utils.link class="dropdown-item text-secondary" target="_blank" :href="route('frontend.checkout.payment')">
                                @Lang('Payment Methods')
                                <i class="fas fa-angle-right ms-2"></i>
                            </x-utils.link>
                            <x-utils.link class="dropdown-item text-secondary" target="_blank" :href="route('frontend.checkout.confirmation')">
                                @Lang('Order Review')
                                <i class="fas fa-angle-right ms-2"></i>
                            </x-utils.link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
