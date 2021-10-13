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
        <a href="{{ url('/admin/setting') }}" class="nav-link bg-purple rounded shadow">
            <div class="row justify-content-center">
                <div class="col-2 text-center align-self-center">
                    <i class="nav-icon fas fa-user-circle text-white"></i>
                </div>
                <div class="col-10 align-self-center">
                    <p class="font-weight-bold text-uppercase">Pengaturan Akun</p>
                    <br>
                    <p class="text-light font-weight-light">Akun Admin</p>
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
