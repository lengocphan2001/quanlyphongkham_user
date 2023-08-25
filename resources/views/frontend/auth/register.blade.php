@extends('frontend.layouts.auth')

@section('title', __('Register'))

@section('content')
    <div class="mb-5">
        <h1 class="bold text-dark my-0">@lang('Register')</h1>
        <p class="text-muted mt-0 mb-4 mb-md-6">Already have an account?
            <x-utils.link :href="route('frontend.auth.login')" class="text-primary bold" :text="__('Login here')" />
        </p>
    </div>

    <x-forms.post :action="route('frontend.auth.register')">
        <div class="mb-4">
            <label for="name" class="form-label">@lang('Name')</label>
            <input type="text" name="name" id="name" class="form-control rounded-pill" value="{{ old('name') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="name" />
        </div>

        <div class="mb-4">
            <label for="name" class="form-label">@lang('Email Address')</label>
            <input type="email" name="email" id="email" class="form-control rounded-pill" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" maxlength="255" required autocomplete="email" />
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="name" class="form-label">@lang('Password')</label>
                <input type="password" name="password" id="password" class="form-control rounded-pill" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="new-password" />
            </div>

            <div class="col-md-6">
                <label for="name" class="form-label">@lang('Password Confirmation')</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control rounded-pill" placeholder="{{ __('Password Confirmation') }}" maxlength="100" required autocomplete="new-password" />
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between">
            <div>
                <input type="checkbox" name="terms" value="1" id="terms" class="form-check-input" required>

                <label class="form-check-label" for="terms">
                    @Lang('I agree to the') <x-utils.link :href="route('frontend.pages.terms')" :text="__('Terms & Conditions')" target="_blank" />
                </label>
            </div>

            <button class="btn btn-primary rounded-pill" type="submit">
                @lang('Register')
                <i class="fas fa-long-arrow-alt-right ms-2"></i>
            </button>
        </div>
    </x-forms.post>
@endsection
