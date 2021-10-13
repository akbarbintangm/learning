@extends('templates.template')

@section('pageTitle')
    Student - Pelajaran
@endsection

@section('pageName')
    Pelajaran
@endsection

@section('backgroundSidebar')
    bg-purple
@endsection

@section('pageBreadcumb')
    {{-- <li class="breadcrumb-item active"><a class="text-secondary">Daftar Sekolah</a></li> --}}
@endsection

@section('pageMenuSidebar')
    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/student') }}" class="nav-link bg-white">
            <div class="row">
                <div class="col-2">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="col-10">
                    <p class="text-center"><b>Dashboard</b></p></br>
                    <p class="ml-">Overview tugas, ketidakhadiran, menyimak</p>
                </div>
            </div>
        </a>
    </li>

    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/student/course') }}" class="nav-link bg-purple">
            <div class="row">
                <div class="col-2">
                    <i class="far fa-file-alt"></i>
                </div>
                <div class="col-10">
                    <p class="text-center"><b>Mata Pelajaran</b></p></br>
                    <p class="ml-">Mata pelajaran yang didapat</p>
                </div>
            </div>
        </a>
    </li>

    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/admin/school') }}" class="nav-link bg-white">
            <div class="row">
                <div class="col-2">
                    <i class="far fa-chart-bar"></i>
                </div>
                <div class="col-10">
                    <p class="text-center"><b>Nilai</b></p></br>
                    <p class="ml-">Lihat nilai per tugas</p>
                </div>
            </div>
        </a>
    </li>

    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/admin/school') }}" class="nav-link bg-white">
            <div class="row">
                <div class="col-2">
                    <i class="fas fa-user"></i>
                </div>
                <div class="col-10">
                    <p class="text-center"><b>Data Diri</b></p></br>
                    <p class="ml-">Ubah foto, lihat data diri</p>
                </div>
            </div>
        </a>
    </li>


    <li class="nav-item mt-1 mb-1 text-danger">
        <a href="{{ url('/login') }}" class="nav-link bg-white text-danger">
            <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
            <p class="text-danger"><b>Keluar</b></p>
        </a>
    </li>
@endsection

@section('pageContent')
    <!-- Main row -->
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.row (main row) -->
@endsection
