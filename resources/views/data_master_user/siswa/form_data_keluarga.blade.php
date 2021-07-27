@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Data Keluarga</h4>
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
                    </ol> --}}
                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <form action="{{url('siswa/edit/data_keluarga')}}" method="post">
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
                                        <h5 class="header-title">Nama ayah</h5>
                                        <input value="{{$siswa->nama_ayah ?? ""}}" name="nama_ayah" type="text" class="form-control" required placeholder=""/>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="header-title">Status ayah</h5>
                                        <select class="form-control" name="status_ayah">
                                            <option selected disabled value="">-- Pilih --</option>
                                            <option @if ($siswa->status_ayah == 1) selected @endif value="1">Masih Hidup</option>
                                            <option @if ($siswa->status_ayah == 2) selected @endif value="2">Meninggal</option>
                                            <option @if ($siswa->status_ayah == 3) selected @endif value="3">Bercerai</option>
                                            <option @if ($siswa->status_ayah == 4) selected @endif value="4">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Hubungan dengan ayah</h5>
                                        <select class="form-control" name="hubungan_ayah">
                                            <option selected disabled value="">-- Pilih --</option>
                                            <option @if ($siswa->hubungan_ayah == 1) selected @endif value="1">Ayah Kandung</option>
                                            <option @if ($siswa->hubungan_ayah == 2) selected @endif value="2">Ayah Tiri</option>
                                            <option @if ($siswa->hubungan_ayah == 3) selected @endif value="3">Ayah Angkat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">NIK</h5>
                                        <input value="{{$siswa->nik_ayah ?? ""}}" name="nik_ayah" type="text" class="form-control" required placeholder=""/>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Agama ayah</h5>
                                        <select class="form-control" name="agama_ayah">
                                            <option selected disabled value="">-- Pilih --</option>
                                            <option @if ($siswa->agama_ayah == 1) selected @endif value="1">Islam</option>
                                            <option @if ($siswa->agama_ayah == 2) selected @endif value="2">Kristen</option>
                                            <option @if ($siswa->agama_ayah == 3) selected @endif value="3">Katolik</option>
                                            <option @if ($siswa->agama_ayah == 4) selected @endif value="4">Hindu</option>
                                            <option @if ($siswa->agama_ayah == 5) selected @endif value="5">Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Jelaskan detil keadaan ayahmu</h5>
                                        <div>
                                            <textarea required class="form-control" rows="5" name="detail_ayah">{{ $siswa->detail_ayah }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Tanggal lahir ayah</h5>
                                        <div>
                                            <input value="{{ $siswa->tanggal_lahir_ayah }}" name="tanggal_lahir_ayah" class="form-control" type="date" value="" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Pendidikan ayah</h5>
                                        <select class="form-control" name="pendidikan_ayah">
                                            <option selected disabled value="">-- Pilih --</option>
                                            <option @if ($siswa->pendidikan_ayah == 1) selected @endif value="1">SD</option>
                                            <option @if ($siswa->pendidikan_ayah == 2) selected @endif value="2">SMP</option>
                                            <option @if ($siswa->pendidikan_ayah == 3) selected @endif value="3">SMA</option>
                                            <option @if ($siswa->pendidikan_ayah == 4) selected @endif value="4">D1</option>
                                            <option @if ($siswa->pendidikan_ayah == 6) selected @endif value="5">D3</option>
                                            <option @if ($siswa->pendidikan_ayah == 7) selected @endif value="6">S1</option>
                                            <option @if ($siswa->pendidikan_ayah == 8) selected @endif value="7">S2</option>
                                            <option @if ($siswa->pendidikan_ayah == 9) selected @endif value="8">S3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Pekerjaan ayah</h5>
                                        <select class="form-control" name="pekerjaan_ayah">
                                            <option selected disabled value="">-- Pilih --</option>
                                            <option @if ($siswa->pekerjaan_ayah == 1) selected @endif value="1">PNS/TNI/POLRI</option>
                                            <option @if ($siswa->pekerjaan_ayah == 2) selected @endif value="2">Wirausaha</option>
                                            <option @if ($siswa->pekerjaan_ayah == 3) selected @endif value="3">Petani</option>
                                            <option @if ($siswa->pekerjaan_ayah == 4) selected @endif value="4">Pedagang</option>
                                            <option @if ($siswa->pekerjaan_ayah == 6) selected @endif value="5">Karyawan Swasta</option>
                                            <option @if ($siswa->pekerjaan_ayah == 7) selected @endif value="6">Buruh</option>
                                            <option @if ($siswa->pekerjaan_ayah == 8) selected @endif value="7">Lainnya</option>
                                            <option @if ($siswa->pekerjaan_ayah == 9) selected @endif value="8">Tidak Bekerja</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Penghasil ayah</h5>
                                        <select class="form-control" name="penghasilan_ayah">
                                            <option selected disabled value="">-- Pilih --</option>
                                            <option @if ($siswa->penghasilan_ayah == 1) selected @endif value="1">Tidak Berpenghasilan</option>
                                            <option @if ($siswa->penghasilan_ayah == 2) selected @endif value="2">Rp. 500.000 - Rp. 999.999</option>
                                            <option @if ($siswa->penghasilan_ayah == 3) selected @endif value="3">Rp. 1000.000 - Rp. 1.999.999</option>
                                            <option @if ($siswa->penghasilan_ayah == 4) selected @endif value="4">Rp. 2000.000 - Rp. 4.999.999</option>
                                            <option @if ($siswa->penghasilan_ayah == 6) selected @endif value="5">Rp. 5.000.000 - Rp. 20.000.000</option>
                                            <option @if ($siswa->penghasilan_ayah == 7) selected @endif value="6">Lebih dari Rp. 20.000.000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="header-title">Nomor HP ayah</h5>
                                        <small>Awali dengan 62, contoh: 62874 7599 0002 (Dimohon isikan dengan benar, karena dimasukkan ke grup ortu)</small>
                                        <input value="{{$siswa->phone_ayah}}" name="phone_ayah" type="text" class="form-control" required placeholder=""/>
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
                                            <h5 class="header-title">Nama ibu</h5>
                                            <input name="nama_ibu" value="{{$siswa->nama_ibu}}" type="text" class="form-control" required placeholder=""/>
                                        </div>

                                        <div class="form-group">
                                            <h5 class="header-title">Status ibu</h5>
                                            <select class="form-control" name="status_ibu">
                                                <option selected disabled value="">-- Pilih --</option>
                                                <option @if ($siswa->status_ibu == 1) selected @endif value="1">Masih Hidup</option>
                                                <option @if ($siswa->status_ibu == 2) selected @endif value="2">Meninggal</option>
                                                <option @if ($siswa->status_ibu == 3) selected @endif value="3">Bercerai</option>
                                                <option @if ($siswa->status_ibu == 4) selected @endif value="4">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Hubungan dengan ibu</h5>
                                            <select class="form-control" name="hubungan_ibu">
                                                <option selected disabled value="">-- Pilih --</option>
                                                <option @if ($siswa->hubungan_ibu == 1) selected @endif value="1">Ibu Kandung</option>
                                                <option @if ($siswa->hubungan_ibu == 2) selected @endif value="2">Ibu Tiri</option>
                                                <option @if ($siswa->hubungan_ibu == 3) selected @endif value="3">Ibu Angkat</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">NIK</h5>
                                            <input value="{{$siswa->nik_ibu}}" name="nik_ibu" type="text" class="form-control" required placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Agama ibu</h5>
                                            <select class="form-control" name="agama_ibu">
                                                <option selected disabled value="">-- Pilih --</option>
                                                <option @if ($siswa->agama_ibu == 1) selected @endif value="1">Islam</option>
                                                <option @if ($siswa->agama_ibu == 2) selected @endif value="2">Kristen</option>
                                                <option @if ($siswa->agama_ibu == 3) selected @endif value="3">Katolik</option>
                                                <option @if ($siswa->agama_ibu == 4) selected @endif value="4">Hindu</option>
                                                <option @if ($siswa->agama_ibu == 5) selected @endif value="5">Budha</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Jelaskan detil keadaan ibumu</h5>
                                            <div>
                                                <textarea name="detail_ibu" required class="form-control" rows="5">{{$siswa->detail_ibu}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Tanggal lahir ibu</h5>
                                            <div>
                                                <input value="{{$siswa->tanggal_lahir_ibu}}" name="tanggal_lahir_ibu" class="form-control" type="date" value="" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Pendidikan ibu</h5>
                                            <select class="form-control" name="pendidikan_ibu">
                                                <option selected disabled value="">-- Pilih --</option>
                                                <option @if ($siswa->pendidikan_ibu == 1) selected @endif value="1">SD</option>
                                                <option @if ($siswa->pendidikan_ibu == 2) selected @endif value="2">SMP</option>
                                                <option @if ($siswa->pendidikan_ibu == 3) selected @endif value="3">SMA</option>
                                                <option @if ($siswa->pendidikan_ibu == 4) selected @endif value="4">D1</option>
                                                <option @if ($siswa->pendidikan_ibu == 6) selected @endif value="5">D3</option>
                                                <option @if ($siswa->pendidikan_ibu == 7) selected @endif value="6">S1</option>
                                                <option @if ($siswa->pendidikan_ibu == 8) selected @endif value="7">S2</option>
                                                <option @if ($siswa->pendidikan_ibu == 9) selected @endif value="8">S3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Pekerjaan ibu</h5>
                                            <select class="form-control" name="pekerjaan_ibu">
                                                <option selected disabled value="">-- Pilih --</option>
                                                <option @if ($siswa->pekerjaan_ibu == 1) selected @endif value="1">PNS/TNI/POLRI</option>
                                                <option @if ($siswa->pekerjaan_ibu == 2) selected @endif value="2">Wirausaha</option>
                                                <option @if ($siswa->pekerjaan_ibu == 3) selected @endif value="3">Petani</option>
                                                <option @if ($siswa->pekerjaan_ibu == 4) selected @endif value="4">Pedagang</option>
                                                <option @if ($siswa->pekerjaan_ibu == 6) selected @endif value="5">Karyawan Swasta</option>
                                                <option @if ($siswa->pekerjaan_ibu == 7) selected @endif value="6">Buruh</option>
                                                <option @if ($siswa->pekerjaan_ibu == 8) selected @endif value="7">Lainnya</option>
                                                <option @if ($siswa->pekerjaan_ibu == 9) selected @endif value="8">Tidak Bekerja</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Penghasil ibu</h5>
                                            <select class="form-control" name="penghasilan_ibu">
                                                <option selected disabled value="">-- Pilih --</option>
                                                <option @if ($siswa->penghasilan_ibu == 1) selected @endif value="1">Tidak Berpenghasilan</option>
                                                <option @if ($siswa->penghasilan_ibu == 2) selected @endif value="2">Rp. 500.000 - Rp. 999.999</option>
                                                <option @if ($siswa->penghasilan_ibu == 3) selected @endif value="3">Rp. 1000.000 - Rp. 1.999.999</option>
                                                <option @if ($siswa->penghasilan_ibu == 4) selected @endif value="4">Rp. 2000.000 - Rp. 4.999.999</option>
                                                <option @if ($siswa->penghasilan_ibu == 6) selected @endif value="5">Rp. 5.000.000 - Rp. 20.000.000</option>
                                                <option @if ($siswa->penghasilan_ibu == 7) selected @endif value="6">Lebih dari Rp. 20.000.000</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Nomor HP ibu</h5>
                                            <small>Awali dengan 62, contoh: 62874 7599 0002 (Dimohon isikan dengan benar, karena dimasukkan ke grup ortu)</small>
                                            <input value="{{$siswa->phone_ibu}}" name="phone_ibu" type="text" class="form-control" required placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="header-title">Ceritakan keadaan keluargamu secara detil dan lengkap</h5>
                                            <div>
                                                <textarea name="detail_keluarga" required class="form-control" rows="5">{{$siswa->detail_keluarga}}</textarea>
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
