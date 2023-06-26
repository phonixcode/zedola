@extends('layouts.front')

@push('css')

@endpush

@section('content')


        <!-- Hero Content -->
        <section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
            <div class="container">
                <div class="hero-content">
                    <h2 class="hero-title">@lang('Error Page')</h2>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{route('front.index')}}">@lang('Home')</a>
                        </li>
                        <li>
                            @lang('404')

                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Hero Content -->


	<!-- About -->
	<section class="about-section pt-100 pb-50">
		<div class="container">
			<div class="row gy-5 justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
                        <h3>
                            {{ $gs->error_title}}
                        </h3>
                        <div class="error-img">
                            <img src="{{ asset('assets/images/'.$gs->error_photo)}}" alt="blog" class="mw-100 my-5">
                        </div>

                        <p>
                            {{ $gs->error_text}}
                        </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About -->



@endsection

@push('js')

@endpush
