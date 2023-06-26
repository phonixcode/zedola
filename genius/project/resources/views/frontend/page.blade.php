@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- Hero Content -->
    <section class="hero-section bg--overlay bg_img" data-img="{{ asset('assets/images/'.$gs->breadcumb_banner) }}">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">{{ $page->title }}</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('front.index')}}">@lang('Home')</a>
                    </li>
                    <li>
                        @lang('Pages')
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Hero Content -->


	<!-- About -->
	<section class="about-section position-relative pt-100 pb-50 overflow-hidden">
		<div class="container">
			<div class="row gy-5 justify-content-between align-items-center">
				<div class="col-lg-12">
					<div class="about-content">
						<div class="section-title">
							<p>
								@php
									echo $page->details;
								@endphp
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About -->
@endsection

@push('js')

@endpush
