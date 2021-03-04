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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                            <form class="custom-validation" action="#">
                                <div class="form-group">
                                    <h5 class="font-size-14">Sekolah asal</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Mengapa anda memilih SMKN 5 SUrakarta</h5>
                                    <div>
                                        <textarea required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Sejak kapan anda merencanakan masuk SMKN 5 Surakarta</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Apakah rencana anda setelah diterima di SMKN 5 Surakarta</h5>
                                    <div>
                                        <textarea required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php $collection_ = ['Pramuka', 'Paskibraka', 'PMR', 'Ekstra Keterampilan Kejuruan', 'Tenis', 'Volly', 'Bela Diri', 'Seni Musik/Band', 'Patroli Keamanan Sekolah', 'Multimedia', 'Pecinta Alam', 'Basket', 'Futsal', 'Karya Ilmiah']; ?>
                                    <h5 class="font-size-14">Ekstrakulikuler yang akan diikuti selama belajar di SMKN 5 Surakarta</h5>
                                    <div>
                                        @foreach ($collection_ as $item)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck{{$loop->iteration}}" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="customCheck{{$loop->iteration}}">{{$item}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Apakah rencana anda setelah lulus SMK</h5>
                                    <select class="form-control">
                                        <option>Mencari Pekerjaan</option>
                                        <option>Melankutkan ke Perguruan Tinggi</option>
                                        <option>Mengikuti Kursus</option>
                                        <option>Berwisata</option>
                                        <option>Berumah Tangga</option>
                                        <option>Belum ada rencana</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Pekerjaan yang anda cita-citakan</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Perguruan tinggi yang anda cita-citakan</h5></h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Jurusan/Program studi yang anda cita-citakan</h5></h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <?php $collection_ = ['Matematika', 'Ekonomi', 'Geografi', 'Sejarah', 'Sosiologi', 'Fisika', 'Kimia', 'Biologi', 'Bahasa Inggris', 'Bahasa Indonesia', 'Lainnya']; ?>
                                    <h5 class="font-size-14">Mata Pelajaran yang paling anda senangi selama ini</h5>
                                    <div>
                                        @foreach ($collection_ as $item)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="mapelCheck{{$loop->iteration}}" data-parsley-multiple="groups"
                                                        data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="mapelCheck{{$loop->iteration}}">{{$item}}</label>
                                            </div>
                                        @endforeach
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
                                    <button type="submit" class="float-right btn btn-success waves-effect waves-light mr-1">Simpan</button>
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
