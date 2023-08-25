<!-- ./Path to success -->
<section class="section path-success">
    <div class="shapes-container">
        <div class="shape-ring absolute @rtl left @else right @endrtl top" data-aos="fade-up"></div>
    </div>

    <div class="container bring-to-front">
        <div class="row g-4 align-items-center text-center @rtl text-lg-end @else text-lg-start @endrtl">
            <div class="col-md-6 col-lg-5 @rtl me-lg-auto @else ms-lg-auto @endrtl order-md-2">
                <div class="device-twin ms-auto align-items-center">
                    <div class="mockup absolute @rtl left @else right @endrtl" data-aos="@rtl fade-left @else fade-right @endrtl">
                        <div class="screen">
                            <img src="{{ asset("img/screens/app/1.png") }}" alt="...">
                        </div>
                        <span class="button"></span>
                    </div>

                    <div class="iphone-x front @rtl me-0 @else ms-0 @endrtl">
                        <div class="screen shadow-box">
                            <img src="{{ asset("img/screens/app/2.png") }}" alt="...">
                        </div>
                        <div class="notch"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center @rtl text-md-end @else text-md-start @endrtl">
                <div class="section-heading">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                        <i class="fas fa-trophy fa-2x text-primary @rtl ms-2 @else me-2 @endrtl"></i>
                        <span class="badge bg-contrast shadow-sm py-2 px-4 text-primary rounded-pill">We are your only</span>
                    </div>
                    <h2 class="bold">Path to Success</h2>
                </div>

                <ul class="list-unstyled">
                    @php ($features = [
                        [ "icon" => "mail", "title" => "Mail Management" ],
                        [ "icon" => "users", "title" => "Customers Tracking" ],
                        [ "icon" => "bar-chart", "title" => "Advanced Reporting" ]
                    ])
                    @foreach ($features as $feature)
                    <li class="d-flex flex-column flex-md-row align-items-start @if ($loop->index > 0) mt-5 @endif">
                        <div class="bg-light p-3 rounded d-flex align-items-center justify-content-center mx-auto @rtl ms @else me-md-3 @endrtl">
                            <i data-feather="{{ $feature['icon'] }}" width="36" height="36" class="stroke-primary"></i>
                        </div>

                        <div class="media-body mt-3 mt-md-0">
                            <h5 class="bold mt-0 mb-1">{{ $feature['title'] }}</h5>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut autem eum laudantium quas recusandae.
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
