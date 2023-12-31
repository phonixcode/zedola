@extends($activeTemplate.'layouts.frontend')
@section('content')
{{-- <section class="blog-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center gy-4">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="post__item h-100">
                    <div class="post__thumb">
                        <a href="{{ route('blog.details', [$blog->id, slug($blog->data_values->title)]) }}">
                            <img src="{{ getImage('assets/images/frontend/blog/thumb_'. $blog->data_values->image, '430x210')}}">
                        </a>
                    </div>
                    <div class="post__content">
                        <h6 class="post__title">
                            <a href="{{ route('blog.details', [$blog->id, slug($blog->data_values->title)]) }}">{{__(@$blog->data_values->title)}}</a>
                        </h6>
                        <div class="meta__date">
                            <div class="meta__item">
                                <i class="las la-calendar"></i>
                                {{showDateTime($blog->created_at,'d M Y')}}
                            </div>
                        </div>
                        <div class="blog-short-desc">
                           <a href="{{ route('blog.details', [$blog->id, slug($blog->data_values->title)]) }}">{{ strLimit(strip_tags(@$blog->data_values->description),120) }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{paginateLinks($blogs) }}
    </div>
</section> --}}
<section class="blog">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="blog-box">
                    <div class="box-image">
                        <img src="{{ getImage('assets/images/frontend/blog/thumb_'. $blog->data_values->image, '430x210')}}" alt="" />

                    </div>

                    <div class="box-content">
                        <a href="{{ route('blog.details', [$blog->id, slug($blog->data_values->title)]) }}" class="title">{{__(@$blog->data_values->title)}}</a><br>
                        <a href="{{ route('blog.details', [$blog->id, slug($blog->data_values->title)]) }}" class="mb-3"><p>{{ strLimit(strip_tags(@$blog->data_values->description),120) }}</p></a>
                        <div class="meta">
                            <a href="#" class="name"><span></span>Admin</a>
                            <a href="#" class="time">{{showDateTime($blog->created_at,'d M Y')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{paginateLinks($blogs) }}
    </div>
</section>
@endsection

@push('style')
<style>
    .pagination {
        justify-content: center;
    }
</style>
@endpush
