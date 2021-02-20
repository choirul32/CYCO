@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Form Validation</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
                    </ol>
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                            <form class="custom-validation" action="#">
                                <div class="form-group">
                                    <h5 class="font-size-14">Data Kondisi Rumah</h5>
                                    <select class="form-control">
                                        <option>Sendiri</option>
                                        <option>Sewa Tahunan</option>
                                        <option>Sewa Bulanan</option>
                                        <option value="">Menumpang</option>
                                        <option value="">Tidak Memiliki</option>
                                        <option value="">Menumpang Tanpa Izin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Sumber Listrik</h5>
                                    <select class="form-control">
                                        <option>PLN</option>
                                        <option>GENSET/MANDIRI</option>
                                        <option>TENAGA SURYA</option>
                                        <option value="">PLN DAN GENSET</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <h5 class="font-size-14">Daya Listrik</h5>
                                    <select class="form-control">
                                        <option>450 Watt</option>
                                        <option>900 Watt</option>
                                        <option>1300 Watt</option>
                                        <option>2200 Watt</option>
                                        <option>3500 Watt</option>
                                        <option>5500 Watt</option>
                                        <option>>5500 Watt</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Daya Listrik</h5>
                                    <select class="form-control">
                                        <option>>200 M2</option>
                                        <option>100-200 M2</option>
                                        <option>50-99 M2</option>
                                        <option>25-50 M2</option>
                                        <option>< 25 M2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Luas Bangunan</h5>
                                    <select class="form-control">
                                        <option>>200 M2</option>
                                        <option>100-200 M2</option>
                                        <option>50-99 M2</option>
                                        <option>25-50 M2</option>
                                        <option>< 25 M2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jenis Atap</h5>
                                    <select class="form-control">
                                        <option>Genting</option>
                                        <option>Cor-coran</option>
                                        <option>Asbes/Seng</option>
                                        <option>Kayu</option>
                                        <option>Rumbai/Tanaman</option>
                                        <option>Tanpa Atap</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Bahan Lantai</h5>
                                    <select class="form-control">
                                        <option>Tanah</option>
                                        <option>Kayu</option>
                                        <option>Semen/Plester</option>
                                        <option>Ubin</option>
                                        <option>Keramik</option>
                                        <option>Tanpa Atap</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Bahan Tembok</h5>
                                    <select class="form-control">
                                        <option>Kayu</option>
                                        <option>Seng</option>
                                        <option>Batu Bata</option>
                                        <option>Semen/beton</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Kamar mandi</h5>
                                    <select class="form-control">
                                        <option>Kepemilikan sendiri digambar</option>
                                        <option>Kepemilikan sendiri diluar</option>
                                        <option>Berbagi pakai dengan tetangga</option>
                                        <option>Kamar mandi umum</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Sumber Air Utama</h5>
                                    <select class="form-control">
                                        <option>Kemasan</option>
                                        <option>PDAM</option>
                                        <option>Sumur</option>
                                        <option>Sungai/Mata Air</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jumlah Orang Tinggal</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Foto Rumah</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                            </form>

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

                            <form class="custom-validation" action="#">
                                <div class="form-group">
                                    <h5 class="font-size-14">Foto Rumah</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                            </form>

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
                                    <button type="submit" class="float-right btn btn-success waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    <a href="{{ url('siswa/create3') }}" class="float-left btn btn-warning waves-effect waves-light mr-1">
                                        Sebelumnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </div> 
    <!-- end page-content-wrapper -->
</div>
@endsection
