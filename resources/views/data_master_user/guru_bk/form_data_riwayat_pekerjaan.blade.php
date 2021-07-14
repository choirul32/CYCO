@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Riwayat Pekerjaan</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data Master</a></li>
                    <li class="breadcrumb-item active">Data Diri Siswa</li>
                    </ol> --}}
                </div>
                <div class="col-md-4">


                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded dropdown-toggle" onclick="tambahRiwayatPekerjaan()">
                            <i class="mdi mdi-account-edit-outline mr-1"></i> Tambah Pekerjaan
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <form action="{{ url('guru/edit/riwayat_pekerjaan') }}" method="post">
            @csrf
            @php
                $guru = $profil_guru->riwayat_pekerjaan ?? "";
                $data = json_decode($guru);
            @endphp
            @if (isset($data))
            <div class="row" id="parent-form">
                @foreach ($data as $item)
                <div class="col-lg-12 parent" id="add-form">
                    <div class="card">
                        <div class="card-body row">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                <div class="row col-10">
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Status Kepegawaian :</strong></h4>
                                        <input class="form-control" type="text" name="status_kepegawaian[]" value="{{ $item->status_kepegawaian ?? ""}}">
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Lembaga Pengangkatan :</strong></h4>
                                        <input class="form-control" type="text" name="lembaga_pengangkatan[]" value="{{ $item->lembaga_pengangkatan ?? ""}}">
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>No.SK :</strong></h4>
                                        <input class="form-control" type="text" name="no_sk[]" value="{{ $item->no_sk ?? ""}}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger waves-effect waves-light deleteBtn">Delete</button>
                                </div>
                                <div class="row col-10">
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Tanggal SK : </strong></h4>
                                        <input class="form-control" type="text" name="tanggal_sk[]" value="{{ $item->tanggal_sk ?? ""}}">
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>TMT Kerja :</strong></h4>
                                        <input class="form-control" type="text" name="tmt_kerja[]" value="{{ $item->tmt_kerja ?? ""}}">
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Tempat Kerja :</strong></h4>
                                        <input class="form-control" type="text" name="tempat_kerja[]" value="{{ $item->tempat_kerja ?? ""}}">
                                    </div>
                                </div>

                        </div>
                    </div>
                </div> <!-- end col -->
                @endforeach
            </div> <!-- end row -->
            @else
            <div class="row" id="parent-form">

                <div class="col-lg-12 parent" id="add-form">
                    <div class="card">
                        <div class="card-body row">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                <div class="row col-10">
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Status Kepegawaian :</strong></h4>
                                        <input class="form-control" type="text" name="status_kepegawaian[]" >
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Lembaga Pengangkatan :</strong></h4>
                                        <input class="form-control" type="text" name="lembaga_pengangkatan[]">
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>No.SK :</strong></h4>
                                        <input class="form-control" type="text" name="no_sk[]">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-danger waves-effect waves-light deleteBtn">Delete</button>
                                </div>
                                <div class="row col-10">
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Tanggal SK : </strong></h4>
                                        <input class="form-control" type="text" name="tanggal_sk[]">
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>TMT Kerja :</strong></h4>
                                        <input class="form-control" type="text" name="tmt_kerja[]">
                                    </div>
                                    <div class="form-group col-4">
                                        <h4 class="font-size-14"><strong>Tempat Kerja :</strong></h4>
                                        <input class="form-control" type="text" name="tempat_kerja[]">
                                    </div>
                                </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            @endif

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
        function tambahRiwayatPekerjaan() {
            // var form = document.getElementById("add-form");
            // var parent = document.getElementById("parent-form");
            // parent.after(form);
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
