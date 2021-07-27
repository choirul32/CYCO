@extends('layouts.main')

@section('content')

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Dashboard</h4>
                        <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Selamat datang di SIM Bimbingan Konseling</li>
                        </ol>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                                    <div class="col-6">
                                        <h5>Selamat Datang Siswa!</h5>
                                        <p class="text-muted">{{ Auth::user()->username }}</p>


                                    </div>

                                    <div class="col-5 ml-auto">
                                        <div>
                                            <img src="{{ asset("image/avatar/student-icon.png") }}" alt="" style="max-width: 60%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mb-4">Informasi Orangtua</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="media my-2">

                                            <div class="media-body">
                                                <p class="text-muted mb-2">Nama</p>
                                                <h5 class="mb-0">{{$siswa->orangtua->nama ?? '-'}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Tempat Tanggal Lahir</p>
                                                <h5 class="mb-0">{{$siswa->orangtua->tempat_lahir ?? "-"}},{{$siswa->orangtua->tanggal_lahir ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Jenis Kelamin</p>
                                                <h5 class="mb-0">{{$siswa->orangtua->jenis_kelamin ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Alamat</p>
                                                <h5 class="mb-0">{{$siswa->orangtua->alamat ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">No. Handphone</p>
                                                <h5 class="mb-0">{{$siswa->orangtua->no_handphone ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Pekerjaan</p>
                                                <h5 class="mb-0">{{$siswa->orangtua->pekerjaan ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="header-title mb-4">Informasi Siswa</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Nama Lengkap</p>
                                                    <h5 class="mb-0">{{$siswa->nama_lengkap ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Nama Panggilan/Username</p>
                                                    <h5 class="mb-0">{{$siswa->nama_panggilan ? $siswa->nama_panggilan : $siswa->username}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">NISN</p>
                                                    <h5 class="mb-0">{{$siswa->nisn ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Tempat Tanggal Lahir</p>
                                                    <h5 class="mb-0">{{$siswa->tempat_lahir ?? "-"}}, {{$siswa->tanggal_lahir ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Jenis Kelamin</p>
                                                    <h5 class="mb-0">{{$siswa->jenis_kelamin ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <h5 class="header-title mb-4">-</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Kelas</p>
                                                    <h5 class="mb-0">{{$siswa->kelas ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Jurusan</p>
                                                    <h5 class="mb-0">{{$siswa->jurusan ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Alamat</p>
                                                    <h5 class="mb-0">{{$siswa->alamat ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">No. Handphone</p>
                                                    <h5 class="mb-0">{{$siswa->no_handphone ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-4">
                                    <div class="card-header bg-transparent p-3">
                                        <h5 class="header-title mb-0">Poin Pelanggaran</h5>
                                    </div>
                                    <p class="card-title-desc">Total poin pelanggaran siswa.</p>

                                    <div class="text-center" dir="ltr">
                                        <input data-plugin="knob" data-width="180" data-height="180" data-angleOffset="90"
                                            data-linecap="round" data-fgColor="#f06543" value="{{$sum_poin}}" data-thickness=".15" data-readOnly=true disabled/>
                                    </div>
                                </div>
                                <div class="col-8">
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
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Tidak Masuk Tanpa Keterangan</p>
                                                    <h5 class="mb-0">{{$kehadiran->tanpa_keterangan ?? 0}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Izin</p>
                                                    <h5 class="mb-0">{{$kehadiran->izin ?? 0}}</h5>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>

                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
@endsection

@push('js')
<script src="{{ url('Vertical/dist/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ url('Vertical/dist/assets/js/pages/jquery-knob.init.js') }}"></script>
@endpush
