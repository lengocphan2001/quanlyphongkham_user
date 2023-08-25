<!-- Delivering tool for success -->
@php($elements = [
    [ "title" => "Dashboard", "description" => "Adipisci atque, corporis dicta doloribus eius enim esse fugit iure non quaerat, quod.", "img" => "4" ],
    [ "title" => "Inbox", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.", "img" => "1" ],
    [ "title" => "Calendar", "description" => "Aliquid aspernatur, assumenda cumque esse, excepturi magni mollitia.", "img" => "2" ],
    [ "title" => "DataTables", "description" => "Accusamus cum debitis earum, ex illum impedit in incidunt ipsa.", "img" => "datatables" ]
] )

<x-utils.container class="bg-primary" container-class="bring-to-front">
    <div class="section-heading text-center text-contrast">
        <h2 class="bold text-contrast">Delivering tools for success</h2>
        <p class="lead text-contrast">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur
            dicta nulla officia quaerat ratione reiciendis soluta. Accusamus delectus dolore doloribus ducimus
        </p>
    </div>

    <div class="p-4 bg-contrast shadow-lg rounded">
        <div class="row align-items-center">
            <div class="col-md-5 @rtl ms-md-auto @else me-md-auto @endrtl">
                <nav id="sw-nav-shadow" class="nav flex-md-column nav-pills nav-fill nav-pills-light">
                    @foreach ($elements as $element)
                    <a class="nav-item @rtl text-end @else text-start @endrtl nav-link py-3 my-2 {{ activeClass($loop->index == 0) }}" href="javascript:;" data-step="{{ $loop->index + 1 }}">
                        <h6 class="bold">{{ $element['title'] }}</h6>
                        <p class="my-0 d-none d-md-block">{{ $element['description'] }}</p>
                    </a>
                    @endforeach
                </nav>
            </div>

            <div class="col-md-6">
                <div class="device browser shadow-sm">
                    <div class="screen">
                        <div class="swiper-container mt-4 mt-md-0" data-sw-navigation="#sw-nav-shadow">
                            <div class="swiper-wrapper">
                                @foreach ($elements as $element)
                                <div class="swiper-slide">
                                    <img src="{{ asset("img/screens/dash/{$element['img']}.png") }}"
                                        class="img-responsive rounded-bottom" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-utils.container>
