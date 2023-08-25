<div class="card card-blog shadow-box shadow-hover border-0">
    <a href="blog-post">
        <img class="card-img-top img-responsive" src="https://picsum.photos/350/200/?random&gravity={{ $post['gravity'] }}" alt="">
    </a>

    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
            <div class="author d-flex align-items-center">
                <img class="author-picture rounded-circle icon-md shadow-box"
                    src="{{ asset('img/avatar/user.png') }}" alt="...">
                <p class="small bold my-0">{{ $post['author'] }}</p>
            </div>

            <nav class="nav">
                <a href="javascript:;" class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite">
                    <i class="{{ $post['favorite']['icon'] }} me-2"></i> <span class="small">{{ $post['favorite']['count'] }}</span>
                </a>
                <a href="javascript:;" class="d-flex align-items-center text-secondary blog-action blog-bookmark">
                    <i class="{{ $post['bookmark']['icon'] }} me-2"></i> <span class="small">{{ $post['bookmark']['count'] }}</span>
                </a>
            </nav>
        </div>

        <hr>

        <p class="card-title regular">
            <a href="blog-post">{{ $post['title'] }}</a>
        </p>

        <p class="card-text text-secondary">{{ $post['description'] }}</p>

        <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
    </div>
</div>
