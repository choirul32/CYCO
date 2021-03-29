@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Kondisi Rumah</h4>
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
            <form class="custom-validation" action="{{url('siswa/edit/data_rumah')}}" method="post">
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
                                    <h5 class="font-size-14">Data Kondisi Rumah</h5>
                                    <select name="kepemilikan_rumah" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->kepemilikan_rumah == 1) selected @endif value="1">Sendiri</option>
                                        <option @if ($siswa->kepemilikan_rumah == 2) selected @endif value="2">Sewa Tahunan</option>
                                        <option @if ($siswa->kepemilikan_rumah == 3) selected @endif value="3">Sewa Bulanan</option>
                                        <option @if ($siswa->kepemilikan_rumah == 4) selected @endif value="4">Menumpang</option>
                                        <option @if ($siswa->kepemilikan_rumah == 5) selected @endif value="5">Tidak Memiliki</option>
                                        <option @if ($siswa->kepemilikan_rumah == 6) selected @endif value="6">Menumpang Tanpa Izin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Sumber Listrik</h5>
                                    <select name="sumber_listrik" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->sumber_listrik == 1) selected @endif value="1">PLN</option>
                                        <option @if ($siswa->sumber_listrik == 2) selected @endif value="2">GENSET/MANDIRI</option>
                                        <option @if ($siswa->sumber_listrik == 3) selected @endif value="3">TENAGA SURYA</option>
                                        <option @if ($siswa->sumber_listrik == 4) selected @endif value="4">PLN DAN GENSET</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <h5 class="font-size-14">Daya Listrik</h5>
                                    <select name="daya_listrik" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->daya_listrik == 1) selected @endif value="1">450 Watt</option>
                                        <option @if ($siswa->daya_listrik == 2) selected @endif value="2">900 Watt</option>
                                        <option @if ($siswa->daya_listrik == 3) selected @endif value="3">1300 Watt</option>
                                        <option @if ($siswa->daya_listrik == 4) selected @endif value="4">2200 Watt</option>
                                        <option @if ($siswa->daya_listrik == 5) selected @endif value="5">3500 Watt</option>
                                        <option @if ($siswa->daya_listrik == 6) selected @endif value="6">5500 Watt</option>
                                        <option @if ($siswa->daya_listrik == 7) selected @endif value="7"> > 5500 Watt</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Daya Listrik</h5>
                                    <select name="luas_tanah" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->luas_tanah == 1) selected @endif value="1"> > 200 M2</option>
                                        <option @if ($siswa->luas_tanah == 2) selected @endif value="2">100-200 M2</option>
                                        <option @if ($siswa->luas_tanah == 3) selected @endif value="3">50-99 M2</option>
                                        <option @if ($siswa->luas_tanah == 4) selected @endif value="4">25-50 M2</option>
                                        <option @if ($siswa->luas_tanah == 5) selected @endif value="5"> < 25 M2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Luas Bangunan</h5>
                                    <select name="luas_bangunan" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->luas_bangunan == 1) selected @endif value="1"> > 200 M2</option>
                                        <option @if ($siswa->luas_bangunan == 2) selected @endif value="2">100-200 M2</option>
                                        <option @if ($siswa->luas_bangunan == 3) selected @endif value="3">50-99 M2</option>
                                        <option @if ($siswa->luas_bangunan == 4) selected @endif value="4">25-50 M2</option>
                                        <option @if ($siswa->luas_bangunan == 5) selected @endif value="5"> < 25 M2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jenis Atap</h5>
                                    <select name="jenis_atap" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->jenis_atap == 1) selected @endif value="1">Genting</option>
                                        <option @if ($siswa->jenis_atap == 2) selected @endif value="2">Cor-coran</option>
                                        <option @if ($siswa->jenis_atap == 3) selected @endif value="3">Asbes/Seng</option>
                                        <option @if ($siswa->jenis_atap == 4) selected @endif value="4">Kayu</option>
                                        <option @if ($siswa->jenis_atap == 5) selected @endif value="5">Rumbai/Tanaman</option>
                                        <option @if ($siswa->jenis_atap == 6) selected @endif value="6">Tanpa Atap</option>
                                        <option @if ($siswa->jenis_atap == 7) selected @endif value="7">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Bahan Lantai</h5>
                                    <select name="bahan_lantai" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->bahan_lantai == 1) selected @endif value="1">Tanah</option>
                                        <option @if ($siswa->bahan_lantai == 2) selected @endif value="2">Kayu</option>
                                        <option @if ($siswa->bahan_lantai == 3) selected @endif value="3">Semen/Plester</option>
                                        <option @if ($siswa->bahan_lantai == 4) selected @endif value="4">Ubin</option>
                                        <option @if ($siswa->bahan_lantai == 5) selected @endif value="5">Keramik</option>
                                        <option @if ($siswa->bahan_lantai == 6) selected @endif value="6">Tanpa Atap</option>
                                        <option @if ($siswa->bahan_lantai == 7) selected @endif value="7">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Bahan Tembok</h5>
                                    <select name="bahan_tembok" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->bahan_tembok == 1) selected @endif value="1">Kayu</option>
                                        <option @if ($siswa->bahan_tembok == 2) selected @endif value="2">Seng</option>
                                        <option @if ($siswa->bahan_tembok == 3) selected @endif value="3">Batu Bata</option>
                                        <option @if ($siswa->bahan_tembok == 4) selected @endif value="4">Semen/beton</option>
                                        <option @if ($siswa->bahan_tembok == 5) selected @endif value="5">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Kamar mandi</h5>
                                    <select name="kamar_mandi" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->kamar_mandi == 1) selected @endif value="1">Kepemilikan sendiri digambar</option>
                                        <option @if ($siswa->kamar_mandi == 2) selected @endif value="2">Kepemilikan sendiri diluar</option>
                                        <option @if ($siswa->kamar_mandi == 3) selected @endif value="3">Berbagi pakai dengan tetangga</option>
                                        <option @if ($siswa->kamar_mandi == 4) selected @endif value="4">Kamar mandi umum</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Sumber Air Utama</h5>
                                    <select name="sumber_air" class="form-control">
                                        <option selected disabled value="">-- Pilih --</option>
                                        <option @if ($siswa->sumber_air == 1) selected @endif value="1">Kemasan</option>
                                        <option @if ($siswa->sumber_air == 2) selected @endif value="2">PDAM</option>
                                        <option @if ($siswa->sumber_air == 3) selected @endif value="3">Sumur</option>
                                        <option @if ($siswa->sumber_air == 4) selected @endif value="4">Sungai/Mata Air</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jumlah Orang Tinggal</h5>
                                    <input value="{{ $siswa->jumlah_tinggal }}" name="jumlah_tinggal" type="text" class="form-control" required placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Foto Rumah</h5>
                                    <input name="foto_rumah" type="text" class="form-control" required placeholder=""/>
                                </div>

                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                                <div class="form-group">
                                    <h5 class="font-size-14">Foto Rumah</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
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
