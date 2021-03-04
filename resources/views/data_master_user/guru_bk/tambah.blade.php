@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Guru Konselor</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Tambah Konselor</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <h4 class="header-title">Profil Konselor</h4>
                <form method="POST" class="custom-validation" novalidate action="{{ url('guru_bk/create') }}" >
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}
                                    <div class="form-group">
                                        <h5 class="font-size-14">Nama Lengkap</h5>
                                        {{-- <label class="font-size-14" for="nama_lengkap">Nama Lengkap</label> --}}
                                        <input type="text" class="form-control" name="nama" required placeholder="contoh: Muhammad Safi`e"/>
                                        <div class="invalid-feedback">
                                            Isi nama terlebih dahulu.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">NIP/NIK</h5>
                                        <input type="text" class="form-control" name="nip_nik" required placeholder="contoh: 0829348459472372"/>
                                        <div class="invalid-feedback">
                                            Isi NIP/NIK terlebih dahulu.
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <h5 class="font-size-14">Tempat & Tanggal Lahir</h5>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" name="tempat_lahir" required placeholder="contoh: Surabaya"/>
                                                <div class="invalid-feedback">
                                                    Isi tempat lahir anda.
                                                </div>
                                            </div>
                                            <div class="col">
                                                <input class="form-control" type="date" name="tanggal_lahir" value="" id="example-date-input" required>
                                                <div class="invalid-feedback">
                                                    Isi tanggal lahir anda.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Jenis Kelamin</h5>
                                        <select class="form-control" required name="jenis_kelamin">
                                            <option disabled selected value="">Pilih Jenis Kelamin</option>
                                            <option value="0">Laki Laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Pilih salah satu jenis kelamin.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Jenis Guru BK</h5>
                                        <select class="form-control" required name="jenis_kelamin">
                                            <option disabled selected value="">Pilih Jenis Guru</option>
                                            <option value="0">PNS</option>
                                            <option value="1">GTT</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Pilih salah satu jenis guru.
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="header-title">Range validation</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}

                                    <div class="form-group">
                                        <h5 class="font-size-14">Alamat Lengkap</h5>
                                        <div>
                                            <textarea class="form-control" rows="5" name="alamat" required placeholder="contoh: Jl. depok no 5, wonocolo, surabaya"></textarea>
                                            <div class="invalid-feedback">
                                                Isi Alamat anda.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Email</h5>
                                        <input type="email" class="form-control" name="email" required parsley-type="email" placeholder="contoh: gurubk123@gmail.com"/>
                                        <div class="invalid-feedback">
                                            Isi Email anda dengan benar.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">No HP Aktif</h5>
                                        <input type="text" class="form-control" name="no_handphone" required placeholder="contoh: 081356555667"/>
                                        <div class="invalid-feedback">
                                            Isi No HP anda.
                                        </div>
                                    </div>
                                    
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="header-title">Riwayat Pendidikan</h4> --}}
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-success float-right" >Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->
    </div> 
    <!-- end page-content-wrapper -->
</div>
@endsection
