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
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Nama Lengkap :</strong></h4>
                                    <input class="form-control" type="text" name="nama" value="{{$guru->nama}}">
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>NIP/NIK :</strong></h4>
                                    <input class="form-control" type="text" name="nip_nik" value="{{$guru->nip_nik}}">
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jenis Kelamin :</strong></h4>
                                    <input class="form-control" type="text" name="jenis_kelamin" value="{{$guru->jenis_kelamin}}">
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jenis Guru BK :</strong></h4>
                                    <input class="form-control" type="text" name="jenis_guru" value="{{$guru->role_id}}">
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
                                    <textarea class="form-control" name="alamat" id="" cols="5" rows="5">{{$guru->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Email :</strong></h4>
                                    <input class="form-control" type="email" name="email" value="{{$guru->email}}">
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>No. HP Aktif :</strong></h4>
                                    <input class="form-control"  type="text" name="no_handphone" value="{{$guru->no_handphone}}">
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
