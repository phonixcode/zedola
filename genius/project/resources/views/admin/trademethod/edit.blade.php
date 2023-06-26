@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Edit Trade Method') }} <a class="btn btn-primary btn-rounded btn-sm" href="{{route('admin.method.index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">{{ __('Trade') }}</a></li>
    </ol>
  </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Trade Method Form') }}</h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="{{route('admin.method.update',$data->id)}}" method="POST" enctype="multipart/form-data">

            @include('includes.admin.form-both')

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="{{ __('Enter Name') }}" value="{{ $data->name }}" required>
            </div>

            <div class="form-group">
                <label for="symbol">{{ __('Symbol') }}</label>
                <input type="text" class="form-control" id="symbol" name="symbol"  placeholder="{{ __('Enter Symbol') }}" value="{{ $data->symbol }}" required>
            </div>

            <div class="form-group">
                <label>{{ __('Set Picture') }} </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url({{$data->photo ? asset('assets/images/'.$data->photo) : asset('assets/images/placeholder.jpg') }});"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                            <input id="img-upload" type="file" class="image-upload" name="photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inp-name">{{ __('Status') }}</label>
                <select class="form-control mb-3" name="status">
                    <option value="">{{__('Select Status')}}</option>
                    <option value="1" {{ $data->status == 1 ? 'selected':'' }}>{{ __('Activated')}}</option>
                    <option value="0" {{ $data->status == 0 ? 'selected':'' }}>{{ __('Deactivated') }}</option>
                </select>
            </div>

          <button type="submit" id="submit-btn" class="btn btn-primary w-100">{{ __('Submit') }}</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')


@endsection