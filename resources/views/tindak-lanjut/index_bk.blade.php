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
                                @include('tindak-lanjut.modal-tanggapan')
                                {{-- <h4 class="header-title">Materi BK</h4> --}}
                                @if (Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
                                    <div class="button-items mb-2">
                                        <a href="{{url('guru/tindak-lanjut-siswa/create')}}" class="btn btn-primary waves-effect waves-light">Tambah Tindak Lanjut</a>
                                    </div>
                                @endif

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
                                            @foreach ($tindak_lanjut as $item)
                                                <tr class="text-center">
                                                    <td class="text-center" width="2%">{{$loop->iteration}}</td>
                                                    <td>{{$item->siswa->nama_lengkap ?? $item->siswa->username}}</td>
                                                    <td>{{$item->masukan ?? '-'}}</td>
                                                    <td>
                                                        @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                                            @if ($item->tanggapan == null)
                                                                <button type="button" class="btn-sm btn btn-success waves-effect waves-light" onclick="setTanggapan({{$item->id}})">Tanggapi Tindakan</button>
                                                            @else
                                                                {{$item->tanggapan ?? '-'}}
                                                            @endif
                                                        @else
                                                            Tanggapan diisi Guru BK
                                                        @endif
                                                    </td>
                                                    <td>{{$item->keterangan ?? '-'}}</td>
                                                    <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('H:i d/m/Y')}}</td>

                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn-sm btn btn-secondary waves-effect waves-light">Detail</button>
                                                            @if ($item->tanggapan != null && (Auth::user()->role_id == 2 || Auth::user()->role_id == 3))
                                                                <button type="button" class="btn-sm btn btn-secondary waves-effect waves-light" onclick="editTanggapan({{$item->id}})">Edit Tanggapan</button>
                                                            @endif

                                                            @if (Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
                                                                <a href="{{url('guru/tindak-lanjut-siswa/edit')}}/{{$item->id}}" class="btn-sm btn btn-secondary waves-effect waves-light">Edit</a>
                                                                <button type="button" class="btn-sm btn btn-danger waves-effect waves-light" onclick="deleteConfirmation({{$item->id}})">Delete</button>
                                                            @endif

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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable-general').DataTable();
        } );
        function setTanggapan(id){
            var host = "{{URL::to('/')}}";
            var url_ = host + '/guru/tindak-lanjut-siswa/save-tanggapan/';
            $('#modal-tanggapan form').attr("action", url_ + id);
            $('#modal-tanggapan').modal('show');
        }

        function editTanggapan(id){
            var host = "{{URL::to('/')}}";
            var url_ = host + '/guru/tindak-lanjut-siswa/save-tanggapan/';
            $('#modal-tanggapan form').attr("action", url_ + id);
            $.ajax({
                url: '/guru/tindak-lanjut-siswa/api/edit-tanggapan/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#modal-tanggapan form').attr("action", url_ + id);
                    $('#modal-tanggapan').modal('show');
                    var tanggapan = data.tanggapan
                    $('#tanggapan').val(tanggapan)
                    $('#modal-tanggapan').modal('show');
                },
                error: function() {
                },
            });
        }
    </script>
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
                    url: "{{ url('guru/tindak-lanjut-siswa/delete') }}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                        location.reload();
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
