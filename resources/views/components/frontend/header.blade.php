@props([
    'title' => '',
    'subtitle' => '',
    'containerClass' => '',
])

<header class="page header text-contrast bg-primary">
    <div class="container {{ $containerClass ?? '' }}">
        <div class="row">
            <div class="col-lg-8 header-alignment">
                <h2 class="bold display-md-4 text-contrast {{ $subtitle ? "mb-4" : "" }}">
                    {{ strlen($title) ? $title : $slot }}
                </h2>

                @if ($subtitle)
                    <p class="text-contrast text-justify">{{ $subtitle }}</p>
                @endif
            </div>
        </div>
    </div>
</header>
