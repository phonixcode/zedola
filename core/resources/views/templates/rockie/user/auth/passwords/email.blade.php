@extends($activeTemplate.'layouts.auth')
@section('panel')
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href="{{route('home')}}"><img alt="" src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" width="200"></a>
        </div>
        <h4 class="auth-header">
            {{ __($pageTitle) }}
        </h4>

        <form method="POST" action="{{ route('user.password.email') }}">
            @csrf

            <p>@lang('To recover your account please provide your email or username to find your account.')</p>

            <div class="form-group">
                <label for="">@lang('Email Or Username')</label>
                <input class="form-control" placeholder="" type="text" name="value" value="{{ old('value') }}" required autofocus="off">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>

            <x-captcha hasIcon="true" />

            <div class="buttons-w mb-3">
                <button type="submit" class="cmn--btn btn btn-primary">@lang('Submit')</button>

            </div>
        </form>
    </div>
</div>

{{-- <div class="account-section pt-120 pb-120">
    <div class="container">
        <div class="account-wrapper bg--section">
            <div class="account-logo">
                <a href="{{route('home')}}">
                    <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}">
                </a>
            </div>
            <h4 class="text-center p-2">{{ __($pageTitle) }}</h4>
            <p>@lang('To recover your account please provide your email or username to find your account.')</p>
            <form method="POST" action="{{ route('user.password.email') }}">
                @csrf
                <div class="cmn--form--group form-group">
                    <label>@lang('Email Or Username')</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text h-100"> <i class="las la-user"></i> </span>
                        </div>
                        <input type="text" class="form-control cmn--form--control" name="value" value="{{ old('value') }}" required autofocus="off">
                    </div>
                </div>
                <x-captcha hasIcon="true" />

                <button type="submit" class="cmn--btn btn-block">@lang('Submit')</button>

            </form>
        </div>
    </div>
</div> --}}
@endsection
