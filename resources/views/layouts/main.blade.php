<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASSET MANAGEMENT APP</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/fontawesome-free/css/all.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminLTE3/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/summernote/summernote-bs4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminLTE3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    @include('layouts.includes.header')
    @include('layouts.includes.left_side_bar')

    <div class="content-wrapper">
        {{-- @include('sweetalert::alert') --}}
        @yield('content')
    </div>
</div>

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('adminLTE3/plugins/jquery/jquery.min.js')  }}"></script>
<script src="{{ asset('adminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('adminLTE3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('adminLTE3/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('adminLTE3/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('adminLTE3/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('adminLTE3/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('adminLTE3/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

{{-- Datatables--}}
<script src="{{ asset('adminLTE3/plugins/datatables/jquery.dataTables.min.js')  }}"></script>
<script src="{{ asset('adminLTE3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')  }}"></script>
<script src="{{ asset('adminLTE3/plugins/datatables-responsive/js/dataTables.responsive.min.js')  }}"></script>
<script src="{{ asset('adminLTE3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')  }}"></script>

<script src="{{ asset('adminLTE3/dist/js/pages/dashboard2.js')}}"></script>

<script src="{{ asset('adminLTE3/plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{ asset('adminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('adminLTE3/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('adminLTE3/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });

        $('.select2').select2()

        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        $(function () {
            $('.textarea').summernote({
                height: 300,                 // setting editor height
                minHeight: null,             // setting minimum height of editor
                maxHeight: null,            // setting maximum height of editor
                toolbar: [
                    ['font', ['bold', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    // ['view', ['fullscreen', 'codeview', 'help']]
                ]
            })
        })
    });
</script>
@stack('scripts')

</body>
</html>
