@extends('frontend.layouts.pages')

@section('title', __('Blog'))

@section('content')
    @include ("frontend.blog.heading.fullscreen")

    @include ("frontend.blog.post")
@endsection

@section('footer')
    @include("frontend.blocks.footers.4cols", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
