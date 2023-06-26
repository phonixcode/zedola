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
    <div class="card p-3 default--card">
        <div class="row g-3">
          <div class="col-md-8">
            <h3 class="my-1">@lang('Practise Balance') : {{ showNameAmount(auth()->user()->demo_balance) }}</h3>
          </div>


          <div class="col-md-4">
            <a href="javascript:;" id="addBtn" data-href="{{ route('user.add.practise.balance') }}" class="cmn--btn bg--primary submit-btn w-100 border-0" data-bs-toggle="modal" data-bs-target="#modal-success">
                {{__('Add Practise Balance')}}
            </a>
          </div>
        </div>
    </div>
</div>

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
                            <a href="{{ route('user.practise.trade.method.name',$method->name) }}" class="btn btn-sm btn--primary">@lang('Trade Now')</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title mx-auto" id="exampleModalLabel">@lang('Add Balance')</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="practisebalance" action="" method="post">
            @csrf
            <div class="modal-body">
                <div class="modal-body text-center py-4">
                    <p class="text-center">{{ __("You are about to change the status.") }}</p>
                    <p class="text-center">{{ __("Do you want to proceed?") }}</p>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Close')</button>
                <button type="submit" class="btn shadow-none btn--success">@lang('Proceed')</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection

@push('js')
<script>
    'use strict';

    $("#addBtn").on('click',function(){
      $("#practisebalance").prop("action",$(this).data('href'));

      $(document).on('submit','#practisebalance',function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
          url: $(this).prop('action'),
          type: 'POST',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function (data) {
            if(data.status == 'success'){
              toastr.success(data.message);
              $("#modal-success").modal('hide');
              setTimeout(function(){
                window.location.reload();
              },1000);
            }else{
              toastr.error(data.message);
            }
          }
        });
      });
    })
</script>
@endpush
