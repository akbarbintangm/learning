@extends('templates.template')

@section('pageTitle')
    Admin - List School
@endsection

@section('pageName')
    Daftar Sekolah
@endsection

@section('backgroundSidebar')
    bg-purple
@endsection

@section('pageBreadcumb')
    <li class="breadcrumb-item active"><a class="text-secondary">Daftar Sekolah</a></li>
@endsection

@section('pageMenuSidebar')
    <li class="nav-header">ADMIN MODE</li>
    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/admin/school') }}" class="nav-link active">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Daftar Sekolah</p>
        </a>
    </li>
    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/admin/setting') }}" class="nav-link">
        <i class="nav-icon fa fa-user-circle"></i>
        <p>Pengaturan Akun</p>
        </a>
    </li>
    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/login') }}" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Keluar</p>
        </a>
    </li>
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
					<a href="{{ url('/admin/school/create') }}" class="btn rounded bg-purple shadow-sm"><i class="fas fa-plus"></i> Tambah Sekolah</a>
				</div>
			</div><!-- /.card-header -->
			<div class="card-body">
				<div class="tab-content p-0 table-responsive">
					<table id="table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>No. Telp / Handphone</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>SDN 1 New York</td>
                                <td>Jl. Mawar</td>
                                <td>081999666333</td>
                                <td><a href="{{ url('/admin/school/detail/school_dashboard') }}" class="btn rounded bg-purple shadow-sm d-block">Detail</a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>No. Telp / Handphone</th>
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
