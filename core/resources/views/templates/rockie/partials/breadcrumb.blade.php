@php $content = getContent('breadcrumb.content', true); @endphp
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="heading">{{ __($pageTitle) }}</h3>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <p class="fs-18">/</p>
                    </li>
                    <li>
                        <p class="fs-18">{{ __($pageTitle) }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{-- <section class="hero-section bg--overlay bg_img bg_fixed"
    data-background="{{ getImage('assets/images/frontend/breadcrumb/' . @$content->data_values->background_image, '1200x600') }}">
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="m-0">{{ __($pageTitle) }}</h2>
        </div>
    </div>
</section> --}}
