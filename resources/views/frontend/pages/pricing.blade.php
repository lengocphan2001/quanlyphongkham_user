@extends('frontend.layouts.pages')

@section('title', __('Pricing plans'))

@php ($plans = [
    'plans' => [[
        "icon" => "box",
        "plan" => [
            "name" => "Personal",
            "price" => [ "monthly" => 0.99, "yearly" => 0.78 ],
            "description" => "For individuals & small business."
        ],
        "features" => [[
            "name" => "Cras justo odio",
            "class" => "strike-through"
            ], [
                "name" => "Dapibus ac facilisis in",
                "class" => "strike-through"
            ], [
                "name" => "Morbi leo risus",
                "class" => "strike-through"
            ], [
                "name" => "Porta ac consectetur ac"
            ], [
                "name" => "Vestibulum at eros"
            ]
        ]
    ], [
        "icon" => "download-cloud",
        "best" => true,
        "plan" => [
            "name" => "Business",
            "price" => [ "monthly" => 19.99, "yearly" => 15.98 ],
            "description" => "For growing companies."
        ],
        "features" => [[
                "name" => "Cras justo odio",
                "class" => "strike-through"
            ], [
                "name" => "Dapibus ac facilisis in",
                "class" => "strike-through"
            ], [
                "name" => "Morbi leo risus"
            ], [
                "name" => "Porta ac consectetur ac"
            ], [
                "name" => "Vestibulum at eros"
            ]
        ]
    ], [
        "icon" => "settings",
        "plan" => [
            "name" => "Enterprise",
            "price" => ["monthly" => 99.99, "yearly" => 75.99],
            "description" => "For enterprise teams."
        ],
        "features" => [[
                "name" => "Cras justo odio"
            ], [
                "name" => "Dapibus ac facilisis in"
            ], [
                "name" => "Morbi leo risus"
            ], [
                "name" => "Porta ac consectetur ac"
            ], [
                "name" => "Vestibulum at eros"
            ]
        ]
    ]]
])

@php($faqs = [
    [
        "question" => "What does the package include?",
        "answer" => "When you buy Dashcore, you get all you see in the demo but the images. We include SASS files for styling, complete JS files with comments, all HTML variations. Besides we include all mobile PSD mockups."
    ], [
        "question" => "What is the typical response time for a support question?",
        "answer" => "Since you report us a support question we try to make our best to find out what is going on, depending on the case it could take more or les time, however a standard time could be minutes or hours."
    ], [
        "question" => "What do I need to know to customize this template?",
        "answer" => "Our documentation give you all you need to customize your copy. However you will need some basic web design knowledge (HTML, Javascript and CSS)"
    ], [
        "question" => "Can I suggest a new feature?",
        "answer" => "Definitely <span class='bold'>Yes</span>, you can contact us to let us know your needs. If your suggestion represents any value to both we can include it as a part of the theme or you can request a custom build by an extra cost. Please note it could take some time in order for the feature to be implemented."
    ]
])

@section('content')
    <x-frontend.header
        title="Pricing plans"
        subtitle="Simple and affordable pricing plans. Try Dashcore with no obligation" />

    <x-utils.divider color="contrast" />

    @include("frontend.blocks.pricing.1", $plans)
    @include("frontend.pages.pricing.includes")

    @include("frontend.blocks.faqs.1", ["class" => "bg-light edge bottom-right border-top"] + $faqs)
    @include("frontend.blocks.cta.2", ["containerClass" => "bring-to-front"])
    @include("frontend.blocks.cta.1", ["class" => "bg-contrast edge top-left b-b", "containerClass" => "pt-5"])
@endsection
