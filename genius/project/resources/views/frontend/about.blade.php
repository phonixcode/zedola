@extends('layouts.front')

@push('css')

@endpush

@section('content')
<!-- Hero Content -->
<section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
    <div class="container">
        <div class="hero-content">
            <h2 class="hero-title">@lang('About US')</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('front.index')}}">@lang('Home')</a>
                </li>
                <li>
                    @lang('About US')
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Hero Content -->

<section class="about-section position-relative pt-100 pb-50 overflow-hidden">
    <div class="container">
        <div class="row gy-5 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="images-column">
                    <div class="inner-column">
                        <div class="icon-one fas fa-signal"></div>
                        <div class="icon-two"><i class="fas fa-cog"></i></div>
                        <div class="image wow fadeInLeft animated" data-wow-duration="1500ms">
                            <img src="{{ asset('assets/images/'.$ps->about_photo) }}" alt="">
                        </div>
                        <div class="image-two wow fadeInRight animated" data-wow-duration="1500ms">
                            <img src="{{ asset('assets/images/'.$ps->about_photo1) }}" alt="">
                        </div>
                        <div class="target-icon wow fadeInLeft animated" data-wow-duration="1500ms">
                            <img src="{{ asset('assets/images/'.$ps->about_photo3) }}" alt="about">
                        </div>
                        <div class="video-box-three">
                            <figure class="video-image">
                                <img class="transition-500ms" src="{{ asset('assets/images/'.$ps->about_photo2) }}" alt="about">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="sec-title wow fadeInUp" data-wow-duration="1500ms">
                        <div class="title">@lang('Who We are')</div>
                        <div class="seperator">&nbsp;</div>
                        <h2>{{ $ps->about_title }}<span></span></h2>
                    </div>
                    <div class=" wow fadeInRight" data-wow-duration="1500ms">
                        <p>
                            @php
                                echo $ps->about_details;
                            @endphp
                        </p>

                    </div>
                </div>
                <div class="btn__grp pt-3 wow fadeInLeft" data-wow-duration="1500ms">
                    <a href="{{ $ps->about_link }}" class="cmn--btn me-4">@lang('Buy Products')
                        <span class="round-effect">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </a>

                    <a href="{{ $ps->about_video_link }}" class="video--btn" data-lightbox="">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.front.counter')

@include('partials.front.blog')

@include('partials.front.partner')

@include('partials.front.cta')

@endsection

@push('js')

@endpush
