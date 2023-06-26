@extends('layouts.user')

@push('css')

@endpush

@section('breadcrumb')
<div class="breadcrumb-area bg--body">
    <h3 class="title text--white">@lang('Trade Method')</h3>
    <ul class="breadcrumb">
        <li>
            <a href="{{ route('user.dashboard') }}">@lang('Dashboard')</a>
        </li>
        <li>
            @lang('Trade Method')
        </li>
    </ul>
</div>
@endsection

@section('contents')
<div class="dashboard--content-item">
    <div class="dashboard--wrapper">
        @foreach ($methods as $key=>$method)
            <div class="dashboard--width">
                <div class="dashboard-card">
                    <div class="dashboard-card__header text-end">
                        <div class="dashboard-card__header__icon">
                            <img src="{{ asset('assets/images/'.$method->photo) }}" alt="wallet">
                        </div>
                        <div class="dashboard-card__header__cont">
                            <h4 class="name">{{ $method->symbol }}</h4>
                        </div>
                    </div>
                    <div class="dashboard-card__content bg-transparent border-top-0 pt-0">
                        <div class="deposit-btn-grp">
                            <a href="{{ route('user.trade.method.name',$method->name) }}" class="btn btn-sm btn--primary">@lang('Trade Now')</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('js')

@endpush
