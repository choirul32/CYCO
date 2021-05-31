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
                                <div class="button-items mb-2">
                                    <a href="{{url('/siswa/unggahan-siswa/create')}}" type="button" class="btn btn-success waves-effect waves-light" >Tambah Unggahan</a>

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
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Jenis Karya</th>
                                                                <th>File</th>
                                                                <th>Keterangan</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($unggahan as $item)
                                                                <tr>
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$item->nama}}</td>
                                                                    <td>{{$item->jenis}}</td>
                                                                    <td>{{$item->file}}</td>
                                                                    <td>{{$item->keterangan}}</td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <a class="btn btn-primary btn-sm waves-effect waves-light" href="{{ url('siswa/unggahan-siswa/edit/'.$item->id)}}" >Edit</a>
                                                                            <form action="{{ url('siswa/unggahan-siswa/delete', ['id' => $item->id]) }}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
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
    </script>

@endpush
