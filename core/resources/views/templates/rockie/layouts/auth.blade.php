<!DOCTYPE html>
<html>

<head>
    <title> {{ $general->siteName(__($pageTitle)) }}</title>

    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    @include('partials.seo')
    {{-- <link href="favicon.png" rel="shortcut icon">
    <link href="{{ asset($activeTemplateTrue.'dash/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ asset($activeTemplateTrue.'dash/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue.'dash/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue.'dash/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue.'dash/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue.'dash/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue.'dash/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue.'dash/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue.'dash/css/main.css?version=4.5.0')}}" rel="stylesheet">
</head>

<body class="auth-wrapper">
    @stack('fbComment')

    @yield('panel')

    <script src="{{asset('assets/global/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/global/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset($activeTemplateTrue . 'js/lightbox.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue . 'js/raf-scroll.js')}}"></script>
    <script src="{{asset($activeTemplateTrue . 'js/rafcounter.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue . 'js/owl.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue . 'js/main.js')}}"></script>

    @stack('script-lib')
    @stack('script')
    @include('partials.plugins')
    @include('partials.notify')
    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function () {
                window.location.href = "{{route('home')}}/change/" + $(this).val();
            });

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
                matched = event.matches;
                if (matched) {
                    $('body').addClass('dark-mode');
                    $('.navbar').addClass('navbar-dark');
                } else {
                    $('body').removeClass('dark-mode');
                    $('.navbar').removeClass('navbar-dark');
                }
            });

            let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (matched) {
                $('body').addClass('dark-mode');
                $('.navbar').addClass('navbar-dark');
            } else {
                $('body').removeClass('dark-mode');
                $('.navbar').removeClass('navbar-dark');
            }

            var inputElements = $('input,select');
            $.each(inputElements, function (index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $('.policy').on('click', function () {
                $.get('{{route('cookie.accept')}}', function (response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function () {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],select,textarea');
            $.each(inputElements, function (index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function (i, element) {
                var elementType = $(element);
                if (elementType.attr('type') != 'checkbox') {
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }
            });
        })(jQuery);
    </script>
</body>

</html>
