<!-- See why people love ShasCore -->
<section class="section why-people-love-us">
    <div class="shapes-container overflow-clear">
        <div class="shape shape-circle shape-circle-1">
            <div data-aos="fade-up-left"></div>
        </div>
        <div class="shape shape-circle shape-circle-2">
            <div data-aos="fade-up-right" data-aos-delay="200"></div>
        </div>

        <div class="shape pattern pattern-dots pattern-dots-1"></div>

        <div class="shape shape-triangle shape-animated">
            <div class="animation--rotating"></div>
        </div>
    </div>

    <div class="container">
        <div class="row gap-y">
            <div class="col-md-6 order-md-last">
                <div class="section-heading">
                    <p class="text-primary bold">Discover. Create. Love.</p>
                    <h2 class="bold heading-line">See why people love {{ appName() }}</h2>
                </div>

                <ul class="list-unstyled">
                    @php ($items = [
                        [ "icon" => "mail", "title" => "Mail Management", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut autem eum laudantium quas recusandae repellendus voluptate." ],
                        [ "icon" => "map", "title" => "Customers Tracking", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut autem eum laudantium quas recusandae repellendus voluptate." ],
                        [ "icon" => "bar-chart", "title" => "Advanced Reporting", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut autem eum laudantium quas recusandae repellendus voluptate." ]
                    ])
                    @foreach ($items as $item)
                    <li>
                        <div class="d-flex align-items-start pb-3">
                            <div class="bg-light p-3 rounded d-flex align-items-center justify-content-center @rtl ms-3 @else me-3 @endrtl">
                                <i data-feather="{{ $item['icon'] }}" class="stroke-primary"></i>
                            </div>
                            <div class="flex-fill">
                                <h5 class="bold">{{ $item['title'] }}</h5>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-6 position-relative">
                <div class="bubble bubble-left center-x-md">
                    <figure class="rounded overflow-hidden shadow" data-aos="zoom-in">
                        <img src="{{ asset("img/screens/app/pieces/4.png") }}" class="img-responsive" alt="">
                    </figure>
                </div>

                <figure class="bubble bubble-right rounded overflow-hidden shadow">
                    <img src="{{ asset("img/screens/app/pieces/5.png") }}" class="img-responsive" alt="" data-aos="fade-left">
                </figure>

                <div class="iphone-x">
                    <div class="screen shadow-box">
                        <img src="{{ asset("img/screens/app/6.png") }}" alt="...">
                    </div>
                    <div class="notch"></div>
                </div>
            </div>
        </div>
    </div>
</section>
