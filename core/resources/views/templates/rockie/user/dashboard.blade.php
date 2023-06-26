@extends($activeTemplate . 'layouts.master')
@section('content')
    @php
        $kyc = getContent('kyc_content.content', true);
        $elements = getContent('blog.element', limit: 2);
    @endphp
    {{-- <div class="container">
    <div class="row justify-content-center gy-4">
        @if ($user->kv == 0)
        <div class="col-12">
            <div class="alert bg--body mb-0">
                <h4 class="alert-heading text--danger">@lang('KYC Verification Required')</h4>
                <hr>
                <p class="mb-0">
                    {{ __(@$kyc->data_values->unverified_content) }}
                    <a href="{{ route('user.kyc.form') }}" class="text--base fw-bold">@lang('Click Here to Verify')</a>
                </p>
            </div>
        </div>
        @endif
        @if ($user->kv == 2)
        <div class="col-12">
            <div class="alert bg--body mb-0">
                <h4 class="alert-heading text--warning">@lang('KYC Verification Pending')</h4>
                <hr>
                <p class="mb-0">
                    {{ __(@$kyc->data_values->pending_content) }}
                    <a href="{{ route('user.kyc.data') }}" class="text--base fw-bold">@lang('See KYC Data')</a>
                </p>
            </div>
        </div>
        @endif
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb"> <i class="las la-dollar-sign"></i> </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$general->cur_sym}}{{showAmount($user->balance)}}</h4>
                    <span class="subtitle d-block">@lang('Current Balance')</span>
                    <a href="{{route('user.transactions')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb">
                    <i class="las la-wallet"></i>
                </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$general->cur_sym}}{{showAmount($widget['deposit_amount'])}}</h4>
                    <span class="subtitle d-block">@lang('Total Deposit')</span>
                    <a href="{{route('user.deposit.history')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb">
                    <i class="las la-credit-card"></i>
                </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$general->cur_sym}}{{showAmount($widget['withdraw_amount'])}}</h4>
                    <span class="subtitle d-block">@lang('Total Withdraw')</span>
                    <a href="{{route('user.withdraw.history')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb">
                    <i class="las la-money-bill"></i>
                </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$widget['transaction']}}</h4>
                    <span class="subtitle d-block">@lang('Total Transactions')</span>
                    <a href="{{route('user.transactions')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb">
                    <i class="las la-gamepad"></i>
                </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$widget['total_trade']}}</h4>
                    <span class="subtitle d-block">@lang('Total Trade')</span>
                    <a href="{{route('user.trade.log')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb">
                    <i class="las la-trophy"></i>
                </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$widget['trade_win']}}</h4>
                    <span class="subtitle d-block">@lang('Total Wining Trade')</span>
                    <a href="{{route('user.trade.wining.log')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb">
                    <i class="las la-slash"></i>
                </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$widget['trade_loss']}}</h4>
                    <span class="subtitle d-block">@lang('Total Losing Trade')</span>
                    <a href="{{route('user.trade.losing.log')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="dashboard__item">
                <div class="dashboard__thumb">
                    <i class="las la-pencil-ruler"></i>
                </div>
                <div class="dashboard__content">
                    <h4 class="dashboard__title">{{$widget['trade_draw']}}</h4>
                    <span class="subtitle d-block">@lang('Total Draw Trade')</span>
                    <a href="{{route('user.trade.draw.log')}}" class="btn btn--sm btn--base">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="input-group">
                <span class="input-group-text bg--base text-white border-0">@lang('My Referral Link')</span>
                <input type="text" name="key" value="{{ route('home')}}?reference={{ $user->username }}" class="form-control cmn--form--control bg--section referralURL" readonly>
                <span class="input-group-text bg--base cursor-pointer text-white border-0" id="copyBoard">
                    <i class="lar la-copy"></i>
                </span>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table cmn--table">
                    <thead>
                        <tr>
                            <th>@lang('S.N.')</th>
                            <th>@lang('Crypto')</th>
                            <th>@lang('Amount')</th>
                            <th>@lang('High/Low')</th>
                            <th>@lang('Result')</th>
                            <th>@lang('Status')</th>
                            <th>@lang('Date')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($tradeLogs as $tradeLog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div>
                                    <span class="d-block">{{__(@$tradeLog->crypto->symbol)}}</span>
                                    <small>{{__(@$tradeLog->crypto->name)}}</small>
                                </div>
                            </td>
                            <td>{{showAmount($tradeLog->amount)}} {{__($general->cur_text)}}</td>
                            <td> @php echo $tradeLog->highLowBadge;@endphp</td>
                            <td> @php echo $tradeLog->resultStatus;@endphp</td>
                            <td> @php echo $tradeLog->statusBadge; @endphp </td>
                            <td>{{showDateTime($tradeLog->created_at,'d M, Y h:i:s')}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%" class="text-center text-muted">{{ __($emptyMessage) }}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}

    <div class="content-i">
        <div class="content-box">

            <div class="row">
                <div class="col-sm-12 col-lg-8 col-xxl-6">
                    <div class="element-balances justify-content-between mobile-full-width">
                        <div class="balance balance-v2">
                            <div class="balance-title">
                                Your Balance
                            </div>
                            <div class="balance-value">
                                <span class="d-xxl-none">{{ $general->cur_sym }}{{ showAmount($user->balance) }}</span>
                                <span
                                    class="d-none d-xxl-inline-block">{{ $general->cur_sym }}{{ showAmount($user->balance) }}</span>
                            </div>
                        </div>

                    </div>
                    <div class="element-wrapper pb-4 mb-4 border-bottom">
                        <div class="element-box-tp">
                            <a class="btn btn-primary" href="{{ route('user.deposit.index') }}">
                                <i class="os-icon os-icon-refresh-ccw"></i>
                                <span>Deposit Money</span>
                            </a>
                            <a class="btn btn-grey" href="{{ route('user.withdraw') }}">
                                <i class="os-icon os-icon-log-out"></i>
                                <span>Withdraw</span>
                            </a>
                            <a class="btn btn-grey d-none d-sm-inline-block" href="{{ route('user.trade.index') }}">
                                <i class="os-icon os-icon-plus-circle"></i>
                                <span>Trade </span>
                            </a>
                        </div>
                    </div>
                    <div class="element-wrapper compact">
                        <div class="element-box-tp">
                            <div class="element-actions d-none d-sm-block">
                                <form class="form-inline justify-content-sm-end">
                                    <label class="smaller" for="">Show Period:</label><select
                                        class="form-control form-control-sm form-control-faded">
                                        <option selected="true">
                                            Last 30 days
                                        </option>
                                        <option>
                                            This Week
                                        </option>
                                        <option>
                                            This Month
                                        </option>
                                        <option>
                                            Today
                                        </option>
                                    </select>
                                </form>
                            </div>
                            <h6 class="element-box-header">
                                Balance History
                            </h6>
                            <div class="el-chart-w">
                                <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45" height="50"
                                    id="liteLineChartV3" width="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 d-none d-xxl-block">

                </div>
                <div class="col-sm-4 d-none d-lg-block">
                    <div class="cta-w cta-with-media purple">
                        <div class="cta-content">
                            <h3 class="cta-header">
                                Download our app on Google Play Store
                            </h3>
                            <a class="store-google-btn" href="#"><img alt=""
                                    src="{{ asset($activeTemplateTrue . 'dash/img/market-google-play.png') }}"></a>
                        </div>
                        <div class="cta-media">
                            <img alt="" src="{{ asset($activeTemplateTrue . 'dash/img/phone1.png') }}">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pt-2">
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller"
                        href="{{ route('user.transactions') }}">
                        <div class="label">
                            @lang('Current Balance')
                        </div>
                        <div class="value mt-3">
                            {{ $general->cur_sym }}{{ showAmount($user->balance) }}
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller"
                        href="{{ route('user.deposit.history') }}">
                        <div class="label">
                            @lang('Total Deposit')
                        </div>
                        <div class="value text-danger mt-3">
                            {{ $general->cur_sym }}{{ showAmount($widget['deposit_amount']) }}
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller"
                        href="{{ route('user.withdraw.history') }}">
                        <div class="label">
                            @lang('Total Withdraw')
                        </div>
                        <div class="value mt-3">
                            {{ $general->cur_sym }}{{ showAmount($widget['withdraw_amount']) }}
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller"
                        href="{{ route('user.transactions') }}">
                        <div class="label">
                            @lang('Total Transactions')
                        </div>
                        <div class="value mt-3">
                            {{ $widget['transaction'] }}
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller" href="{{ route('user.trade.log') }}">
                        <div class="label">
                            @lang('Total Trade')
                        </div>
                        <div class="value mt-3">
                            {{ $widget['total_trade'] }}
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller"
                        href="{{ route('user.trade.wining.log') }}">
                        <div class="label">
                            @lang('Total Wining Trade')
                        </div>
                        <div class="value mt-3">
                            {{ $widget['trade_win'] }}
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller"
                        href="{{ route('user.trade.losing.log') }}">
                        <div class="label">
                            @lang('Total Losing Trade')
                        </div>
                        <div class="value text-danger mt-3">
                            {{ $widget['trade_loss'] }}
                        </div>

                    </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                    <a class="element-box el-tablo centered trend-in-corner smaller"
                        href="{{ route('user.trade.draw.log') }}">
                        <div class="label">
                            @lang('Total Draw Trade')
                        </div>
                        <div class="value mt-3">
                            {{ $widget['trade_draw'] }}
                        </div>

                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="cta-w orange text-center mt-2">
                        <div class="cta-content extra-padded" style="padding: 5% 9%;">
                            <div class="highlight-header">
                                Bonus
                            </div>
                            <h5 class="cta-header">
                                Invite your friends and make money with referrals
                            </h5>
                            <form action="">
                                <div class="newsletter-field-w">
                                    <input value="{{ route('home') }}?reference={{ $user->username }}" type="text"
                                        readonly class="referralURL">
                                    <button class="btn btn-sm btn-primary" id="copyBoard"><i
                                            class="os-icon os-icon-copy"></i></button>
                                </div>
                                <div class="mt-3" style="display: flex; justify-content: center;">
                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style"
                                        data-a2a-url="{{ route('home') }}?reference={{ $user->username }}">
                                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_twitter"></a>
                                        <a class="a2a_button_email"></a>
                                    </div>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">

                    <div class="row">

                        <div class="col-12 col-xxl-8">
                            <div class="element-wrapper compact pt-4">

                                <h6 class="element-header">
                                    Latest Blog
                                </h6>
                                <div class="element-box-tp">
                                    @foreach ($elements as $element)
                                        <div class="post-box">
                                            <div class="post-media"
                                                style="background-image: url({{ getImage('assets/images/frontend/blog/thumb_' . @$element->data_values->image, '430x210') }})">
                                            </div>
                                            <div class="post-content">
                                                <h6 class="post-title">
                                                    {{ __(@$element->data_values->title) }}
                                                </h6>
                                                <div class="post-text">
                                                    {{ strLimit(strip_tags(@$element->data_values->description), 120) }}
                                                </div>
                                                <div class="post-foot">
                                                    <div class="post-tags">
                                                        {{-- <div class="badge badge-primary">
                                                        BTC
                                                    </div>
                                                    <div class="badge badge-primary">
                                                        Crypto
                                                    </div> --}}
                                                    </div>
                                                    <a class="post-link"
                                                        href="{{ route('blog.details', [$element->id, slug(@$element->data_values->title)]) }}"><span>Read
                                                            Full
                                                            Story</span><i class="os-icon os-icon-arrow-right7"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <a class="centered-load-more-link" href="{{ route('blog') }}"><span>Read Our
                                            Blog</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-sm-none d-xxl-block col-xxl-4">
                            <div class="cta-w orange text-center">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="element-wrapper compact pt-4">

                        <h6 class="element-header">
                            Transactions
                        </h6>
                        <div class="element-box-tp">
                            <table class="table table-clean">

                                @forelse($tradeLogs as $tradeLog)
                                    <tr>
                                        <td>
                                            <div class="value">
                                                {{ __(@$tradeLog->crypto->symbol) }}
                                            </div>
                                            <span class="sub-value">{{ __(@$tradeLog->crypto->name) }}</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="value">
                                                {{ showAmount($tradeLog->amount) }} {{ __($general->cur_text) }}
                                            </div>
                                            <span
                                                class="sub-value">{{ showDateTime($tradeLog->created_at, 'd M, Y') }}</span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%" class="text-center text-muted">{{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </table>
                            <a class="centered-load-more-link" href="{{ route('user.transactions') }}"><span>See
                                    More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @include($activeTemplate . 'partials.switch')

        </div>
        @php
            $withdrawMethod = \App\Models\WithdrawMethod::where('status', \App\Constants\Status::ENABLE)->get();
        @endphp
        <div class="content-panel compact color-scheme-dark">
            <div class="content-panel-close">
                <i class="os-icon os-icon-close"></i>
            </div>
            <div class="element-wrapper">
                <div class="element-actions actions-only">
                    <a class="element-action element-action-fold" href="#"><i
                            class="os-icon os-icon-minus-circle"></i></a>
                </div>
                <h6 class="element-header">
                    @lang('Withdraw')
                </h6>
                <div class="element-box-tp">
                    <form action="{{ route('user.withdraw.money') }}" method="post">
                        @csrf
                        <h5 class="form-header">

                        </h5>

                        <div class="form-group">
                            <label class="form-label">@lang('Method')</label>
                            <select class="form-control cmn--form--control" name="method_code" required>
                                <option value="">@lang('Select Gateway')</option>
                                @foreach ($withdrawMethod as $data)
                                    <option value="{{ $data->id }}" data-resource="{{ $data }}">
                                        {{ __($data->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">@lang('Amount')</label>
                            <div class="input-group">
                                <input type="number" step="any" name="amount" value="{{ old('amount') }}"
                                    class="form-control cmn--form--control" required>
                                <span class="input-group-text">{{ __($general->cur_text) }}</span>
                            </div>
                        </div>
                        <div class="mt-3 preview-details d-none">
                            <ul class="list-group text-center list-group-flush">
                                <li class="list-group-item d-flex justify-content-between bg-transparent b-input">
                                    <span>@lang('Limit')</span>
                                    <span> <span class="min fw-bold">0</span> {{ __($general->cur_text) }} - <span
                                            class="max fw-bold">0</span> {{ __($general->cur_text) }}<span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent b-input">
                                    <span>@lang('Charge')</span>
                                    <span><span class="charge fw-bold">0</span> {{ __($general->cur_text) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-transparent b-input">
                                    <span>@lang('Receivable')</span> <span><span class="receivable fw-bold"> 0</span>
                                        {{ __($general->cur_text) }} </span>
                                </li>
                                <li class="list-group-item d-none justify-content-between rate-element"></li>
                                <li class="list-group-item d-none justify-content-between in-site-cur ">
                                    <span>@lang('In') <span class="base-currency"></span></span>
                                    <strong class="final_amo">0</strong>
                                </li>
                            </ul>
                        </div>
                        <button type="submit" class="btn cmn--btn btn-block btn-primary">@lang('Submit')</button>
                    </form>
                </div>
            </div>
            <div class="element-wrapper compact">
                <div class="element-actions actions-only">
                    <a class="element-action element-action-fold" href="#"><i
                            class="os-icon os-icon-minus-circle"></i></a>
                </div>
                <h6 class="element-header">
                    Transactions History
                </h6>
                <div class="element-box-tp">
                    <table class="table table-compact smaller text-faded mb-0">
                        <thead>
                            <tr>
                                <th>@lang('Currency')</th>
                                <th class="text-center">@lang('Amount')</th>
                                <th class="text-center">@lang('High/Low')</th>
                                <th class="text-center">@lang('Result')</th>
                                <th class="text-center">@lang('Status')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tradeLogs as $tradeLog)
                                <tr>
                                    <td>
                                        <span>{{ __(@$tradeLog->crypto->symbol) }}</span>
                                    </td>
                                    <td class="text-center">
                                        {{ showAmount($tradeLog->amount) }} {{ __($general->cur_text) }}
                                    </td>
                                    <td class="text-right ">
                                        @php echo $tradeLog->highLowBadge;@endphp
                                    </td>
                                    <td class="text-right">
                                        @php echo $tradeLog->resultStatus;@endphp
                                    </td>
                                    <td class="text-right ">
                                        @php echo $tradeLog->statusBadge; @endphp
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100%" class="text-center text-muted">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <a class="centered-load-more-link smaller" href="{{ route('user.transactions') }}"><span>See More
                            Transactions</span></a>
                </div>
            </div>


        </div>
    </div>
@endsection

@push('style')
    <style>
        .copied::after {
            background-color: #<?php echo $general->base_color; ?>;
        }

        .el-tablo.smaller .label {
            letter-spacing: 0px !important;
        }
    </style>
@endpush


@push('script')
    <script>
        (function($) {
            "use strict";
            $('#copyBoard').click(function() {
                var copyText = document.getElementsByClassName("referralURL");
                copyText = copyText[0];
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                copyText.blur();
                this.classList.add('copied');
                setTimeout(() => this.classList.remove('copied'), 1500);
            });
        })(jQuery);
    </script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            $('select[name=method_code]').change(function() {
                if (!$('select[name=method_code]').val()) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=method_code] option:selected').data('resource');
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                var toFixedDigit = 2;
                $('.min').text(parseFloat(resource.min_limit).toFixed(2));
                $('.max').text(parseFloat(resource.max_limit).toFixed(2));
                var amount = parseFloat($('input[name=amount]').val());
                if (!amount) {
                    amount = 0;
                }
                if (amount <= 0) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                $('.preview-details').removeClass('d-none');

                var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                $('.charge').text(charge);
                if (resource.currency != '{{ $general->cur_text }}') {
                    var rateElement =
                        `<span>@lang('Conversion Rate')</span> <span class="fw-bold">1 {{ __($general->cur_text) }} = <span class="rate">${rate}</span>  <span class="base-currency">${resource.currency}</span></span>`;
                    $('.rate-element').html(rateElement);
                    $('.rate-element').removeClass('d-none');
                    $('.in-site-cur').removeClass('d-none');
                    $('.rate-element').addClass('d-flex');
                    $('.in-site-cur').addClass('d-flex');
                } else {
                    $('.rate-element').html('')
                    $('.rate-element').addClass('d-none');
                    $('.in-site-cur').addClass('d-none');
                    $('.rate-element').removeClass('d-flex');
                    $('.in-site-cur').removeClass('d-flex');
                }
                var receivable = parseFloat((parseFloat(amount) - parseFloat(charge))).toFixed(2);
                $('.receivable').text(receivable);
                var final_amo = parseFloat(parseFloat(receivable) * rate).toFixed(toFixedDigit);
                $('.final_amo').text(final_amo);
                $('.base-currency').text(resource.currency);
                $('.method_currency').text(resource.currency);
                $('input[name=amount]').on('input');
            });
            $('input[name=amount]').on('input', function() {
                var data = $('select[name=method_code]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });
        })(jQuery);
    </script>
@endpush
