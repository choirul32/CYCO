@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Publikasi Ilmiah dalam Jurnal</h4>
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
                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded dropdown-toggle" onclick="tambahPublikasiArtikel()">
                            <i class="mdi mdi-account-edit-outline mr-1"></i> Tambah Publikasi
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <form action="{{ url('guru/edit/publikasi_artikel') }}" method="post">
            @csrf
            @php
                $data = json_decode($profil_guru->publikasi_artikel);
            @endphp
            <div class="row" id="parent-form">
                @foreach ($data as $item)
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body row">
                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                <div class="form_1 col-10">
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Judul Artikel Ilmiah :</strong></h4>
                                        <input class="form-control" type="text" name="judul_artikel_ilmiah[]" value="{{ $item->judul_artikel_ilmiah ?? ""}}">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Nama Jurnal :</strong></h4>
                                        <input class="form-control" type="text" name="nama_jurnal[]" value="{{ $item->nama_jurnal ?? ""}}">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Volume/Nomor/Tahun</strong></h4>
                                        <input class="form-control" type="text" name="volume_nomer_tahun[]" value="{{ $item->volume_nomer_tahun ?? ""}}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button>Delete</button>
                                </div>

                        </div>
                    </div>
                </div> <!-- end col -->
                @endforeach
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

@push('js')
    <script>
        function tambahPublikasiArtikel() {
            var clone = $("#parent-form div:first").clone();
            clone.appendTo("#parent-form");
        }
    </script>
@endpush
