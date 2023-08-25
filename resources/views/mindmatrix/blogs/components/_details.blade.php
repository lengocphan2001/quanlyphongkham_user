@if (count($post->categories) > 0)
    <ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
        <li class="me-4"><i class="fas fa-folder-open text-secondary"></i></li>
        @foreach ($post->categories as $category)
            <li><a href="#" class="badge rounded-pill badge-outline-secondary me-2">{{$category->name}}</a></li>
            {{--                <a href="" class="btn btn-sm btn-info text-sm text-white"><span>{{$category->name}}</span></a>--}}
        @endforeach

    {{--    <li><a href="#" class="badge rounded-pill badge-outline-secondary me-2">development</a></li>--}}
    {{--    <li><a href="#" class="badge rounded-pill badge-outline-secondary me-2">software</a></li>--}}
    {{--    <li><a href="#" class="badge rounded-pill badge-outline-secondary">startup</a></li>--}}
    </ul>
@endif

<ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
{{--    <li class="me-4"><i class="fas fa-bookmark text-secondary"></i></li>--}}
    <li>
        <a href="#" class="btn btn-circle btn-sm btn-secondary me-2">
            <i class="fab fa-twitter"></i>
        </a>
    </li>
    <li>
        <a href="#" class="btn btn-circle btn-sm btn-secondary me-2">
            <i class="fab fa-facebook"></i>
        </a>
    </li>
    <li>
        <a href="#" class="btn btn-circle btn-sm btn-secondary">
            <i class="fab fa-instagram"></i>
        </a>
    </li>
</ul>
