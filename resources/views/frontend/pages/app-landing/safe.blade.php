<section class="section app-safety">
    <div class="shapes-container">
        <div class="shape shape-circle">
            <div data-aos="fade-up-left"></div>
        </div>
        <div class="shape shape-triangle" data-aos="fade-up-right" data-aos-delay="200">
            <div></div>
        </div>
        <div class="shape pattern pattern-dots"></div>
    </div>

    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-md-5 order-md-last @rtl me-auto @else ms-auto @endrtl">
                <div class="section-heading">
                    <p class="text-primary bold">Safety first</p>
                    <h2 class="bold">You're in a secure company</h2>
                    <p class="lead text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, fugiat
                        suscipit eaque excepturi porro perspiciatis alias adipisci possimus. Ratione amet.</p>
                </div>

                @php ($items = [
                    [ "icon" => "activity", "title" => "Real time activity", "description" => "Get instant insight on what's happening in your business" ],
                    [ "icon" => "upload-cloud", "title" => "Instant deploy", "description" => "Deploy your project in a fraction of a second, no time!" ],
                    [ "icon" => "package", "title" => "Easy integrations", "description" => "Integrate our solution with other tech leaders in the industry" ]
                ])
                @foreach ($items as $item)
                <div class="d-flex align-items-start @if ($loop->index > 0) mt-5 @endif">
                    <div class="bg-light p-3 rounded d-flex align-items-center justify-content-center @rtl ms-3 @else me-3 @endrtl">
                        <i data-feather="{{ $item['icon'] }}" class="stroke-primary"></i>
                    </div>
                    <div class="flex-fill">
                        <h5 class="bold">{{ $item['title'] }}</h5>
                        <p class="m-0">{{ $item['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <div class="row gap-y align-items-center text-center">
                    @php ($cards = [
                        [ "class" => "mt-md-6" ],
                        [ "class" => "" ],
                        [ "class" => "mt-md-6" ],
                        [ "class" => "mx-auto mt-md-n4" ]
                    ])
                    @foreach ($cards as $card)
                    <div class="col-6 col-md-4 {{ $card['class'] }}">
                        <div class="figure shadow rounded overflow-hidden border">
                            <img class="img-responsive"
                                src="https://picsum.photos/300/600?random={{ $loop->index + 1 }}&gravity=south" alt="" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
