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
                                @include('konseling_individu.guru_bk.modal-detail')
                                @include('konseling_individu.guru_bk.modal-edit-jam')
                                @if ($konseling->isEmpty())
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="text-center mt-4">
                                            <h4>Sistem belum memiliki Konseling yang telah selesai</h4>
                                            <p class="text-muted">Hubungi Guru BK untuk informasi lebih lanjut tentang konseling</p>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title">Riwayat Konseling</h4>

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">No</th>
                                                                <th class="text-center">Tanggal</th>
                                                                <th>Bidang Layanan</th>
                                                                <th>Ringkasan Masalah</th>
                                                                <th>Alternatif Penanganna</th>
                                                                <th class="text-center">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($konseling as $item)
                                                                <tr>
                                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                                    <td class="text-center">{{$item->tanggal}}, {{$item->jam_pengganti ?? $item->jam}}</td>
                                                                    <td>{{$item->perantara}}</td>
                                                                    <td>{{$item->masalah}}</td>
                                                                    <td>{{$item->penanganan}}</td>
                                                                    <td class="text-center"></td>
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
                url: '/guru/konseling_individu/api/edit/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#modalDetail').modal('show');
                    document.getElementsByTagName("p")[0].innerHTML= data.masalah;
                    document.getElementsByTagName("p")[1].innerHTML=data.harapan;
                    if (data.perantara = 'web') {
                        $('#modalDetail').find('#link-input').hide();
                        $('#modalDetail').find('#link-web-chat').show();
                        document.getElementById("link-web-button").href = "/guru/chat/room/"+data.chat_room.slug;
                    } else {
                        $('#modalDetail').find('#link-input').show();
                        $('#modalDetail').find('#link-web-chat').hide();
                        document.getElementById("link").value = data.link ?? "";
                    }
                    document.getElementById("id_detail").value = data.id;
                },
                error: function() {
                    console.log("error");
                },
            });
        }

    </script>
@endpush
