@extends('layouts.front')

@push('css')

@endpush

@section('content')
    @if (in_array('Banner', $home_modules))
        <section class="banner-section banner-overlay bg_img" data-img="{{ asset('assets/images/'.$ps->hero_photo) }}">
            <div class="container">
                <div class="banner-content wow fadeInUp" data-wow-duration="1000ms">
                    <h1 class="banner-title"> {{ $ps->hero_title }} </h1>
                    <p>
                        {{ $ps->hero_subtitle }}
                    </p>
                    <div class="btn__grp">
                        <a href="{{ $ps->hero_btn_url }}" class="cmn--btn">@lang('Get Started')</a>
                        <a href="{{ $ps->hero_link }}" class="video--btn" data-lightbox>
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (in_array('Feature', $home_modules))
        <section class="feature-section pb-50">
            <div class="container">
                <div class="mt--120 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row g-3 g-md-4 g-lg-3 g-xl-4">
                        @foreach ($services as $key=>$service)
                            <div class="col-lg-3 col-sm-6">
                                <div class="feature-item">
                                    <div class="feature-item__icon">
                                        <i class="{{ $service->icon }}"></i>
                                    </div>
                                    <div class="feature-item__cont">
                                        <h5 class="feature-item__cont-title">{{ $service->title }}</h5>
                                        <p>
                                            {{ $service->details }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (in_array('Transactions', $home_modules))
        <section class="transaction-section pt-50 pb-50">
            <div class="container">
                <div class="sec-title centered wow fadeInUp" data-wow-duration="1000ms">
                    <div class="title">{{ $ps->transaction_title }}</div>
                    <div class="seperator">&nbsp;</div>
                    <h2>{{ $ps->transaction_subtitle }}</h2>
                </div>

                <ul class="nav nav-tabs transaction--buttons">
                    <li>
                        <a href="#deposit" class="cmn--btn active" data-bs-toggle="tab">@lang('Deposit')</a>
                    </li>
                    <li>
                        <a href="#withdraw" class="cmn--btn" data-bs-toggle="tab">@lang('Withdraw')</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="deposit">
                        <div class="table-responsive table--mobile-lg">
                            <table class="table bg--section">
                                <thead>
                                    <tr>
                                        <th>@lang('Date')</th>
                                        <th>@lang('Transaction Number')</th>
                                        <th>@lang('Method')</th>
                                        <th>@lang('Account Name')</th>
                                        <th>@lang('Amount')</th>
                                        <th>@lang('Status')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (getDeposits() as $key=>$data)
                                        @php
                                            $user = App\Models\User::whereId($data->user_id)->first();
                                        @endphp
                                        <tr>
                                            <td data-label="Date">{{ $data->created_at->format('M d, Y')}}</td>
                                            <td data-label="Transaction Number">{{ strtoupper($data->deposit_number) }}</td>
                                            <td data-label="Method">{{ ucfirst($data->method) }}</td>
                                            <td data-label="Account Name">{{ $user != NULL ? $user->name : 'Customer Deleted'}}</td>
                                            <td data-label="Amount">{{ showAmount($data->amount) }}</td>
                                            <td data-label="Status">
                                                @if ($data->status == 'pending')
                                                    <span class="badge badge--warning">@lang('Pending')</span>
                                                @else
                                                    <span class="badge badge--success">@lang('Completed')</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane show" id="withdraw">
                        <div class="table-responsive table--mobile-lg">
                            <table class="table bg--section">
                                <thead>
                                    <tr>
                                        <th>@lang('Date')</th>
                                        <th>@lang('Transaction no')</th>
                                        <th>@lang('Method')</th>
                                        <th>@lang('Account Name')</th>
                                        <th>@lang('Amount')</th>
                                        <th>@lang('Fee')</th>
                                        <th>@lang('Status')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (getWithdraws() as $key=>$data)
                                        @php
                                            $user = App\Models\User::whereId($data->user_id)->first();
                                        @endphp
                                        <tr>
                                            <td data-label="Date">{{ $data->created_at->format('M d, Y') }}</td>
                                            <td data-label="Transaction Number">{{ strtoupper($data->txnid) }}</td>
                                            <td data-label="Method">{{ ucfirst($data->method) }}</td>
                                            <td data-label="Account Name">{{ $user != NULL ? $user->name : 'Customer Deleted'}}</td>
                                            <td data-label="Amount">{{ showAmount($data->amount) }}</td>
                                            <td data-label="Fee">{{ showAmount($data->fee) }}</td>
                                            <td data-label="Status">
                                                @if ($data->status == 'pending')
                                                    <span class="badge badge--warning">@lang('Pending')</span>
                                                @elseif($data->status == 'completed')
                                                    <span class="badge badge--success">@lang('Completed')</span>
                                                @else
                                                    <span class="badge badge--danger">@lang('Rejected')</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (in_array('Trade', $home_modules))
        <section class="demo-trade-section pt-50 pb-50">
            <div class="container">
                <div class="sec-title centered wow fadeInUp" data-wow-duration="1000ms">
                    <div class="title">{{ $ps->trade_title }}</div>
                    <div class="seperator">&nbsp;</div>
                    <h2>{{ $ps->trade_subtitle }}</h2>
                </div>
                <div class="trade-chart wow fadeInRight" data-wow-duration="1000ms" id="sfx-chart"></div>
            </div>
        </section>
    @endif

    @if (in_array('Counter', $home_modules))
        @include('partials.front.counter')
    @endif

    @if (in_array('Blogs', $home_modules))
        @include('partials.front.blog')
    @endif

    @if (in_array('Partners', $home_modules))
        @include('partials.front.partner')
    @endif

    @if (in_array('CTAs', $home_modules))
        @include('partials.front.cta')
    @endif

@endsection

@push('js')

@endpush
