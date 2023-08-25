@extends('mindmatrix.layout.pages', array('mainId' => 'reviews-page'))

@section('title', __('Reviews'))

@section('content')
    <x-frontend.header
        title="POH Baby Reviews"
        subtitle="What parents say about us!"/>

    <x-utils.divider color="contrast"/>

    @include ("mindmatrix.reviews.components.list", array('reviews' => $reviews))
    @include("mindmatrix.common.download-apps")
@endsection

@section('footer')
    @include("mindmatrix.common.footer", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
