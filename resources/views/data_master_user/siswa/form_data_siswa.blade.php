@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Form Data Siswa</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Tambah Siswa</li>
                    </ol>
                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">

        <div class="container-fluid">
        <form action="{{ url('siswa/edit/data_siswa') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}


                                <div class="form-group">
                                    <h5 class="header-title">Nama Lengkap</h5>
                                    <small>Contoh : Wiro Sableng</small>
                                    <input name="nama_lengkap" value="{{ $siswa->nama_lengkap ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">NISN</h5>
                                    <small>Contoh: 0004325189 (10 DIGIT ANGKA)</small>
                                    <input name="nisn" value="{{ $siswa->nisn ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Nama Panggilan</h5>
                                    <small>Contoh: Wiro</small>
                                    <input name="nama_panggilan" value="{{ $siswa->nama_panggilan ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Kelas</h5>
                                    <select name="kelas_id" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->kelas_id == 1) selected @endif value="1">X</option>
                                        <option @if ($siswa->kelas_id == 2) selected @endif value="2">XI</option>
                                        <option @if ($siswa->kelas_id == 3) selected @endif value="3">XII</option>
                                        <option @if ($siswa->kelas_id == 4) selected @endif value="4">XIII</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <?php $array_jurusan = ['BKP', 'DPIB A','DPIB B','MESIN A','MESIN B','MESIN C','MESIN D','RPL A','RPL B','RPL C / AXIOO','TITL A','TITL B','TITL C','TOI A','TOI B','TEI A','TEI B','TEI C','TKRO A','TKRO B','TKRO C','TBSM']; ?>
                                    <h5 class="header-title">Jurusan</h5>
                                    <select name="jurusan_id" class="form-control">
                                        @foreach ($array_jurusan as $item)
                                            <option @if ($siswa->jurusan_id == $loop->iteration) selected @endif value="{{$loop->iteration}}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Tempat & Tanggal Lahir</h5>
                                    <small>Contoh: Surakarta, 7 Juli 2004</small>
                                    <div class="row">
                                        <div class="col">
                                            <input name="tempat_lahir" value="{{ $siswa->tempat_lahir ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                        </div>
                                        <div class="col">
                                            <input name="tanggal_lahir" value="{{ $siswa->tanggal_lahir ?? '' }}" class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Nomor Induk Kependudukan</h5>
                                    <input name="nik" value="{{ $siswa->nik ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Jenis Kelamin</h5>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->jenis_kelamin == 1) selected @endif value="1">Laki Laki</option>
                                        <option @if ($siswa->jenis_kelamin == 2) selected @endif value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Agama</h5>
                                    <select name="agama" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->agama_id == 1) selected @endif value="1">Islam</option>
                                        <option @if ($siswa->agama_id == 2) selected @endif value="2">Kristen</option>
                                        <option @if ($siswa->agama_id == 3) selected @endif value="3">Katolik</option>
                                        <option @if ($siswa->agama_id == 4) selected @endif value="4">Hindu</option>
                                        <option @if ($siswa->agama_id == 5) selected @endif value="5">Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">

                                    <h5 class="header-title">Kewarganegaraan</h5>
                                    <select name="kewarganegaraan" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->kewarganegaraan == 1) selected @endif value="1">Warga Negara Indonesia</option>
                                        <option @if ($siswa->kewarganegaraan == 2) selected @endif value="2">Warga Negara Asing</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Bahasa Sehari-hari</h5>
                                    <small>Boleh pilih lebih dari satu</small>
                                    @php
                                        $bahasa = json_decode($siswa->bahasa) ?? [];
                                    @endphp
                                    <div>
                                        <div class="custom-control custom-checkbox">
                                            <input value="1" name="bahasa[]" type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2" @if (in_array(1, $bahasa)) checked @endif>
                                            <label class="custom-control-label" for="customCheck1">Bahasa Indonesia</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input value="2" name="bahasa[]" type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2" @if (in_array(2, $bahasa)) checked @endif>
                                            <label class="custom-control-label" for="customCheck2">Bahasa Jawa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input value="3" name="bahasa[]" type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2" @if (in_array(3, $bahasa)) checked @endif>
                                            <label class="custom-control-label" for="customCheck3">Bahasa Sunda</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input value="4" name="bahasa[]" type="checkbox" class="custom-control-input" id="customCheck4" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2" @if (in_array(4, $bahasa)) checked @endif>
                                            <label class="custom-control-label" for="customCheck4">Bahasa Melayu</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input value="5" name="bahasa[]" type="checkbox" class="custom-control-input" id="customCheck5" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2" @if (in_array(5, $bahasa)) checked @endif>
                                            <label class="custom-control-label" for="customCheck5">Bahasa Inggris</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input value="6" name="bahasa[]" type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2" @if (in_array(6, $bahasa)) checked @endif>
                                            <label class="custom-control-label" for="customCheck6">Lainnya</label>
                                        </div>

                                    </div>
                                </div>


                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Range validation</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                <div class="form-group">
                                    <h5 class="header-title">Anak Ke-</h5>
                                    <select name="anak_ke" class="form-control">
                                        <option value="anak_ke" selected disabled value="">-- Pilih --</option>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option @if ($siswa->anak_ke == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Jumlah Saudara</h5>
                                    <select name="jumlah_saudara" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option @if ($siswa->jumlah_saudara == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Nomor Handphone Aktif</h5>
                                    <small>Awali dengan 62, contoh: 62822 2767 8976</small>
                                    <input name="no_handphone" value="{{ $siswa->no_handphone ?? '' }}" type="text" class="form-control" placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Email Aktif</h5>
                                    <small>Isikan dengan email aktif, contoh: wirosableng@gmail.com</small>
                                    <input name="email" value="{{ $siswa->email ?? '' }}" type="text" class="form-control" placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Alamat Lengkap</h5>
                                    <small>Contoh: Jl. Adi Sumarmo No.42, RT.01/RW.08, Colomadu, Karanganyar</small>
                                    <div>
                                        <textarea name="alamat" required class="form-control" rows="5">{{ $siswa->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Titik Koordinat Rumah</h5>
                                    <small>Contoh: -7.134672, 110.403845. Tutorial mengetahui titik koordinat rumah <a href="https://youtu.be/TWJ8MRsH_IY">https://youtu.be/TWJ8MRsH_IY</a></small>
                                    <input name="koordinat_rumah" value="{{ $siswa->koordinat_rumah ?? '' }}" type="text" class="form-control" placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Jenis Tinggal</h5>
                                    <select name="jenis_tinggal" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->jenis_tinggal == 1) selected @endif value="1">Bersama Orang Tua</option>
                                        <option @if ($siswa->jenis_tinggal == 2) selected @endif value="2">Bersama Wali/Sanak Keluarga</option>
                                        <option @if ($siswa->jenis_tinggal == 3) selected @endif value="3">Kost</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Alat Transportasi ke Sekolah</h5>
                                    <select name="alat_transportasi_sekolah" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->jenis_tinggal == 1) selected @endif value="1">Jalan Kaki</option>
                                        <option @if ($siswa->jenis_tinggal == 2) selected @endif value="2">Sepeda</option>
                                        <option @if ($siswa->jenis_tinggal == 3) selected @endif value="3">Sepeda Motor</option>
                                        <option @if ($siswa->jenis_tinggal == 4) selected @endif value="4">Angkutan Umum</option>
                                        <option @if ($siswa->jenis_tinggal == 5) selected @endif value="5">Ojek</option>
                                        <option @if ($siswa->jenis_tinggal == 6) selected @endif value="6">Antar Jemput</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Golongan Darah</h5>
                                    <select name="gol_darah" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->gol_darah == 1) selected @endif value="1">A</option>
                                        <option @if ($siswa->gol_darah == 2) selected @endif value="2">B</option>
                                        <option @if ($siswa->gol_darah == 3) selected @endif value="3">O</option>
                                        <option @if ($siswa->gol_darah == 4) selected @endif value="4">AB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Riwayat Penyakit</h5>
                                    <input name="riw_penyakit" value="{{ $siswa->riw_penyakit ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Berat Badan</h5>
                                    <div class="input-group mt-3 mt-sm-0 mr-sm-3">
                                        <input name="berat_badan" value="{{ $siswa->berat_badan ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Kg</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Tinggi Badan</h5>
                                    <div class="input-group mt-3 mt-sm-0 mr-sm-3">
                                        <input name="tinggi_badan" value="{{ $siswa->tinggi_badan ?? '' }}" type="text" class="form-control" required placeholder=""/>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">cm</div>
                                        </div>
                                    </div>

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
                                    <button type="submit" class="float-right btn btn-primary waves-effect waves-light mr-1">
                                        <i class="mdi mdi-content-save mr-1"></i>
                                        Simpan</button>
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

@push('css')
    <style>
        small{
            color: grey;
        }
    </style>
@endpush
