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


                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded" href="{{url('guru/edit/publikasi_artikel')}}">
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
                                    $guru = $profil_guru->publikasi_artikel ?? "";
                                    $data = json_decode($guru);
                                @endphp

                                <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr class="text-center">
                                        <th style="text-align: center;">No.</th>
                                        <th>Judul Artikel Ilmiah</th>
                                        <th>Nama Jurnal</th>
                                        <th>Volume/Nomor/tahun</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($data))
                                            @foreach ($data as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->judul_artikel_ilmiah ?? "-"}}</td>
                                                <td>{{$item->nama_jurnal ?? "-"}}</td>
                                                <td>{{$item->volume_nomer_tahun ?? "-"}}</td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="text-center" colspan="4">Data Masih Kosong</td>

                                            </tr>
                                        @endif
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
