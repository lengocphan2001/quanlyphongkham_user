@php($cards = [
    [ "img" => "send", "title" => "Send Payments", "animation" => "fade-up" ],
    [ "img" => "receive", "title" => "Receive Payment", "animation" => "fade-up" ]
])
<!-- ./Features - hover animated -->
<section class="section bg-light send-and-receive">
    <div class="container bring-to-front">
        <div class="row g-4">
            @foreach ($cards as $card)
            <div class="col-lg-6">
                <div class="rounded bg-contrast shadow-box image-background off-left-background lift-hover p-4 ps-6 ps-md-9 @rtl text-end @endrtl"
                    style="background-image: url({{ asset("img//payments/{$card['img']}.svg") }})">
                    <h3>{{ $card['title'] }}</h3>
                    <p class="text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error
                        eveniet nihil perspiciatis quia quidem quod ratione sapiente sint?</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
