@extends('layouts.front')

@push('css')

@endpush

@section('content')
<!-- Hero Content -->
<section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
    <div class="container">
        <div class="hero-content">
            <h2 class="hero-title">@lang('Create Account')</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ url('/') }}">@lang('Home')</a>
                </li>

                <li>
                    @lang('Create Account')
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Hero Content -->

<!-- Account Section -->
<section class="accounts-section">
    <div class="accounts-inner">
        <div class="accounts-inner__wrapper bg--section">
            <div class="accounts-left">
                <div class="accounts-left-content mw-100">
                    <a href="{{ url('/') }}" class="top--icon mb-4">
                        <img src="{{asset('assets/images/'.$gs->logo)}}" alt="logo">
                    </a>
                    <div class="sec-title">
                        <div class="title">@lang('Sign Up to') {{$gs->title}}</div>
                        <div class="seperator">&nbsp;</div>
                        <p>
                            {{ $ps->login_title}}
                        </p>
                    </div>

                    <form class="row gy-3" id="registerform" action="{{ route('user.register.submit') }}" method="POST">
                        @includeIf('includes.user.form-both')
                        @csrf
                        <div class="col-lg-6 col-lg-12 col-xl-6">
                            <label for="name" class="form-label">@lang('Your Name')</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="col-lg-6 col-lg-12 col-xl-6">
                            <label for="email" class="form-label">@lang('Your Email')</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="col-lg-6 col-lg-12 col-xl-6">
                            <label for="username" class="form-label">@lang('User Name')</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>

                        <div class="col-lg-6 col-lg-12 col-xl-6">
                            <label for="phone" class="form-label">@lang('Your Phone')</label>
                            <div class="input-group">
                                <select class="input-group-text m-0 form-label" for="phone" name="phone_code">
                                    @foreach ($countries as $key => $country)
                                        <option value="{{ $country->phone_code }}">{{ $country->phone_code }}</option>
                                    @endforeach

                                </select>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                        </div>


                        <div class="col-lg-6 col-lg-12 col-xl-6">
                            <label for="password" class="form-label">@lang('Your Password')</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="col-lg-6 col-lg-12 col-xl-6">
                            <label for="confirm-password" class="form-label">@lang('Confirm Password')</label>
                            <input type="password" name="password_confirmation" id="confirm-password" class="form-control">
                        </div>

                        <div class="col-12 mt-2">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input" checked>
                                    <label for="remember" class="form-check-label">@lang('I accept all') <a href="#0" class="text--base">@lang('Terms & Condition')</a></label>
                                </div>
                                <a href="{{ route('user.forgot') }}" class="text--base">@lang('Forget Password')</a>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" class="cmn--btn">@lang('Sign Up') <div class="spinner-border formSpin" role="status"></div></button>
                        </div>
                        <div class="col-sm-12">
                            @lang('Already Registered ?') <a href="{{ route('user.login') }}" class="text--base">@lang('Sign In')</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="accounts-right bg--blue">
                <img src="{{asset('assets/images/'.$ps->login_banner)}}" alt="images">
                <div class="sec-title mb-0 mt-4 centered">
                    <div class="title mb-4">@lang('Simple Trading')</div>
                    <h3>{{ $ps->login_title}}</h3>
                    <div class="seperator">&nbsp;</div>
                    <p>
                        @php
                            echo $ps->login_subtitle;
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Accounts Section -->

<!-- CTAs Section -->
@include('partials.front.cta')
<!-- CTAs Section -->

@endsection

@push('js')

@endpush
