@extends('frontend.layouts.auth')

@section('title', __('Login'))

@section('content')
    <div class="mb-5">
        <h1 class="bold text-dark my-0">@lang('Login')</h1>
        <p class="text-muted mt-0 mb-4 mb-md-6">@lang("Don't have an account yet?")
            <x-utils.link :href="route('frontend.auth.register')" class="text-primary bold" :text="__('Create it here')" />
        </p>
    </div>

    <x-forms.post :action="route('frontend.auth.login')">
        <div class="mb-4">
            <label for="email" class="form-label">@lang('Email Address')</label>
            <input type="email" name="email" id="email" class="form-control rounded-pill" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" maxlength="255" required autofocus autocomplete="email" />
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">@lang('Password')</label>
            <input type="password" name="password" id="password" class="form-control rounded-pill" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password" />
        </div>

        <div class="mb-4">
            <input name="remember" id="remember" class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }} />

            <label class="form-check-label" for="remember">
                @lang('Remember Me')
            </label>
        </div>

        @if(config('boilerplate.access.captcha.login'))
            <div class="row">
                <div class="col">
                    @captcha
                    <input type="hidden" name="captcha_status" value="true" />
                </div><!--col-->
            </div><!--row-->
        @endif

        <div class="d-flex align-items-center justify-content-between">
            <x-utils.link :href="route('frontend.auth.password.request')" class="small" :text="__('Forgot Your Password?')" />

            <button class="btn btn-primary rounded-pill px-4" type="submit">
                @lang('Login')
                <i class="fas fa-long-arrow-alt-right ms-2"></i>
            </button>
        </div>
    </x-forms.post>
@endsection
