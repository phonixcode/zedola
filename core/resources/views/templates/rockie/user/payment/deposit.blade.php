@extends($activeTemplate . 'layouts.master')
@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('user.deposit.insert') }}" method="post">
                    @csrf
                    <input type="hidden" name="method_code">
                    <input type="hidden" name="currency">
                    <div class="card custom--card">
                        <div class="card-header">
                            <h5 class="card-title">@lang('Deposit')</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">@lang('Select Gateway')</label>
                                <select class="form-control cmn--form--control" name="gateway" required>
                                    <option value="" selected disabled>@lang('Select One')</option>
                                    @foreach ($gatewayCurrency as $data)
                                        <option value="{{ $data->method_code }}" @selected(old('gateway') == $data->method_code)
                                            data-gateway="{{ $data }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">@lang('Amount')</label>
                                <div class="input-group">
                                    <input type="number" step="any" name="amount"
                                        class="form-control cmn--form--control" value="{{ old('amount') }}"
                                        autocomplete="off" required>
                                    <span class="input-group-text">{{ $general->cur_text }}</span>
                                </div>
                            </div>
                            <div class="mt-3 preview-details d-none">
                                <ul class="list-group list-group-flush mb-3">
                                    <li
                                        class="list-group-item d-flex justify-content-between  bg-transparent text-white b-input">
                                        <span>@lang('Limit')</span>
                                        <span><span class="min fw-bold">0</span> {{ __($general->cur_text) }} - <span
                                                class="max fw-bold">0</span> {{ __($general->cur_text) }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between  bg-transparent text-white b-input">
                                        <span>@lang('Charge')</span>
                                        <span><span class="charge fw-bold">0</span> {{ __($general->cur_text) }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between  bg-transparent text-white b-input">
                                        <span>@lang('Payable')</span> <span><span class="payable fw-bold"> 0</span>
                                            {{ __($general->cur_text) }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between  bg-transparent text-white b-input d-none rate-element">

                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between  bg-transparent text-white b-input d-none in-site-cur">
                                        <span>@lang('In') <span class="method_currency"></span></span>
                                        <span class="final_amo fw-bold">0</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between  bg-transparent text-white b-input crypto_currency d-none">
                                        <span>@lang('Conversion with') <span class="method_currency"></span>
                                            @lang('and final value will Show on next step')</span>
                                    </li>
                                </ul>
                            </div>
                            <button type="submit" class="cmn--btn btn-block">@lang('Submit')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            @lang('Deposit')
                        </h6>
                        <div class="element-box">
                            <form action="{{ route('user.deposit.insert') }}" method="post">
                                @csrf
                                <input type="hidden" name="method_code">
                                <input type="hidden" name="currency">
                                <h5 class="form-header">

                                </h5>

                                <div class="form-group">
                                    <label class="form-label">@lang('Select Gateway')</label>
                                    <select class="form-control cmn--form--control" name="gateway" required>
                                        <option value="" selected disabled>@lang('Select One')</option>
                                        @foreach ($gatewayCurrency as $data)
                                            <option value="{{ $data->method_code }}" @selected(old('gateway') == $data->method_code)
                                                data-gateway="{{ $data }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">@lang('Amount')</label>
                                    <div class="input-group">
                                        <input type="number" step="any" name="amount"
                                            class="form-control cmn--form--control" value="{{ old('amount') }}"
                                            autocomplete="off" required>
                                        <span class="input-group-text">{{ $general->cur_text }}</span>
                                    </div>
                                </div>
                                <div class="mt-3 preview-details d-none">
                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item d-flex justify-content-between  bg-transparent b-input">
                                            <span>@lang('Limit')</span>
                                            <span><span class="min fw-bold">0</span> {{ __($general->cur_text) }} - <span
                                                    class="max fw-bold">0</span> {{ __($general->cur_text) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between  bg-transparent b-input">
                                            <span>@lang('Charge')</span>
                                            <span><span class="charge fw-bold">0</span> {{ __($general->cur_text) }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between  bg-transparent b-input">
                                            <span>@lang('Payable')</span> <span><span class="payable fw-bold"> 0</span>
                                                {{ __($general->cur_text) }}</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between  bg-transparent b-input d-none rate-element">

                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between  bg-transparent b-input d-none in-site-cur">
                                            <span>@lang('In') <span class="method_currency"></span></span>
                                            <span class="final_amo fw-bold">0</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between  bg-transparent b-input crypto_currency d-none">
                                            <span>@lang('Conversion with') <span class="method_currency"></span>
                                                @lang('and final value will Show on next step')</span>
                                        </li>
                                    </ul>
                                </div>
                                <button type="submit"
                                    class="btn cmn--btn btn-block btn-primary">@lang('Submit')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include($activeTemplate . 'partials.panel')
    </div>
@endsection

@push('script')
    <script>
        (function($) {
            "use strict";
            $('select[name=gateway]').change(function() {
                if (!$('select[name=gateway]').val()) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=gateway] option:selected').data('gateway');
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                if (resource.method.crypto == 1) {
                    var toFixedDigit = 8;
                    $('.crypto_currency').removeClass('d-none');
                } else {
                    var toFixedDigit = 2;
                    $('.crypto_currency').addClass('d-none');
                }
                $('.min').text(parseFloat(resource.min_amount).toFixed(2));
                $('.max').text(parseFloat(resource.max_amount).toFixed(2));
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
                var payable = parseFloat((parseFloat(amount) + parseFloat(charge))).toFixed(2);
                $('.payable').text(payable);
                var final_amo = (parseFloat((parseFloat(amount) + parseFloat(charge))) * rate).toFixed(
                    toFixedDigit);
                $('.final_amo').text(final_amo);
                if (resource.currency != '{{ $general->cur_text }}') {
                    var rateElement =
                        `<span class="fw-bold">@lang('Conversion Rate')</span> <span><span  class="fw-bold">1 {{ __($general->cur_text) }} = <span class="rate">${rate}</span>  <span class="method_currency">${resource.currency}</span></span></span>`;
                    $('.rate-element').html(rateElement)
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
                $('.method_currency').text(resource.currency);
                $('input[name=currency]').val(resource.currency);
                $('input[name=amount]').on('input');
            });
            $('input[name=amount]').on('input', function() {
                $('select[name=gateway]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });
        })(jQuery);
    </script>
@endpush
