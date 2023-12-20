<!DOCTYPE html>
<html lang="{{ str_replace('_', '|', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Estilos para la parte del cliente -->
        <link rel="stylesheet" href="{{ asset('/front/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('/front/assets/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('/front/assets/css/nexus.css') }}">
        <link rel="stylesheet" href="{{ asset('/front/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('/front/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/front/assets/css/custom.css') }}">

        <link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        @routes
        
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body>
        @inertia
        <!-- Scripts para la parte del cliente -->
        <script src="{{ asset('/front/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/front/assets/js/scripts.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.isotope.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('/front/assets/js/jquery.visible.js') }}"></script>
        <script src="{{ asset('/front/assets/js/slimbox2.js') }}"></script>
        <script src="{{ asset('/front/assets/js/modernizr.custom.js') }}"></script>
       
    </body>
</html>