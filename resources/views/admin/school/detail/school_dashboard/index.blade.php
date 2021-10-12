@extends('templates.template')

@section('pageTitle')
    Admin - School Dashboard
@endsection

@section('pageName')
    Dashboard Sekolah
@endsection

@section('backgroundSidebar')
    bg-purple
@endsection

@section('pageBreadcumb')
    <li class="breadcrumb-item"><a href="{{ url('/admin/school') }}" class="text-purple">Daftar Sekolah</a></li>
    <li class="breadcrumb-item active"><a class="text-secondary">Dashboard</a></li>
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
        <a href="{{ url('/admin/school') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-pencil-alt"></i>
        <p>Informasi Dasar</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-user-friends"></i>
        <p>Data Pengajar</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-user-graduate"></i>
        <p>Data Siswa</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Data Kelas</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>Data Pelajaran</p>
        </a>
    </li>
    <li class="nav-item p2">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-book-open"></i>
        <p>Data Jadwal</p>
        </a>
    </li>
    <li class="nav-header"><div class="dropdown-divider p3 mb-4"></div></li>
@endsection

@section('pageContent')
<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>4</h3>
				<p>Total Kelas</p>
			</div>
			<div class="icon">
				<i class="ion ion-university"></i>
			</div>
			<a href="{{ url('/admin/school/detail/school_class') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3>12</h3>
				<p>Pangajar</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-people"></i>
			</div>
			<a href="{{ url('/admin/school/detail/school_teacher') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>12</h3>
				<p>Total Siswa</p>
			</div>
			<div class="icon">
				<i class="ion ion-ios-people"></i>
			</div>
			<a href="{{ url('/admin/school/detail/school_student') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg col-6">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<h3>4</h3>
				<p>Total Mata Pelajaran</p>
			</div>
			<div class="icon">
				<i class="ion ion-ios-bookmarks"></i>
			</div>
			<a href="{{ url('/admin/school/detail/school_studies') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
</div>
<!-- /.row -->
@endsection
