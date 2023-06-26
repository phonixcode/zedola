@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- Hero Content -->
    <section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">@lang('Frequently Asked Questions')</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('front.index') }}">@lang('Home')</a>
                    </li>
                    <li>
                        @lang('FAQs')
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Hero Content -->


    <section class="faqs-section pt-100 pb-100">
        <div class="container">
            <div class="row flex-wrap-reverse gy-3">
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
