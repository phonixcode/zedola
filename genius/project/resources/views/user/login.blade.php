@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- Hero Content -->
    <section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">@lang('Login')</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">@lang('Home')</a>
                    </li>
                    <li>
                        @lang('Login')
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
                    <div class="accounts-left-content">
                        <a href="index.html" class="top--icon mb-4">
                            <img src="{{asset('assets/images/'.$gs->logo)}}" alt="logo">
                        </a>
                        <div class="sec-title">
                            <div class="title">@lang('Sign in to') {{$gs->title}}</div>
                            <div class="seperator">&nbsp;</div>
                            <p>
                                {{ $ps->login_title}}
                            </p>
                        </div>
                        <form class="row gy-4" id="loginform" action="{{ route('user.login.submit') }}" method="POST">
                            @includeIf('includes.user.form-both')
                            @csrf
                            <div class="col-sm-12">
                                <label for="username" class="form-label">@lang('Your Email')</label>
                                <input type="email" name="email" id="username" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label for="password" class="form-label">@lang('Your Password')</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                            checked>
                                        <label for="remember" class="form-check-label">@lang('Remember Me')</label>
                                    </div>
                                    <a href="{{route('user.forgot')}}" class="text--base">@lang('Forget Password')</a>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="cmn--btn">@lang('Sign In') <div class="spinner-border formSpin" role="status"></div></button>
                            </div>
                            <div class="col-sm-12">
                                @lang('Not Registered Yet') ? <a href="{{route('user.register')}}" class="text--base">@lang('Create an
                                    Account')</a>
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

