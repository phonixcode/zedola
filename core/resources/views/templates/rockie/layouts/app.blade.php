<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ $general->siteName(__($pageTitle)) }}</title>
    @include('partials.seo')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'app/dist/app.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- End Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/global/css/line-awesome.min.css')}}" />
    {{-- <link rel="shortcut icon" href="{{ asset($activeTemplateTrue.'assets/images/logo/favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset($activeTemplateTrue.'assets/images/logo/favicon.png') }}" /> --}}
    @stack('style-lib')
    @stack('style')

</head>

<body class="body header-fixed">
    @stack('fbComment')

    @yield('panel')

    <script src="{{ asset($activeTemplateTrue.'app/js/aos.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/jquery.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/jquery.easing.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/popper.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/jquery.peity.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/apexcharts.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/switchmode.js')}}"></script>

    <script src="{{ asset($activeTemplateTrue.'app/js/chart.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <!-- Swiper JS -->
    <script src="{{ asset($activeTemplateTrue.'app/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue.'app/js/swiper.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue.'app/js/app.js') }}"></script>

    @stack('script-lib')
    @stack('script')
    @include('partials.plugins')
    @include('partials.notify')
</body>

</html>
