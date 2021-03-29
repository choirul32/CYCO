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
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <form class="" action="{{url('siswa/edit/data_akademik')}}" method="post">
            @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                {{-- <h4 class="header-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}
                                    <div class="form-group">
                                        <h5 class="header-title">Sekolah asal</h5>
                                        <input value="{{$siswa->sekolah_asal}}" name="sekolah_asal" type="text" class="form-control" required placeholder=""/>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Mengapa anda memilih SMKN 5 Surakarta</h5>
                                        <div>
                                            <textarea name="alasan" required class="form-control" rows="5">{{$siswa->sekolah_asal}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Sejak kapan anda merencanakan masuk SMKN 5 Surakarta</h5>
                                        <input value="{{ $siswa->waktu_rencana }}" name="waktu_rencana" type="text" class="form-control" required placeholder=""/>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Apakah rencana anda setelah diterima di SMKN 5 Surakarta</h5>
                                        <div>
                                            <textarea name="rencana_keterima" required class="form-control" rows="5">{{ $siswa->rencana_keterima }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php $collection_ = ['Pramuka', 'Paskibraka', 'PMR', 'Ekstra Keterampilan Kejuruan', 'Tenis', 'Volly', 'Bela Diri', 'Seni Musik/Band', 'Patroli Keamanan Sekolah', 'Multimedia', 'Pecinta Alam', 'Basket', 'Futsal', 'Karya Ilmiah']; ?>
                                        <h5 class="header-title">Ekstrakulikuler yang akan diikuti selama belajar di SMKN 5 Surakarta</h5>
                                        <div>
                                            @if (!empty($siswa->ekskul))
                                                @foreach ($collection_ as $item)
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="ekskul[]" value="{{$loop->iteration+1}}" type="checkbox" class="custom-control-input" id="customCheck{{$loop->iteration}}" data-parsley-multiple="groups"
                                                                data-parsley-mincheck="2" @if (in_array($loop->iteration+1, json_decode($siswa->ekskul))) checked @endif>
                                                        <label class="custom-control-label" for="customCheck{{$loop->iteration}}">{{$item}}</label>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Apakah rencana anda setelah lulus SMK</h5>
                                        <select class="form-control" name="rencana_lulus">
                                            <option selected disabled value="">-- Pilih --</option>
                                            <option @if ($siswa->rencana_lulus == 1) selected @endif value="1">Mencari Pekerjaan</option>
                                            <option @if ($siswa->rencana_lulus == 2) selected @endif value="2">Melanjutkan ke Perguruan Tinggi</option>
                                            <option @if ($siswa->rencana_lulus == 3) selected @endif value="3">Mengikuti Kursus</option>
                                            <option @if ($siswa->rencana_lulus == 4) selected @endif value="4">Berwisata</option>
                                            <option @if ($siswa->rencana_lulus == 5) selected @endif value="5">Berumah Tangga</option>
                                            <option @if ($siswa->rencana_lulus == 6) selected @endif value="6">Belum ada rencana</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Pekerjaan yang anda cita-citakan</h5>
                                        <input name="cita_pekerjaan" type="text" class="form-control" required placeholder="" value="{{ $siswa->cita_pekerjaan }}"/>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Perguruan tinggi yang anda cita-citakan</h5></h5>
                                        <input name="cita_perguruan" type="text" class="form-control" required placeholder="" value="{{ $siswa->cita_perguruan }}"/>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Jurusan/Program studi yang anda cita-citakan</h5></h5>
                                        <input name="cita_jurusan" type="text" class="form-control" required placeholder="" value="{{ $siswa->cita_jurusan }}"/>
                                    </div>
                                    <div class="form-group">
                                        <?php $collection_ = ['Matematika', 'Ekonomi', 'Geografi', 'Sejarah', 'Sosiologi', 'Fisika', 'Kimia', 'Biologi', 'Bahasa Inggris', 'Bahasa Indonesia', 'Lainnya']; ?>
                                        <h5 class="header-title">Mata Pelajaran yang paling anda senangi selama ini</h5>
                                        <div>
                                            @foreach ($collection_ as $item)
                                                <div class="custom-control custom-checkbox">
                                                    <input name="mapel_senangi[]" value="{{$loop->iteration+1}}" type="checkbox" class="custom-control-input" id="mapelCheck{{$loop->iteration}}" data-parsley-multiple="groups"
                                                            data-parsley-mincheck="2" @if (in_array($loop->iteration+1, json_decode($siswa->mapel_senangi))) checked @endif>
                                                    <label class="custom-control-label" for="mapelCheck{{$loop->iteration}}">{{$item}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <br>
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
                                            <tbody>
                                                @php
                                                    $data = json_decode($siswa->nilai);
                                                @endphp
                                                <tr>
                                                    <td>Rangking</td>
                                                    <td scope="row"><input type="text" class="form-control" placeholder="Rangking" name="rangking[]" value="{{$data[0]->rangking}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rangking" name="rangking[]" value="{{$data[1]->rangking}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rangking" name="rangking[]" value="{{$data[2]->rangking}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rangking" name="rangking[]" value="{{$data[3]->rangking}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rangking" name="rangking[]" value="{{$data[4]->rangking}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rangking" name="rangking[]" value="{{$data[5]->rangking}}"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nilai Total</td>
                                                    <td scope="row"><input type="text" class="form-control" placeholder="Nilai Total" name="nilai_total[]" value="{{$data[0]->nilai_total}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Nilai Total" name="nilai_total[]" value="{{$data[1]->nilai_total}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Nilai Total" name="nilai_total[]" value="{{$data[2]->nilai_total}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Nilai Total" name="nilai_total[]" value="{{$data[3]->nilai_total}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Nilai Total" name="nilai_total[]" value="{{$data[4]->nilai_total}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Nilai Total" name="nilai_total[]" value="{{$data[5]->nilai_total}}"></td>
                                                </tr>
                                                <tr>
                                                    <td >Rata-rata</td>
                                                    <td scope="row"><input type="text" class="form-control" placeholder="Rata-rata" name="rata_rata[]" value="{{$data[0]->rata_rata}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rata-rata" name="rata_rata[]" value="{{$data[1]->rata_rata}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rata-rata" name="rata_rata[]" value="{{$data[2]->rata_rata}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rata-rata" name="rata_rata[]" value="{{$data[3]->rata_rata}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rata-rata" name="rata_rata[]" value="{{$data[4]->rata_rata}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Rata-rata" name="rata_rata[]" value="{{$data[5]->rata_rata}}"></td>
                                                </tr>
                                                <tr>
                                                    <td>Jml Mapel</td>
                                                    <td scope="row"><input type="text" class="form-control" placeholder="Rata-rata" name="jml_mapel[]" value="{{$data[0]->jml_mapel}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Jml Mapel" name="jml_mapel[]" value="{{$data[1]->jml_mapel}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Jml Mapel" name="jml_mapel[]" value="{{$data[2]->jml_mapel}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Jml Mapel" name="jml_mapel[]" value="{{$data[3]->jml_mapel}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Jml Mapel" name="jml_mapel[]" value="{{$data[4]->jml_mapel}}"></td>
                                                    <td><input type="text" class="form-control" placeholder="Jml Mapel" name="jml_mapel[]" value="{{$data[5]->jml_mapel}}"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="float-right btn btn-success waves-effect waves-light mr-1">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page-content-wrapper -->
</div>
@endsection
