@extends($activeTemplate.'layouts.master')
@section('content')
{{-- <div class="container">
    <div class="row gy-4">
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <button type="button" class="btn btn--base-outline btn-sm confirmationBtn"
                    data-question="@lang('Are you sure you want to add practice balance?')"
                    data-action="{{ route('user.add.practice.balance') }}">
                    <i class="las la-plus"></i> @lang('Add Practice Balance')
                </button>
                <h6 class="my-2">@lang('Practice Balance') : {{showAmount(auth()->user()->demo_balance)}}
                    {{__($general->cur_text)}}
                </h6>
            </div>
        </div>
        @foreach($cryptos as $crypto)
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card custom--card deposit--card">
                <div class="card-header p-2">
                    <h5 class="card-title">{{__($crypto->name)}}</h5>
                </div>
                <div class="card-body">
                    <div class="deposit__thumb">
                        <a href="{{route('user.practice.trade.now', $crypto->name)}}">
                            <img src="{{getImage(getFilePath('crypto_currency').'/'.$crypto->image, getFileSize('crypto_currency'))}}">
                        </a>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('user.practice.trade.now', $crypto->name)}}" class="btn--sm d-block cmn--btn text-center">
                        @lang('Trade Now')
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> --}}

<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-lg-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        {{ __($pageTitle) }}
                    </h6>

                    <div class="row pt-2">
                        <div class="col-12 mb-3">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <button type="button" class="btn btn-primary btn-sm confirmationBtn"
                                    data-question="@lang('Are you sure you want to add practice balance?')"
                                    data-action="{{ route('user.add.practice.balance') }}">
                                    <i class="os-icon os-icon-plus"></i> @lang('Add Practice Balance')
                                </button>
                                <h6 class="my-2">@lang('Practice Balance') : {{showAmount(auth()->user()->demo_balance)}}
                                    {{__($general->cur_text)}}
                                </h6>
                            </div>
                        </div>

                        @foreach($cryptos as $crypto)
                        <div class="col-6 col-sm-3 col-xxl-2">
                            <a class="element-box el-tablo centered trend-in-corner smaller"
                                href="{{route('user.trade.now', $crypto->name)}}">
                                <img src="{{getImage(getFilePath('crypto_currency').'/'.$crypto->image, getFileSize('crypto_currency'))}}" width="50">
                                <div class="label mt-2">
                                    {{__($crypto->name)}}
                                </div>
                                <a href="{{route('user.trade.now', $crypto->name)}}" class="btn btn-sm btn-primary d-block cmn--btn text-center mb-3">
                                    @lang('Trade Now')
                                </a>

                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include($activeTemplate . 'partials.panel')
</div>
<x-confirmation-modal />
@endsection

@push('style')
<style>
.deposit__thumb {
    overflow: hidden;
}
</style>
@endpush
