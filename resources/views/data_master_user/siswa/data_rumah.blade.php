@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Kondisi Rumah :</strong></h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
                    </ol> --}}
                </div>
                <div class="col-md-4">

                    <div class="float-right d-none d-md-block mr-3">
                        <a class="btn btn-warning btn-rounded" href="{{url('siswa/edit/data_rumah')}}">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type :</strong></h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Kepemillikan Rumah :</strong></h4>
                                    <p>{{ $siswa->kepemilikan_rumah_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Sumber Listrik :</strong></h4>
                                    <p>{{ $siswa->sumber_listrik_nama ?? '-' }}</p>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Daya Listrik :</strong></h4>
                                    <p>{{ $siswa->daya_listrik_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Daya Listrik :</strong></h4>
                                    <p>{{ $siswa->luas_tanah_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Luas Bangunan :</strong></h4>
                                    <p>{{ $siswa->luas_bangunan_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jenis Atap :</strong></h4>
                                    <p>{{ $siswa->jenis_atap_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Bahan Lantai :</strong></h4>
                                    <p>{{ $siswa->bahan_lantai_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Bahan Tembok :</strong></h4>
                                    <p>{{ $siswa->bahan_tembok_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Kamar mandi :</strong></h4>
                                    <p>{{ $siswa->kamar_mandi_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Sumber Air Utama :</strong></h4>
                                    <p>{{ $siswa->sumber_air_nama ?? '-' }}</p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Jumlah Orang Tinggal :</strong></h4>
                                    <p>{{ $siswa->jumlah_tinggal ?? '-' }}</p>
                                </div>
                                <hr>

                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type :</strong></h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                @php
                                    $gambar = json_decode($siswa->foto_rumah ?? "", true);
                                    $foto_rumah_depan = $gambar['foto_rumah_depan'] ?? null;
                                    $foto_ruang_tamu = $gambar['foto_ruang_tamu'] ?? null;
                                    $foto_dapur = $gambar['foto_dapur'] ?? null;
                                    $foto_kamar_tidur = $gambar['foto_kamar_tidur'] ?? null;
                                    $foto_ruang_belajar = $gambar['foto_ruang_belajar'] ?? null;
                                    $foto_kamar_mandi = $gambar['foto_kamar_mandi'] ?? null;
                                @endphp
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Rumah Depan :</strong></h4>
                                    <img src="{{ asset("foto_rumah/". $foto_rumah_depan) }}" class="center output_image"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Rumah Belakang :</strong></h4>
                                    <img src="{{ asset("foto_rumah/". $foto_ruang_tamu) }}" class="center output_image"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Dapur :</strong></h4>
                                    <img src="{{ asset("foto_rumah/". $foto_dapur) }}" class="center output_image"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Kamar Tidur :</strong></h4>
                                    <img src="{{ asset("foto_rumah/". $foto_kamar_tidur) }}" class="center output_image"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Ruang Belajar :</strong></h4>
                                    <img src="{{ asset("foto_rumah/". $foto_ruang_belajar) }}" class="center output_image"/>
                                </div>
                                <div class="form-group">
                                    <h4 class="font-size-14"><strong>Foto Kamar Mandi :</strong></h4>
                                    <img src="{{ asset("foto_rumah/". $foto_kamar_mandi) }}" class="center output_image"/>
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
