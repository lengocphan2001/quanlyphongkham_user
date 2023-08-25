@extends('mindmatrix.layout.pages', [
    "useOnlyDarkLogo" => true,
    "navPrimaryClass" => "stick-right",
    "mainId" => "home-page"
])

@section('title', __('Welcome'))

@section('content')
    @include("mindmatrix.home.components.heading")

    @include ("mindmatrix.home.components.courses")
    @include("mindmatrix.home.components.our-inspiration")
    @include("mindmatrix.home.components.latest-news")
    @include("mindmatrix.home.components.socials")
    @include ("mindmatrix.common.download-apps", [ "containerClass" => "pb-9" ])
@endsection

@section('footer')
    @include("mindmatrix.common.footer", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
