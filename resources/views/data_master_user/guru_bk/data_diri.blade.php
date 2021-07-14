@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Diri Guru</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data Master</a></li>
                    <li class="breadcrumb-item active">Data Diri Siswa</li>
                    </ol> --}}
                </div>
                <div class="col-md-4">


                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded dropdown-toggle" href="{{url('guru/edit/data_diri')}}">
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
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Nama Lengkap :</strong></h4>
                                    <p>{{ $guru->nama ?? '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>NIP/NIK :</strong></h4>
                                    <p>{{ $guru->nip_nik ?? '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jenis Kelamin :</strong></h4>
                                    <p>{{ $guru->jenis_kelamin_nama ?? '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jenis Guru BK :</strong></h4>
                                    <p>
                                        @if ($guru->role_id == 2)
                                            PNS
                                        @else
                                            GTT
                                        @endif
                                    </p>
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
                                    <h4 class="font-size-14"><strong>Alamat Lengkap :</strong></h4>
                                    <p>{{ $guru->alamat ?? '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Email :</strong></h4>
                                    <p>{{ $guru->email ?? '-' }}</p>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>No. HP Aktif :</strong></h4>
                                    <p>{{ $guru->no_handphone ?? '-' }}</p>
                                </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page-content-wrapper -->
</div>
@endsection
