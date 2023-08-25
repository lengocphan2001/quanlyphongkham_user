<x-utils.container>
    <div class="row gap-y">
        <div class="col-12">
            @foreach ($reviews as $review)
                @include("mindmatrix.reviews.components.review-item", array('review' => $review))
            @endforeach
        </div>
    </div>
</x-utils.container>
