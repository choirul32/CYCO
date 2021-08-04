@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Riwayat Konseling</h4>
                        {{-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tabel</a></li>
                        <li class="breadcrumb-item active">Table Siswa</li>
                        </ol> --}}
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if (false)
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="text-center mt-4">
                                            <h4>Siswa Belum Memiliki Riwayat Konseling</h4>
                                            {{-- <p class="text-muted">klik tombol "permintaan konseling" untuk melakukan permintaan konseling</p> --}}
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="card-body">
                                    <h4 class="header-title">Riwayat Konseling</h4>
                                    <div class="table-responsive">
                                        <table id="datatable-general" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Bidang Layanan</th>
                                                    <th>Ringkasan Masalah</th>
                                                    <th>Alternatif penanganan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($konseling as $item)
                                                    <tr>
                                                        <td class="text-center" width="1%">{{$loop->iteration}}</td>
                                                        <td>{{$item->created_at->isoFormat('dddd, D MMMM Y')}}</td>
                                                        <td>{{$item->perantara}}</td>
                                                        <td>{{$item->masalah}}</td>
                                                        <td>{{$item->penanganan}}</td>

                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-secondary waves-effect waves-light" onclick="detailKonseling({{$item->id}})">Detail</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
@push('js')
    <script>
        $(document).ready(function() {
            $('#datatable-general').DataTable();
        } );
    </script>

@endpush
