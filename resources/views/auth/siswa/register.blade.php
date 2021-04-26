@extends('auth.layouts.main')

@section('title', 'Register Siswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-5 col-sm-8">
        <div class="card">
            <div class="card-body p-4">
                <div class="p-2">
                    <h5 class="mb-5 text-center">Register Siswa</h5>
                    <form class="form-horizontal" action="{{ url('siswa/register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-custom mb-4">
                                    <input name="nama" type="text" class="form-control" id="username" required="">
                                    <label for="username">Nama</label>
                                </div>
                                <div class="form-group form-group-custom mb-4">
                                    <select class="form-control" name="kelas" id="kelas" required>
                                        <option value="" disabled selected></option>
                                        <option value="1">X</option>
                                        <option value="2">XI</option>
                                        <option value="3">XII</option>
                                    </select>
                                    <label for="kelas">Kelas</label>
                                </div>
                                <div class="form-group form-group-custom mb-4">
                                    <input name="no_handphone" type="text" class="form-control" id="nomor" required="">
                                    <label for="nomor">Nomor Handphone</label>
                                </div>
                                <div class="form-group form-group-custom mb-4">
                                    <input name="email" type="email" class="form-control" id="useremail" required="">
                                    <label for="useremail">Email</label>
                                </div>
                                <div class="form-group form-group-custom mb-4">
                                    <input name="password" type="password" class="form-control" id="password" required="">
                                    <label for="password">Password</label>
                                </div>
                                {{-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="term-conditionCheck">
                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                </div> --}}
                                <div class="mt-4">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Daftar</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{url('siswa/login')}}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Sudah punya akun?</a>
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
