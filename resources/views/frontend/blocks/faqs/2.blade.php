<!-- ./FAQs -->
<x-utils.container class="{{ $class ?? '' }}" container-class="{{ $containerClass ?? '' }}">
        <div class="row gap-y">
            <div class="col-md-4">
                <div class="light text-center text-md-end font-lg">
                    <p class="my-0">Frequently <span class="d-block font-md text-secondary">asked</span></p>
                    <p class="my-0 text-uppercase text-info mt-n3">questions</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="accordion accordion-clean accordion-collapsed" id="faqs-accordion-2">
                    @foreach ($faqs as $faq)
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="card-title btn" data-bs-toggle="collapse" data-bs-target="#v2-q{{ $loop->index }}">
                                <i class="fas fa-angle-down angle"></i>
                                {{ $faq['question'] }}
                            </a>
                        </div>

                        <div id="v2-q{{ $loop->index }}" class="collapse" data-bs-parent="#faqs-accordion-2">
                            <div class="card-body">{{ $faq['answer'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</x-utils.container>
