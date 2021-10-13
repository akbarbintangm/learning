@extends('templates.template')

@section('pageTitle')
    Admin - School Info
@endsection

@section('pageName')
    Data Informasi Sekolah
@endsection

@section('backgroundSidebar')
    bg-purple
@endsection

@section('pageBreadcumb')
    <li class="breadcrumb-item"><a href="{{ url('/admin/school') }}" class="text-purple">Daftar Sekolah</a></li>
    <li class="breadcrumb-item active"><a class="text-secondary">Informasi Sekolah</a></li>
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
        <a href="{{ url('/admin/school/detail/school_info') }}" class="nav-link active">
        <i class="nav-icon fas fa-pencil-alt"></i>
        <p>Informasi Dasar</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school/detail/school_teacher') }}" class="nav-link">
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
<!-- Small boxes (Stat box) -->
<div class="row">
	<!-- main col -->
	<section class="col-lg connectedSortable">
		<!-- Custom tabs (Charts with tabs)-->
		<div class="card">
            <form>
                <div class="card-header">
                    <div class="card-title">
                        Informasi Sekolah
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="form-group">
                            <label for="schoolName">Nama Sekolah</label>
                            <input type="text" class="form-control" id="schoolName" name="schoolName" placeholder="Nama Sekolah" value="SDN 1 New York" readonly disabled>
                        </div>
                        <div class="form-group">
                            <label for="schoolAddress">Alamat Sekolah</label>
                            <textarea class="form-control" id="schoolAddress" name="schoolAddress" placeholder="Alamat Sekolah" readonly disabled>Jl. Mawar</textarea>
                        </div>
                        <div class="form-group">
                            <label for="schoolPhone">No Telp / Handphone</label>
                            <input type="number" class="form-control" id="schoolPhone" name="schoolPhone" placeholder="Nomor Telepon" value="089890980999">
                        </div>
                        <div class="form-group">
                            <label for="principalSchool">Kepala Sekolah</label>
                            <input type="name" class="form-control" id="principalSchool" name="principalSchool" placeholder="Nomor Telepon" value="Zaerudin">
                        </div>
                    </div>
                </div><!-- /.card-body -->
                <div class="card-footer text-right">
                    <button type="submit" class="btn bg-warning shadow-sm">Ubah Data</button>
                </div><!-- /.card-footer -->
            </form>
		</div>
		<!-- /.card -->
    </section>
	<!-- main col -->
	<section class="col-lg-4 connectedSortable">
		<!-- Custom tabs (Charts with tabs)-->
		<div class="card">
            <div class="card-body">
                <div class="tab-content p-2">
                    <p>Bergabung di Flippclass.id Sejak</p>
                    <p class="text-purple font-weight-bold"><i class="fas fa-calendar mr-2"></i> 21 September 2021</p>
                </div>
            </div>
		</div>
		<!-- /.card -->
	</section>
	<!-- main col -->
</div>
<!-- /.row (main row) -->
@endsection
