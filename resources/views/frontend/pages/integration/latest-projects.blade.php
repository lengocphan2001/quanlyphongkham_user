<!-- Latest Project -->
<x-utils.container class="bg-contrast edge bottom-right latest-projects" container-class="bring-to-front">
    <div class="shadow-lg bg-darker rounded">
        <div class="rounded-bottom p-4">
            <h5 class="text-contrast bold mb-0">Latest projects</h5>
            <p class="text-muted my-0">
                Take a look at our latest projects, those customer have trust in our services
                to bring their business to the next level</p>
        </div>

        <div class="row g-0">
            @php($images = [
                [ "name" => "Image", "class" => " rounded-top-left" ],
                [ "name" => "Image" ],
                [ "name" => "Image", "class" => " rounded-top-right" ],
                [ "name" => "Image", "class" => " rounded-bottom-left" ],
                [ "name" => "Image" ],
                [ "name" => "Image", "class" => " rounded-bottom-right" ]
            ])

            @foreach ($images as $image)
            <div class="col-md-4">
                <div class="project-detail zoom-image overlay overlay-gray">
                    <x-utils.link>
                        <img src="https://picsum.photos/500/300?random={{ $loop->index }}&gravity=south" alt="" />
                        <div class="description bg-dark text-contrast p-1 p-md-2">
                            <p class="bold">Project name</p>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Consequatur ipsum voluptatem nobis labore sit</p>
                        </div>
                    </x-utils.link>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</x-utils.container>
