<!-- ./Pricing Includes -->
@php($features = [
    [ "icon" => 'headphones', "title" => 'First class support' ],
    [ "icon" => 'box', "title" => 'Code snippets' ],
    [ "icon" => 'headphones', "title" => 'Full documentation' ],
    [ "icon" => 'lock', "title" => 'Total control of your code' ],
    [ "icon" => 'airplay', "title" => 'Responsive design' ],
    [ "icon" => 'monitor', "title" => 'Browser support' ]
])
<x-utils.container class="bg-darker" container-class="pt-15 pb-5">
    <div class="row g-4">
        @foreach ($features as $item)
            <div class="col-md-6">
                <div class="card bg-dark border-0 lift-hover">
                    <div class="card-body">
                        <div class="d-flex align-items-start pb-3">
                            <div class="bg-success p-3 rounded-circle center-flex @rtl ms-3 @else me-3 @endrtl">
                                <i data-feather="{{ $item['icon'] }}" class="stroke-contrast"></i>
                            </div>

                            <div class="flex-fill">
                                <h6 class="text-contrast">{{ $item['title'] }}</h6>
                                <p class="text-muted mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque beatae dicta dolores hic porro quam voluptatibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-utils.container>
