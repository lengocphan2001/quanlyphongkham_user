@extends('frontend.layouts.auth')

@section('title', __('Verify Your E-mail Address'))

@section('content')

<div class="mb-5">
    <h1 class="bold text-dark my-0">@lang('Verify Your E-mail Address')</h1>
    <div class="text-muted mt-0 mb-4 mb-md-6">
        @lang('Before proceeding, please check your email for a verification link.')
        @lang('If you did not receive the email')

        <x-forms.post :action="route('frontend.auth.verification.resend')" class="d-inline">
            <button class="btn btn-link p-0 m-0 align-baseline" type="submit">@lang('click here to request another').</button>
        </x-forms.post>
    </div>
</div>
@endsection
