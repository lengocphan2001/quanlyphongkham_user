<!-- Register -->
<x-utils.container container-class="pt-0 bring-to-front mt-n9">
    <div class="row">
        <div class="col-md-8 mx-md-auto">
            <div class="card bg-dark shadow border-0">
                <div class="card-body py-4 px-5">
                    <div class="mb-4 text-center">
                        <i data-feather="mail" width="36" height="36"></i>
                        <p class="bold lead text-contrast mb-0">Be the first to get all our updates</p>
                        <div class="text-muted">We'll never share your email address</div>
                    </div>

                    <p class="handwritten highlight font-md mb-4">Why wait?</p>

                    <x-forms.post>
                        <div class="input-group-register py-4">
                            <input type="email" name="Subscribe[email]" class="form-control rounded-pill" placeholder="Enter your email" required>
                            <button class="btn btn-rounded btn-primary rounded-pill" type="submit">
                                <i data-feather="mail" class="d-inline d-md-none"></i>
                                <span class="d-none d-md-inline">Subscribe Now</span>
                            </button>
                        </div>
                    </x-forms.post>
                </div>
            </div>
        </div>
    </div>
</x-utils.container>
