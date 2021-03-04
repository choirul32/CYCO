@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Kondisi Rumah :</strong></h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
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
                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded dropdown-toggle" href="{{url('siswa/edit/data_rumah')}}">
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

                            {{-- <h4 class="header-title">Validation type :</strong></h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Kepemillikan Rumah :</strong></h4>
                                    <p>{{ $siswa->kepemilikan_rumah ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Sumber Listrik :</strong></h4>
                                    <p>{{ $siswa->sumber_listrik ?? '-' }}</p>
                                </div>
                                <hr>
                                
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Daya Listrik :</strong></h4>
                                    <p>{{ $siswa->daya_listrik ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Daya Listrik :</strong></h4>
                                    <p>{{ $siswa->luas_tanah ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Luas Bangunan :</strong></h4>
                                    <p>{{ $siswa->luas_bangunan ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jenis Atap :</strong></h4>
                                    <p>{{ $siswa->jenis_atap ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Bahan Lantai :</strong></h4>
                                    <p>{{ $siswa->bahan_lantai ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Bahan Tembok :</strong></h4>
                                    <p>{{ $siswa->bahan_tembok ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Kamar mandi :</strong></h4>
                                    <p>{{ $siswa->kamar_mandi ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Sumber Air Utama :</strong></h4>
                                    <p>{{ $siswa->sumber_air ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jumlah Orang Tinggal :</strong></h4>
                                    <p>{{ $siswa->jumlah_tinggal ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Rumah :</strong></h4>
                                    
                                </div>

                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type :</strong></h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                            <form class="custom-validation" action="#">
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Rumah :</strong></h4>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                            </form>

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
