@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- Hero Content -->
    <section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">@lang('Forgot Password')</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">@lang('Home')</a>
                    </li>
                    <li>
                        @lang('Forgot Password')
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
                            <div class="title">@lang('Forgot password')</div>
                            <div class="seperator">&nbsp;</div>

                        </div>
                        <form class="row gy-4" id="forgotform" action="{{ route('user.forgot.submit') }}" method="POST">
                            @includeIf('includes.user.form-both')
                            @csrf
                            <div class="col-sm-12">
                                <label for="username" class="form-label">@lang('Your Email')</label>
                                <input type="email" name="email" id="username" class="form-control">
                            </div>

                            <div class="col-sm-12">
                                <button class="cmn--btn">@lang('Submit') <div class="spinner-border formSpin" role="status"></div></button>
                            </div>
                            <div class="col-sm-12">
                                <a href="{{ route('user.login') }}" class="text--base mt-1">@lang('Login Now?')</a>
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
