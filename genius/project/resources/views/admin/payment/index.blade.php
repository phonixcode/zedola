@extends('layouts.admin')

@section('content')

<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between py-3">
	<h5 class=" mb-0 text-gray-800 pl-3">{{ __('Payment Gateways') }}</h5>
	<ol class="breadcrumb m-0 py-0">
		<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.payment.index') }}">{{ __('Payment Gateways') }}</a></li>
	</ol>
	</div>
</div>


<div class="row mt-3">
	<div class="col-lg-12">
	  @include('includes.admin.form-success')
	  <div class="card mb-4">
		<div class="table-responsive p-3">
            <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
			<thead class="thead-light">
			  <tr>
				<th width="30%">{{ __('Name') }}</th>
				<th>{{ __('Status') }}</th>
				<th>{{ __('Options') }}</th>
			  </tr>
			</thead>
		  </table>
		</div>
	  </div>
	</div>
</div>



{{-- STATUS MODAL --}}

<div class="modal fade confirm-modal" id="statusModal" tabindex="-1" role="dialog"
	aria-labelledby="statusModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __("Update Status") }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-center">{{ __("You are about to change the status.") }}</p>
				<p class="text-center">{{ __("Do you want to proceed?") }}</p>
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal">{{ __("Cancel") }}</a>
				<a href="javascript:;" class="btn btn-success btn-ok">{{ __("Update") }}</a>
			</div>
		</div>
	</div>
</div>

{{-- STATUS MODAL ENDS --}}


{{-- DELETE MODAL --}}

<div class="modal fade confirm-modal" id="deleteModal" tabindex="-1" role="dialog"
aria-labelledby="deleteModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __("Confirm Delete") }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-center">{{__("You are about to delete this Payment.")}}</p>
				<p class="text-center">{{ __("Do you want to proceed?") }}</p>
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal">{{ __("Cancel") }}</a>
				<a href="javascript:;" class="btn btn-danger btn-ok">{{ __("Delete") }}</a>
			</div>
		</div>
	</div>
</div>

{{-- DELETE MODAL ENDS --}}


@endsection



@section('scripts')

    <script type="text/javascript">
	"use strict";

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               searching: false,
               ajax: '{{ route('admin.payment.datatables') }}',
               columns: [
                        { data: 'title', name: 'title' },
            			{ data: 'status', searchable: false, orderable: false },
            			{ data: 'action', searchable: false, orderable: false }

                     ],
               language: {
					processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
                }
            });

			$(function() {
				$(".btn-area").append('<div class="col-sm-12 col-md-4 pr-3 text-right">'+
					'<a class="btn btn-primary" href="{{route('admin.payment.create')}}">'+
						'<i class="fas fa-plus"></i> {{__('Add New')}}'+
					'</a>'+
				'</div>');
			});

    </script>
@endsection
