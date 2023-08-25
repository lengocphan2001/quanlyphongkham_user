<!-- ./Tons of benefits -->
<section class="section overflow-hidden">
    <div class="container bring-to-front">
        <div class="row gap-y align-items-center">
            <div class="col-md-6 col-lg-5 @rtl ms-lg-auto @else me-lg-auto @endrtl position-relative">
                <div class="center-xy op-1">
                    <div class="shape shape-background rounded-circle shadow-lg bg-info" style="width: 600px; height: 600px;" data-aos="zoom-in"></div>
                </div>

                <div class="device-twin mx-auto align-items-center">
                    <div class="mockup absolute" data-aos="@rtl fade-right @else fade-left @endrtl">
                        <div class="screen">
                            <img src="{{ asset('img/screens/app/1.png') }}" alt="...">
                        </div>
                        <span class="button"></span>
                    </div>

                    <div class="iphone-x front @rtl ms-0 @else me-0 @endrtl">
                        <div class="screen shadow-box">
                            <img src="{{ asset("img/screens/app/2.png") }}" alt="...">
                        </div>
                        <div class="notch"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center @rtl text-md-end @else text-md-start @endrtl">
                <div class="section-heading">
                    <i class="far fa-check-circle fa-2x text-danger mb-3"></i>
                    <h2 class="bold">Ton of benefits</h2>
                    <p class="lead">{{ appName() }} will maximize your time and money</p>
                </div>

                <div class="row gap-y">
                    @php($boxes = [
                        [ "icon" => "code", "title" => "Development" ],
                        [ "icon" => "star", "title" => "Web Design" ],
                        [ "icon" => "wind", "title" => "Do Magic" ],
                        [ "icon" => "clock", "title" => "Save Time" ],
                    ])
                    @foreach ($boxes as $box)
                    <div class="col-6">
                        <div class="d-flex flex-column flex-lg-row align-items-center align-items-md-start">
                            <div class="mx-auto ms-md-0 @rtl ms-md-3 @else me-md-3 @endrtl">
                                <i data-feather="{{ $box['icon'] }}" width="36" height="36" class="stroke-primary"></i>
                            </div>
                            <div class="flex-fill mt-3 mt-md-0">
                                <h5 class="bold mt-0 mb-1">{{ $box['title'] }}</h5>
                                <p class="m-0 d-md-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
