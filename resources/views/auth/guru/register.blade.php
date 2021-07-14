
@extends('auth.layouts.main')

@section('title', 'Register Guru')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-5 col-sm-8">
        <div class="card">
            <div class="card-body p-4">
                <div class="p-2">
                    <h5 class="mb-5 text-center">Register Guru</h5>
                    <form class="form-horizontal" action="{{ url('guru/register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-custom mb-4">
                                    <input name="nama" type="text" class="form-control" id="username" required="">
                                    <label for="username">Nama</label>
                                </div>
                                <div class="mb-4 ml-2">
                                    <h4 class="font-size-14 mb-3">Jenis Guru</h4>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input value="bk" type="radio" id="custominlineRadio1" name="jenis_guru" class="custom-control-input" checked="">
                                        <label class="custom-control-label" for="custominlineRadio1">Guru BK</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input value="mapel" type="radio" id="custominlineRadio2" name="jenis_guru" class="custom-control-input" >
                                        <label class="custom-control-label" for="custominlineRadio2">Guru Matapelajaran</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-4 ml-2">
                                    <h4 class="font-size-14 mb-3">Pangkat Guru</h4>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input value="pns" type="radio" id="custominlineRadio3" name="pangkat_guru" onclick="showNIP()" class="custom-control-input" checked="">
                                        <label class="custom-control-label" for="custominlineRadio3">Guru ASN</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input value="gtt" type="radio" id="custominlineRadio4" name="pangkat_guru" onclick="showNIK()" class="custom-control-input" >
                                        <label class="custom-control-label" for="custominlineRadio4">Guru GTT</label>
                                    </div>
                                </div>
                                <div id="nip-group" class="form-group form-group-custom mb-4">
                                    <input name="nip_nik" type="text" class="form-control" id="nip_nik" required>
                                    <label for="nip_nik" id="name_nip_nik">NIP</label>
                                </div>

                                <div class="form-group form-group-custom mb-4">
                                    <input name="no_handphone" type="text" class="form-control" id="nomor" required>
                                    <label for="nomor">Nomor Handphone</label>
                                </div>
                                @error('no_handphone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group form-group-custom mb-4">
                                    <input name="email" type="email" class="form-control" id="useremail" required>
                                    <label for="useremail">Email</label>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group form-group-custom mb-4">
                                    <input name="password" type="password" class="form-control" id="userpassword" required="">
                                    <label for="userpassword">Password</label>
                                </div>
                                {{-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="term-conditionCheck">
                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                </div> --}}
                                <div class="mt-4">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Daftar</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{ url('guru/login') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Sudah punya akun?</a>
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

@push('script')
    <script>
        function showNIP(){
            document.getElementById('name_nip_nik').innerHTML = 'NIP';
        }

        function showNIK(){
            document.getElementById('name_nip_nik').innerHTML = 'NIK';
        }
    </script>
@endpush
