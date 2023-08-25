<section class="section mt-n6">
    <div class="container pt-0">
        <div class="shadow bg-contrast p-4 rounded">
            <div class="row gap-y text-center">
                @php ($blocks = [
                    [ "title" => "Boostrap 5", "description" => "Powered with the world’s most popular front-end open source toolkit.", "icon" => "bootstrap", "class" => "bg-primary" ],
                    [ "title" => "Laravel", "description" => "Allows you to focus on creating something amazing while we sweat the details.", "icon" => "laravel", "class" => "bg-dark" ],
                    [ "title" => "Webpack", "description" => "Module Bundler for modern JavaScript applications.", "icon" => "webpack", "class" => "bg-info" ],
                ])

                @foreach ($blocks as $block)
                <div class="col-12 col-md-4 py-4 px-5 d-flex flex-column">
                    <div class="icon-shape mb-4">
                        <img src="{{ asset('img/shps/bullets/'. ($loop->index + 1) .'.svg') }}" class="shape shape-xxl icon-xxl" alt="">
                        <div class="rounded-circle {{ $block['class'] }} p-3 d-flex align-items-center justify-content-center shadow icon-xl center-xy">
                            <img src="{{ asset('img/demo/logo/'. $block['icon'] .'.svg') }}" class="img-responsive" alt="">
                        </div>
                    </div>

                    <h4 class="text-darker bold mt-3">{{ $block['title'] }}</h4>

                    <p class="mt-4">{{ $block['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
