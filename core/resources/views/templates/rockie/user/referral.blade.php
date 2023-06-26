@extends($activeTemplate . 'layouts.master')
@section('content')
    {{-- <div class="container">
    <div class="table-responsive">
        <table class="table cmn--table">
            <thead>
                <tr>
                    <th>@lang('S.N.')</th>
                    <th>@lang('Name')</th>
                    <th>@lang('Username')</th>
                    <th>@lang('Date')</th>
                </tr>
            </thead>
            <tbody>
                @forelse($referrals as $referral)
                    <tr>
                        <td>{{$loop->index+$referrals->firstItem()}}</td>
                        <td>{{$referral->fullname}}</td>
                        <td> {{$referral->username}}</td>
                        <td>{{ showDateTime($referral->created_at) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%" class="text-center text-muted">{{ __($emptyMessage) }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if ($referrals->hasPages())
        {{paginateLinks($referrals) }}
    @endif
</div> --}}

    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    {{ __($pageTitle) }}
                </h6>

            </div>


            <div class="element-wrapper">
                <div class="element-box">
                    <h5 class="form-header">
                        {{-- Bordered and Striped Table --}}
                    </h5>

                    <div class="table-responsive mb-2">

                        <table class="table table-padded">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th class="text-white">@lang('S.N.')</th>
                                    <th class="text-white">@lang('Name')</th>
                                    <th class="text-white">@lang('Username')</th>
                                    <th class="text-white">@lang('Date')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($referrals as $referral)
                                    <tr>
                                        <td>{{ $loop->index + $referrals->firstItem() }}</td>
                                        <td>{{ $referral->fullname }}</td>
                                        <td> {{ $referral->username }}</td>
                                        <td>{{ showDateTime($referral->created_at) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%" class="text-center text-muted">{{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    @if ($referrals->hasPages())
                        {{ paginateLinks($referrals) }}
                    @endif
                </div>
            </div>
            @include($activeTemplate . 'partials.switch')

        </div>

        @include($activeTemplate . 'partials.panel')

    </div>
@endsection
