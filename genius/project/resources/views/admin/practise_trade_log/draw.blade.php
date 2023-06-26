@extends('layouts.admin')

@section('content')
<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between py-3">
        <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Draw Practise Trade') }}</h5>
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">{{ __('Practise Trade') }}</a></li>
        </ol>
	</div>
</div>


<!-- Row -->
<div class="row mt-3">
  <div class="col-lg-12">
	@include('includes.admin.form-success')
	<div class="card mb-4">
	  <div class="table-responsive p-3">
		<table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
		  <thead class="thead-light">
			<tr>
                <th>@lang('Customer Email')</th>
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
		</table>
	  </div>
	</div>
  </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript">
	"use strict";

    var table = $('#geniustable').DataTable({
           ordering: false,
           processing: true,
           serverSide: true,
           searching: false,
           ajax: '{{ route('admin.practise.trade.log.datatables','draw') }}',
           columns: [
                { data: 'user_id', name: 'user_id' },
                { data: 'created_at', name: 'created_at' },
                { data: 'transaction_no', name: 'transaction_no' },
                { data: 'crypto_name', name: 'crypto_name' },
                { data: 'crypto_symbol', name: 'crypto_symbol' },
                { data: 'amount', name: 'amount' },
                { data: 'type', name: 'type' },
                { data: 'status', name: 'status' },
                { data: 'result', name: 'result' },
                { data: 'result_time', name: 'result_time' },
            ],
            language : {
                processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
            }
        });

</script>

@endsection


