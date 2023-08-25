@extends('mindmatrix.layout.pages')

@section('title', __('Blog'))

@section('content')
    <x-frontend.header
        title="{{$post->title}}"
        subtitle="{{$post->short_desc}}" />

    <x-utils.divider color="contrast" />

    <section class="section blog single">
        <div class="container">
            <div class="row gap-y">
                <div class="col-lg-8 @rtl b-l @else b-r @endrtl">
                    <div class="blog-post post-content pb-5">
                        @include ("mindmatrix.blogs.components._post", $post)
                    </div>

{{--                    <div class="post-author py-5 b-t b-2x">--}}
{{--                        @include ("mindmatrix.blogs.components._author", $post)--}}
{{--                    </div>--}}

{{--                    <div class="post-details py-5 b-t">--}}
{{--                        @include ("mindmatrix.blogs.components._details", $post)--}}
{{--                    </div>--}}

                    <div class="post-comments b-t p-4">
                        @include ("mindmatrix.blogs.components._leave-comment", $post)
                    </div>
                </div>

                <div class="col-lg-4">
                    @include ("mindmatrix.blogs.components._sidebar", array('latestPosts' => $latestPosts, 'highlightCategories' => $highlightCategories))
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    @include("mindmatrix.common.footer", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
