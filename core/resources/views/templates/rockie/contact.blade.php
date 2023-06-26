@extends($activeTemplate . 'layouts.frontend')
@section('content')
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="image">
                        <img src="{{ asset($activeTemplateTrue.'assets/images/layout/contact.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="contact-main">
                        <div class="block-text center">
                            <h3 class="heading">Leave a message for us</h3>
                            <p class="desc fs-20">Get in touch with {{ $general->siteName(__($pageTitle)) }}</p>
                        </div>

                        <form class="verify-gcaptcha row" method="post">
                            @csrf
                            <div class="form-group">
                                <label>@lang('Full Name')</label>
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required/>
                            </div>
                            <div class="form-group">
                                <label>@lang('E-Mail Address') </label>
                                <input type="email" class="form-control" placeholder="Enter mail" name="email"
                                value="{{ old('email') }}" required/>
                            </div>

                            <div class="form-group">
                                <label>@lang('Subject') </label>
                                <input type="text" class="form-control" placeholder="Enter mail" name="subject"
                                value="{{ old('subject') }}" required/>
                            </div>
                            <div class="form-group">
                                <label>@lang('Message') </label>
                                <textarea cols="30" rows="10" class="form-control" id="message" placeholder="Enter your message" name="message" required="">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="btn-action">@lang('Send Message')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="contact-section pt-120 pb-80 move--top">
        <div class="container">
            <div class="account-wrapper mw-100 bg--glass">
                <form class="verify-gcaptcha row" method="post" action="">
                    @csrf
                    <div class="cmn--form--group form-group col-md-6">
                        <label for="name" class="cmn--label text--white w-100">@lang('Full Name')</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text h-100">
                                    <i class="las la-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control cmn--form--control" name="name" required>
                        </div>
                    </div>
                    <div class="cmn--form--group form-group col-md-6">
                        <label for="email" class="cmn--label text--white w-100">@lang('E-Mail Address')</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text h-100">
                                    <i class="las la-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control cmn--form--control" name="email"
                                value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="cmn--form--group form-group col-md-12">
                        <div class="input-group">
                            <label class="cmn--label text--white w-100">@lang('Subject')</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text h-100">
                                    <i class="las la-language"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control cmn--form--control" name="subject"
                                value="{{ old('subject') }}" required>
                        </div>
                    </div>
                    <div class="cmn--form--group form-group col-md-12">
                        <div class="input-group">
                            <label for="message" class="cmn--label text--white w-100">@lang('Message')</label>
                            <textarea class="form-control cmn--form--control" id="message" name="message" required="">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <x-captcha hasIcon="true" />
                    <div class="cmn--form--group form-group col-md-12 text-end mb-0">
                        <button type="submit" class="cmn--btn btn-block">@lang('Send Message')</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
