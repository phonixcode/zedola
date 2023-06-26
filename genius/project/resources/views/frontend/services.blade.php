@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- Hero Content -->
    <section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">@lang('Services')</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">@lang('Home')</a>
                    </li>
                    <li>
                        @lang('Services')
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Hero Content -->

    <section class="service-section pt-100 pb-50">
        <div class="container">
            <div class="row g-3 g-md-4 g-lg-3 g-xl-4">
                @if (count($services) == 0)
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">{{__('No Service Found')}}</h3>
                        </div>
                    </div>
                @else
                @foreach ($services as $key=>$service)
                    <div class="col-lg-3 col-sm-6">
                        <div class="feature-item">
                            <div class="feature-item__icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <div class="feature-item__cont">
                                <h5 class="feature-item__cont-title">{{ $service->title }}</h5>
                                <p>
                                    {{ $service->details }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="faqs-section pt-50 pb-100">
        <div class="container">
            <div class="row flex-wrap-reverse gy-5">
                @foreach ($faqs->chunk(4) as $faqChunks)
                <div class="col-lg-6">
                    <div class="accordion-wrapper">
                        @foreach ($faqChunks as $key=>$faq)
                            <div class="accordion-item {{ $loop->first ? 'active open' : ''}}">
                                <div class="accordion-title">
                                    <h6 class="title">
                                        {{ $faq->title }}
                                    </h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="accordion-content">
                                    @php
                                        echo $faq->details;
                                    @endphp
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    @include('partials.front.cta')



@endsection

@push('js')

@endpush
