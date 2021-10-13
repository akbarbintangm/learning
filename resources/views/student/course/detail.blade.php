@extends('templates.template')

@section('pageTitle')
    Student - Pelajaran
@endsection

@section('pageName')
    Ilmu Pengetahuan Sosial ( IPS )
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
        <a href="{{ url('/student/material_task') }}" class="nav-link bg-white">
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
                        <div class="card-body">
                            <div class="tab-content p-0 table-responsive">
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Pertemuan</th>
                                            <th>Materi</th>
                                            <th>Presensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>18 Sept 2021</td>
                                            <td>1</td>
                                            <td>Pengenalan bersosialisasi</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-block bg-gradient-success disabled">Hadir</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- /.card-body -->
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Detail</h3>
                        </div>
                        <div class="card-body">
                            <h5><b>Jadwal</b></h5>
                            <p class="quote-secondary mb-0">Hari: Senin</p>
                            <p class="quote-secondary">Jam : 08.00 - 09.00</p>
                            <hr>
                            <h5><b>Profil Guru</b></h5>
                            <img class="profile-user-img img-fluid img-circle mt-2" src="{{ asset('im/Frame-131.png') }}"
                                alt="User profile picture">
                            <h5 class="mt-2"><b>Nama</b></h5>
                            <p class="quote-secondary">William</p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row (main row) -->
@endsection
