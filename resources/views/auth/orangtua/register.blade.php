
@extends('auth.layouts.main')

@section('title', 'Register Orang Tua')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-5 col-sm-8">
        <div class="card">
            <div class="card-body p-4">
                <div class="p-2">
                    <h5 class="mb-5 text-center">Register Orang Tua</h5>
                    <form class="form-horizontal" action="{{ url('orangtua/register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-custom mb-4">
                                    <input type="text" class="form-control" name="nama" id="nama" required="">
                                    <label for="nama">Nama Orang Tua</label>
                                </div>

                                <div class="form-group form-group-custom mb-4">
                                    <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required="">
                                    <label for="nama_siswa">Nama Siswa</label>
                                </div>
                                <div class="form-group form-group-custom mb-4" >
                                    <textarea name="alamat" type="text" class="form-control" id="alamat" required=""></textarea>
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="form-group form-group-custom mb-4">
                                    <input name="no_handphone" type="text" class="form-control" id="no_handphone" required="">
                                    <label for="no_handphone">Nomor Handphone</label>
                                </div>
                                <div class="form-group form-group-custom mb-4">
                                    <input type="email" class="form-control" name="email" id="email" required="">
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-group form-group-custom mb-4">
                                    <input type="password" class="form-control" name="password" id="password" required="">
                                    <label for="password">Password</label>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Daftar</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="auth-login.html" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Sudah punya akun?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
