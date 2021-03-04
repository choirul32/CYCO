@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Konseling Kelompok</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tabel</a></li>
                        <li class="breadcrumb-item active">Table Siswa</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                @if ($konseling->isEmpty())
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="text-center mt-4">
                                            <h4>Anda Belum Memiliki Permintaan Konseling Indvidu</h4>
                                            <p class="text-muted">klik tombol "permintaan konseling" untuk melakukan permintaan konseling</p>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title">Permintaan Konseling</h4>
                
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Konselor</th>
                                                                {{-- <th>Permintaan dibuat</th> --}}
                                                                <th>Permintaan Tgl</th>
                                                                <th>Permintaan Jam</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($konseling as $item)
                                                                <tr>
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$item->konselor_id}}</td>
                                                                    {{-- <td>{{$loop->permintaan}}</td> --}}
                                                                    <td>{{$item->tanggal}}</td>
                                                                    <td>{{$item->jam}}</td>
                                                                    <td>
                                                                        @if (is_null($item->verified_at))
                                                                            <span class="badge badge-pill badge-danger">Belum Diverifikasi</span>
                                                                        @else
                                                                            <span class="badge badge-pill badge-success">Terverifikasi</span>
                                                                        @endif
                                                                        </td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-secondary waves-effect waves-light">Detail</button>
                                                                            @if (is_null($item->verified_at))
                                                                                <a href="{{ url('guru_bk/konseling_individu/verifikasi', ['id' => $item->id]) }}" class="btn btn-warning waves-effect waves-light">Verifikasi</a>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                @endif
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div> 
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
@endsection
