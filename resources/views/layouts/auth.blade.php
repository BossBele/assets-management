<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/fontawesome-free/css/all.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminLTE3/dist/css/adminlte.css') }}">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <!-- Styles -->
</head>
<body class="hold-transition login-page">
        @yield('content')

<script src="{{ asset('adminLTE3/plugins/jquery/jquery.min.js')  }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<!-- AdminLTE App -->
<script src="{{ asset('adminLTE3/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('adminLTE3/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('adminLTE3/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->

</body>
</html>
