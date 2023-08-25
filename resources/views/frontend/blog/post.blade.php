<x-utils.container class="blog-post" id="blog-post">
    <div class="row">
        <div class="col-md-8 mx-auto">
            @include ("frontend.blog.post._post")
        </div>
    </div>
</x-utils.container>

<x-utils.container container-class="py-5 border-top b-2x">
    @include ("frontend.blog.post._author")
</x-utils.container>

<x-utils.container container-class="py-5 border-top">
    @include ("frontend.blog.post._details")
</x-utils.container>

<x-utils.container class="post-comments bg-light border-top">
    <div class="row">
        <div class="col-lg-8 mx-lg-auto">
            @include ("frontend.blog.post._comments")

            <hr class="my-5">

            @include ("frontend.blog.post._leave-comment")
        </div>
    </div>
</x-utils.container>

<x-utils.container class="bg-light border-top">
    @include ("frontend.blog.post._recommended")
</x-utils.container>
