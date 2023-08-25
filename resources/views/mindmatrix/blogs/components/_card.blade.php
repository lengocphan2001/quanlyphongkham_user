
<div class="card card-blog shadow-box shadow-hover border-0">
    <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $post->alias))}}">
        <img class="card-img-top img-responsive post-thumbnail" src="{{$post->thumbnail}}" alt="">
    </a>

    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
            <div class="author d-flex align-items-center">
                <img class="author-picture rounded-circle icon-md shadow-box"
                    src="{{ $post->author->avatar }}" alt="...">
                <p class="small bold my-0">{{ $post->author->name }}</p>
            </div>

            <nav class="nav">
                <a href="javascript:;" class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite">
                    <i class="fas fa-heart {{ $post->liked ? 'text-danger' : '' }} me-2"></i> <span class="small">{{ $post->like_count }}</span>
                </a>
                <a href="javascript:;" class="d-flex align-items-center text-secondary blog-action blog-bookmark">
                    <i class="fas fa-bookmark {{ $post->bookmarked ? 'text-warning' : '' }} me-2"></i> <span class="small">{{ $post->bookmark_count }}</span>
                </a>
            </nav>
        </div>

        <hr>

        <p class="card-title regular">
            <a href="{{route('mindmatrix.blogs.post-detail', array('alias' => $post->alias))}}">{{ $post->title }}</a>
        </p>

        <p class="card-text text-secondary">{{ trimString($post->short_desc, '...', 75) }}</p>

{{--        <p class="bold small text-secondary my-0 mt-auto"><small>{{$post->created_date}}</small></p>--}}
    </div>
</div>
