<article class="review p-5 border-bottom">
    <header class="review-header mb-4">
        <h5 class="review-title mb-0 bold">@Lang('Version') {{ $review['version'] }} </h5>
        <div class="review-publish-date text-primary text-uppercase small">{{ $review['date'] }}</div>
    </header>

    <div class="review-content">
        @if ( isset($review['details']) )
            @foreach ($review['details'] as $name => $details)
                <p class="regular text-capitalize my-4">{{ $name }}:</p>
                <ul>
                    @foreach ($details as $detail)
                        <li>{{ $detail }}.</li>
                    @endforeach
                </ul>
            @endforeach
        @elseif ( isset($review['description']) )
            <p>{{ $review['description'] }}</p>
        @endif
    </div>
</article>
