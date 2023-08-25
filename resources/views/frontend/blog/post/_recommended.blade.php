@php ($posts = [
    [ "title" => "Discover the Beauty of DashCore", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, cumque dolores dolorum est.", "author" => "Jenny Oliver", "gravity" => 'north', "favorite" => [ "icon" => 'fas fa-heart text-danger', "count" => 347 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 73 ] ],
    [ "title" => "Extending DashCore Template", "description" => "Cupiditate debitis delectus dolor dolore doloremque, doloribus eveniet illo in labore neque numquam.", "author" => "Jennifer Wells", "gravity" => 'south', "favorite" => [ "icon" => 'far fa-heart', "count" => 415 ], "bookmark" => [ "icon" => 'fas fa-bookmark text-warning', "count" => 98 ] ],
    [ "title" => "5 Reasons to Choose DashCore", "description" => "Amet aperiam cumque delectus eligendi, esse, modi nemo nisi officiis rem repellat sed ulla.", "author" => "Roger Sanchez", "gravity" => 'east', "favorite" => [ "icon" => 'far fa-heart', "count" => 152 ], "bookmark" => [ "icon" => 'far fa-bookmark', "count" => 13 ] ]
])

<h4>Recommended Posts</h4>

<div class="row gap-y">
    @foreach ($posts as $post)
        <div class="col-md-6 col-lg-4">
            @include ("frontend.blog.grid._card", [ "post" => $post ])
        </div>
    @endforeach
</div>
