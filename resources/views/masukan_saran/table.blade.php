@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Kritik Dan Saran</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Masukan dan Saran</a></li>
                    <li class="breadcrumb-item active">Tambah Siswa</li>
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

                            <h4 class="header-title">Kritik Dan Saran</h4>

                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kritik</th>
                                            <th>Saran</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($krisar as $item)
                                            <tr class="text-center">
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->siswa->nama_lengkap }}</td>
                                                <td>{{$item->kritik ?? '-'}}</td>
                                                <td>{{$item->saran ?? '-'}}</td>
                                                <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('H:i d/m/Y')}}</td>

                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn-sm btn btn-secondary waves-effect waves-light" onclick="detailKonseling({{$item->id}})">Detail</button>

                                                        @auth('web')
                                                        @if (is_null($item->verified_at))
                                                            <form action="{{ url('guru_bk/konseling_kelompok/delete', ['id' => $item->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn-sm btn btn-danger waves-effect waves-light">Delete</button>
                                                            </form>
                                                        @endif
                                                        @endauth

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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


