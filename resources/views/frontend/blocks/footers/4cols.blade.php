<!-- ./Footer - Four Columns -->
<x-utils.container tag="footer" class="site-footer {{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <div class="row gap-y text-center @rtl text-md-end @else text-md-start @endrtl">
        <div class="col-md-4 @rtl ms-auto @else me-auto @endrtl">
            <img src="{{ asset('img/logo.png') }}" alt="" class="logo">

            <p>{{ appName() }}, @Lang("a carefully crafted and powerful HTML5 template, it's perfect to showcase your startup or software")</p>
        </div>

        <div class="col-md-2 @rtl text-end @endrtl">
            <h6 class="py-2 bold text-uppercase">@Lang('Company')</h6>

            <nav class="nav flex-column">
                <x-utils.link class="nav-item py-2" :text="__('About')" :href="route('frontend.pages.about')" />
                <x-utils.link class="nav-item py-2" :text="__('Services')" />
                <x-utils.link class="nav-item py-2" :text="__('Blog')" href="blog-grid" />
            </nav>
        </div>

        <div class="col-md-2 @rtl text-end @endrtl">
            <h6 class="py-2 bold text-uppercase">@Lang('Product')</h6>

            <nav class="nav flex-column">
                <x-utils.link class="nav-item py-2" :text="__('Features')" />
                <x-utils.link class="nav-item py-2" :text="__('API')" />
                <x-utils.link class="nav-item py-2" href="#" :text="__('Customers')" />
            </nav>
        </div>

        <div class="col-md-2 @rtl text-end @endrtl">
            <h6 class="py-2 bold text-uppercase">@Lang('Channels')</h6>

            <nav class="nav flex-column">
                <x-utils.link class="nav-item py-2" :text="__('Careers')" />
                <x-utils.link class="nav-item py-2" :text="__('Contact')" />
                <x-utils.link class="nav-item py-2" :text="__('Search')" />
            </nav>
        </div>
    </div>

    <hr class="mt-5">
    <div class="row small align-items-center">
        <div class="col-md-4">
            <p class="mt-2 mb-md-0 text-secondary text-center @rtl text-md-end @else text-md-start @endrtl">© 2021 5studios. @Lang('All Rights Reserved')</p>
        </div>

        <div class="col-md-8">
            <nav class="nav justify-content-center justify-content-md-end">
                @rtl
                    <x-utils.link class="btn btn-circle btn-sm btn-secondary ms-3 op-4" icon="fab fa-facebook" />
                    <x-utils.link class="btn btn-circle btn-sm btn-secondary ms-3 op-4" icon="fab fa-twitter" />
                    <x-utils.link class="btn btn-circle btn-sm btn-secondary op-4" icon="fab fa-instagram" />
                @else
                    <x-utils.link class="btn btn-circle btn-sm btn-secondary me-3 op-4" icon="fab fa-facebook" />
                    <x-utils.link class="btn btn-circle btn-sm btn-secondary me-3 op-4" icon="fab fa-twitter" />
                    <x-utils.link class="btn btn-circle btn-sm btn-secondary op-4" icon="fab fa-instagram" />
                @endrtl
            </nav>
        </div>
    </div>
</x-utils.container>
