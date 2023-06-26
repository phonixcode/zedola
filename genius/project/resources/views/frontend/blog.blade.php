@extends('layouts.front')

@push('css')

@endpush

@section('content')

    <!-- Hero Content -->
    <section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">@lang('Blog Posts')</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('front.index')}}">@lang('Home')</a>
                    </li>
                    <li>
                        @lang('Blog Posts')
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Hero Content -->

    <section class="blog-section overflow-hidden pb-100 pt-100">
        <div class="container">
            <div class="row g-4 justify-content-center wow fadeInRight" data-wow-duration="1500ms">
                @if (count($blogs) == 0)
                    <div class="col-12 text-center">
                        <h3 class="m-0">{{__('No Blog Found')}}</h3>
                    </div>
                @else
                @foreach ($blogs as $key=>$data)
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item">
                            <div class="post-item__img">
                                <a href="{{ route('blog.details',$data->slug) }}">
                                    <img src="{{asset('assets/images/'.$data->photo)}}" alt="blog">
                                </a>
                                <span class="date">
                                    <span>{{ $data->created_at->format('M') }}</span>
                                    <span>{{ $data->created_at->format('d') }}</span>
                                </span>
                            </div>
                            <div class="post-item__content">
                                <div class="meta-post">
                                    <span class="me-2"><i class="fas fa-user"></i> @lang('Admin')</span>
                                </div>
                                <h5 class="title"><a href="{{ route('blog.details',$data->slug) }}">{{ Str::limit($data->title,30) }}</a></h5>
                                <a href="{{ route('blog.details',$data->slug) }}" class="read-more">@lang('Read More')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
				@endif
            </div>
        </div>
    </section>

    @include('partials.front.cta')

@endsection

@push('js')

@endpush
