<!-- Implementation Counters -->
<section class="section image-background contain center-bottom" style="background-image: url({{ asset("img/shps/map-dots.svg") }})">
    <div class="container">
        <div class="text-center mb-6">
            <span class="badge bg-primary rounded-pill bold px-4 py-2 mb-4">1M+ Successfully Implementations</span>
            <h2 class="bold">Get the very best of us by doing the best of you</h2>
        </div>

        <div class="row gap-y">
            @php ($counters = [
                [ "value" => 273, "title" => "Components" ],
                [ "value" => 654, "title" => "Downloads" ],
                [ "value" => 7941, "title" => "Followers" ],
                [ "value" => 654, "title" => "New users" ]
            ])
            @foreach ($counters as $c)
            <div class="col-6 col-md-3">
                <p class="counter regular text-primary font-md display-md-4 my-0">{{ $c['value'] }}</p>
                <p class="text-secondary regular m-0">{{ $c['title'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-forms.post class="mt-5">
                    <div class="input-group-register">
                        <input type="text" class="border form-control rounded-pill" placeholder="Your Email">
                        <button type="submit" class="btn btn-primary more-link rounded-pill">
                            <i data-feather="mail" class="d-inline d-md-none"></i>
                            <span class="d-none d-md-inline">Subscribe Now</span>
                        </button>
                    </div>
                </x-forms.post>
            </div>
        </div>
    </div>
</section>
