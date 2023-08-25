<!-- ./Footer - Four Columns -->
<x-utils.container tag="footer" class="site-footer {{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
    <div class="row gap-y text-center @rtl text-md-end @else text-md-start @endrtl">
        <div class="col-md-4 @rtl ms-auto @else me-auto @endrtl">
            <img src="{{ asset('img/logo.png') }}" alt="" class="logo">

            <p class="font-medium text-dark">POH Baby, Fetal Education and Parenting</p>
        </div>

        <div class="col-6 col-md-2 text-start @rtl text-end @endrtl px-4">
            <h6 class="py-2 bold text-uppercase">@Lang('Courses')</h6>

            <nav class="nav flex-column">
                @foreach($courseMenu as $course)
                    <x-utils.link class="nav-item py-2" :text="__($course->name)" href="{{route('mindmatrix.courses.detail', array('alias' => $course->alias))}}" />
                @endforeach
            </nav>
        </div>

        <div class="col-6 col-md-2 text-start @rtl text-end @endrtl  px-4">
            <h6 class="py-2 bold text-uppercase">@Lang('Information')</h6>

            <nav class="nav flex-column">
{{--                <x-utils.link class="nav-item py-2" :text="__('Free knowledge')" />--}}
                <x-utils.link class="nav-item py-2" :text="__('Review')" />
                <x-utils.link class="nav-item py-2" href="/about-us" :text="__('About us')" />
            </nav>
        </div>

        <div class="col-6 col-md-2 text-start @rtl text-end @endrtl px-4">
            <h6 class="py-2 bold text-uppercase">@Lang('Contact us')</h6>

            <nav class="nav flex-column align-items-start">
                <x-utils.link class="nav-item py-2" href="mailto:support@mindmatrix.baby" :text="__('support@mindmatrix.baby')" />
            </nav>
        </div>
        <div class="col-6 col-md-2 text-start @rtl text-end @endrtl px-4">
            <h6 class="py-2 bold text-uppercase">@Lang('Legal')</h6>

            <nav class="nav flex-column">
                <x-utils.link class="nav-item py-2" :text="__('Terms & Conditions')" href="/blogs/terms-conditions-921591" />
                <x-utils.link class="nav-item py-2" :text="__('Privacy policy')" href="/blogs/privacy-policy-685835" />
            </nav>
        </div>
    </div>

    <hr class="mt-5">
    <div class="row small align-items-center">
        <div class="col-md-4">
            <p class="mt-2 mb-md-0 text-secondary text-center @rtl text-md-end @else text-md-start @endrtl">© POH Baby. @Lang('All Rights Reserved')</p>
        </div>

        <div class="col-md-8">
            <nav class="nav justify-content-center justify-content-md-end">
                @rtl
                    <x-utils.link href="{{$globalConfig['Facebook URL']}}" class="btn btn-circle btn-sm btn-secondary ms-3 op-4" icon="fab fa-facebook" />
                    <x-utils.link href="{{$globalConfig['Youtube URL']}}" class="btn btn-circle btn-sm btn-secondary ms-3 op-4" icon="fab fa-youtube" />
                    <x-utils.link href="{{$globalConfig['Instagram URL']}}" class="btn btn-circle btn-sm btn-secondary op-4" icon="fab fa-instagram" />
                @else
                    <x-utils.link href="{{$globalConfig['Facebook URL']}}" class="btn btn-circle btn-sm btn-secondary me-3 op-4" icon="fab fa-facebook" />
                    <x-utils.link href="{{$globalConfig['Youtube URL']}}" class="btn btn-circle btn-sm btn-secondary me-3 op-4" icon="fab fa-youtube" />
                    <x-utils.link href="{{$globalConfig['Instagram URL']}}" class="btn btn-circle btn-sm btn-secondary op-4" icon="fab fa-instagram" />
                @endrtl
            </nav>
        </div>
    </div>
</x-utils.container>
