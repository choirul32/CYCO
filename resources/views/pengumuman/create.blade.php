@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Tambah Pengumuman</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pengumuman</a></li>
                    <li class="breadcrumb-item active">Tambah Pengumuman</li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h5 class="font-size-14">Nama</h5>
                                    {{-- <label class="font-size-14" for="nama_lengkap">Nama Lengkap</label> --}}
                                    <input type="text" class="form-control" name="nama" required placeholder="Isi nama file"/>
                                    <div class="invalid-feedback">
                                        Isi nama file terlebih dahulu.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Keterangan</h5>
                                    <div>
                                        <textarea name="keterangan" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div >
                                        <div class="fallback">
                                            <input name="file" type="file" multiple="multiple">
                                        </div>
                                        {{-- <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                            </div>
                                            
                                            <h4>Drop files here to upload</h4>
                                        </div> --}}
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
