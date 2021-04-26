@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Pengalaman Penelitian</h4>
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
                        <a class="btn btn-success btn-rounded dropdown-toggle" onclick="tambahPengalamanPenelitian()">
                            <i class="mdi mdi-account-edit-outline mr-1"></i> Tambah Penelitian
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <form action="{{ url('guru/edit/pengalaman_penelitian') }}" method="post">
            @csrf
            <div class="row" id="parent-form">
                @php
                    $guru = $profil_guru->pengalaman_penelitian ?? "";
                    $data = json_decode($guru);
                @endphp
                @if (isset($data))
                    @foreach ($data as $item)
                    <div class="col-lg-12 parent">
                        <div class="card">
                            <div class="card-body">

                                {{-- <h4 class="header-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}
                                    <div class="form_1 row">
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Tahun :</strong></h4>
                                            <input class="form-control" type="text" name="tahun[]" value="{{ $item->tahun ?? ""}}">
                                        </div>
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Jenis Penelitian :</strong></h4>
                                            <input class="form-control" type="text" name="jenis_penelitian[]" value="{{ $item->jenis_penelitian ?? ""}}">
                                        </div>
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Judul</strong></h4>
                                            <input class="form-control" type="text" name="judul[]" value="{{ $item->judul ?? ""}}">
                                        </div>
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Sumber Pendanaan</strong></h4>
                                            <input class="form-control" type="text" name="sumber_pendanaan[]" value="{{ $item->sumber_pendanaan ?? ""}}">
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-danger waves-effect waves-light deleteBtn">Delete</button>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                    @endforeach
                @else
                    <div class="col-lg-12 parent">
                        <div class="card">
                            <div class="card-body">

                                {{-- <h4 class="header-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}
                                    <div class="form_1 row">
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Tahun :</strong></h4>
                                            <input class="form-control" type="text" name="tahun[]">
                                        </div>
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Jenis Penelitian :</strong></h4>
                                            <input class="form-control" type="text" name="jenis_penelitian[]">
                                        </div>
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Judul</strong></h4>
                                            <input class="form-control" type="text" name="judul[]">
                                        </div>
                                        <div class="form-group col-5">
                                            <h4 class="font-size-14"><strong>Sumber Pendanaan</strong></h4>
                                            <input class="form-control" type="text" name="sumber_pendanaan[]">
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-danger waves-effect waves-light deleteBtn">Delete</button>
                                        </div>
                                    </div>


                            </div>
                        </div>
                    </div> <!-- end col -->

                @endif

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
        $(document).ready(function(){
            deleteForm();
        });
        function tambahPengalamanPenelitian() {
            var clone = $("#parent-form div:first").clone();
            clone.appendTo("#parent-form");
            deleteForm();
        }
        function deleteForm() {
            $(".deleteBtn").click(function () {
                $(this).closest(".parent").remove();
            });
        }
    </script>
@endpush
