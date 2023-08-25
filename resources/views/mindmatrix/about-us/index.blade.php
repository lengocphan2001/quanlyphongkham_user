@extends('mindmatrix.layout.pages', array('mainId' => 'about-us-page'))

@section('title', __('About us'))

@section('content')
    <x-frontend.header
        title="About us"
        subtitle="Baby sleep training And Early Education"/>

    <x-utils.divider color="contrast"/>

    <x-utils.container>

        <p>"Dear Mothers,</p>

        <p>When a precious baby enters this world, everything changes. Suddenly, the spotlight shifts to the tiny bundle of joy, and rightly so. But in the midst of all the excitement and celebration, it's easy to overlook the most important person in this equation—you, the mother. Yes, you deserve to be the center of attention too, not just for your incredible achievement of bringing life into this world, but for the remarkable woman you are.</p>

        <p>We understand that your well-being is crucial to the well-being of your child. A healthy and happy mother radiates an aura of love and nurturance that envelops her little one, creating an environment where they can thrive. When you're exhausted and burdened with stress, it becomes challenging to provide the best care for your precious baby. That's why it's essential to prioritize yourself, to find moments of respite and rejuvenation amidst the beautiful chaos of motherhood.</p>

        <p>You deserve to have time that is solely dedicated to your well-being, with no other reason than your own happiness. A time when you can relax, unwind, and nourish your spirit. However, it seems hard for every mom who is taking care of their newborns due to the short and restless sleep of the baby.</p>

        <div class="w-100 text-center">
            <img class="abt-us-img" src="/img/poh/about-us.png"/>
        </div>

        <p>At POH, we recognize the importance of supporting mothers in their journey of helping babies sleep on their own. We exist to lend a helping hand, ensuring that you can take care of your babies and let them sleep longer and deeper based on a healthy routine, while still having time for yourself. We provide sleep training courses, 1-1 sleep consultant services, and other resources that cater to your baby's feed and sleep demands, making your life as a mother more manageable and enjoyable.</p>

        <p>Because you deserve to savor every precious moment with your little ones without feeling overwhelmed. You deserve to relish in the laughter, the snuggles, and the joy that motherhood brings. And you deserve to do so with a heart full of contentment, knowing that you have taken care of yourself too.</p>

        <p>So, dear mothers, embrace the love you have for your children and channel some of it back into your own self-care. Sleep training allows you to pause, breathe, and find balance amidst the beautiful chaos of raising a child. You are incredible, strong, and resilient, and your well-being matters just as much as your baby's.</p>

        <p>Take care of yourself, dear mother, and watch as your love and care blossom into a beautiful journey shared with your little ones with our help.</p>

        <p>With warmest regards,</p>

        <p>POH Team"</p>


    </x-utils.container>
@endsection

@section('footer')
    @include("mindmatrix.common.footer", [ "class" => "border-top", "containerClass" => "pb-3" ])
@endsection
