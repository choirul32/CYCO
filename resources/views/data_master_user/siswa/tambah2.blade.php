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
                                    <h5 class="font-size-14">Nama ayah</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                
                                <div class="form-group">
                                    <h5 class="font-size-14">Status ayah</h5>
                                    <select class="form-control">
                                        <option>Masih Hidup</option>
                                        <option>Meninggal</option>
                                        <option>Bercerai</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Hubungan dengan ayah</h5>
                                    <select class="form-control">
                                        <option>Ayah Kandung</option>
                                        <option>Ayah Tiri</option>
                                        <option>Ayah Angkat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">NIK</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Agama ayah</h5>
                                    <select class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jelaskan detil keadaan ayahmu</h5>
                                    <div>
                                        <textarea required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Tanggal lahir ayah</h5>
                                    <div>
                                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Pendidikan ayah</h5>
                                    <select class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Pekerjaan ayah</h5>
                                    <select class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Penghasil ayah</h5>
                                    <select class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Nomor HP ayah</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
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

                                <form class="custom-validation" action="#">
                                    <div class="form-group">
                                        <h5 class="font-size-14">Nama ibu</h5>
                                        <input type="text" class="form-control" required placeholder="Type something"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <h5 class="font-size-14">Status ibu</h5>
                                        <select class="form-control">
                                            <option>Masih Hidup</option>
                                            <option>Meninggal</option>
                                            <option>Bercerai</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Hubungan dengan ibu</h5>
                                        <select class="form-control">
                                            <option>ibu Kandung</option>
                                            <option>ibu Tiri</option>
                                            <option>ibu Angkat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">NIK</h5>
                                        <input type="text" class="form-control" required placeholder="Type something"/>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Agama ibu</h5>
                                        <select class="form-control">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Jelaskan detil keadaan ibumu</h5>
                                        <div>
                                            <textarea required class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Tanggal lahir ibu</h5>
                                        <div>
                                            <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Pendidikan ibu</h5>
                                        <select class="form-control">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Pekerjaan ibu</h5>
                                        <select class="form-control">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Penghasil ibu</h5>
                                        <select class="form-control">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Nomor HP ibu</h5>
                                        <input type="text" class="form-control" required placeholder="Type something"/>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="font-size-14">Ceritakan keadaan keluargamu secara detil dan lengkap</h5>
                                        <div>
                                            <textarea required class="form-control" rows="5"></textarea>
                                        </div>
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
                                    <a href="{{ url('siswa/create3') }}" class="float-right btn btn-success waves-effect waves-light mr-1">
                                        Lanjut
                                    </a>
                                    <a href="{{ url('siswa/create') }}" class="float-left btn btn-warning waves-effect waves-light mr-1">
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
