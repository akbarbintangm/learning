<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>

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
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/bs-stepper/css/bs-stepper.min.css">
<link rel="stylesheet" href="{{ asset('templates') }}/plugins/dropzone/min/dropzone.min.css">
<style>
    .page-item.active .page-link {
            background-color: #6f42c1!important;
            border: 1px solid #6f42c1!important;
    }
</style>
</head>
<body class="">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__fadeIn" src="{{ asset('templates') }}/dist/img/logo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

<div class="container">
    <form>
        <!-- Content Wrapper. Contains page content -->
        <div class="row vh-100 text-center justify-content-center">
            <div class="col-lg align-self-center">
                <img class="img-fluid" src="{{ asset('templates') }}/dist/img/logo.png" alt="AdminLTELogo">
            </div>
            <div class="col-lg align-self-center p-5">
                <h1 class="m-0 text-dark font-weight-bold text-left mb-4">Masuk</h1>
                <div class="row">
                    <div class="col-lg align-self-center">
                        <div class="form-group">
                            <input type="email" class="form-control" id="adminEmail" name="adminEmail" placeholder="Masukkan Email">
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg align-self-center">
                        <div class="form-group">
                            <input type="text" class="form-control" id="adminPassword" name="adminPassword" placeholder="Masukkan Password">
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg align-self-center text-left">
                        <a href="#" class="text-purple">Forgot Password?</a>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg align-self-center text-right">
                        <button type="submit" class="btn btn-purple bg-purple shadow-sm">Masuk</button>
                    </div>
                </div> 
            </div>
        </div>
    </form>
</div>

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
<script src="{{ asset('templates') }}/plugins/select2/js/select2.full.min.js"></script>
<script src="{{ asset('templates') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="{{ asset('templates') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('templates') }}/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="{{ asset('templates') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="{{ asset('templates') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="{{ asset('templates') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="{{ asset('templates') }}/plugins/dropzone/min/dropzone.min.js"></script>
<script src="{{ asset('templates') }}/dist/js/adminlte.js"></script>
<script src="{{ asset('templates') }}/dist/js/demo.js"></script>
<script src="{{ asset('templates') }}/dist/js/pages/dashboard.js"></script>
</body>
</html>
