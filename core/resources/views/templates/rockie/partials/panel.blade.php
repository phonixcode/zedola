@php
    $elements = getContent('blog.element', limit: 3);
    $withdrawMethod = \App\Models\WithdrawMethod::where('status',\App\Constants\Status::ENABLE)->get();
@endphp
@include($activeTemplate . 'partials.switch')
<div class="content-panel color-scheme-dark">
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

    <div class="element-wrapper">
        <h6 class="element-header">
            Latest Blog
        </h6>
        <div class="element-box-tp">
            @foreach ($elements as $element)
            <div class="profile-tile">
                <a class="profile-tile-box" href="{{ route('blog.details', [$element->id, slug(@$element->data_values->title)]) }}">
                    <div class="pt-avatar-w">
                        <img alt="" src="{{ getImage('assets/images/frontend/blog/thumb_' . @$element->data_values->image, '430x210') }}">
                    </div>
                    <div class="pt-user-name">
                        {{ __(@$element->data_values->title) }}
                    </div>
                </a>
                <div class="profile-tile-meta">
                    <ul>

                        <li>
                            Date:<strong>{{ showDateTime($element->created_at, 'd M Y') }}</strong>
                        </li>
                    </ul>
                    <div class="pt-btn">
                        <a class="btn btn-success btn-sm" href="{{ route('blog.details', [$element->id, slug(@$element->data_values->title)]) }}">Read</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@push('script')
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
