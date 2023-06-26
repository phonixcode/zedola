@extends('layouts.user')

@push('css')

@endpush

@section('breadcrumb')
<div class="breadcrumb-area bg--body">
    <h3 class="title">@lang('Practise Trade History')</h3>
    <ul class="breadcrumb text--white">
        <li>
            <a href="{{ route('user.practise.trade.method') }}">@lang('Practise Trade')</a>
        </li>
        <li>
            @lang('Practise Trade History')
        </li>
    </ul>
</div>
@endsection

@section('contents')
<div class="dashboard--content-item">
  <div class="card p-3 default--card">
    <form action="{{ route('user.practise.trade.logs') }}" method="get">
      <div class="row g-3">
        <div class="col-md-4">
          <input name="trx_no" class="form-control" autocomplete="off" placeholder="{{__('Transaction number')}}" type="text" value="{{ old('trx_no')}}">
        </div>

        <div class="col-md-4">
          <select id="type" name="result" required class="form-control">
            <option value="">{{ __('Select Result') }}</option>
            <option value="all">{{ __('All') }}</option>
            <option value="0">{{ __('Pending') }}</option>
            <option value="1">{{ __('Win') }}</option>
            <option value="2">{{ __('Lose') }}</option>
            <option value="3">{{ __('Draw') }}</option>
          </select>
        </div>

        <div class="col-md-4">
          <button type="submit" class="cmn--btn bg--primary submit-btn w-100 border-0">{{__('Submit')}}</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="dashboard--content-item">
    <div class="table-responsive table--mobile-lg">
        <table class="table bg--body">
            <thead>
                <tr>
                    <th>@lang('Trade Date')</th>
                    <th>@lang('Transaction')</th>
                    <th>@lang('Crypto Name')</th>
                    <th>@lang('Crypto Symbol')</th>
                    <th>@lang('Amount')</th>
                    <th>@lang('Type')</th>
                    <th>@lang('Status')</th>
                    <th>@lang('Result')</th>
                    <th>@lang('Result Will Get')</th>
                </tr>
            </thead>
            <tbody>
              @if (count($logs) == 0)
              <tr>
                <td colspan="12">
                  <h4 class="text-center m-0 py-2">{{__('No Data Found')}}</h4>
                </td>
              </tr>
              @else
                @foreach ($logs as $key=>$data)
                  <tr>
                        <td data-label="Deposit Date">
                            <div>
                                {{date('d-M-Y',strtotime($data->created_at))}}
                            </div>
                        </td>

                        <td data-label="Transaction">
                            <div>
                                {{ strtoupper($data->transaction_no) }}
                            </div>
                        </td>

                        <td data-label="Crypto Name">
                            <div>
                                {{ ucfirst($data->method->name) }}
                            </div>
                        </td>

                        <td data-label="Crypto Symbol">
                            <div>
                                {{ ucfirst($data->method->symbol) }}
                            </div>
                        </td>

                        <td data-label="Amount">
                          <div>
                            {{ showAmount($data->amount) }}
                          </div>
                        </td>

                        <td data-label="Type">
                            <div>
                            <span class="badge btn--{{ $data->type == 'high' ? 'success' : 'danger'}} btn-sm">{{ $data->type == 'high' ? 'High' : 'Low'}}</span>
                            </div>
                        </td>

                        <td data-label="Status">
                          <div>
                            <span class="badge btn--{{ $data->status == 1 ? 'success' : 'warning'}} btn-sm">{{ $data->status == 1 ? 'Completed' : 'Running'}}</span>
                          </div>
                        </td>

                        <td data-label="Result">
                            <div>
                                @if ($data->result == 0)
                                    <span class="badge btn--warning btn-sm">{{__('Pending')}}</span>
                                @elseif ($data->result == 1)
                                    <span class="badge btn--success btn-sm">{{__('Win')}}</span>
                                @elseif ($data->result == 2)
                                    <span class="badge btn--danger btn-sm">{{__('Lose')}}</span>
                                @elseif($data->result == 3)
                                    <span class="badge btn--info btn-sm">{{__('Draw')}}</span>
                                @endif
                            </div>
                        </td>

                        @if ($data->status == 1)
                        <td data-label="Result Will Get">
                          <div>
                              @lang('N/A')
                          </div>
                        </td>
                      @elseif($data->status == 0)
                        <td data-label="Result Will Get" class="count" data-date="{{ Carbon\Carbon::parse($data->result_time)->format('M d,Y h:i:s') }}"></td>
                      @else
                        <td data-label="Result Will Get">
                          <div>
                            <span class="badge btn--danger btn-sm">@lang('closed')</span>
                          </div>
                        </td>
                      @endif

                  </tr>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
    {{ $logs->links() }}
</div>
@endsection

@push('js')
<script type="text/javascript">
	'use strict';

    $(document).ready(function() {
        $('.count').each(function(){
                var date = $(this).data('date');
                var countDownDate = new Date(date).getTime();
                var $this = $(this);
                var x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;

                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    var text = days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";
                    $this.html(text);

                    if (distance < 0) {
                       clearInterval(x);
                       var text = 0 + "d " + 0 + "h "+ 0 + "m " + 0 + "s ";
                       $this.html(text);
                }
            }, 1000);
        });
    });

</script>

@endpush
