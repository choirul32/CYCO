@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Orang Tua</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Tambah Orang Tua</li>
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
            <h4 class="header-title">Profil Konselor</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">


                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                            <form class="custom-validation" action="#">
                                <div class="form-group">
                                    <h5 class="font-size-14">Nama Lengkap</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">NIP/NIK</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
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
                                    <h5 class="font-size-14">Jenis Kelamin</h5>
                                    <select class="form-control">
                                        <option>Laki Laki</option>
                                        <option>Perempuan</option>
                                    </select>
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
                                    <h5 class="font-size-14">Alamat Lengkap</h5>
                                    <div>
                                        <textarea required class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">Email</h5>
                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                </div>
                                <div class="form-group">
                                    <h5 class="font-size-14">No HP Aktif</h5>
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
                            <h4 class="header-title">Riwayat Pendidikan</h4>
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
