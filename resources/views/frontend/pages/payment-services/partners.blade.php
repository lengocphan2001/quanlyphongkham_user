<!-- Payment Services Partners -->
<x-utils.container class="partners">
    <div class="mb-5">
        <h2 class="heading-line">Trusted by 13,000+ <br>Business Leaders all Around the Globe</h2>
    </div>

    <div class="row">
    @for ($i = 1; $i < 14; $i++)
        <div class="col-4 col-md-2">
            <figure class="mockup" data-aos="fade-right" data-aos-delay="{{ $i * 100 }}">
                <img src="{{ asset("img/logos/{$i}.png") }}" class="img-responsive mx-auto @if($i <= 9) mb-5 @endif @if($i > 6 and $i <= 9) mb-md-0 @endif" alt="" style="max-height: 40px">
            </figure>
        </div>
    @endfor
    </div>
</x-utils.container>
