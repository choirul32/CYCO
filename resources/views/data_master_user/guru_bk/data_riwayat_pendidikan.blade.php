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
                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded dropdown-toggle" href="{{url('guru/edit/riwayat_pendidikan')}}">
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                @php
                                    $data = json_decode($profil_guru->riwayat_pendidikan);
                                @endphp
                                <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr class="text-center">
                                        <th style="text-align: center; width: 30%;"></th>
                                        <th>D3</th>
                                        <th>S1</th>
                                        <th>S2</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Nama Perguruan Tinggi</td>
                                        <td>{{ $data->nama_perguruan_tinggi_d3 ?? ""}}</td> 
                                        <td>{{ $data->nama_perguruan_tinggi_s1 ?? ""}}</td>
                                        <td>{{ $data->nama_perguruan_tinggi_s2 ?? ""}}</td>
                                    </tr>
                                    <tr>
                                        <td>Bidang Ilmu</td>
                                        <td>{{ $data->bidang_ilmu_d3 ?? ""}}</td>
                                        <td>{{ $data->bidang_ilmu_s1 ?? ""}}</td>
                                        <td>{{ $data->bidang_ilmu_s2 ?? ""}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun Masuk Lulus</td>
                                        <td>{{ $data->tahun_masuk_lulus_d3 ?? ""}}</td>
                                        <td>{{ $data->tahun_masuk_lulus_s1 ?? ""}}</td>
                                        <td>{{ $data->tahun_masuk_lulus_s2 ?? ""}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
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
