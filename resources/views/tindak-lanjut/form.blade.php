@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    {{-- <h4 class="page-title mb-1">Form Tindak Lanjut Siswa</h4> --}}
                    {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Masukan dan Saran</a></li>
                    <li class="breadcrumb-item active">Tambah Siswa</li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Form Tindak Lanjut Siswa</h4>
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                                <form id="form_tindak_lanjut_siswa" method="POST" class="custom-validation" action="{{ url('guru/tindak-lanjut-siswa/save') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$tindak_lanjut->id ?? null}}">
                                    <div class="form-group">
                                        <label for="nama-poin" class="col-form-label">Siswa</label>
                                        <select class="form-control" id="siswa-select" required name="siswa_id">
                                            <option value="" disabled selected>Select...</option>
                                            @foreach ($siswa as $item)
                                                <option value="{{$item->id}}" @if ($tindak_lanjut->siswa_id == $item->id) selected @endif>{{$item->nama_lengkap ?? $item->username}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="font-size-14">Kritik, Saran, dan Masukan</h5>
                                        <div>
                                            <textarea name="masukan" required class="form-control" rows="5" id="masukan" required>{{$tindak_lanjut->masukan}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="font-size-14">Keterangan</h5>
                                        <div>
                                            <textarea name="keterangan" required class="form-control" rows="5" id="keterangan" required>{{$tindak_lanjut->keterangan}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="submit" class="float-right btn btn-success waves-effect waves-light mr-1">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
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

@push('js')
    <script>
        $(document).ready(function () {
            $("#siswa-select").select2();
        });
    </script>
@endpush
