@extends('mindmatrix.layout.pages', array('mainId' => 'courses-page'))

@section('title', __('Courses'))

@section('content')
    <x-frontend.header
        title="POH Baby Courses"
        subtitle="Our courses!"/>

    <x-utils.divider color="contrast"/>

    @include ("mindmatrix.courses.components.list")
    @include("mindmatrix.common.download-apps")
@endsection

@section('footer')
    @include("mindmatrix.common.footer", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
