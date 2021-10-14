@extends('templates.template')

@section('pageTitle')
    Admin - School Teacher
@endsection

@section('pageName')
    Data Pengajar Sekolah
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
		<!-- Custom tabs (Charts with tabs)-->
		<div class="card">
			<div class="card-header">
				<div class="card-tools">
					<a href="{{ url('/admin/school/delete') }}" class="btn rounded btn-danger shadow-sm"><i class="fas fa-trash"></i> Hapus Semua</a>
                    <a href="{{ url('/admin/school/uploads') }}" class="btn rounded btn-success shadow-sm"><i class="fas fa-download"></i> Import Data Pengajar</a>
				    <a href="{{ url('/admin/school/create') }}" class="btn rounded bg-purple shadow-sm"><i class="fas fa-plus"></i> Tambah Pengajar</a>
                </div>
			</div><!-- /.card-header -->
			<div class="card-body">
				<div class="tab-content p-0 table-responsive">
					<table id="table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengajar</th>
                                <th>NIK/NIP</th>
                                <th>Kelas yang Diajarkan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jajang Romi</td>
                                <td>627273636367</td>
                                <td>
                                    <a href="{{ url('/admin/school/detail/school_teacher/show') }}" class="btn rounded bg-purple shadow-sm d-block">Detail Kelas</a>
                                </td>
                                <td>
                                    <a href="{{ url('/admin/school/detail/school_teacher/edit') }}" class="btn rounded btn-warning shadow-sm">Ubah</a>
                                    <a href="{{ url('/admin/school/detail/school_teacher/delete') }}" class="btn rounded btn-danger shadow-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengajar</th>
                                <th>NIK/NIP</th>
                                <th>Kelas yang Diajarkan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
				</div>
			</div><!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
	<!-- main col -->
</div>
<!-- /.row (main row) -->
@endsection
