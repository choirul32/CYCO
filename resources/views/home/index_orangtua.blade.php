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
                                    <div class="col-8">
                                        <h5>Selamat Datang Bapak/Ibu/Wali!</h5>
                                        <p class="text-muted">{{ Auth::user()->username }}</p>


                                    </div>

                                    <div class="col-4 ml-auto">
                                        <div>
                                            <img src="{{ asset("image/avatar/orangtua-icon.png") }}" alt="" style="max-width: 60%">
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
                                                <h5 class="mb-0">{{$ortu->nama}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Tempat Tanggal Lahir</p>
                                                <h5 class="mb-0">{{$ortu->tempat_lahir ?? "-"}},{{$ortu->tanggal_lahir ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Jenis Kelamin</p>
                                                <h5 class="mb-0">{{$ortu->jenis_kelamin ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Alamat</p>
                                                <h5 class="mb-0">{{$ortu->alamat ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">No. Handphone</p>
                                                <h5 class="mb-0">{{$ortu->no_handphone ?? "-"}}</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media my-2">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Pekerjaan</p>
                                                <h5 class="mb-0">{{$ortu->pekerjaan ?? "-"}}</h5>
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
                                                    <h5 class="mb-0">{{$ortu->siswa->nama_lengkap ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Nama Panggilan/Username</p>
                                                    <h5 class="mb-0">{{$ortu->siswa->nama_panggilan ? $ortu->siswa->nama_panggilan : $ortu->siswa->username}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">NISN</p>
                                                    <h5 class="mb-0">{{$ortu->siswa->nisn ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Tempat Tanggal Lahir</p>
                                                    <h5 class="mb-0">{{$ortu->siswa->tempat_lahir ?? "-"}}, {{$ortu->siswa->tanggal_lahir ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Jenis Kelamin</p>
                                                    <h5 class="mb-0">{{$ortu->siswa->jenis_kelamin ?? "-"}}</h5>
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
                                                    <h5 class="mb-0">{{$ortu->siswa->kelas ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Jurusan</p>
                                                    <h5 class="mb-0">{{$ortu->siswa->jurusan ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Alamat</p>
                                                    <h5 class="mb-0">{{$ortu->siswa->alamat ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">No. Handphone</p>
                                                    <h5 class="mb-0">{{$ortu->siswa->no_handphone ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
@endsection
