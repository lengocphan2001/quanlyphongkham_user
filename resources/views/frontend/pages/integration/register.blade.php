<!-- Register -->
<x-utils.container container-class="bring-to-front">
    <div class="row gap-y align-items-center justify-content-between">
        <div class="col-md-6 order-md-last">
            <div class="mb-5">
                <p class="text-primary bold">Fill in the form</p>
                <h2 class="bold">Your success is our success</h2>

                <p class="lead text-muted">
                    If you're looking to be part of the most suitable template, just fill in the form, we're sure we
                    can build great things together
                </p>
            </div>

            <div class="row">
                @php($features = ["Service integrations", "Partners integration", "Right technology", "Get discovered"])

                @foreach ($features as $feature)
                <div class="col-md-6">
                    <div class="d-flex align-items-start mb-4">
                        <div class="bg-primary p-2 rounded-circle center-flex @rtl ms-3 @else me-3 @endrtl">
                            <i data-feather="check" class="stroke-contrast"></i>
                        </div>

                        <div class="flex-fill">
                            <p class="text-dark bold my-0">{{ $feature }}</p>
                            <div class="text-muted mt-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-6 col-lg-5" data-aos="@rtl fade-left @else fade-right @endrtl">
            <div class="card shadow-lg">
                <img src="https://picsum.photos/500/300?random=1&gravity=south" alt="..."
                    class="card-img-top">

                <div class="card-body">
                    <x-forms.post>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>

                        <div class="mb-5">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Company">
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-rounded btn-primary" type="submit">
                                Send my application
                            </button>
                        </div>
                    </x-forms.post>
                </div>
            </div>
        </div>
    </div>
</x-utils.container>
