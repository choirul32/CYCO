@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Riwayat Pendidikan</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data Master</a></li>
                    <li class="breadcrumb-item active">Data Diri Siswa</li>
                    </ol> --}}
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
                    {{-- <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded dropdown-toggle" href="{{url('siswa/edit/data_siswa')}}">
                            <i class="mdi mdi-account-edit-outline mr-1"></i> Edit Data
                        </a>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <form class="" action="{{url('guru/edit/riwayat_pendidikan')}}" method="post">
            @csrf
            @php
                $data = json_decode($profil_guru->riwayat_pendidikan ?? []);
            @endphp
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                            <h3 class="font-size-16"><strong>Pendidikan D3</strong></h3>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Nama Perguruan Tinggi :</strong></h4>
                                <input class="form-control" type="text" name="nama_perguruan_tinggi_d3" value="{{ $data->nama_perguruan_tinggi_d3 ?? ""}}">
                            </div>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Bidang Ilmu :</strong></h4>
                                <input class="form-control" type="text" name="bidang_ilmu_d3" value="{{ $data->bidang_ilmu_d3 ?? ""}}">
                            </div>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Tahun Masuk-Lulus :</strong></h4>
                                <input class="form-control" type="text" name="tahun_masuk_lulus_d3" value="{{ $data->tahun_masuk_lulus_d3 ?? ""}}">
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                            <h3 class="font-size-16"><strong>Pendidikan S1</strong></h3>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Nama Perguruan Tinggi :</strong></h4>
                                <input class="form-control" type="text" name="nama_perguruan_tinggi_s1" value="{{ $data->nama_perguruan_tinggi_s1 ?? ""}}">
                            </div>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Bidang Ilmu :</strong></h4>
                                <input class="form-control" type="text" name="bidang_ilmu_s1" value="{{ $data->bidang_ilmu_s1 ?? ""}}">
                            </div>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Tahun Masuk-Lulus :</strong></h4>
                                <input class="form-control" type="text" name="tahun_masuk_lulus_s1" value="{{ $data->tahun_masuk_lulus_s1 ?? ""}}">
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                            <h3 class="font-size-16"><strong>Pendidikan S2</strong></h3>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Nama Perguruan Tinggi :</strong></h4>
                                <input class="form-control" type="text" name="nama_perguruan_tinggi_s2" value="{{ $data->nama_perguruan_tinggi_s2 ?? ""}}">
                            </div>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Bidang Ilmu :</strong></h4>
                                <input class="form-control" type="text" name="bidang_ilmu_s2" value="{{ $data->bidang_ilmu_s2 ?? ""}}">
                            </div>
                            <div class="form-group">
                                <h4 class="font-size-14"><strong>Tahun Masuk-Lulus :</strong></h4>
                                <input class="form-control" type="text" name="tahun_masuk_lulus_s2" value="{{ $data->tahun_masuk_lulus_s2 ?? ""}}">
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="float-right btn btn-success waves-effect waves-light mr-1">Simpan</button>
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
