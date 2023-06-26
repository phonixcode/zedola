@extends($activeTemplate . 'layouts.master')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    {{ __($pageTitle) }}
                </h6>

            </div>


            <div class="element-wrapper">
                <div class="element-box-tp">
                    <h5 class="form-header">
                        {{-- Bordered and Striped Table --}}
                    </h5>
                    <form action="" class="mb-5">
                        <div class="d-flex flex-wrap gap-4">
                            <div class="flex-grow-1 mr-1">
                                <label>@lang('Transaction Number')</label>
                                <input type="text" name="search" value="{{ request()->search }}"
                                    class="form-control cmn--form--control">
                            </div>
                            <div class="flex-grow-1 mr-1">
                                <label>@lang('Type')</label>
                                <select name="trx_type" class="form-control cmn--form--control">
                                    <option value="">@lang('All')</option>
                                    <option value="+" @selected(request()->trx_type == '+')>@lang('Plus')</option>
                                    <option value="-" @selected(request()->trx_type == '-')>@lang('Minus')</option>
                                </select>
                            </div>
                            <div class="flex-grow-1 mr-1">
                                <label>@lang('Remark')</label>
                                <select class="form-control cmn--form--control" name="remark">
                                    <option value="">@lang('Any')</option>
                                    @foreach ($remarks as $remark)
                                        <option value="{{ $remark->remark }}" @selected(request()->remark == $remark->remark)>
                                            {{ __(keyToTitle($remark->remark)) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-grow-1 align-self-end">
                                <button class="btn btn-block btn-primary h-100" style="padding: 10px;">
                                    <i class="os-icon os-icon-filter"></i>
                                    @lang('Filter')
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive mb-2">

                        <table class="table table table-padded">
                            <thead class="bg-primary text-white">
                                <tr >
                                    <th class="text-white">@lang('Trx')</th>
                                    <th class="text-white">@lang('Transacted')</th>
                                    <th class="text-white">@lang('Amount')</th>
                                    <th class="text-white">@lang('Post Balance')</th>
                                    <th class="text-white">@lang('Detail')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transactions as $trx)
                                    <tr>
                                        <td> <strong>{{ $trx->trx }}</strong> </td>
                                        <td> {{ showDateTime($trx->created_at) }}<br>{{ diffForHumans($trx->created_at) }}
                                        </td>
                                        <td class="budget">
                                            <span
                                                class="fw-bold @if ($trx->trx_type == '+') text-success @else text-danger @endif">
                                                {{ $trx->trx_type }} {{ showAmount($trx->amount) }} {{ $general->cur_text }}
                                            </span>
                                        </td>
                                        <td class="budget"> {{ showAmount($trx->post_balance) }}
                                            {{ __($general->cur_text) }} </td>
                                        <td>{{ __($trx->details) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    @if ($transactions->hasPages())
                        {{ $transactions->links() }}
                    @endif
                </div>
            </div>
            @include($activeTemplate . 'partials.switch')

        </div>

        @include($activeTemplate . 'partials.panel')
    </div>
@endsection


@push('script')
    <script>
        "use strict";
        (function($) {
            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });
        })(jQuery);
    </script>
@endpush
