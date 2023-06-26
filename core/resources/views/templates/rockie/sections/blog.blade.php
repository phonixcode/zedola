@php
    $content = getContent('blog.content', true);
    $elements = getContent('blog.element', limit: 3);
@endphp
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-text center">
                    <h3 class="heading">{{ __(@$content->data_values->heading) }}</h3>
                    <p class="desc">
                        {{ __(@$content->data_values->sub_heading) }}
                    </p>
                </div>
            </div>
            @foreach ($elements as $element)
            <div class="col-md-4">
                <div class="blog-box">
                    <div class="box-image">
                        <img src="{{ getImage('assets/images/frontend/blog/thumb_' . @$element->data_values->image, '430x210') }}" alt="" />

                    </div>

                    <div class="box-content">
                        <a href="{{ route('blog.details', [$element->id, slug(@$element->data_values->title)]) }}" class="title">{{ __(@$element->data_values->title) }}</a><br>
                        <a href="{{ route('blog.details', [$element->id, slug(@$element->data_values->title)]) }}" class="mb-3"><p>{{ strLimit(strip_tags(@$element->data_values->description), 120) }}</p></a>
                        <div class="meta">
                            <a href="#" class="name"><span></span>Admin</a>
                            <a href="#" class="time">{{ showDateTime($element->created_at, 'd M Y') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- <section class="blog-section bg--section pt-120 pb-120">
    <div class="container">
        <div class="section__header">
            <h3 class="title">{{ __(@$content->data_values->heading) }}</h3>
            <p> {{ __(@$content->data_values->sub_heading) }} </p>
        </div>
        <div class="row justify-content-center">
            @foreach ($elements as $element)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item h-100">
                        <div class="post__thumb">
                            <a href="{{ route('blog.details', [@$element->id, slug(@$element->data_values->title)]) }}">
                                <img
                                    src="{{ getImage('assets/images/frontend/blog/thumb_' . @$element->data_values->image, '430x210') }}">
                            </a>
                        </div>
                        <div class="post__content">
                            <h6 class="post__title">
                                <a
                                    href="{{ route('blog.details', [$element->id, slug(@$element->data_values->title)]) }}">
                                    {{ __(@$element->data_values->title) }}
                                </a>
                            </h6>
                            <div class="meta__date">
                                <div class="meta__item">
                                    <i class="las la-calendar"></i>
                                    {{ showDateTime($element->created_at, 'd M Y') }}
                                </div>
                            </div>
                            <div class="blog-short-desc">
                                <a
                                    href="{{ route('blog.details', [$element->id, slug($element->data_values->title)]) }}">{{ strLimit(strip_tags(@$element->data_values->description), 120) }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}
