@extends('templates.template')

@section('pageTitle')
    Admin - School Teacher Edit
@endsection

@section('pageName')
    Detail Pengajar Sekolah
@endsection

@section('backgroundSidebar')
    bg-purple
@endsection

@section('pageBreadcumb')
    <li class="breadcrumb-item"><a href="{{ url('/admin/school') }}" class="text-purple">Daftar Sekolah</a></li>
    <li class="breadcrumb-item active"><a class="text-secondary">Data Pengajar</a></li>
@endsection

@section('pageMenuSidebar')
    <li class="nav-header">ADMIN MODE</li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-graduation-cap text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Daftar Sekolah</p>
                    <br>
                    <p class="text-secondary font-weight-light">Daftar Sekolah yang sudah diinputkan</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/setting') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-user-circle text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Pengaturan Akun</p>
                    <br>
                    <p class="text-secondary font-weight-light">Akun Admin</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/login') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase text-danger">Keluar</p>
                    <br>
                    <p class="text-secondary font-weight-light">Sign Out untuk keluar sesi</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-header"><div class="dropdown-divider p2"></div></li>
    <li class="nav-header">
        <h6>NAMA SEKOLAH</h6>
        <h4 class="font-weight-bold font-weight-900">SDN 01 NEW YORK</h4>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school/detail/school_dashboard') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-tachometer-alt text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Dashboard</p>
                    <br>
                    <p class="text-secondary font-weight-light">Materi dan tugas yang diberikan oleh guru</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school/detail/school_info') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-pencil-alt text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Informasi Dasar</p>
                    <br>
                    <p class="text-secondary font-weight-light">Informasi tentang sekolah</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school/detail/school_teacher') }}" class="nav-link bg-purple rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-user-friends text-white"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Data Pengajar</p>
                    <br>
                    <p class="text-light font-weight-light">Data semua guru pada sekolah</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school/detail/school_student') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-user-graduate text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Data Siswa</p>
                    <br>
                    <p class="text-secondary font-weight-light">Data semua siswa pada sekolah</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school/detail/school_class') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-graduation-cap text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Data Kelas</p>
                    <br>
                    <p class="text-secondary font-weight-light">Data semua kelas pada sekolah</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school/detail/school_studies') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-book text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Data Pelajaran</p>
                    <br>
                    <p class="text-secondary font-weight-light">Data semua pelajaran pada kelas</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item p3 mt-1 mb-1">
        <a href="{{ url('/admin/school/detail/school_schedule') }}" class="nav-link bg-white rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-book-open text-purple"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Data Jadwal</p>
                    <br>
                    <p class="text-secondary font-weight-light">Data semua jadwal pada mapel kelas</p>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-header"><div class="dropdown-divider p3 mb-4"></div></li>
@endsection

@section('pageContent')
<!-- Main row -->
<div class="row">
	<!-- main col -->
	<section class="col-lg connectedSortable">
        <a class="btn bg-purple shadow-sm mb-2" href="{{ url('/admin/school/detail/school_teacher') }}"><i class="fas fa-arrow-left"></i> Kembali</a>
		<!-- Custom tabs (Charts with tabs)-->
		<div class="card">
			<!-- <div class="card-header">

			</div> --><!-- /.card-header -->
			<div class="card-body">
				<div class="tab-content p-0">
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto Profil</label>
                                <br>
                                <img class="profile-user-img img-fluid img-circle mt-2 mb-2 shadow-sm" src="{{ asset('templates/dist/img/avatar.png') }}" alt="Teacher profile picture">
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="teacherName">Nama</label>
                                    <input type="name" class="form-control" id="teacherName" name="teacherName" placeholder="Masukkan Nama Guru" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label for="teacherNIK">NIK / NIP</label>
                                    <input type="number" class="form-control" id="teacherNIK" name="teacherNIK" placeholder="Masukkan NIK / NIP Guru" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label for="teacherUsername">Pengguna</label>
                                    <input type="name" class="form-control" id="teacherUsername" name="teacherUsername" placeholder="Masukkan Nama Pengguna Guru">
                                </div>

                                <div class="form-group">
                                    <label for="teacherAddress">Alamat</label>
                                    <textarea class="form-control" id="teacherAddress" name="teacherAddress" placeholder="Masukkan Alamat Guru"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="teacherPhone">No. Handphone</label>
                                    <input type="number" class="form-control" id="teacherPhone" name="teacherPhone" placeholder="Masukkan Nomor HP Guru">
                                </div>
                                <div class="form-group">
                                    <label for="teacherOldPassword">Password Lama</label>
                                    <input type="password" class="form-control" id="teacherOldPassword" name="teacherOldPassword" placeholder="Kata Sandi Lama">
                                </div>
                                <div class="form-group">
                                    <label for="teacherNewPassword">Password Baru</label>
                                    <input type="password" class="form-control" id="teacherNewPassword" name="teacherNewPassword" placeholder="Kata Sandi Baru">
                                </div>
                                <div class="form-group">
                                    <label for="teacherConfirmPassword">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" id="teacherConfirmPassword" name="teacherConfirmPassword" placeholder="Konfirmasi Kata Sandi Baru">
                                </div>
                                <button type="button" class="btn bg-purple btn-block">Ubah kata sandi</button>
                            </div>
                        </div>

                    </div>
				</div>
			</div><!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
	<!-- main col -->
</div>
<!-- /.row (main row) -->
@endsection
