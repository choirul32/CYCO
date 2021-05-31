@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Kehadiran dan Poin Pelanggaran</h4>
                        {{-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tabel</a></li>
                        <li class="breadcrumb-item active">Table Siswa</li>
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

                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title">Poin Pelanggaran</h4>
                                <p class="card-title-desc">Total poin pelanggaran siswa.</p>

                                <div class="text-center" dir="ltr">
                                    <input data-plugin="knob" data-width="180" data-height="180" data-angleOffset="90"
                                        data-linecap="round" data-fgColor="#f06543" value="{{$sum_poin}}" data-thickness=".15" data-readOnly=true disabled/>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-transparent p-3">
                                <h5 class="header-title mb-0">Kehadiran</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="media my-2">

                                        <div class="media-body">
                                            <p class="text-muted mb-2">Sakit</p>
                                            <h5 class="mb-0">{{$kehadiran->sakit ?? 0}}</h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-layer-group"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Tidak Masuk Tanpa Keterangan</p>
                                            <h5 class="mb-0">{{$kehadiran->tanpa_keterangan ?? 0}}</h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-analytics"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media my-2">
                                        <div class="media-body">
                                            <p class="text-muted mb-2">Izin</p>
                                            <h5 class="mb-0">{{$kehadiran->izin ?? 0}}</h5>
                                        </div>
                                        <div class="icons-lg ml-2 align-self-center">
                                            <i class="uim uim-ruler"></i>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div> <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
@endsection

@push('js')
<script src="{{ url('Vertical/dist/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ url('Vertical/dist/assets/js/pages/jquery-knob.init.js') }}"></script>
@endpush
