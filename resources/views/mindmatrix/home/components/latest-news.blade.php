<!-- Promos -->
<section class="section">
    <div class="container bring-to-front">
        <div class="section-heading">
            <div class="text-primary bold display-7">Latest News</div>
        </div>
        <div class="row g-4">
            @if(!empty($latestPosts[0]))
                <div class="col-lg-6 promo-column">
                    <div class="rounded promo-block zoom-background">
                        <div
                            class="absolute top right bottom left image-background cover overlay overlay-dark alpha-4 w-100 h-100"
                            style="background-image: url('{{ $latestPosts[0]->thumbnail }}')"></div>

                        <div class="content position-relative p-4">
                            <h4 class="text-white mt-0 bold">{{$latestPosts[0]->title}}</h4>
                            <p class="text-white mt-0">{{$latestPosts[0]->short_desc}}</p>
                            <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $latestPosts[0]->alias))}}" class="btn btn-contrast text-primary mt-5">@Lang('Read now')</a>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-lg-3 promo-column">

                @if(!empty($latestPosts[1]))
                    <div class="rounded promo-block zoom-background">
                        <div
                            class="absolute top right bottom left image-background cover overlay overlay-dark alpha-4 w-100 h-100 overlay"
                            style="background-image: url('{{ $latestPosts[1]->thumbnail }}')"></div>

                        <div class="content position-relative p-4">
                            <h6 class="text-white mt-0 bold line-clamp-2">{{ $latestPosts[1]->title }}</h6>
                            <p class="text-white mt-0 text-sm line-clamp-3">{{ $latestPosts[1]->short_desc }}</p>
                            <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $latestPosts[1]->alias))}}"
                               class="btn btn-contrast mt-4 text-primary">@Lang('Read now')</a>
                        </div>
                    </div>
                @endif
                @if(!empty($latestPosts[2]))
                    <div class="rounded promo-block zoom-background mt-4">
                        <div
                            class="absolute top right bottom left image-background cover overlay overlay-dark alpha-4 w-100 h-100 overlay"
                            style="background-image: url('{{ $latestPosts[2]->thumbnail }}')"></div>

                        <div class="content position-relative p-4">
                            <h6 class="text-white mt-0 bold line-clamp-2">{{ $latestPosts[2]->title }}</h6>
                            <p class="text-white mt-0 text-sm line-clamp-3">{{ $latestPosts[2]->short_desc }}</p>
                            <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $latestPosts[2]->alias))}}"
                               class="btn btn-contrast mt-4 text-primary">@Lang('Read now')</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-3 promo-column">
                @if(!empty($latestPosts[3]))
                    <div class="rounded promo-block zoom-background">
                        <div
                            class="absolute top right bottom left image-background cover overlay overlay-dark alpha-4 w-100 h-100 overlay"
                            style="background-image: url('{{ $latestPosts[3]->thumbnail }}')"></div>

                        <div class="content position-relative p-4">
                            <h6 class="text-white mt-0 bold line-clamp-2">{{ $latestPosts[3]->title }}</h6>
                            <p class="text-white mt-0 text-sm line-clamp-3">{{ $latestPosts[3]->short_desc }}</p>
                            <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $latestPosts[3]->alias))}}"
                               class="btn btn-contrast mt-4 text-primary">@Lang('Read now')</a>
                        </div>
                    </div>
                @endif
                @if(!empty($latestPosts[4]))
                    <div class="rounded promo-block zoom-background mt-4">
                        <div
                            class="absolute top right bottom left image-background cover overlay overlay-dark alpha-4 w-100 h-100 overlay"
                            style="background-image: url('{{ $latestPosts[4]->thumbnail }}')"></div>

                        <div class="content position-relative p-4">
                            <h6 class="text-white mt-0 bold line-clamp-2">{{ $latestPosts[4]->title }}</h6>
                            <p class="text-white mt-0 text-sm line-clamp-3">{{ $latestPosts[4]->short_desc }}</p>
                            <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $latestPosts[4]->alias))}}"
                               class="btn btn-contrast mt-4 text-primary">@Lang('Read now')</a>
                        </div>
                    </div>
                @endif
            </div>
                <div class="text-center mt-5">
                    <a class="btn btn-outline-primary" href="/blogs">
                        See all articles
                        <i class="fas fa-chevron-right ms-1"></i>
                    </a>
                </div>
        </div>
    </div>
</section>
