<!-- ./Counters -->
<x-utils.divider color="primary"/>
<x-utils.container class="counters bg-primary text-contrast" container-class=" pb-5 pb-md-0">
    <div class="row">
        <div class="col-4 d-none d-md-block">
            <img class="w-100" src="/img/poh/download-app.png"/>
        </div>
        <div class="col-12 col-md-8">
            <div class="section-heading text-center">
                <div class="bold text-contrast display-7">Get POH Baby App</div>
                <p class="text-justify">Experience the transformative power of peaceful nights for both you and your little one with the POH Baby app. Download the POH Baby app today and unlock a comprehensive sleep training solution that will bring serenity to your nights and enhance your bond with your baby.</p>
            </div>

            <nav class="nav flex-column flex-md-row justify-content-center align-items-center mt-5">
                <a href="{{$globalConfig['IOS App URL']}}"
                   class="nav-link py-3 px-4 btn btn-rounded btn-download btn-dark text-contrast me-0 @rtl ms-md-4 @else me-md-4 @endrtl mb-4 mb-md-0">
                    <img src="{{ asset("img/svg/apple.svg") }}" class="icon icon-md" alt="...">
                    <p class="ms-2">
                        <span class="small bold">Get it on the</span>
                        <span class="d-block bold text-contrast">App Store</span>
                    </p>
                </a>

                <a href="{{$globalConfig['Android App URL']}}" class="nav-link py-3 px-4 btn btn-rounded btn-download btn-light text-darker">
                    <img src="{{ asset("img/svg/google-play.svg") }}" class="icon icon-md" alt="...">
                    <p class="ms-2">
                        <span class="small bold">Download on</span>
                        <span class="d-block bold text-darker">Google Play</span>
                    </p>
                </a>
            </nav>
        </div>

    </div>

</x-utils.container>
