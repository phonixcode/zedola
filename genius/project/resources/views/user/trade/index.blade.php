@extends('layouts.user')

@push('css')

@endpush

@section('breadcrumb')
<div class="breadcrumb-area bg--body">
    <h3 class="title">@lang('Trade')</h3>
    <ul class="breadcrumb text--white">
        <li>
            <a href="{{ route('user.dashboard') }}">@lang('Dashboard')</a>
        </li>
        <li>
          @lang('Trade')
        </li>
    </ul>
</div>
@endsection

@section('contents')

<div class="dashboard--content-item">
    <div class="dashboard-card chart--card">
        <div class="dashboard-card__header">
            <div id="graphDiv"></div>
        </div>
        <div class="dashboard-card__content">
            <div class="row gy-3 mb-3">
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="number" class="form-control form--control" placeholder="@lang('Enter Amount')">
                        <button type="button"
                            class="input-group-text bg--body border text-white">{{ $gs->currency_code }}</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <select class="form-control form--control" id="schedule">
                        @foreach ($schedules as $key=>$schedule)
                            <option value="{{ $schedule->id }}">{{ $schedule->time }} {{ ucfirst($schedule->unit) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="deposit-btn-grp">
                <button class="btn btn--danger highLow" value="0">@lang('Low') <i class="fas fa-arrow-down"></i></button>
                <button class="btn btn--success highLow" value="1">@lang('High') <i class="fas fa-arrow-up"></i></button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('assets/front/js/plotly-latest.min.js')}}"></script>
<script>
    'use strict';
    const rand = () => '{{ getCryptoRate($method->symbol) }}';
    var x = [10000, 20000, 30000, 40000, 50000];
    const new_data = (trace) => Object.assign(trace, { y: x.map(rand) });

    // add random data to three line traces
    var data = [
        { mode: 'lines', line: { color: "#d90429" } },
        { mode: 'lines', line: { color: "#0ead69" } },
        { mode: 'lines', line: { color: "#222831" } }
    ].map(new_data);

    var layout = {
        title: 'Predict and Earn Money Easily<br>With Live View',
        uirevision: 'true',
        xaxis: { autorange: true },
        yaxis: { autorange: true }
    };

    Plotly.react(graphDiv, data, layout);

    var myPlot = document.getElementById('graphDiv');

    var cnt = 0;
    var interval = setInterval(function () {
        data = data.map(new_data);

        layout.xaxis.autorange = true;
        layout.yaxis.autorange = true;

        Plotly.react(graphDiv, data, layout);
        clearInterval(interval);
    }, 1000);
</script>

<script>
    'use strict';
    $(document).ready(function(){
        $(document).on('click','.highLow',function(){
            var type = $(this).val();

            var currency = '{{ $method->id }}';
            var amount = $('input[type="number"]').val();
            var schedule = $('#schedule :selected').val();

            if(amount == ''){
                $.notify("Please enter amount", "error");
                return false;
            }
            if(schedule == ''){
                $.notify("Please select schedule", "error");
                return false;
            }

            $.ajax({
                url: "{{ route('user.trade.store') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    currency_id: currency,
                    type: type,
                    amount: amount,
                    schedule_id: schedule
                },
                success: function (data) {
                    if(data.status == 'success'){
                        $.notify(data.message, "success");
                        window.location = '{{ route('user.trade.logs') }}';
                    }else if(data.status == 'error'){
                        $.notify(data.message, "error");
                    }else{
                        $.each(response, function (i, val) {
                            $.notify(val,'error')
                        });
                    }
                }
            });
        });
    });

</script>
@endpush
