@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Konseling Kelompok</h4>
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
                                                @include('konseling_kelompok.guru_bk.modal-detail')
                                                @include('konseling_kelompok.guru_bk.modal-edit-jam')
                                                <h4 class="header-title">Permintaan Konseling</h4>

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th>No</th>
                                                                <th>Konselor</th>
                                                                <th>Siswa</th>
                                                                {{-- <th>Permintaan dibuat</th> --}}
                                                                <th>Permintaan Tgl</th>
                                                                <th>Permintaan Jam</th>
                                                                <th>Media</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($konseling as $item)
                                                                <tr class="text-center">
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$item->konselor->nama ?? '-'}}</td>
                                                                    <td>{{$item->siswa->nama_lengkap ?? $item->siswa->username}}</td>
                                                                    {{-- <td>{{$loop->permintaan}}</td> --}}
                                                                    <td>{{ Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                                                                    <td>{{$item->jam_pengganti ?? $item->jam}}
                                                                        @if (is_null($item->verified_at))
                                                                            <button class="badge badge-pill badge-warning" onclick="editJam({{$item->id}})">Edit Jam</button>
                                                                        @endif
                                                                    </td>
                                                                    <td>{{$item->perantara}}</td>
                                                                    <td>
                                                                        @if (is_null($item->verified_at))
                                                                            <span class="badge badge-pill badge-danger">Belum Diverifikasi</span>
                                                                        @else
                                                                            <span class="badge badge-pill badge-success">Terverifikasi</span>
                                                                        @endif
                                                                        </td>
                                                                    <td>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" onclick="detailKonseling({{$item->id}})">Detail</button>
                                                                            @if (is_null($item->verified_at))
                                                                                <a href="{{ url('guru/konseling_individu/verifikasi', ['id' => $item->id]) }}" class="btn btn-warning btn-sm waves-effect waves-light">Verifikasi</a>
                                                                            @endif
                                                                        </div>                                                                    </td>
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
        function detailKonseling(id){
            var host = "{{URL::to('/')}}";
            $.ajax({
                url: '/guru/konseling_kelompok/api/edit/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#modalDetail').modal('show');
                    document.getElementById("id_detail").value = data.id;
                    document.getElementsByTagName("p")[0].innerHTML= data.masalah;
                    document.getElementsByTagName("p")[1].innerHTML=data.harapan;
                    document.getElementById("link").value = data.link ?? "";
                },
                error: function() {
                    console.log("error");
                },
            });
        }

        function editJam(id){
            var host = "{{URL::to('/')}}";
            $.ajax({
                url: '/guru/konseling_kelompok/api/edit/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#modalEditJam').modal('show');
                    document.getElementById("jam").value = data.jam_pengganti ? data.jam_pengganti : data.jam;
                    document.getElementById("id_jam").value = data.id;
                },
                error: function() {
                    console.log("error");
                },
            });
        }
    </script>
@endpush
