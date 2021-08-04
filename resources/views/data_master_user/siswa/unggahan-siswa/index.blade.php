@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Unggahan Siswa</h4>
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
                                <div class="button-items mb-2">
                                    <a href="{{url('/siswa/unggahan-siswa/create')}}" type="button" class="btn btn-success waves-effect waves-light" >
                                        <i class="mdi mdi-plus-thick mr-1"></i>
                                        Tambah Unggahan</a>

                                </div>
                                @if (!isset($unggahan))
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="text-center mt-4">
                                            <h4>Anda Belum Data Unggahan</h4>
                                            <p class="text-muted">klik tombol "tambah unggahan" untuk melakukan menambah unggahan</p>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">No</th>
                                                                <th>Nama</th>
                                                                <th>Jenis Karya</th>
                                                                <th>File</th>
                                                                <th>Keterangan</th>
                                                                <th class="text-center">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($unggahan as $item)
                                                                <tr>
                                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                                    <td>{{$item->nama}}</td>
                                                                    <td>{{$item->jenis}}</td>
                                                                    <td>{{$item->file}}</td>
                                                                    <td>{{$item->keterangan}}</td>
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <a class="btn btn-primary btn-sm waves-effect waves-light" href="{{ url('siswa/unggahan-siswa/edit/'.$item->id)}}" >Edit</a>

                                                                            <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deleteConfirmation({{$item->id}})">Delete</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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
@push('css')
    <link href="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@push('js')
    <script>
        function editKonseling(id){
            var host = "{{URL::to('/')}}";
            var url_ = host + '/siswa/konseling_individu/edit/';
            $.ajax({
                url: '/siswa/konseling_individu/api/edit/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#myModal form').attr("action", url_ + id);
                    var konselor_id = data.konselor_id
                    var tanggal = data.tanggal
                    var perantara = data.perantara
                    var jam = data.jam
                    var masalah = data.masalah
                    var harapan = data.harapan
                    var perantara_data = data.perantara
                    $('#konselor').val(konselor_id)
                    $('#tanggal').val(tanggal)
                    $('#perantara').val(perantara)
                    $('#jam').val(jam)
                    $('#masalah').val(masalah)
                    $('#harapan').val(harapan)
                    document.querySelector('#perantara [value="' + perantara_data + '"]').selected = true;
                    $('#myModal').modal('show')
                },
                error: function() {
            },
        });
        }
        function detailKonseling(id){
            var host = "{{URL::to('/')}}";
            var url_ = host + '/siswa/api/edit/{id}/';
            $.ajax({
                url: '/siswa/konseling_individu/api/edit/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#modalDetail').modal('show')
                    document.getElementsByTagName("p")[0].innerHTML= data.masalah;
                    document.getElementsByTagName("p")[1].innerHTML=data.harapan;
                    document.getElementById("link").innerHTML= data.link ?? "MASIH KOSONG";
                },
                error: function() {
            },
        });
        }
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
                        url: "{{ url('siswa/unggahan-siswa/delete') }}/" + id,
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
    <script src="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{url('Vertical/dist/assets/js/pages/sweet-alerts.init.js')}}"></script>
@endpush
