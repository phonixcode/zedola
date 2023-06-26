@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="d-sm-flex align-items-center py-3 justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('About Us') }}</h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">{{ __('General Settings') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.ps.about') }}">{{ __('About Us') }}</a></li>
    </ol>
    </div>
</div>

  <div class="card mb-4 mt-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">{{ __('About Us') }}</h6>
    </div>

    <div class="card-body">
      <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form class="geniusform" action="{{route('admin.ps.update')}}" method="POST" enctype="multipart/form-data">

        @include('includes.admin.form-both')

        {{ csrf_field() }}

        <div class="form-group">
            <label for="inp-title">{{  __('About Title')  }}</label>
            <input type="text" class="form-control" id="inp-title" name="about_title"  placeholder="{{ __('Enter About Title') }}" value="{{ $data->about_title }}" required>
        </div>

        <div class="form-group">
            <label for="about_details">{{ __('About Description') }} *</label>
            <textarea class="form-control summernote"  id="about_details" name="about_details" required rows="7" placeholder="{{__('Enter About Description')}}">{{ $data->about_details }}</textarea>
        </div>

        <div class="form-group">
            <label>{{ __('About Image1') }} </label>
            <div class="wrapper-image-preview">
                <div class="box full-width">
                    <div class="back-preview-image" style="background-image: url({{ $data->about_photo ? asset('assets/images/'.$data->about_photo) : asset('assets/images/placeholder.jpg') }});"></div>
                    <div class="upload-options">
                        <label class="img-upload-label" for="img-upload-1"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                        <input id="img-upload-1" type="file" class="image-upload" name="about_photo" accept="image/*">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('About Image2') }} </label>
            <div class="wrapper-image-preview">
                <div class="box full-width">
                    <div class="back-preview-image" style="background-image: url({{ $data->about_photo1 ? asset('assets/images/'.$data->about_photo1) : asset('assets/images/placeholder.jpg') }});"></div>
                    <div class="upload-options">
                        <label class="img-upload-label" for="img-upload-2"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                        <input id="img-upload-2" type="file" class="image-upload" name="about_photo1" accept="image/*">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('About Image3') }}</label>
            <div class="wrapper-image-preview">
                <div class="box full-width">
                    <div class="back-preview-image" style="background-image: url({{ $data->about_photo2 ? asset('assets/images/'.$data->about_photo2) : asset('assets/images/placeholder.jpg') }});"></div>
                    <div class="upload-options">
                        <label class="img-upload-label full-width" for="img-upload-3"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                        <input id="img-upload-3" type="file" class="image-upload" name="about_photo2" accept="image/*">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>{{ __('About Image4') }}</label>
            <div class="wrapper-image-preview">
                <div class="box full-width">
                    <div class="back-preview-image" style="background-image: url({{ $data->about_photo3 ? asset('assets/images/'.$data->about_photo3) : asset('assets/images/placeholder.jpg') }});"></div>
                    <div class="upload-options">
                        <label class="img-upload-label full-width" for="img-upload-4"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                        <input id="img-upload-4" type="file" class="image-upload" name="about_photo3" accept="image/*">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="about_video_link">{{  __('About Video Link')  }}</label>
            <input type="text" class="form-control" id="about_video_link" name="about_video_link"  placeholder="{{ __('Enter About Video Link') }}" value="{{ $data->about_video_link }}" required>
        </div>

        <div class="form-group">
            <label for="about_link">{{  __('About Link')  }}</label>
            <input type="text" class="form-control" id="about_link" name="about_link"  placeholder="{{ __('Enter About Link') }}" value="{{ $data->about_link }}" required>
        </div>


        <button type="submit" id="submit-btn" class="btn btn-primary mt-2 w-100">{{ __('Submit') }}</button>

      </form>
    </div>
  </div>


@endsection

@section('scripts')

@endsection
