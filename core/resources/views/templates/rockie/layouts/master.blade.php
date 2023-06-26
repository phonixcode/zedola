<!DOCTYPE html>
<html>

<head>

    <title> {{ $general->siteName(__($pageTitle)) }}</title>

    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    @include('partials.seo')

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{ asset($activeTemplateTrue . 'dash/bower_components/select2/dist/css/select2.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}"
        rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'dash/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link
        href="{{ asset($activeTemplateTrue . 'dash/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'dash/bower_components/fullcalendar/dist/fullcalendar.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset($activeTemplateTrue . 'dash/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'dash/bower_components/slick-carousel/slick/slick.css') }}"
        rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'dash/css/main.css?version=4.5.0') }}" rel="stylesheet">

    @stack('style-lib')
    @stack('style')

</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">

    <div class="all-wrapper with-side-panel solid-bg-all">

        <div class="layout-w">
            @include($activeTemplate . 'partials.sidebar')
            <div class="content-w">

                @include($activeTemplate . 'partials.breadcrumb_dash')

                @yield('content')


            </div>
        </div>
        <div class="display-type"></div>
    </div>

    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script
        src="{{ asset($activeTemplateTrue . 'dash/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}">
    </script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap-validator/dist/validator.min.js') }}">
    </script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}">
    </script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}">
    </script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/editable-table/mindmup-editabletable.js') }}">
    </script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/datatables.net/js/jquery.dataTables.min.js') }}">
    </script>
    <script
        src="{{ asset($activeTemplateTrue . 'dash/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/fullcalendar/dist/fullcalendar.min.js') }}">
    </script>
    <script
        src="{{ asset($activeTemplateTrue . 'dash/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}">
    </script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/js/demo_customizer.js?version=4.5.0') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'dash/js/main.js?version=4.5.0') }}"></script>
    <script>
        "use strict";
        ///customize confirmation modal
        window.addEventListener('DOMContentLoaded', function (e) {
            let confirmationModal = $('#confirmationModal');
            if (confirmationModal.length > 0) {
                $(confirmationModal).addClass('custom--modal');
                $(confirmationModal).find('.close').remove();
                $(confirmationModal).addClass('p-4');
                $(confirmationModal).find('.modal-body').addClass('p-4');
                $(confirmationModal).find('.modal-header').append(`
                    <span type="button" data-bs-dismiss="modal">
                        <i class="las la-times"></i>
                    </span>
                    `);
                $(confirmationModal).find('.btn--primary').addClass('btn--base').removeClass('btn--primary');
            }
        });
    </script>
    {{-- <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-XXXXXXXX-9', 'auto');
        ga('send', 'pageview');
    </script> --}}
    @stack('script-lib')
    @stack('script')
    @include('partials.plugins')
    @include('partials.notify')
</body>

</html>
