@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Keluarga</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
                    </ol> --}}
                </div>
                <div class="col-md-4">

                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-warning btn-rounded" href="{{url('siswa/edit/data_keluarga')}}">
                            <i class="mdi mdi-account-edit-outline mr-1"></i> Edit Data
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}


                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Nama ayah</strong></h4>
                                    <p>{{ $siswa->nama_ayah ?? '-'}}</p>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Status ayah</strong></h4>
                                    <p>{{ $siswa->status_ayah_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Hubungan dengan ayah</strong></h4>
                                    <p>{{ $siswa->hubungan_ayah_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>NIK</strong></h4>
                                    <p>{{ $siswa->nik_ayah ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Agama ayah</strong></h4>
                                    <p>{{ $siswa->agama_ayah_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jelaskan detil keadaan ayahmu</strong></h4>
                                    <p>{{ $siswa->detail_ayah ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Tanggal lahir ayah</strong></h4>
                                    <p>{{ $siswa->tanggal_lahir_ayah ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Pendidikan ayah</strong></h4>
                                    <p>{{ $siswa->pendidikan_ayah_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Pekerjaan ayah</strong></h4>
                                    <p>{{ $siswa->pekerjaan_ayah_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Penghasil ayah</strong></h4>
                                    <p>{{ $siswa->penghasilan_ayah_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Nomor HP ayah</strong></h4>
                                    <p>{{ $siswa->phone_ayah ?? '-'}}</p>
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
                                    <h4 class="font-size-14"><strong>Nama ibu</strong></h4>
                                    <p>{{ $siswa->nama_ibu ?? '-'}}</p>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Status ibu</strong></h4>
                                    <p>{{ $siswa->status_ibu_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Hubungan dengan ibu</strong></h4>
                                    <p>{{ $siswa->hubungan_ibu_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>NIK</strong></h4>
                                    <p>{{ $siswa->nik_ibu ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Agama ibu</strong></h4>
                                    <p>{{ $siswa->agama_ibu_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jelaskan detil keadaan ibumu</strong></h4>
                                    <p>{{ $siswa->detail_ibu ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Tanggal lahir ibu</strong></h4>
                                    <p>{{ $siswa->tanggal_lahir_ibu ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Pendidikan ibu</strong></h4>
                                    <p>{{ $siswa->pendidikan_ibu_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Pekerjaan ibu</strong></h4>
                                    <p>{{ $siswa->pekerjaan_ibu_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Penghasil ibu</strong></h4>
                                    <p>{{ $siswa->penghasilan_ibu_nama ?? '-'}}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Nomor HP ibu</strong></h4>
                                    <p>{{ $siswa->phone_ibu ?? '-'}}</p>
                                </div>
                                <hr>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Ceritakan keadaan keluargamu secara detil dan lengkap</strong></h4>
                                        <p>{{ $siswa->detail_keluarga ?? '-'}}</p>
                                    </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page-content-wrapper -->
</div>
@endsection
