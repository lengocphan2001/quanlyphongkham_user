@extends('frontend.layouts.pages', [
    "useDarkLinks" => true,
    "useOnlyDarkLogo" => true
])

@php ($reviews = [
    [
        "version" => "1.0.0",
        "date" => "Aug 26th, 2021",
        "description" => "Laravel version release"
    ]
])

@section('title', __('Changelog'))

@section('content')
<section class="section header page bg-light">
    <div class="container">
        <div class="card shadow bg-contrast reviews-wrapper">
            <header class="card-header p-5">
                <h2 class="display-4 display-lg-3">{{ appName() }}</h2>
                <p class="lead text-secondary mb-0">@lang('Changelog')</p>
            </header>

            @each ('frontend.pages.changelog.review', $reviews, 'review')
        </div>
    </div>
</section>
@endsection
