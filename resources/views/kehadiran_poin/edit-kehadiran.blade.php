@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Kehadiran dan Poin Pelanggaran</h4>
                        {{-- <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tabel</a></li>
                        <li class="breadcrumb-item active">Table Siswa</li>
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
                            <form class="" action="{{url('guru/kehadiran_dan_poin/poin/edit')}}" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{$kehadiran->id}}">
                                <div class="card-body">
                                    <h4 class="header-title">Edit Kehadiran</h4>

                                    <div class="form-group row">
                                        <label for="nama-poin" class="col-md-2 col-form-label">Siswa</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="siswa-select" required name="siswa_id">
                                                <option value="" disabled>Select...</option>
                                                @foreach ($siswa as $item => $key)
                                                    <option value="{{$item}}" @if ($poin->siswa_id == $item) selected @endif>{{$key}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="nama-poin" class="col-md-2 col-form-label">Sakit</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="{{$kehadiran->sakit}}" id="jumlah-poin" name="sakit" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah-poin" class="col-md-2 col-form-label">Tidak Hadir Tanpa Keterangan</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="{{$kehadiran->tanpa_keterangan}}" id="jumlah-poin" name="tidak_hadir" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="keterangan-poin" class="col-md-2 col-form-label">Izin</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="{{$kehadiran->izin}}" id="jumlah-poin" name="izin" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="mb-4 float-right btn btn-success waves-effect waves-light mr-1">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
@endsection

@push('js')
<script>
    $(document).ready(function () {
        $("#siswa-select").select2();
    });
</script>
@endpush
