@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Akademik</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
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
                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-success btn-rounded dropdown-toggle" href="{{url('siswa/edit/data_akademik')}}">
                            <i class="mdi mdi-account-edit-outline mr-1"></i> Edit Data
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}


                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Sekolah asal :</strong></h4>
                                    <p>{{ $siswa->sekolah_asal ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Mengapa anda memilih SMKN 5 SUrakarta :</strong></h4>
                                    <p>{{ $siswa->alasan ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Sejak kapan anda merencanakan masuk SMKN 5 Surakarta :</strong></h4>
                                    <p>{{ $siswa->waktu_rencana ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Apakah rencana anda setelah diterima di SMKN 5 Surakarta :</strong></h4>
                                    <p>{{ $siswa->rencana_keterima ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Ekstrakulikuler yang akan diikuti selama belajar di SMKN 5 Surakarta :</strong></h4>
                                    <p>{{ $siswa->ekstrakulikuler_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Apakah rencana anda setelah lulus SMK :</strong></h4>
                                    <p>{{ $siswa->rencana_lulus_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Pekerjaan yang anda cita-citakan :</strong></h4>
                                    <p>{{ $siswa->cita_pekerjaan ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Perguruan tinggi yang anda cita-citakan :</strong></h4>
                                    <p>{{ $siswa->cita_perguruan ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jurusan/Program studi yang anda cita-citakan :</strong></h4>
                                    <p>{{ $siswa->cita_jurusan ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Mata Pelajaran yang paling anda senangi selama ini :</strong></h4>
                                    <p>{{ $siswa->mapel_nama ?? '-' }}</p>
                                </div>
                                <br><br>
                                <h5 class="header-title">Nilai Akademis yang Diperoleh</h5></h5>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-light text-center">
                                            <tr>
                                                <th>#</th>
                                                <th>Semester 1</th>
                                                <th>Semester 2</th>
                                                <th>Semester 3</th>
                                                <th>Semester 4</th>
                                                <th>Semester 5</th>
                                                <th>Semester 6</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @php
                                                $data = json_decode($siswa->nilai);
                                                $keterangan = ["Rangking", "Nilai Total", "Rata-rata", "Jml Mapel"];
                                            @endphp
                                            <tr>
                                                <td class="text-center">{{$keterangan[0]}}</td>
                                                <td>{{$data[0]->rangking}}</td>
                                                <td>{{$data[1]->rangking}}</td>
                                                <td>{{$data[2]->rangking}}</td>
                                                <td>{{$data[3]->rangking}}</td>
                                                <td>{{$data[4]->rangking}}</td>
                                                <td>{{$data[5]->rangking}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{$keterangan[1]}}</td>
                                                <td>{{$data[0]->nilai_total}}</td>
                                                <td>{{$data[1]->nilai_total}}</td>
                                                <td>{{$data[2]->nilai_total}}</td>
                                                <td>{{$data[3]->nilai_total}}</td>
                                                <td>{{$data[4]->nilai_total}}</td>
                                                <td>{{$data[5]->nilai_total}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{$keterangan[2]}}</td>
                                                <td>{{$data[0]->rata_rata}}</td>
                                                <td>{{$data[1]->rata_rata}}</td>
                                                <td>{{$data[2]->rata_rata}}</td>
                                                <td>{{$data[3]->rata_rata}}</td>
                                                <td>{{$data[4]->rata_rata}}</td>
                                                <td>{{$data[5]->rata_rata}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{$keterangan[3]}}</td>
                                                <td>{{$data[0]->jml_mapel}}</td>
                                                <td>{{$data[1]->jml_mapel}}</td>
                                                <td>{{$data[2]->jml_mapel}}</td>
                                                <td>{{$data[3]->jml_mapel}}</td>
                                                <td>{{$data[4]->jml_mapel}}</td>
                                                <td>{{$data[5]->jml_mapel}}</td>
                                            </tr>

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
@endsection
