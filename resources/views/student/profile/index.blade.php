@extends('templates.template')

@section('pageTitle')
    Student - Pelajaran
@endsection

@section('pageName')
    Profile
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
        <a href="{{ url('/student/profile') }}" class="nav-link bg-purple">
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
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Foto Profil</label>
                                            <img class="profile-user-img img-fluid img-circle mt-2 mb-2"
                                                src="{{ asset('im/Frame-131.png') }}" alt="User profile picture">
                                            <input type="file" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                        </div>
                                        <button type="button" class="btn bg-purple btn-block">Simpan</button>
                                    </div>
                                </div>

                                <div class="col-8">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelas</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nomer Induk</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Orangtua/ Wali :</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat :</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No. Handphone</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Pengaturan Kata Sandi</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Kata Sandi Lama">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Kata Sandi Baru">
                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Konfirmasi Kata Sandi">
                            </div>

                            <button type="button" class="btn bg-purple btn-block">Ubah kata sandi</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row (main row) -->
@endsection
