<section class="section">
<x-utils.container>
    <div class="section-heading">
        <div class="text-primary bold display-7">@Lang('All articles')</div>
    </div>
    <div class="row gap-y">
        <div class="col-12 b-r">
            <div class="row g-4">
                @foreach ($posts as $post)
                    <div class="col-12 col-md-3 col-lg-4">
                        @include ("mindmatrix.blogs.components._card", [ "post" => $post ])
                    </div>
                @endforeach
            </div>




            <nav class="nav justify-content-center mt-5">
                {{$posts->links()}}
{{--                <a class="btn btn-outline-primary btn-rounded me-5" href="javascript:;"><i class="fas fa-angle-left me-3"></i> Previous</a>--}}
{{--                <a class="btn btn-outline-primary btn-rounded" href="javascript:;">Next <i class="fas fa-angle-right ms-3"></i></a>--}}
            </nav>
        </div>
    </div>
</x-utils.container>
</section>
