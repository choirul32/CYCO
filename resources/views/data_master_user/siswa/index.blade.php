@extends('layouts.main')

@section('content')

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Tabel Siswa</h4>
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

                                {{-- <h4 class="header-title">Buttons example</h4>
                                <p class="card-title-desc">The Buttons extension for DataTables
                                    provides a common set of options, API methods and styling to display
                                    buttons on a page that will interact with a DataTable. The core library
                                    provides the based framework upon which plug-ins can built.
                                </p> --}}
                                @auth('web')
                                    <div class="button-items mb-2">
                                        <a href="{{url('siswa/create')}}" class="btn btn-primary waves-effect waves-light">Tambah Siswa</a>
                                    </div>
                                @endauth
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>NISN</th>
                                        <th>Nama Lengkap</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach ($siswa as $item)
                                        <tr>
                                            <td class="text-center" width="2%">{{ $loop->iteration }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->nisn ?? '-' }}</td>
                                            <td>{{ $item->nama_lengkap ?? '-' }}</td>
                                            <td>{{ $item->kelas->nama ?? '-' }}</td>
                                            <td>{{ $item->jurusan->nama ?? '-' }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-outline-info waves-effect waves-light" onclick="detailShow({{$item->id}})" data-target="#modal-detail" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"><i class="mdi mdi-account-details"></i></button>

                                                    @auth('web')
                                                        <button class="btn btn-outline-warning waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-account-edit-outline"></i></button>
                                                        <button class="btn btn-outline-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-delete-alert"></i></button>
                                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>
                                                        <form action="{{ url('siswa/delete', ['id' => $item->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm waves-effect waves-light">Delete</button>
                                                        </form>
                                                    @endauth
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
    @include('data_master_user.siswa.detail')
@endsection

@push('js')
    <script>
        function detailShow(id){
            $('#modal-detail').modal('show');
            $.ajax({
                url: '/guru/api/data_siswa/'+ id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // console.log('data berhasil diload');

                    document.getElementById('nama_lengkap').innerHTML = data.siswa.nama_lengkap;
                    document.getElementById('nisn').innerHTML = data.siswa.nisn;
                    document.getElementById('nama_panggilan').innerHTML = data.siswa.nama_panggilan;
                    document.getElementById('kelas').innerHTML = data.siswa.kelas_id;
                    document.getElementById('jurusan').innerHTML = data.siswa.juruan_id;
                    document.getElementById('tempat_tanggal_lahir').innerHTML = data.siswa.tempat_lahir;
                    document.getElementById('nik').innerHTML = data.siswa.nik;
                    document.getElementById('jenis_kelamin').innerHTML = data.siswa.jenis_kelamin;
                    document.getElementById('agama').innerHTML = data.siswa.agama;
                    document.getElementById('kewarganegaraan').innerHTML = data.siswa.kewarganegaraan;
                    document.getElementById('bahasa').innerHTML = data.siswa.bahasa;
                    document.getElementById('anak_ke').innerHTML = data.siswa.anak_ke;
                    document.getElementById('jumlah_saudara').innerHTML = data.siswa.jumlah_saudara;
                    document.getElementById('no_hp').innerHTML = data.siswa.no_handphone;
                    document.getElementById('email').innerHTML = data.siswa.email;
                    document.getElementById('alamat').innerHTML = data.siswa.alamat;
                    document.getElementById('koordinat_rumah').innerHTML = data.siswa.koordinat_rumah;
                    document.getElementById('jenis_tinggal').innerHTML = data.siswa.jenis_tinggal;
                    document.getElementById('transportasi').innerHTML = data.siswa.alat_transportasi_sekolah;
                    document.getElementById('gol_darah').innerHTML = data.siswa.gol_darah;
                    document.getElementById('riw_penyakit').innerHTML = data.siswa.riw_penyakit;
                    document.getElementById('berat_badan').innerHTML = data.siswa.berat_badan + " Kg";
                    document.getElementById('tinggi_badan').innerHTML = data.siswa.tinggi_badan + " cm";

                },
                error: function() {
                },
            });

        }
    </script>
@endpush
