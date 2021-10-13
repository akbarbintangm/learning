@extends('templates.template')

@section('pageTitle')
    Admin - Profile
@endsection

@section('pageName')
    Pengaturan Akun
@endsection

@section('backgroundSidebar')
    bg-purple
@endsection

@section('pageBreadcumb')
    <li class="breadcrumb-item active"><a class="text-secondary">Pengaturan Akun</a></li>
@endsection

@section('pageMenuSidebar')
    <li class="nav-header">ADMIN MODE</li>
    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/admin/school') }}" class="nav-link">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <p>Daftar Sekolah</p>
        </a>
    </li>
    <li class="nav-item mt-1 mb-1">
        <a href="{{ url('/admin/setting') }}" class="nav-link active">
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
            <form>
                <div class="card-header">
                    <div class="card-title">
                        Identitas Diri
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content p-0">
                        <div class="form-group">
                            <label for="adminName">Username</label>
                            <input type="text" class="form-control" id="adminName" name="adminName" placeholder="" value="Jajang Romi" readonly disabled>
                        </div>
                        <div class="form-group">
                            <label for="adminEmail">Email address</label>
                            <input type="email" class="form-control" id="adminEmail" name="adminEmail" placeholder="" value="jajang1234@gmail.com" readonly disabled>
                        </div>
                    </div>
                </div><!-- /.card-body -->
                <div class="card-footer text-right">
                    <!-- <button type="submit" class="btn btn-purple bg-purple shadow-sm">Submit</button> -->
                </div><!-- /.card-footer -->
            </form>
		</div>
		<!-- /.card -->
	</section>
	<!-- main col -->

    <!-- main col -->
	<section class="col-lg connectedSortable">
		<!-- Custom tabs (Charts with tabs)-->
		<div class="card">
			<form>
                <div class="card-header">
                    <div class="card-title">
                        Pengaturan Kata Sandi
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content p-0">
                            <div class="form-group">
                                <label for="adminOldPassword">Password Lama</label>
                                <input type="password" class="form-control" id="adminOldPassword" name="adminOldPassword" placeholder="Masukkan Kata Sandi Lama">
                            </div>
                            <div class="form-group">
                                <label for="adminNewPassword">Password Baru</label>
                                <input type="password" class="form-control" id="adminNewPassword" name="adminNewPassword" placeholder="Masukkan Kata Sandi Baru">
                            </div>
                            <div class="form-group">
                                <label for="adminVerifNewPassword">Verifikasi Password Baru</label>
                                <input type="password" class="form-control" id="adminVerifNewPassword" name="adminVerifNewPassword" placeholder="Masukkan Kata Sandi Baru Lagi">
                            </div>
                    </div>
                </div><!-- /.card-body -->
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-purple bg-purple shadow-sm">Perbarui</button>
                </div><!-- /.card-footer -->
            </form>
		</div>
		<!-- /.card -->
	</section>
	<!-- main col -->
</div>
<!-- /.row (main row) -->
@endsection
