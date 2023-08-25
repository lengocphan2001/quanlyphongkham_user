@extends('frontend.layouts.auth')

@section('title', __('Reset Password'))

@section('content')
    <div class="mb-5">
        <h1 class="bold text-dark my-0">@lang('Reset Password')</h1>
        <p class="text-muted mt-0 mb-4 mb-md-6">Reset your Password by filling the info bellow or
            <x-utils.link :href="route('frontend.auth.login')" class="text-primary bold" :text="__('Login')" />
        </p>
    </div>

    <x-forms.post :action="route('frontend.auth.password.update')">
        <div class="mb-4">
            <label for="email" class="form-label">@lang('Email Address')</label>
            <input type="email" name="email" id="email" class="form-control rounded-pill" placeholder="{{ __('Email Address') }}" value="{{ $email ?? old('email') }}" maxlength="255" required autofocus autocomplete="email" />
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">@lang('Password')</label>
            <input type="password" id="password" name="password" class="form-control rounded-pill" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="password" />
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">@lang('Password Confirmation')</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control rounded-pill" placeholder="{{ __('Password Confirmation') }}" maxlength="100" required autocomplete="new-password" />
        </div>

        <div class="d-flex justify-content-end">
            <button class="btn btn-primary rounded-pill" type="submit">@lang('Reset Password')</button>
        </div>
    </x-forms.post>

@endsection
