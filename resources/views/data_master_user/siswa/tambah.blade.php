@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Siswa</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Tambah Siswa</li>
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
                                    <h5 class="font-size-14">Nama Lengkap</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">NISN</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Nama Panggilan</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Kelas</h5>
                                    <select class="form-control">
                                        <option>X</option>
                                        <option>XI</option>
                                        <option>XII</option>
                                        <option>XIII</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <?php $array_jurusan = ['BKP', 'DPIB A','DPIB B','MESIN A','MESIN B','MESIN C','MESIN D','RPL A','RPL B','RPL C / AXIOO','TITL A','TITL B','TITL C','TOI A','TOI B','TEI A','TEI B','TEI C','TKRO A','TKRO B','TKRO C','TBSM']; ?>
                                    <h5 class="font-size-14">Jurusan</h5>
                                    <select class="form-control">
                                        @foreach ($array_jurusan as $item)
                                            <option>{{ $item }}</option>
                                        @endforeach
                                    </select>    
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Tempat & Tanggal Lahir</h5>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" required placeholder="Type something"/>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Nomor Induk Kependudukan</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jenis Kelamin</h5>
                                    <select class="form-control">
                                        <option>Laki Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Agama</h5>
                                    <select class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Kewarganegaraan</h5>
                                    <select class="form-control">
                                        <option>Warga Negara Indonesia</option>
                                        <option>Warga Negara Asing</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Bahasa Sehari-hari</h5>
                                    <div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck1">Bahasa Indonesia</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck2">Bahasa Jawa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck3">Bahasa Sunda</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck4">Bahasa Melayu</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck5">Bahasa Inggris</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups"
                                                    data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck6">Lainnya</label>
                                        </div>

                                    </div>
                                </div>
                                
                                
                            </form>

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

                            <form action="#" class="custom-validation">
                                <div class="form-group">
                                    <h5 class="font-size-14">Anak Ke-</h5>
                                    <select class="form-control">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jumlah Saudara</h5>
                                    <select class="form-control">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Nomor Handphone Aktif</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Alamat Lengkap</h5>
                                    <div>
                                        <textarea required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Titik Koordinat Rumah</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jenis Tinggal</h5>
                                    <select class="form-control">
                                        <option>Bersama Orang Tua</option>
                                        <option>Bersama Wali/Sanak Keluarga</option>
                                        <option>Kost</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Alat Transportasi ke Sekolah</h5>
                                    <select class="form-control">
                                        <option>Jalan Kaki</option>
                                        <option>Sepeda</option>
                                        <option>Sepeda Motor</option>
                                        <option>Angkutan Umum</option>
                                        <option>Ojek</option>
                                        <option>Antar Jemput</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Golongan Darah</h5>
                                    <select class="form-control">
                                        <option selected disabled>- Pilih Golongan Darah -</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>O</option>
                                        <option>AB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Riwayat Penyakit</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Berat Badan</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Tinggi Badan</h5>
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
                                    <a href="{{ url('siswa/create2') }}" class="float-right btn btn-success waves-effect waves-light mr-1">
                                        Lanjut
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
