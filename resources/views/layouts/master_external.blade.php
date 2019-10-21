<!DOCTYPE html>
    <html lang="">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- Basic SEO -->
            <meta name="description" content="Comfortable with the bare by school bus tracking">
            <meta name="robots" content="Bear Bus, BEAR BUS, School bus tracking">
            <meta name="googlebot" content="Bear Bus, BEAR BUS, School bus tracking">

            <title> @yield('title') - Bear Bus </title>

            <!-- Manifest -->
            <meta name="theme-color" content="#f1f1f1">
            <link rel="icon" href="{{ URL::asset('images/bearbus.png') }}">
            <link rel="manifest" href="../../../manifest.json">

            <!-- Bootstrap -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/bootstrap_external.min.css') }}">

            <!-- // ! StyleSheet -->

            <!-- Fullcalendar -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar/core/main.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar/daygrid/main.css') }}">
            <!-- Owl-Carousel -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.css') }}">
            <!-- Perfect-Scrollbar -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
            <!-- SweetAlert -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/sweetalert/sweetalert2.css') }}">
            <!-- WOW -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/wow/animate.css') }}">

            <!-- // TODO: Must to do everytime when you want to update stylesheet on server -->
            <link rel="stylesheet" href="{{ URL::asset('css/external/style.css?v=1.0.0.1') }}" >

            <!-- // ! Javascript -->
            <script src="{{ URL::asset('js/external/jquery-3.4.1.min.js') }}"></script>
            <script src="{{ URL::asset('plugins/bootstrap/popper_external.min.js') }}"></script>
            <script src="{{ URL::asset('plugins/bootstrap/bootstrap_external.min.js') }}"></script>

            <!-- Fullcalendar -->
            <script src="{{ URL::asset('plugins/fullcalendar/core/main.js') }}"></script>
            <script src="{{ URL::asset('plugins/fullcalendar/core/th.js') }}"></script>
            <script src="{{ URL::asset('plugins/fullcalendar/daygrid/main.js') }}"></script>
            <script src="{{ URL::asset('plugins/fullcalendar/interaction/main.js') }}"></script>
            <!-- Highcharts -->
            <script src="{{ URL::asset('plugins/highcharts/highcharts.js') }}"></script>
            <!-- Owl-Carousel -->
            <script src="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
            <!-- Perfect-Scrollbar -->
            <script src="{{ URL::asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
            <!-- Sweet-Alert -->
            <script src="{{ URL::asset('plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
            <!-- Validate -->
            <script src="{{ URL::asset('plugins/validate/jquery.validate.min.js') }}"></script>
            <!-- WOW -->
            <script src="{{ URL::asset('plugins/wow/wow.min.js') }}"></script>


            <script src="{{ URL::asset('js/external/main.js') }}"></script>

        </head>
        <body>

        @yield('content')

    </body>
</html>
