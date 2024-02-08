<!DOCTYPE html>
<html lang="{{ str_replace(' _ ', '|', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- Estilos para AdminLTE -->
        <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/css/vendor.bundle.base.css') }}" />
        <link rel="stylesheet" href="{{ asset('adminlte/assets/css/modern-vertical/style.css') }}" />
        {{-- Table cs --}}
        <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
        <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/select2/select2.min.css') }}" />

        <link rel="shortcut icon" href="{{ asset('adminlte/assets/images/favicon.png') }}" />
        <link rel="stylesheet" href="{{ asset('adminlte/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
     
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css" integrity="sha512-MeagJSJBgWB9n+Sggsr/vKMRFJWs+OUphiDV7TJiYu+TNQD9RtVJaPDYP8hA/PAjwRnkdvU+NsTncYTKlltgiw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

        @routes
        
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body>
        @inertia
            <!-- Scripts para AdminLTE -->
            <script src="{{ asset('adminlte/assets/vendors/js/vendor.bundle.base.js') }}"></script>
            <script src="{{ asset('adminlte/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset('adminlte/assets/vendors/select2/select2.min.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/select2.js') }}"></script>

            <script src="{{ asset('adminlte/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
            <script src="{{ asset('adminlte/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
            <script src="{{ asset('adminlte/assets/js/data-table.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/off-canvas.js')}}"></script>

            <script src="{{ asset('adminlte/assets/js/formpickers.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/jquery.cookie.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/misc.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/settings.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/todolist.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/dashboard.js') }}"></script>
        
            <script src="{{ asset('adminlte/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>           
            <script src="{{ asset('adminlte/assets/js/file-upload.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/typeahead.js') }}"></script>
            <script src="{{ asset('adminlte/assets/js/modal-demo.js')}}"></script>
           
            {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone-amd-module.min.js"></script> --}}
            
    </body>
</html>