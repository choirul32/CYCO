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
                                <div class="button-items mb-2">
                                    <button type="button" class="btn btn-success waves-effect waves-light" onclick="createKonseling()">
                                        <i class="mdi mdi-plus-thick mr-1"></i>
                                        Permintaan Konseling</button>
                                    @include('konseling_kelompok.siswa.modal-create')
                                    @include('konseling_kelompok.siswa.modal-detail')
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
                                                                {{-- <th>Permintaan dibuat</th> --}}
                                                                <th>Permintaan Tgl</th>
                                                                <th>Media</th>
                                                                <th>Permintaan Jam</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($konseling as $item)
                                                                <tr>
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$item->konselor->nama}}</td>
                                                                    {{-- <td>{{$loop->permintaan}}</td> --}}
                                                                    <td>{{ Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                                                                    <td>{{$item->perantara}}</td>
                                                                    <td>{{$item->jam_pengganti ?? $item->jam}}
                                                                        @if ($item->jam_pengganti != null)
                                                                            <span class="badge badge-pill badge-success">Jam Diganti</span>
                                                                        @endif
                                                                    </td>
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
                                                                            @if (is_null($item->verified_at) && $item->siswa_id == Auth::user()->id)
                                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="editKonseling({{$item->id}})">Edit</button>
                                                                                <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="deleteConfirmation({{$item->id}})">Delete</button>
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
@push('css')
    <!-- Selectize -->
    <link href="{{url('Vertical/dist/assets/libs/selectize/css/selectize.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('js')
    <!-- Selectize -->
    <script src="{{url('Vertical/dist/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

    <script>
        var createModal = false;
        function createKonseling(){
            $('#myModal').modal('show')
            if (createModal == false) {
                $(".selectize").selectize();
                createModal = true;
            }
        }
        function editKonseling(id){
            var host = "{{URL::to('/')}}";
            var url_ = host + '/siswa/konseling_kelompok/edit/';
            $.ajax({
                url: '/siswa/konseling_individu/api/edit/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $('#myModal form').attr("action", url_ + id);
                    var konselor_id = data.konselor_id
                    var tanggal = data.tanggal
                    var jam = data.jam
                    var masalah = data.masalah
                    var harapan = data.harapan
                    var perantara_data = data.perantara
                    $('#konselor').val(konselor_id)
                    $('#tanggal').val(tanggal)
                    $('#jam').val(jam)
                    $('#masalah').val(masalah)
                    $('#harapan').val(harapan)

                    document.querySelector('#perantara [value="' + perantara_data + '"]').selected = true;
                    $('#myModal').modal('show')
                    if (createModal == false) {
                        $(".selectize").selectize();
                        createModal = true;
                    }
                    var kelompok = JSON.parse(data.kelompok);
                    $('#kelompok_siswa').data('selectize').setValue(kelompok);
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
                    if (data.perantara = 'web') {
                        $('#modalDetail').find('#link-input').hide();
                        $('#modalDetail').find('#link-web-chat').show();
                        document.getElementById("link-web-button").href = "/siswa/chat/room/"+data.chat_room.slug;
                    } else {
                        $('#modalDetail').find('#link-input').show();
                        $('#modalDetail').find('#link-web-chat').hide();
                        document.getElementById("link").value = data.link ?? "Masih Kosong";
                    }
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
                        url: "{{ url('siswa/konseling_kelompok/delete') }}/" + id,
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
