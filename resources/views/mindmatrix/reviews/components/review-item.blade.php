<li class="d-flex flex-column flex-md-row align-items-start mt-5 review-item">
    <img src="{{$review->thumbnail}}" alt="thumb" class="review-item-image" />

    <div class="media-body mt-3 mt-md-0">
        <h5 class="bold mt-0 mb-1">{{$review->name}}'s story</h5>
        <p class="m-0">
            {{$review->content}}
        </p>
    </div>
</li>
