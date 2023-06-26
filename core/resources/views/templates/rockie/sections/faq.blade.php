@php
    $content = getContent('faq.content', true);
    $elements = getContent('faq.element');
@endphp
<section class="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-text center">
                    <h3 class="heading">{{ __(@$content->data_values->heading) }}</h3>
                    <p class="desc fs-20">{{ __(@$content->data_values->sub_heading) }}</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="flat-accordion">
                    @foreach ($elements as $element)
                    <div class="flat-toggle">
                        <h6 class="toggle-title">{{ __(@$element->data_values->question) }}</h6>
                        <div class="toggle-content">
                            <p>
                                {{ __(@$element->data_values->answers) }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="faqs-sectioin pt-120 pb-120">
    <div class="container">
        <div class="section__header">
            <h3 class="title">{{ __(@$content->data_values->heading) }}</h3>
            <p>{{ __(@$content->data_values->sub_heading) }}</p>
        </div>
        <div class="faq__wrapper">
            @foreach ($elements as $element)
                <div class="faq__item @if ($loop->first) open active @endif">
                    <div class="faq__title">
                        <h6 class="title">{{ __(@$element->data_values->question) }}</h6>
                        <span class="right__icon"></span>
                    </div>
                    <div class="faq__content">
                        <p>{{ __(@$element->data_values->answers) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
