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
                                @if (Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
                                    <a href="{{url("guru/kehadiran_dan_poin/kehadiran/create")}}" class="btn btn-primary my-3">Tambah Kehadiran</a>
                                @endif

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
                                                @if (Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
                                                    <th>Aksi</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswa as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->siswa->nama_lengkap ? $item->siswa->nama_lengkap : $item->siswa->username}}</td>
                                                    <td>{{$item->siswa->kelas}}</td>
                                                    <td>{{$item->sakit ?? 0}}</td>
                                                    <td>{{$item->izin ?? 0}}</td>
                                                    <td>{{$item->tanpa_keterangan ?? 0}}</td>
                                                    @if (Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
                                                        <td>
                                                            <a href="{{url('guru/kehadiran_dan_poin/kehadiran/edit')}}/{{$item->id}}" class="btn btn-outline-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-account-edit-outline"></i></a>
                                                            <button class="btn btn-outline-danger waves-effect waves-light" onclick="deleteKehadiran({{ $item->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-delete-alert"></i></button>
                                                        </td>
                                                    @endif
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
                                @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                    <a href="{{url("guru/kehadiran_dan_poin/poin/create")}}" class="btn btn-primary my-3">Tambah Poin Pelanggaran</a>
                                @endif

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
                                                @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                                    <th>Aksi</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($poin as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->siswa->nama_lengkap}}</td>
                                                    <td>{{$item->siswa->kelas}}</td>
                                                    <td>{{$item->poin}}</td>
                                                    <td>{{$item->keterangan}}</td>
                                                    <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('H:i d/m/Y')}} </td>
                                                    @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                                        <td>
                                                            <a href="{{url('guru/kehadiran_dan_poin/poin/edit')}}/{{$item->id}}" class="btn btn-outline-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-account-edit-outline"></i></a>
                                                            <button class="btn btn-outline-danger waves-effect waves-light" onclick="deletePoin({{ $item->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-delete-alert"></i></button>
                                                        </td>
                                                    @endif
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
@push('css')
    <!-- Plugins css -->
    <link href="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endpush

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="{{url('Vertical/dist/assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script type="text/javascript">
        function deletePoin(id) {
            swal.fire({
                title: "Hapus?",
                text: "Apakah anda yakin ingin menghapuas data ini!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ url('guru/kehadiran_dan_poin/poin/delete') }}/" + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (results) {
                            console.log(results);
                            if (results.success === true) {
                                location.reload();
                                swal.fire("Done!", results.message, "success");
                            } else {
                                location.reload();
                                swal.fire("Error!", results.message, "error");
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
                })
        }

        function deleteKehadiran(id) {
            swal.fire({
                title: "Hapus?",
                text: "Apakah anda yakin ingin menghapuas data ini!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Ya",
                cancelButtonText: "Tidak",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ url('guru/kehadiran_dan_poin/kehadiran/delete') }}/" + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (results) {
                            console.log(results);
                            if (results.success === true) {
                                location.reload();
                                swal.fire("Done!", results.message, "success");
                            } else {
                                location.reload();
                                swal.fire("Error!", results.message, "error");
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
                })
        }
    </script>

@endpush
