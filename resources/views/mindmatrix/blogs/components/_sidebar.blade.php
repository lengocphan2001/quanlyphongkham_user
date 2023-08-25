<h4 class="mb-3 bold">Search</h4>
<form class="form search-box">
    <div class="input-group">
        <input type="email" name="Search[q]" class="form-control @rtl rounded-circle-right @else rounded-circle-left @endrtl shadow-none" placeholder="Search form..." required>
        <button class="btn @rtl rounded-circle-left border-end-0 @else rounded-circle-right @endrtl btn-contrast border-input" type="submit" data-loading-text="Searching ...">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>

<h4 class="mt-5 mb-3 bold">Latest Posts</h4>
<ul class="list-unstyled">
    @foreach ($latestPosts as $post)
    <li class="d-flex align-items-center">
        <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $post->alias))}}" class="d-flex @rtl ms-3 @else me-3 @endrtl py-2">
            <img class="rounded-circle icon-xl shadow" src="{{$post->thumbnail_url}}" alt="{{$post->title}}">
        </a>

        <div class="flex-fill">
            <h6 class="semi-bold mt-0 mb-1">
                <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $post->alias))}}" class="text-dark">{{ $post->title }}</a>
            </h6>

            <span class="small text-muted"><i class="fas fa-calendar"></i> {{$post->created_date}}</span>
        </div>
    </li>
    @endforeach
</ul>

{{--<h4 class="mt-5 mb-3 bold">Read more on this topic</h4>--}}
{{--<ul class="list-unstyled">--}}
{{--    <li><a href="#">September <span class="badge badge-light badge-pill">76</span></a></li>--}}
{{--    <li><a href="#">August <span class="badge badge-light badge-pill">49</span></a></li>--}}
{{--    <li><a href="#">July <span class="badge badge-light badge-pill">24</span></a></li>--}}
{{--    <li><a href="#">June <span class="badge badge-light badge-pill">59</span></a></li>--}}
{{--    <li><a href="#">May <span class="badge badge-light badge-pill">36</span></a></li>--}}
{{--    <li><a href="#">April <span class="badge badge-light badge-pill">67</span></a></li>--}}
{{--</ul>--}}

<h4 class="mt-4 mb-3 bold">Popular categories</h4>
<div class="tags">
    <ul class="list-unstyled d-flex flex-wrap flex-row">
        @foreach($highlightCategories as $category)
            <li><a href="#" class="badge rounded-pill badge-outline-dark @rtl ms-2 @else me-2 @endrtl">{{$category->category->name}}</a></li>
        @endforeach
    </ul>
</div>
