@extends('layouts.main')

@section('content')

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Tindak Lanjut Siswa</h4>
                        {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Materi BK</li>
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

                                {{-- <h4 class="header-title">Materi BK</h4> --}}
                                <div class="button-items mb-2">
                                    <a href="{{url('guru/materi_bk/create')}}" class="btn btn-primary waves-effect waves-light">Tambah Materi</a>
                                </div>
                                <div class="table-responsive">
                                    <table id="datatable-general" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Siswa</th>
                                                <th>Saran, Kritik, dan Masukan</th>
                                                <th>Tanggapan Guru BK</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tindak as $item)
                                                <tr class="text-center">
                                                    <td class="text-center" width="2%">{{$loop->iteration}}</td>
                                                    <td>{{$item->siswa->nama }}</td>
                                                    <td>{{$item->masukan ?? '-'}}</td>
                                                    <td>{{$item->tanggapan ?? '-'}}</td>
                                                    <td>{{$item->keterangan ?? '-'}}</td>
                                                    <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('H:i d/m/Y')}}</td>

                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn-sm btn btn-secondary waves-effect waves-light" onclick="detailKonseling({{$item->id}})">Detail</button>

                                                            <form action="{{ url('guru_bk/konseling_kelompok/delete', ['id' => $item->id]) }}" method="POST">
                                                                 @csrf
                                                                 @method('DELETE')
                                                                <button type="submit" class="btn-sm btn btn-danger waves-effect waves-light">Delete</button>
                                                            </form>

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
    <!-- End Page-content -->
@endsection

@push('css')
    <!-- Plugins css -->
    <link href="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endpush

@push('js')
    <script src="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{url('Vertical/dist/assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script type="text/javascript">
        function deleteConfirmation(id) {
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
                    url: "{{ url('guru/materi_bk/delete') }}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                        } else {
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
