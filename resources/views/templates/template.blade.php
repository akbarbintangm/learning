<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('pageTitle')</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/jqvmap/jqvmap.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/dist/css/adminlte.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/summernote/summernote-bs4.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<style>
    .page-item.active .page-link {
            background-color: #6f42c1!important;
            border: 1px solid #6f42c1!important;
    }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
	<img class="animation__shake" src="{{ asset('templates') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

@include('templates.navbar')

@include('templates.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-purple font-weight-bold">@yield('pageName')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/school') }}" class="text-purple">Home</a></li>
                    @yield('pageBreadcumb')
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
	<div class="container-fluid">
		@yield('pageContent')
	</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; 2021 <a href="{{ url('/') }}" class="text-purple">FlippClass</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
	<b>Version</b> 1.0
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{ asset('templates') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('templates') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    // UI Button
    $.widget.bridge('uibutton', $.ui.button)

    // Datatable
    $(function () {
        $("#table").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
    });
</script>
<script src="{{ asset('templates') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('templates') }}/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('templates') }}/plugins/sparklines/sparkline.js"></script>
<script src="{{ asset('templates') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('templates') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{ asset('templates') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{ asset('templates') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('templates') }}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('templates') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{ asset('templates') }}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{ asset('templates') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('templates') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('templates') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('templates') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('templates') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script src="{{ asset('templates') }}/dist/js/adminlte.js"></script>
<script src="{{ asset('templates') }}/dist/js/demo.js"></script>
<script src="{{ asset('templates') }}/dist/js/pages/dashboard.js"></script>
</body>
</html>
