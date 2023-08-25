@extends('mindmatrix.layout.pages', array('mainId' => 'blogs-page'))

@section('title', __('Blog'))

@section('content')
    <x-frontend.header
        title="The Blog"
        subtitle="Sleep Training and Parenting Tips"/>

    <x-utils.divider color="contrast"/>

{{--    @include("mindmatrix.blogs.components.latest-news")--}}

    @include ("mindmatrix.blogs.components.list", $posts)
@endsection

@section('footer')
    @include("mindmatrix.common.footer", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
