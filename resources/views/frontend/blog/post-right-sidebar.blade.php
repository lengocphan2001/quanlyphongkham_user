<section class="section blog single">
    <div class="container">
        <div class="row gap-y">
            <div class="col-lg-8 @rtl b-l @else b-r @endrtl">
                <div class="blog-post post-content pb-5">
                    @include ("frontend.blog.post._post")
                </div>

                <div class="post-author py-5 b-t b-2x">
                    @include ("frontend.blog.post._author")
                </div>

                <div class="post-details py-5 b-t">
                    @include ("frontend.blog.post._details")
                </div>

                <div class="post-comments b-t p-4">
                    @include ("frontend.blog.post._leave-comment")
                </div>
            </div>

            <div class="col-lg-4">
                @include ("frontend.blog.post._sidebar")
            </div>
        </div>
    </div>
</section>
