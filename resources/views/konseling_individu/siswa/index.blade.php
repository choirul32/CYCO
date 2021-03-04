@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Konseling Individu</h4>
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
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#myModal">Permintaan Konseling</button>
                                    @include('konseling_individu.siswa.modal-create')
                                    @include('konseling_individu.siswa.modal-detail')
                                </div>
                                @if ($konseling->isEmpty())
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="text-center mt-4">
                                            <h4>Anda Belum Memiliki Permintaan Konseling Indvidu</h4>
                                            <p class="text-muted">klik tombol "permintaan konseling" untuk melakukan permintaan konseling</p>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title">Permintaan Konseling</h4>
                
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Konselor</th>
                                                                <th>Permintaan Tanggal</th>
                                                                <th>Permintaan Jam</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($konseling as $item)
                                                                <tr>
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$item->konselor_id}}</td>
                                                                    <td>{{$item->tanggal}}</td>
                                                                    <td>{{$item->jam}}</td>
                                                                    <td>
                                                                    @if (is_null($item->verified_at))
                                                                        <span class="badge badge-pill badge-danger">Belum Diverifikasi</span>
                                                                    @else
                                                                        <span class="badge badge-pill badge-success">Terverifikasi</span>
                                                                    @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-secondary waves-effect waves-light" onclick="detailKonseling({{$item->id}})">Detail</button>
                                                                            @if (is_null($item->verified_at))
                                                                                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="editKonseling({{$item->id}})">Edit</button>
                                                                                <form action="{{ url('siswa/konseling_individu/delete', ['id' => $item->id]) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                                                                                </form>
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
                    var jam = data.jam
                    var masalah = data.masalah
                    var harapan = data.harapan
                    $('#konselor').val(konselor_id)
                    $('#tanggal').val(tanggal)
                    $('#jam').val(jam)
                    $('#masalah').val(masalah)
                    $('#harapan').val(harapan)
                    $('#myModal').modal('show')
                },
                error: function() {
            },
        });
        }
        function detailKonseling(id){
            var host = "{{URL::to('/')}}";
            var url_ = host + '/siswa/konseling_individu/edit/';
            $.ajax({
                url: '/siswa/konseling_individu/api/edit/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#modalDetail').modal('show')
                },
                error: function() {
            },
        });
        }
    </script>

@endpush
