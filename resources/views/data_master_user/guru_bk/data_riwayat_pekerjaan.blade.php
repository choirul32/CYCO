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
                        <a class="btn btn-success btn-rounded" href="{{url('guru/edit/riwayat_pekerjaan')}}">
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
            @php
                $guru = $profil_guru->riwayat_pekerjaan ?? "";
                $data = json_decode($guru);
            @endphp
            {{-- {{dd($data)}} --}}

                @if (isset($data))
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                {{-- <h4 class="header-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Status Kepegawaian :</strong></h4>
                                        <p>{{$item->status_kepegawaian ?? "-"}}</p>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Lembaga Pengangkatan :</strong></h4>
                                        <p>{{$item->lembaga_pengangkatan ?? "-"}}</p>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>No.SK :</strong></h4>
                                        <p>{{$item->no_sk ?? "-"}}</p>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Tanggal SK : </strong></h4>
                                        <p>{{$item->tanggal_sk ?? "-"}}</p>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>TMT Kerja :</strong></h4>
                                        <p>{{$item->tmt_kerja ?? "-"}}</p>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Tempat Kerja :</strong></h4>
                                        <p>{{$item->tempat_kerja ?? "-"}}</p>
                                    </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    @endforeach
                </div> <!-- end row -->
                @else
                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-10">
                            <div class="text-center mt-4">
                                <h4>Anda Belum Memiliki Riwayat Pekerjaan</h4>
                                <p class="text-muted">klik tombol "edit data" untuk melakukan mengisi riwayat pekerjaan</p>
                            </div>
                        </div>
                    </div>
                @endif

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page-content-wrapper -->
</div>
@endsection
