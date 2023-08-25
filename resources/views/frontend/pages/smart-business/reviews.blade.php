@php($reviews = [
    [ "author" => "Jane Doe", "title" => [ "Social ", "Integration" ] ],
    [ "author" => "Lorem Team", "title" => [ "Design ", "Strategy" ] ],
    [ "author" => "Ipsum Team", "title" => [ "Save ", "Money" ] ],
    [ "author" => "Priscilla Campbell", "title" => [ "Business ", "Brain" ] ],
    [ "author" => "Edith Fisher", "title" => [ "Worldwide ", "Support" ] ],
    [ "author" => "Kenneth Reyes", "title" => [ "Social ", "Settings" ] ],
    [ "author" => "Daniel Hamilton", "title" => [ "Insightful", "Statistics" ] ]
])

<!-- User Reviews -->
<x-utils.container class="singl-testimonial" container-class="pt-8 bring-to-front">
    <div class="swiper-container pb-0 pb-lg-8" data-sw-nav-arrows=".reviews-nav">
        <div class="swiper-wrapper">
            @foreach ($reviews as $review)
            <div class="swiper-slide">
                <div class="row gap-y align-items-center">
                    <div class="col-lg-6">
                        <figure class="testimonial-img @rtl me-md-auto @else ms-md-auto @endrtl">
                            <img src="{{ asset("img/smart-business/reviews/" . ($loop->index + 1) . ".jpg") }}" class="img-responsive rounded shadow-lg" alt="...">
                        </figure>
                    </div>

                    <div class="col-lg-6 @rtl me-md-auto @else ms-md-auto @endrtl">
                        <div class="user-review text-center italic bg-primary text-contrast rounded shadow-lg py-5 px-4 px-lg-6">
                            <blockquote class="regular py-4">
                                <i class="fas fa-quote-left"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aspernatur,
                                autem deserunt distinctio dolores eius, exercitationem facilis inventore.
                                <i class="fas fa-quote-right"></i>
                            </blockquote>

                            <div class="author mt-4">
                                <p class="small">
                                    <span class="bold text-contrast">{{ $review['author'] }},</span> Web Developer
                                </p>

                                <img src="{{ asset("img/smart-business/reviews/signature.svg") }}"
                                    class="img-responsive signature mx-auto" alt="...">
                            </div>

                            <div class="shape-wrapper" data-aos="fade-up">
                                <svg class="svg-review-bottom" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 100 100" preserveAspectRatio="none">
                                    <path d="M95,0 Q90,90 0,100 L100,100 100,0 Z" fill="#4f2ca9"></path>
                                </svg>

                                <svg class="svg-review-bottom back" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 100 100" preserveAspectRatio="none">
                                    <path d="M95,0 Q90,90 0,100 L100,100 100,0 Z" fill="#8053ff"></path>
                                </svg>

                                <svg class="svg-review-bottom back left" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 100 100" preserveAspectRatio="none">
                                    <path d="M95,0 Q90,90 0,100 L100,100 100,0 Z" fill="#3f179a"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Add Arrows -->
        <div class="reviews-navigation">
            <div class="reviews-nav reviews-nav-prev btn btn-gray-light btn-rounded shadow-hover">
                <!-- <span class="text-uppercase small">Next</span> -->
                <i class="reviews-nav-icon fas fa-long-arrow-alt-left"></i>
            </div>

            <div class="reviews-nav reviews-nav-next btn btn-gray-light btn-rounded shadow-hover">
                <!-- <span class="text-uppercase small">Next</span> -->
                <i class="reviews-nav-icon fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
    </div>
</x-utils.container>
