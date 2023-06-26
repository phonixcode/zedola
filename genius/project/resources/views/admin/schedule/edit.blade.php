@extends('layouts.admin')

@section('content')

<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Edit Schedule') }} <a class="btn btn-primary btn-rounded btn-sm" href="{{route('admin.schedule.index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h5>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
      <li class="breadcrumb-item"><a href="javascript:;">{{ __('Manage Plan') }}</a></li>
    </ol>
	</div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Edit Schedule Form') }}</h6>
      </div>

      <div class="card-body py-5">
        <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="{{route('admin.schedule.update',$data->id)}}" method="POST" enctype="multipart/form-data">

            @include('includes.admin.form-both')

            {{ csrf_field() }}

            <div class="form-group">
                <label for="inp-time">{{ __('Time') }}</label>
                <input type="text" class="form-control" id="inp-time" name="time"  placeholder="{{ __('Enter Time') }}" value="{{ $data->time }}" required>
            </div>

            <div class="form-group">
                <label for="inp-name">{{ __('Unit') }}</label>
                <select class="form-control mb-3" name="unit">
                    <option value="">{{__('Select Unit')}}</option>
                    <option value="seconds" {{ $data->unit == 'seconds' ? 'selected':'' }}>{{ __('Seconds')}}</option>
                    <option value="minutes" {{ $data->unit == 'minutes' ? 'selected':'' }}>{{ __('Minutes') }}</option>
                    <option value="hours" {{ $data->unit == 'hours' ? 'selected':'' }}>{{ __('Hours') }}</option>
                </select>
            </div>


            <button type="submit" id="submit-btn" class="btn btn-primary w-100 mt-3">{{ __('Submit') }}</button>

        </form>
      </div>
    </div>
  </div>

</div>
@endsection
