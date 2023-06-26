@extends('layouts.user')

@section('breadcrumb')
    <div class="breadcrumb-area bg--body">
        <h3 class="title">@lang('Transaction')</h3>
        <ul class="breadcrumb text--white">
            <li>
                <a href="{{ route('user.dashboard') }}">@lang('Dashboard')</a>
            </li>

            <li>
                @lang('Transaction')
            </li>
        </ul>
    </div>
@endsection

@section('contents')
<div class="dashboard--content-item">
	<div class="card p-3 default--card">
	  <form action="{{ route('user.transaction') }}" method="get">
		<div class="row ">
		  <div class="col-md-4">
			<input name="trx_no" class="form-control" autocomplete="off" placeholder="{{__('Transaction no')}}" type="text" value="{{ old('trx_no')}}">
		  </div>

		  <div class="col-md-4">
			<select id="type" name="type" required class="form-control">
			  <option value="">{{ __('Select Type') }}</option>
			  <option value="all">{{ __('All') }}</option>
			  <option value="Trade">{{ __('Trade') }}</option>
			  <option value="Trade Profit">{{ __('Trade Profit') }}</option>
			  <option value="Deposit">{{ __('Deposit') }}</option>
			  <option value="Payout">{{ __('Payout') }}</option>
			  <option value="Referral Bonus">{{ __('Referral Bonus') }}</option>
			  <option value="Send Money">{{ __('Send Money') }}</option>
			  <option value="Receive Money">{{ __('Receive Money') }}</option>
			  <option value="Request Money">{{ __('Request Money') }}</option>
			  <option value="Payout Rejected">{{ __('Payout Rejected') }}</option>
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
					<th>@lang('No')</th>
					<th>@lang('Type')</th>
					<th>@lang('Txnid')</th>
					<th>@lang('Amount')</th>
					<th>@lang('Date')</th>
				  </tr>
			  </thead>
			  <tbody>
				@if (count($transactions) == 0)
					<tr>
						<td colspan="12">
							<h4 class="text-center m-0 py-2">{{__('No Data Found')}}</h4>
						</td>
					</tr>
				@else
				@foreach($transactions as $key=>$data)
				  @php
					  $from = App\Models\User::where('id',$data->user_id)->first();
				  @endphp
					<tr>
						<td data-label="@lang('No')">
							<div>

							<span class="text-muted">{{ $loop->iteration }}</span>
							</div>
						</td>

						<td data-label="@lang('Type')">
							<div>
							{{ strtoupper($data->type) }}
							</div>
						</td>

						<td data-label="@lang('Txnid')">
							<div>
							{{ $data->txnid }}
							</div>
						</td>

						<td data-label="@lang('Amount')">
							<div>
							<p class="text-{{ $data->profit == 'plus' ? 'success' : 'danger'}}">{{ showAmount($data->amount) }}</p>
							</div>
						</td>

						<td data-label="@lang('Date')">
							<div>
							{{date('d M Y',strtotime($data->created_at))}}
							</div>
						</td>
					</tr>
			 	 @endforeach
				@endif
			  </tbody>
		  </table>
	  </div>
	  {{ $transactions->links() }}
</div>

@endsection

@push('js')

@endpush
