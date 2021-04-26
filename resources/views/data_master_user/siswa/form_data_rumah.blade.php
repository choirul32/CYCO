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
            <form class="" action="{{url('siswa/edit/data_rumah')}}" method="post" enctype="multipart/form-data">
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
                                        <input value="{{ $siswa->jumlah_tinggal }}" name="jumlah_tinggal" type="text" class="form-control" placeholder=""/>
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
                                    @php
                                        $gambar = json_decode($siswa->foto_rumah, true);
                                        $foto_rumah_depan = $gambar['foto_rumah_depan'] ?? null;
                                        $foto_ruang_tamu = $gambar['foto_ruang_tamu'] ?? null;
                                        $foto_dapur = $gambar['foto_dapur'] ?? null;
                                        $foto_kamar_tidur = $gambar['foto_kamar_tidur'] ?? null;
                                        $foto_ruang_belajar = $gambar['foto_ruang_belajar'] ?? null;
                                        $foto_kamar_mandi = $gambar['foto_kamar_mandi'] ?? null;
                                    @endphp
                                    {{-- {{dd($gambar['foto_rumah_depan'])}} --}}
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Foto Rumah Depan :</strong></h4>
                                        <input name="foto_rumah_depan" class="button-add-image" type="file"  multiple="multiple" accept="image/*" onchange="preview_image(event, 'preview_depan')">
                                        <img src="{{ asset("foto_rumah/". $gambar['foto_rumah_depan']) }}" id="preview_depan" class="center output_image"/>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Foto Ruang Tamu :</strong></h4>
                                        <input name="foto_ruang_tamu" class="button-add-image" type="file" accept="image/*" onchange="preview_image(event, 'preview_tamu')">
                                        <img src="{{ asset("foto_rumah/". $foto_ruang_tamu) }}" id="preview_tamu" class="center output_image"/>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Foto Dapur :</strong></h4>
                                        <input name="foto_dapur" class="button-add-image" type="file" accept="image/*" onchange="preview_image(event, 'preview_dapur')">
                                        <img src="{{ asset("foto_rumah/". $foto_dapur) }}" id="preview_dapur" class="center output_image"/>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Foto Kamar Tidur :</strong></h4>
                                        <input name="foto_kamar_tidur" class="button-add-image" type="file" accept="image/*" onchange="preview_image(event, 'preview_ktidur')">
                                        <img src="{{ asset("foto_rumah/". $foto_kamar_tidur) }}" id="preview_ktidur" class="center output_image"/>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Foto Ruang Belajar :</strong></h4>
                                        <input name="foto_ruang_belajar" class="button-add-image" type="file" accept="image/*" onchange="preview_image(event, 'preview_rbelajar')">
                                        <img src="{{ asset("foto_rumah/". $foto_ruang_belajar) }}" id="preview_rbelajar" class="center output_image"/>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="font-size-14"><strong>Foto Kamar Mandi  :</strong></h4>
                                        <input name="foto_kamar_mandi" class="button-add-image" type="file" accept="image/*" onchange="preview_image(event, 'preview_kmandi')">
                                        <img src="{{ asset("foto_rumah/". $foto_kamar_mandi) }}" id="preview_kmandi" class="center output_image"/>
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

@push('css')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    #wrapper
    {
        text-align:center;
        margin:0 auto;
        padding:0px;
        width:995px;
    }
    .output_image
    {
        max-width:300px;
    }
    .button-add-image{
        display: block;
        padding: 10px 25px;
        border: 0;
        margin: 0 auto;
        font-size: 15px;
        letter-spacing: 0.05em;
        cursor: pointer;
        background: #216e69;
        color: #fff;
        outline: none;
        transition: .3s ease-in-out;
    }
</style>
@endpush

@push('js')
<script type='text/javascript'>
    function preview_image(event, id_input){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById(id_input);
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

</script>
@endpush
