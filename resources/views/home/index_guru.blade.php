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
                                    @php $role = Auth::guard('guru')->user()->role_id; @endphp
                                    <div class="col-8">
                                        <h5>Selamat Datang
                                            @if ($role == 2 || $role == 3)
                                                Guru BK !
                                            @endif
                                            @if ($role == 4 || $role == 5)
                                                Guru Mapel !
                                            @endif
                                        </h5>
                                        <p class="text-muted">{{ Auth::guard('guru')->user()->username }}</p>
                                    </div>

                                    <div class="col-4 ml-auto">
                                        <div>
                                            @if ($role == 2 || $role == 3)
                                                <img src="{{ asset("image/avatar/konselor-icon.png") }}" alt="" style="max-width: 60%">
                                            @endif
                                            @if ($role == 4 || $role == 5)
                                                <img src="{{ asset("image/avatar/guru-icon.png") }}" alt="" style="max-width: 60%">
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-6">
                                    <h5 class="header-title mb-4">Informasi Guru</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Nama Lengkap</p>
                                                    <h5 class="mb-0">{{$guru->nama ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">NIP/NIK</p>
                                                    <h5 class="mb-0">{{$guru->nip_nik ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Jenis Kelamin</p>
                                                    <h5 class="mb-0">{{$guru->jenis_kelamin_nama ?? "-"}}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Jenis Guru BK</p>
                                                    <h5 class="mb-0">
                                                        @if ($guru->role_id == 2)
                                                            PNS
                                                        @else
                                                            GTT
                                                        @endif
                                                    </h5>
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
                                                    <p class="text-muted mb-2">Alamat Lengkap</p>
                                                    <h5 class="mb-0">{{ $guru->alamat ?? '-' }}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Email</p>
                                                    <h5 class="mb-0">{{ $guru->email ?? '-' }}</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">No. HP Aktif</p>
                                                    <h5 class="mb-0">{{ $guru->no_handphone ?? '-' }}</h5>
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
