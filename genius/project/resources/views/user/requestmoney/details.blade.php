@extends('layouts.user')

@push('css')

@endpush

@section('breadcrumb')
<div class="breadcrumb-area bg--body">
    <h3 class="title">@lang('Request Money Details')</h3>
    <ul class="breadcrumb text--white">
        <li>
            <a href="{{ route('user.money.request.create') }}">@lang('Send Request Money')</a>
        </li>
    </ul>
</div>
@endsection

@section('contents')
    <div class="dashboard--content-item">
        <div class="table-responsive-sm">
            <table class="table">
                <tbody>
                <tr class="border-top">
                    <th class="45%" width="45%">{{__('Request From')}}</th>
                    <td width="10%">:</td>
                    <td class="45%" width="45%">{{ $from->name }}</td>
                </tr>

                <tr>
                    <th class="45%" width="45%">{{__('Request To')}}</th>
                    <td width="10%">:</td>
                    <td class="45%" width="45%">{{ $to->name }}</td>
                </tr>

                <tr>
                    <th class="45%" width="45%">{{__('Amount')}}</th>
                    <td width="10%">:</td>
                    <td class="45%" width="45%">{{ showAmount($data->amount) }}</td>
                </tr>

                <tr>
                    <th class="45%" width="45%">{{__('Cost')}}</th>
                    <td width="10%">:</td>
                    <td class="45%" width="45%">{{ showAmount($data->cost) }}</td>
                </tr>

                <tr>
                    <th class="45%" width="45%">{{__('Amount To Get')}}</th>
                    <td width="10%">:</td>
                    <td class="45%" width="45%">{{ showAmount(($data->amount - $data->cost)) }}</td>
                </tr>

                <tr>
                    <th width="45%">{{__('Details')}}</th>
                    <td width="10%">:</td>
                    <td width="45%">{{ $data->details }}</td>
                </tr>

                <tr>
                    <th width="45%">{{__('Request Date')}}</th>
                    <td width="10%">:</td>
                    <td width="45%">{{ $data->created_at->diffForHumans() }}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('js')

@endpush

