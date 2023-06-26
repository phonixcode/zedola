@extends($activeTemplate . 'layouts.master')
@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center gy-4">
            <div class=" col-12 text-end">
                <a href="{{ route('ticket.open') }}" class="btn btn--base-outline btn-sm"> <i class="las la-plus"></i>
                    @lang('New Ticket')</a>
            </div>
            <div class="col-12">
                <div class="card custom--card border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table cmn--table">
                                <thead>
                                    <tr>
                                        <th>@lang('Subject')</th>
                                        <th>@lang('Status')</th>
                                        <th>@lang('Priority')</th>
                                        <th>@lang('Last Reply')</th>
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($supports as $support)
                                        <tr>
                                            <td> <a href="{{ route('ticket.view', $support->ticket) }}" class="fw-bold">
                                                    [@lang('Ticket')#{{ $support->ticket }}] {{ __($support->subject) }}
                                                </a></td>
                                            <td> @php echo $support->statusBadge; @endphp </td>
                                            <td>
                                                @if ($support->priority == Status::PRIORITY_LOW)
                                                    <span class="badge badge--dark">@lang('Low')</span>
                                                @elseif($support->priority == Status::PRIORITY_MEDIUM)
                                                    <span class="badge  badge--warning">@lang('Medium')</span>
                                                @elseif($support->priority == Status::PRIORITY_HIGH)
                                                    <span class="badge badge--danger">@lang('High')</span>
                                                @endif
                                            </td>
                                            <td> {{ diffForHumans($support->last_reply) }}</td>
                                            <td>
                                                <a href="{{ route('ticket.view', $support->ticket) }}"
                                                    class="btn btn--base-outline btn-sm">
                                                    <i class="las la-desktop"></i>&nbsp;@lang('Details')
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if ($supports->hasPages())
                    {{ $supports->links() }}
                @endif
            </div>
        </div>
    </div> --}}

    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    {{ __($pageTitle) }}
                </h6>

            </div>
            <a href="{{ route('ticket.open') }}" class="btn btn-outline-primary btn-sm"> <i class="os-icon os-icon-plus"></i>
                @lang('New Ticket')</a>

            <div class="element-wrapper">
                <div class="element-box-tp">
                    <h5 class="form-header">
                        {{-- Bordered and Striped Table --}}
                    </h5>

                    <div class="table-responsive mb-2">

                        <table class="table table table-padded">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th class="text-white">@lang('Subject')</th>
                                    <th class="text-white">@lang('Status')</th>
                                    <th class="text-white">@lang('Priority')</th>
                                    <th class="text-white">@lang('Last Reply')</th>
                                    <th class="text-white">@lang('Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($supports as $support)
                                    <tr>
                                        <td> <a href="{{ route('ticket.view', $support->ticket) }}" class="fw-bold">
                                                [@lang('Ticket')#{{ $support->ticket }}] {{ __($support->subject) }}
                                            </a></td>
                                        <td> @php echo $support->statusBadge; @endphp </td>
                                        <td>
                                            @if ($support->priority == Status::PRIORITY_LOW)
                                                <span class="badge badge-dark">@lang('Low')</span>
                                            @elseif($support->priority == Status::PRIORITY_MEDIUM)
                                                <span class="badge  badge-warning">@lang('Medium')</span>
                                            @elseif($support->priority == Status::PRIORITY_HIGH)
                                                <span class="badge badge-danger">@lang('High')</span>
                                            @endif
                                        </td>
                                        <td> {{ diffForHumans($support->last_reply) }}</td>
                                        <td>
                                            <a href="{{ route('ticket.view', $support->ticket) }}"
                                                class="btn btn-outline-primary btn-sm">
                                                <i class="os-icon os-icon-desktop"></i>&nbsp;@lang('Details')
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    @if ($supports->hasPages())
                        {{ $supports->links() }}
                    @endif
                </div>
            </div>
            @include($activeTemplate . 'partials.switch')

        </div>

        @include($activeTemplate . 'partials.panel')
    </div>
@endsection
