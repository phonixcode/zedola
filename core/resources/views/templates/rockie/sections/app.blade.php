@php
    $content = getContent('app.content', true);
@endphp
<section class="download">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="download__content" data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="heading">{{ __(@$content->data_values->heading) }}</h3>
                    <p class="fs-20 decs">
                        {{ __(@$content->data_values->sub_heading) }}
                    </p>
                    <div class="group-button">
                        <a href="{{ __(@$content->data_values->button_one_url) }}" target="__blank"><img
                                src="{{ asset($activeTemplateTrue . 'assets/images/icon/googleplay.png') }}"
                                alt="" /></a>
                        <a href="{{ __(@$content->data_values->button_two_url) }}" target="__blank"><img
                                src="{{ asset($activeTemplateTrue . 'assets/images/icon/appstore.png') }}"
                                alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="download__image">
                    <div class="button">Scan To Download</div>
                    <img src="{{ asset($activeTemplateTrue . 'assets/images/layout/download.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="app-section overflow-hidden pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-between gy-5">
            <div class="col-lg-6 col-xl-5">
                <div class="app-thumb rtl">
                    <img class="w-100"
                        src="{{ getImage('assets/images/frontend/app/' . @$content->data_values->background_image, '735x640') }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="app-content">
                    <div class="section__header section__header__left">
                        <h3 class="title">{{ __(@$content->data_values->heading) }}</h3>
                        <p> {{ __(@$content->data_values->sub_heading) }}</p>
                    </div>
                    <div class="couple--buttons">
                        <a href="{{ __(@$content->data_values->button_one_url) }}" target="__blank">
                            <img src="{{ asset($activeTemplateTrue . 'images/app/google-play.svg') }}">
                        </a>
                        <a href="{{ __(@$content->data_values->button_two_url) }}" target="__blank">
                            <img src="{{ asset($activeTemplateTrue . 'images/app/app-store-btn.svg') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
