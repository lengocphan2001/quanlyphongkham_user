@php ($useDarkLinks = $useDarkLinks ?? false)
@php ($fixedTop = $fixedTop ?? true)

<nav class="navigation main-nav navbar navbar-expand-md sidebar-left{{ $fixedTop ? ' fixed-top' : '' }}{{ $useDarkLinks ? ' dark-link' : '' }}">
    <div class="container">
        <button class="navbar-toggler" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="#main" class="navbar-brand">
            <img src="{{ asset('/img/logo.png') }}" alt="{{ appName() }}" class="logo logo-sticky">
        </a>

        <div class="collapse navbar-collapse ms-auto" id="main-navbar">
            <div class="sidebar-brand">
                <a href="{{ route( homeRoute() ) }}">
                    <img src="{{ asset('/img/logo.png') }}" alt="{{ appName() }}" class="logo">
                </a>
            </div>

            <ul class="nav navbar-nav ms-auto">
                @if(config('template.locale.status') && count(config('template.locale.languages')) > 1)
                    <li class="nav-item dropdown">
                        <x-utils.link
                            :text="__(getLocaleName( app()->getLocale() ))"
                            class="nav-link dropdown-toggle"
                            id="navbarDropdownLanguageLink"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <x-slot name="text">
                                @lang( getLocaleName(app()->getLocale()) )
                                <i class="fas fa-chevron-down ms-1"></i>
                            </x-slot>
                        </x-utils.link>

                        @include('includes.partials.lang')
                    </li>
                @endif
            </ul>

            <nav class="nav navbar-nav justify-content-center mt-4 mt-md-0 flex-row">
                @guest
                    <x-utils.link
                        :href="route('frontend.auth.login')"
                        :active="activeClass(Route::is('frontend.auth.login'))"
                        class="btn rounded-pill btn-outline me-3 px-3"
                    >
                        <x-slot name="text">
                            <i class="fas fa-sign-in-alt d-none d-md-inline me-md-0 me-lg-2"></i>
                            <span class="d-md-none d-lg-inline">Login</span>
                        </x-slot>
                    </x-utils.link>

                    @if (config('template.access.user.registration'))
                        <x-utils.link
                            :href="route('frontend.auth.register')"
                            :active="activeClass(Route::is('frontend.auth.register'))"
                            class="btn rounded-pill btn-solid px-3"
                        >
                            <x-slot name="text">
                                <i class="fas fa-user-plus d-none d-md-inline me-md-0 me-lg-2"></i>
                                <span class="d-md-none d-lg-inline">Signup</span>
                            </x-slot>
                        </x-utils.link>
                    @endif
                @else
                    <div class="nav-item dropdown">
                        @include('includes.partials.user')
                    </div>
                @endguest
            </nav>
        </div>
    </div>
</nav>
