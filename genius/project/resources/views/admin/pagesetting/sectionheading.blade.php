@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Section Heading') }}</h5>
    <ol class="breadcrumb py-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">{{ __('Home Page Manage') }}</a></li>
    </ol>
    </div>
</div>

    <div class="card mb-4 mt-3">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Section Heading') }}</h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="{{route('admin.ps.update')}}" method="POST" enctype="multipart/form-data">

            @include('includes.admin.form-both')

            {{ csrf_field() }}

            <div class="form-group">
              <label for="transaction-title">{{ __('Transaction Title') }} *</label>
              <input type="text" class="form-control" id="transaction-title" name="transaction_title"  placeholder="{{ __('Transaction Title') }}" value="{{ $data->transaction_title }}" required>
            </div>

            <div class="form-group">
              <label for="transaction-subtitle">{{ __('Transaction Subtitle') }} *</label>
              <textarea name="transaction_subtitle" id="transaction-subtitle" cols="30" rows="5" class="form-control summernote" placeholder="{{ __('Transaction Subtitle') }}" required>{{ $data->transaction_subtitle }} </textarea>
            </div>

            <div class="form-group">
              <label for="trade-title">{{ __('Trade Title') }} *</label>
              <input type="text" class="form-control" id="trade-title" name="trade_title"  placeholder="{{ __('Trade Title') }}" value="{{ $data->trade_title }}" required>
            </div>

            <div class="form-group">
              <label for="trade-subtitle">{{ __('Trade Subtitle') }} *</label>
              <textarea name="trade_subtitle" id="trade-subtitle" cols="30" rows="5" class="form-control summernote" placeholder="{{ __('Trade Subtitle') }}" required>{{ $data->trade_subtitle }} </textarea>
            </div>

            <div class="form-group">
              <label for="blog-title">{{ __('Blog Title') }} *</label>
              <input type="text" class="form-control" id="blog-title" name="blog_title"  placeholder="{{ __('Blog Title') }}" value="{{ $data->blog_title }}" required>
            </div>

            <div class="form-group">
              <label for="blog-text">{{ __('Blog Subtitle') }} *</label>
              <textarea name="blog_text" id="blog-text" cols="30" rows="5" class="form-control summernote" placeholder="{{ __('Blog Subtitle') }}" required>{{ $data->blog_text }} </textarea>
            </div>

            <div class="form-group">
                <label for="news-text">{{ __('Newsletter Text') }} *</label>
                <textarea name="newsletter_text" id="news-text" cols="30" rows="5" class="form-control summernote" placeholder="{{ __('Newsletter Text') }}" required>{{ $data->newsletter_text }} </textarea>
            </div>

            <button type="submit" id="submit-btn" class="btn btn-primary w-100">{{ __('Submit') }}</button>

        </form>
      </div>
    </div>
@endsection
