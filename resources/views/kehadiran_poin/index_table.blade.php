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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Kehadiran</h4>
                                <form action="{{url('guru/kehadiran_dan_poin')}}" method="get">
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-md-2 col-form-label">Search Nama</label>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" name="keyword" id="nama">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-success" type="submit" id="nama">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Sakit</th>
                                                <th>Izin</th>
                                                <th>Absen</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswa as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->nama_lengkap ? $item->nama_lengkap : $item->username}}</td>
                                                    <td>{{$item->kelas}}</td>
                                                    <td>{{$item->absensi->sakit ?? 0}}</td>
                                                    <td>{{$item->absensi->izin ?? 0}}</td>
                                                    <td>{{$item->absensi->tanpa_keterangan ?? 0}}</td>
                                                    <td><button class="btn btn-outline-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-account-edit-outline"></i></button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                {{ $siswa->links() }}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Poin</h4>
                                <form action="{{url('guru/kehadiran_dan_poin')}}" method="get">
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-md-2 col-form-label">Search Nama</label>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" name="keyword_poin" id="nama">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-success" type="submit" id="nama">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Poin</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($poin as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->nama_lengkap}}</td>
                                                    <td>{{$item->kelas}}</td>
                                                    <td>{{$item->poin->poin}}</td>
                                                    <td>{{$item->poin->keterangan}}</td>
                                                    <td>{{$item->poin->created_at}}</td>
                                                    <td>
                                                    <button class="btn btn-outline-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-account-edit-outline"></i></button>
                                                    <button class="btn btn-outline-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-delete-alert"></i></button>
                                                </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                {{ $poin->links() }}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
@endsection
