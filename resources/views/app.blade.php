<!DOCTYPE html>
<html lang="{{ str_replace(' | ', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        @php($isAdminArea = $isAdminArea ?? false)

        @if($isAdminArea)
            <!-- Estilos para AdminLTE -->
            <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
            <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
            <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/css/vendor.bundle.base.css') }}">
            <link rel="stylesheet" href="{{ asset('adminlte/assets/css/modern-vertical/style.css') }}">
            <link rel="shortcut icon" href="{{ asset('adminlte/assets/images/favicon.png') }}">
        @else
            <!-- Estilos para la parte del cliente -->
            <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
            <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.css') }}">
            <link rel="stylesheet" href="{{ asset('front/assets/css/nexus.css') }}">
            <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
            <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">

            <link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
        @endif

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @vite(['resources/js/app.js', "resources/js/Pages/Admin/{$page['component']}.vue"])

        @inertiaHead
    </head>
    <body>
        @inertia
       
        @if($isAdminArea)
            <!-- Scripts para AdminLTE -->
            <script src="{{ asset('adminlte/assets/vendors/js/vendor.bundle.base.js') }}"></script>
            <script src="{{ asset('adminlte/assets/vendors/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('adminlte/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
            <script src="{{ asset('adminlte/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
            <script src="{{ asset('adminlte/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
            <script src="{{ asset('adminlte/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/jquery.cookie.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/off-canvas.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/misc.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/settings.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/todolist.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/dashboard.js') }}"></script>

        @else
            <!-- Scripts para la parte del cliente -->
            <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('front/assets/js/scripts.js') }}"></script>
            <script src="{{ asset('front/assets/js/jquery.isotope.js') }}"></script>
            <script src="{{ asset('front/assets/js/jquery.slicknav.js') }}"></script>
            <script src="{{ asset('front/assets/js/jquery.visible.js') }}"></script>
            <script src="{{ asset('front/assets/js/slimbox2.js') }}"></script>
            <script src="{{ asset('front/assets/js/modernizr.custom.js') }}"></script>
        @endif
    </body>
</html>