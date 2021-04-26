@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Tabel Orang Tua</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tabel</a></li>
                    <li class="breadcrumb-item active">Table Orang Tua</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Buttons example</h4>
                            <p class="card-title-desc">The Buttons extension for DataTables
                                provides a common set of options, API methods and styling to display
                                buttons on a page that will interact with a DataTable. The core library
                                provides the based framework upon which plug-ins can built.
                            </p> --}}
                            @auth('web')
                                <div class="button-items mb-2">
                                    <a href="{{ url('orang_tua/create') }}" class="btn btn-primary waves-effect waves-light">Tambah Ortu</a>
                                </div>
                            @endauth

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">No.</th>
                                    <th>Nama</th>
                                    <th>NIP/NIK</th>
                                    <th>No Handphone</th>
                                    <th>Jenis</th>
                                    <th>Aksi</th>

                                </tr>
                                </thead>


                                <tbody>
                                @foreach ($orangtua as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nama_siswa }}</td>
                                        <td>{{ $item->no_handphone }}</td>
                                        <td>
                                        @if($item->role_id = 2)
                                            Guru Mapel PNS
                                        @else
                                            Guru Mapel GTT
                                        @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-outline-info waves-effect waves-light" onclick="detailShow({{$item->id}})" data-target="#modal-detail" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="mdi mdi-account-details"></i></button>
                                                    <button class="btn btn-outline-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-account-edit-outline"></i></button>
                                                    <button class="btn btn-outline-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-delete-alert"></i></button>
                                                @auth('web')
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>
                                                    <form action="{{ url('guru_mapel/delete', ['id' => $item->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                                                    </form>
                                                @endauth

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

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
    @include('data_master_user.orang_tua.detail')
</div>
@endsection
