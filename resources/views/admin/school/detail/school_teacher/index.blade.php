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
    <li class="nav-item p2">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Daftar Sekolah</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/setting') }}" class="nav-link">
        <i class="nav-icon fa fa-user-circle"></i>
        <p>Pengaturan Akun</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/login') }}" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Keluar</p>
        </a>
    </li>
    <li class="nav-header"><div class="dropdown-divider p2"></div></li>
    <li class="nav-header text-light">
        <p>NAMA SEKOLAH</p>
        <h4 class="font-weight-bold">SDN 01 NEW YORK</h4>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_info') }}" class="nav-link">
        <i class="nav-icon fas fa-pencil-alt"></i>
        <p>Informasi Dasar</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_teacher') }}" class="nav-link active">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>Data Pengajar</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_student') }}" class="nav-link">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>Data Siswa</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_class') }}" class="nav-link">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Data Kelas</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_studies') }}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>Data Pelajaran</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_schedule') }}" class="nav-link">
        <i class="nav-icon fas fa-book-open"></i>
        <p>Data Jadwal</p>
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
                                    <a href="{{ url('/admin/school/detail/school_teacher') }}" class="btn rounded bg-purple shadow-sm d-block">Detail Kelas</a>
                                </td>
                                <td>
                                    <a href="{{ url('/admin/school/detail/school_teacher') }}" class="btn rounded btn-warning shadow-sm">Ubah</a>
                                    <a href="{{ url('/admin/school/detail/school_teacher') }}" class="btn rounded btn-danger shadow-sm">Hapus</a>
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
