@extends('templates.template')

@section('pageTitle')
    Student - Pelajaran
@endsection

@section('pageName')
    <button type="button" class="btn  btn-outline-primary">Kembali</button>
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
        <a href="{{ url('/student/material_task') }}" class="nav-link bg-purple">
            <div class="row">
                <div class="col-2">
                    <i class="far fa-copy"></i>
                </div>
                <div class="col-10">
                    <p class="text-center"><b>Tugas dan Materi</b></p></br>
                    <p class="ml-">Materi dan tugas yang diberikan oleh guru</p>
                </div>
            </div>
        </a>
    </li>

    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/student/course') }}" class="nav-link bg-white">
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
        <a href="{{ url('/student/score') }}" class="nav-link bg-white">
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
        <a href="{{ url('/student/profile') }}" class="nav-link bg-white">
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-purple"><b>Pengenalan Tumbuhan 1</b></h3> </br>
                            <h6 class="mt-2">Jadwal: Senin, 13 September 2021</h6>
                        </div>
                        <div class="card-body">
                            <strong> Deskripsi Materi</strong>
                            <p class="text-muted mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                fermentum enim neque.</p>
                        </div><!-- /.card-body -->
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <strong>Tenggat Pengumpulan Tugas</strong>
                                    <h5 class="mt-1 mb-4">Senin, 20 September 2021</h5>


                                    <strong class="mt-5">Pilih Cara Belajarku</strong>
                                    <p class="text-muted">Pilihlah salah satu metode untuk materi pembelajaran kamu!</p>
                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <a class="btn btn-outline-primary" style="height: 88px">
                                                <i class="fas fa-book"></i></br> Membaca
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="btn btn-outline-primary" style="height: 88px">
                                                <i class="fas fa-play"></i></br> Lihat dan dengar
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a class="btn btn-outline-primary" style="height: 88px">
                                                <i class="fas fa-search"></i></br> Melakukan
                                            </a>
                                        </div>
                                    </div>

                                    <strong>Materi</strong></br>
                                    <a class="btn bg-purple btn-block">
                                        <i class="fas fa-download"></i> Unduh File
                                    </a>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <strong>Upload Tugas</strong>

                                    <p class="text-danger">Tidak Ada</p>

                                    <a class="btn bg-dark btn-block">
                                       Tambahkan File
                                    </a>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <strong>Catatan Orang Tuan</strong>

                                    <a class="btn btn-outline-primary btn-block mt-4">
                                       Tampilkan
                                    </a>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /.row (main row) -->
@endsection
