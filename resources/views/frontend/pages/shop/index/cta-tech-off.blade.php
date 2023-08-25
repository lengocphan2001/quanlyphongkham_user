<!-- CTA Promo -->
<section class="bg-light edge bottom-right b-t">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center">
                <h2 class="mb-3">35% Off on Tech Gadgets</h2>
                <a href="javascript:;" class="btn btn-lg btn-primary">Shop Now</a>
            </div>

            <div class="col-md-6">
                <p class="mt-0 text-muted">All popular technology gadgets are up to 35% off. Shop now for your favorites tablets, smartphones, watches and more"</p>
                <nav class="nav">
                    @php ($links = ["Tablets", "Smartphones", "Watches"])
                    @foreach ($links as $link)
                        <a href="javascript:;" class="nav-link nav-item dotted px-0 mx-2{{ $loop->index == 1 ? " ms-0" : "" }}">
                            {{ $link }}
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>
</section>
