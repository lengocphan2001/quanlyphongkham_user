<section class="section built-tech">
    <div class="container">
        <div class="shapes-container">
            <div class="shape shape-circle" data-aos="fade-up">
                <div></div>
            </div>
        </div>

        <div class="row gap-y">
            <div class="col-md-6 col-lg-7">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 @rtl b-md-l @else b-md-r @endrtl">
                                <span class="badge bg-primary text-contrast rounded-pill bold px-4 py-2">Better tech</span>
                                <h2 class="mt-3"><span class="bold">Industry leading</span> technology stack</h2>
                                <p class="text-muted">{{ appName() }} tech stack gives you everything your business needs to
                                    build robust integrations</p>

                                <figure class="">
                                    <img src="{{ asset("img/logos/webpack.svg") }}"
                                        class="img-responsive mx-auto" alt="">
                                </figure>
                            </div>
                            <div class="col-md-4 d-flex flex-row flex-md-column justify-content-around">
                                @php($stacks = [
                                    [ "name" => "Javascript", "image" => "javascript" ],
                                    [ "name" => "Javascript", "image" => "es6" ],
                                    [ "name" => "Styles", "image" => "node-sass" ]
                                ])
                                @foreach ($stacks as $stack)
                                <div class="text-center">
                                    <figure class="mockup">
                                        <img src="{{ asset("img/logos/{$stack['image']}.svg") }}" alt="">
                                    </figure>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="shapes-container">
                    <div class="shape shape-ring shape-ring-1" data-aos="fade-up">
                        <div></div>
                    </div>
                </div>

                <div class="section-heading">
                    <figure class="mockup @rtl me-0 @else ms-0 @endrtl">
                        <img src="{{ asset("img/integration/tech-globe.svg") }}" alt="">
                    </figure>
                    <h2 class="my-3 font-md">
                        <span class="bold">A complete technology stack <br></span>awaits for you
                    </h2>

                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum blanditiis
                        pariatur excepturi provident molestias, ea non! Nesciunt impedit quo blanditiis.</p>
                </div>
                @php($items = [
                    [ "icon" => "activity", "title" => "Activity", "description" => "Get instant insight" ],
                    [ "icon" => "upload-cloud", "title" => "Deploy", "description" => "Deploy your project" ],
                    [ "icon" => "zap", "title" => "Fast", "description" => "Development lighting fast" ],
                    [ "icon" => "hexagon", "title" => "Technology", "description" => "Ultimate technology" ]
                ])
                <div class="row">
                    @foreach ($items as $item)
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start pb-3">
                            <div class="bg-light p-3 rounded d-flex align-items-center justify-content-center @rtl ms-3 @else me-3 @endrtl">
                                <i data-feather="{{ $item['icon'] }}" class="stroke-primary"></i>
                            </div>
                            <div class="flex-fill">
                                <h5>{{ $item['title'] }}</h5>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
