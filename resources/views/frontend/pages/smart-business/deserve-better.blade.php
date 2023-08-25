<!-- You deserve better -->
<x-utils.container class="bg-primary" container-class="text-center">
    <div class="section-heading">
        <h2 class="bold text-contrast">You deserve better</h2>
        <p class="lead text-light">With DashCore you will not only get a beautiful HTML template tou showoff your
            web, but a
            complete starter kit to bring your application to life right away</p>
    </div>
</x-utils.container>

<!-- Powerful Tools -->
@php($cards = [
    [ "icon" => "paper-plane", "title" => "easy to integrate", "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium consectetur adipisicing elit." ],
    [ "icon" => "heart", "title" => "seamlessly solution",     "description" => "Ut enim ad minima veniam, quis nostrum voluptatem accusantium ullam corporis obcaecati optio quasi qui." ]
])
<x-utils.container container-class="mt-n7 mt-md-n10">
    <div class="row gap-y">
        @foreach ($cards as $card)
        <div class="col-md-6">
            <div class="rounded media bg-contrast shadow-lg p-4 lift-hover">
                <div class="shadow bg-primary text-contrast rounded-circle p-3 icon-xl mb-3 d-flex align-items-center justify-content-center" data-aos="zoom-in">
                    <i class="far fa-{{ $card['icon'] }} fa-2x"></i>
                </div>

                <h5 class="bold text-capitalize">{{ $card['title'] }}</h5>
                <p class="text-secondary mb-0">{{ $card['description'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</x-utils.container>
