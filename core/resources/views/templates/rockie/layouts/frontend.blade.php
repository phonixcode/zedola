@extends($activeTemplate . 'layouts.app')
@section('panel')
    @include($activeTemplate . 'partials.header')

    @if (!request()->routeIs('home'))
        @include($activeTemplate . 'partials.breadcrumb')
    @endif

    @yield('content')

    @php
        $content = getContent('get_started.content', true);
    @endphp
    @if (@$content)
        <section class="section-sale">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="block-text">
                            <h4 class="heading">{{ __(@$content->data_values->heading) }}</h4>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="button">
                            <a href="{{ __(@$content->data_values->button_url) }}">
                                {{ __(@$content->data_values->button_name) }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @include($activeTemplate . 'partials.footer')
@endsection
