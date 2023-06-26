@php
    $content = getContent('footer.content', true);
    $policyPages = getContent('policy_pages.element', false);
    $subscribe = getContent('subscribe.content', true);
    $contact = getContent('contact_us.content', true);
    $socialIcons = getContent('social_icon.element', false);
@endphp

<footer class="footer style-2">
    <div class="container">
        <div class="footer__main">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="info">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}" alt="" width="150"  />
                        </a>
                        <h6>Let's talk! </h6>
                        <ul class="list">
                            <li>
                                <p><a
                                        href="tel:{{ @$contact->data_values->number }}">{{ @$contact->data_values->number }}</a></p>
                            </li>
                            <li>
                                <p><a
                                        href="mailto:{{ @$contact->data_values->email }}">{{ @$contact->data_values->email }}</a></p>
                            </li>
                            <li>
                                <p>
                                    {{ __(@$contact->data_values->address) }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="widget">
                        <div class="widget-link">
                            <h6 class="title">@lang('Quick Links')</h6>
                            <ul>
                                <li>
                                <a href="{{ route('home') }}">@lang('Home')</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">@lang('Contact')</a>
                            </li>
                            @auth
                                <li>
                                    <a href="{{ route('user.home') }}">@lang('Dashboard')</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('user.login') }}">@lang('Sign In')</a>
                                </li>
                            @endauth
                            </ul>
                        </div>
                        <div class="widget-link s2">
                            <h6 class="title">@lang('Policies')</h6>
                            <ul>
                                 @foreach ($policyPages as $policyPage)
                                <li>
                                    <a
                                        href="{{ route('policy.pages', ['slug' => slug(@$policyPage->data_values->title), 'id' => @$policyPage->id]) }}">{{ __(@$policyPage->data_values->title) }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="footer-contact">
                        <h5>Newletters</h5>
                        <p>{{ __(@$subscribe->data_values->heading) }}</p>
                        <form id="subscribe-form">
                            <input type="email" required name="email"
                                placeholder="@lang('Your Email Address')" required="" />
                            <button type="submit" class="btn-action">Submit</button>
                        </form>
                        <ul class="list-social">
                            @foreach ($socialIcons as $socialIcon)
                                <li>
                                    <a href="{{ @$socialIcon->data_values->url }}" target="__blank">
                                        @php echo @$socialIcon->data_values->social_icon @endphp
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="footer__bottom">
            <p>
                @lang('Copyright') © {{ date('Y') }}. @lang('All Rights Reserved By ')<a href="{{ route('home') }}"
                class="text--base">{{ __($general->site_name) }}</a>
            </p>
        </div>
    </div>
</footer>
{{--
<footer class="footer-section">
    <div class="footer-top pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}">
                        </a>
                        <p> {{ __(@$content->data_values->heading) }}</p>
                        <ul class="post__share">
                            @foreach ($socialIcons as $socialIcon)
                                <li>
                                    <a href="{{ @$socialIcon->data_values->url }}" target="__blank">
                                        @php echo @$socialIcon->data_values->social_icon @endphp
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__widget">
                        <h5 class="title">@lang('Quick Links')</h5>
                        <ul class="widget__links">
                            <li>
                                <a href="{{ route('home') }}">@lang('Home')</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">@lang('Contact')</a>
                            </li>
                            @auth
                                <li>
                                    <a href="{{ route('user.home') }}">@lang('Dashboard')</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('user.login') }}">@lang('Sign In')</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer__widget">
                        <h5 class="title">@lang('Policies')</h5>
                        <ul class="widget__links">
                            @foreach ($policyPages as $policyPage)
                                <li>
                                    <a
                                        href="{{ route('policy.pages', ['slug' => slug(@$policyPage->data_values->title), 'id' => @$policyPage->id]) }}">{{ __(@$policyPage->data_values->title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__widget">
                        <h5 class="title">@lang('Our Newsletter')</h5>
                        <p>{{ __(@$subscribe->data_values->heading) }}</p>
                        <form class="subscribe-form" id="subscribe-form">
                            <input type="email" class="form-control subscribe--form--control" required name="email"
                                placeholder="@lang('Your Email Address')">
                            <button type="submit" class="cmn--btn">
                                <i class="lab la-telegram-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="footer-middle-wrapper">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="footer__contact__item">
                            <div class="footer__contact__thumb">
                                <i class="las la-envelope-open-text"></i>
                            </div>
                            <div class="footer__contact__content">
                                <h6 class="footer__contact__title">
                                    <a
                                        href="mailto:{{ @$contact->data_values->email }}">{{ @$contact->data_values->email }}</a>
                                </h6>
                                <span class="info">@lang('Email Address')</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__contact__item">
                            <div class="footer__contact__thumb">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="footer__contact__content">
                                <h6 class="footer__contact__title">
                                    <a
                                        href="tel:{{ @$contact->data_values->number }}">{{ @$contact->data_values->number }}</a>
                                </h6>
                                <span class="info">@lang('Call Us Now')</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__contact__item">
                            <div class="footer__contact__thumb">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                            <div class="footer__contact__content">
                                <h6 class="footer__contact__title">
                                    <a href="javascript:void(0)">{{ __(@$contact->data_values->address) }}</a>
                                </h6>
                                <span class="info">@lang('Our Address')</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            @lang('Copyright') © {{ date('Y') }}. @lang('All Rights Reserved By ')<a href="{{ route('home') }}"
                class="text--base">{{ __($general->site_name) }}</a>
        </div>
    </div>
</footer> --}}


@php
    $cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
@endphp
@if (@$cookie->data_values->status == Status::ENABLE && !\Cookie::get('gdpr_cookie'))
    <div class="cookies-card text-center hide">
        <div class="cookies-card__icon bg--base">
            <i class="las la-cookie-bite"></i>
        </div>
        <p class="mt-4 cookies-card__content">{{ $cookie->data_values->short_desc }} <a class="text--base"
                href="{{ route('cookie.policy') }}" target="_blank">@lang('learn more')</a></p>
        <div class="cookies-card__btn mt-4">
            <a href="javascript:void(0)" class="cmn--btn btn-block policy">@lang('Allow')</a>
        </div>
    </div>
@endif


@push('script')
    <script>
        "use strict";
        (function($) {
            $('#subscribe-form').on('submit', function(e) {
                event.preventDefault();
                let formData = new FormData($(this)[0]);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    url: "{{ route('subscribe') }}",
                    method: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(resp) {
                        if (resp.success) {
                            notify('success', resp.message);
                        } else {
                            notify('error', resp.message || resp.error);
                        }
                    }
                });
            });
        })(jQuery);
    </script>
@endpush
