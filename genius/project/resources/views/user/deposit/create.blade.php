@extends('layouts.user')

@push('css')

@endpush

@section('breadcrumb')
    <div class="breadcrumb-area bg--body">
        <h3 class="title">@lang('Deposit Money')</h3>
        <ul class="breadcrumb text--white">
            <li>
                <a href="{{ route('user.dashboard') }}">@lang('Dashboard')</a>
            </li>

            <li>
                @lang('Deposit Money')
            </li>
        </ul>
    </div>
@endsection

@section('contents')
<div class="dashboard--content-item">
  <div class="row g-3">
    <div class="col-12">
      <div class="card default--card">
          <div class="card-body">
          @includeIf('includes.flash')
          <form id="deposit-form" action="" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="row gy-3 gy-md-4">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label required">{{__('Payment Method')}}</label>
                        <select name="method" id="withmethod" class="form-control" required>
                            <option value="">{{ __('Select Payment Method') }}</option>
                            @foreach ($gateways as $gateway)
                                    @if ($gateway->type == 'manual')
                                        <option value="Manual" data-details="{{$gateway->details}}">{{ $gateway->title }}</option>
                                    @endif
                                @if (in_array($gateway->keyword,$availableGatways))
                                    <option value="{{$gateway->keyword}}">{{ $gateway->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>


                <input type="hidden" name="currency_sign" value="{{ $defaultCurrency->sign }}">
                <input type="hidden" id="currencyCode" name="currency_code" value="{{ $defaultCurrency->name }}">
                <input type="hidden" name="currency_id" value="{{ $defaultCurrency->id }}">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="form-label required">{{__('Deposit Amount')}}</label>
                        <input name="amount" id="amount" class="form-control" autocomplete="off" placeholder="{{__('0.0')}}" type="number" value="{{ old('amount') }}" min="1" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div id="card-view" class="col-md-12 d-none">
                        <div class="row gy-3">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="lc" value="UK">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">

                            <div class="col-md-6">
                                <input type="text" class="form-control card-elements" name="cardNumber" placeholder="{{ __('Card Number') }}" autocomplete="off" required autofocus oninput="validateCard(this.value);"/>
                                <span id="errCard"></span>
                            </div>

                            <div class="col-lg-6 cardRow">
                                <input type="text" class="form-control card-elements" placeholder="{{ ('Card CVC') }}" name="cardCVC" oninput="validateCVC(this.value);">
                                <span id="errCVC"></span>
                            </div>

                            <div class="col-lg-6">
                                <input type="text" class="form-control card-elements" placeholder="{{ __('Month') }}" name="month" >
                            </div>

                            <div class="col-lg-6">
                                <input type="text" class="form-control card-elements" placeholder="{{ __('Year') }}" name="year">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mt-4 manual-payment d-none">
                    <div class="card default--card">
                      <div class="card-body">
                        <div class="row">

                          <div class="col-sm-12 pb-2 manual-payment-details">
                          </div>

                          <div class="col-sm-12">
                            <label class="form-label required">@lang('Transaction ID')#</label>
                            <input class="form-control" name="txn_id4" type="text" placeholder="Transaction ID" id="manual_transaction_id">
                          </div>

                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-label">{{__('Description')}}</label>
                        <textarea name="details" class="form-control nic-edit" cols="30" rows="5" placeholder="{{__('Receive account details')}}"></textarea>
                    </div>
                </div>

                <div class="col-sm-12">
                  <button type="submit" class="cmn--btn bg--primary submit-btn w-100 border-0">{{__('Submit')}}</button>

                </div>
              </div>

          </form>
        </div>
      </div>
  </div>
  </div>
</div>

<div class="dashboard--content-item">
    <div class="table-responsive table--mobile-lg">
        <table class="table bg--body">
            <thead>
                <tr>
                    <th>@lang('Deposit Date')</th>
                    <th>@lang('Method')</th>
                    <th>@lang('Account')</th>
                    <th>@lang('Amount')</th>
                    <th>@lang('Status')</th>
                </tr>
            </thead>
            <tbody>
                @if (count($deposits) == 0)
                <tr>
                    <td colspan="12">
                      <h4 class="text-center m-0 py-2">{{__('No Data Found')}}</h4>
                    </td>
                </tr>
                @else
                @foreach ($deposits as $key=>$data)
                  <tr>
                      <td data-label="Deposit Date">
                        <div>
                            {{date('d-M-Y',strtotime($data->created_at))}}
                        </div>
                      </td>

                      <td data-label="Method">
                        <div>
                            {{ ucfirst($data->method) }}
                        </div>
                      </td>

                      <td data-label="Account">
                        <div>
                            {{ auth()->user()->email }}
                        </div>
                      </td>

                      <td data-label="Amount">
                          <div>
                            {{ showAmount($data->amount) }}
                          </div>
                      </td>

                      <td data-label="Status">
                        <div>
                            @if ($data->status == 'pending')
                              <span class="badge btn--warning btn-sm">@lang('Pending')</span>
                            @elseif($data->status == 'rejected')
                                <span class="badge btn--danger btn-sm">@lang('Rejected')</span>
                            @else
                              <span class="badge btn--success btn-sm">@lang('Completed')</span>
                            @endif
                        </div>
                      </td>

                  </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>


@endsection

@push('js')
<script src="https://js.paystack.co/v1/inline.js"></script>

<script type="text/javascript">
'use strict';

$(document).on('change','#withmethod',function(){
	var val = $(this).val();

	if(val == 'stripe')
	{
		$('#deposit-form').prop('action','{{ route('deposit.stripe.submit') }}');
		$('#card-view').removeClass('d-none');
		$('.card-elements').prop('required',true);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
	}

    if(val == 'flutterwave')
	{
		$('#deposit-form').prop('action','{{ route('deposit.flutter.submit') }}');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
	}

    if(val == 'authorize.net')
	{
		$('#deposit-form').prop('action','{{ route('deposit.authorize.submit') }}');
		$('#card-view').removeClass('d-none');
		$('.card-elements').prop('required',true);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
	}

    if(val == 'paypal') {
        $('#deposit-form').prop('action','{{ route('deposit.paypal.submit') }}');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
    }

    if(val == 'mollie') {
        $('#deposit-form').prop('action','{{ route('deposit.molly.submit') }}');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
    }

	if(val == 'paytm') {
        $('#deposit-form').prop('action','{{ route('deposit.paytm.submit') }}');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);

        $('.manual-payment').addClass('d-none');
    }

    if(val == 'paystack') {
        $('#deposit-form').prop('action','{{ route('deposit.paystack.submit') }}');
        $('#deposit-form').prop('class','step1-form');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
    }

    if(val == 'instamojo') {
        $('#deposit-form').prop('action','{{ route('deposit.instamojo.submit') }}');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
    }

    if(val == 'razorpay') {
        $('#deposit-form').prop('action','{{ route('deposit.razorpay.submit') }}');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
    }

    if(val == 'block.io.btc' || val == 'block.io.ltc' || val == 'block.io.dgc') {
        $('#deposit-form').prop('action','{{route('deposit.blockio.submit')}}');
        $('#card-view').addClass('d-none');
        $('.card-elements').prop('required',false);
        $('#manual_transaction_id').prop('required',false);
        $('.manual-payment').addClass('d-none');
    }

    if(val == 'Manual'){
      $('#deposit-form').prop('action','{{route('deposit.manual.submit')}}');
      $('.manual-payment').removeClass('d-none');
      $('#card-view').addClass('d-none');
      $('.card-elements').prop('required',false);
      $('#manual_transaction_id').prop('required',true);
      const details = $(this).find(':selected').data('details');
      $('.manual-payment-details').empty();
      $('.manual-payment-details').append(`<font size="3">${details}</font>`)
    }

});

$(document).on('submit','.step1-form',function(){
    var val = $('#sub').val();
    var total = $('#amount').val();
    var paystackInfo = $('#paystackInfo').val();
    var curr = $('#currencyCode').val();
    total = Math.round(total);
    if(val == 0)
    {
    var handler = PaystackPop.setup({
        key: paystackInfo,
        email: $('input[name=email]').val(),
        amount: total * 100,
        currency: curr,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1),
        callback: function(response){
        $('#ref_id').val(response.reference);
        $('#sub').val('1');
        $('#final-btn').click();
        },
        onClose: function(){
        window.location.reload();
        }
    });
    handler.openIframe();
        return false;
    }
    else {
        $('#preloader').show();
        return true;
    }
});



    closedFunction=function() {
        alert('Payment Cancelled!');
    }

     successFunction=function(transaction_id) {
        window.location.href = '{{ url('order/payment/return') }}?txn_id=' + transaction_id;
    }

     failedFunction=function(transaction_id) {
         alert('Transaction was not successful, Ref: '+transaction_id)
    }
</script>


  <script type="text/javascript" src="{{ asset('assets/front/js/payvalid.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/front/js/paymin.js') }}"></script>
  <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
  <script type="text/javascript" src="{{ asset('assets/front/js/payform.js') }}"></script>


  <script type="text/javascript">
  'use strict';

    var cnstatus = false;
    var dateStatus = false;
    var cvcStatus = false;

    function validateCard(cn) {
      cnstatus = Stripe.card.validateCardNumber(cn);
      if (!cnstatus) {
        $("#errCard").html('Card number not valid<br>');
      } else {
        $("#errCard").html('');
      }
      btnStatusChange();


    }

    function validateCVC(cvc) {
      cvcStatus = Stripe.card.validateCVC(cvc);
      if (!cvcStatus) {
        $("#errCVC").html('CVC number not valid');
      } else {
        $("#errCVC").html('');
      }
      btnStatusChange();
    }

  </script>
@endpush



