@extends($activeTemplate.'layouts.auth')
@section('panel')
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href="{{route('home')}}"><img alt="" src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" width="200"></a>
        </div>
        <h4 class="auth-header">
            @lang('Sign In')
        </h4>
        <form class="account-form verify-gcaptcha" method="POST" action="{{ route('user.login')}}" onsubmit="return submitUserForm();">
            @csrf
            <div class="form-group">
                <label for="">@lang('Username')</label>
                <input class="form-control" placeholder="Enter your username" type="text" name="username" required value="{{old('username')}}">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group">
                <label for="">@lang('Password')</label>
                <input class="form-control" placeholder="Enter your password" type="password" name="password"  required>
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            
            <a href="{{route('user.password.request')}}" class="text--base">@lang('Forget Password')?</a>

            <div class="buttons-w mb-3">
                <button type="submit" class="cmn--btn btn btn-primary">@lang('Sign In')</button>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{old('remember') ? 'checked' : '' }}>
                        @lang('Remember Me')
                    </label>
                </div>
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
            <h4 class="text-center p-2">@lang('Sign In')</h4>
            <form class="account-form verify-gcaptcha" method="POST" action="{{ route('user.login')}}" onsubmit="return submitUserForm();">
                @csrf
                <div class="cmn--form--group form-group">
                    <label  class="cmn--label text--white">@lang('Username')</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="las la-user"></i>
                        </span>
                        <input type="text" class="form-control cmn--form--control" name="username" required value="{{old('username')}}">
                    </div>
                </div>
                <div class="cmn--form--group form-group">
                    <label class="cmn--label text--white">@lang('Password')</label>
                    <div class="input-group">
                        <span class="input-group-text"> <i class="las la-key"></i> </span>
                        <input type="password" class="form-control cmn--form--control" name="password"  required>
                    </div>
                </div>
                <x-captcha hasIcon="true" />
                <div class="cmn--form--group form-group">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">@lang('Remember Me')</label>
                </div>
                <div class="cmn--form--group form-group">
                    <button type="submit" class="cmn--btn btn-block">@lang('Sign In')</button>
                </div>
                <div class="cmn--form--group form-group">
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class=" text--white d-flex align-items-center">
                            <a href="{{route('user.password.request')}}" class="text--base">@lang('Forget Password')?</a>
                        </div>
                        <div class="text--white">
                            @lang("Don't have an account") ? <a href="{{route('user.register')}}" class="text--base">@lang("Signup")</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
@endsection
