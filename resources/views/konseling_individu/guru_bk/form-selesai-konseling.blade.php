@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Form Konseling Berakhir</h4>
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

                            {{-- <h4 class="header-title"></h4> --}}
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                                <form id="form_konseling_selesai" method="POST" class="custom-validation" action="{{ url('guru/konseling_individu/form-konseling-selesai/save') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$konseling->id}}">
                                    <div class="form-group">
                                        <h5 class="font-size-14">Ringkasan Masalah</h5>
                                        <div>
                                            <textarea class="form-control" rows="5" disabled>{{$konseling->masalah}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="font-size-14">Harapan Konseling</h5>
                                        <div>
                                            <textarea class="form-control" rows="5" disabled>{{$konseling->harapan}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="font-size-14">Alternatif Penanganan Siswa (Hanya Diisi Guru Konseling)</h5>
                                        <div>
                                            <textarea name="alternatif_penanganan" required class="form-control" rows="5" id="alternatif_penanganan"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="button" onclick="submitConfirmation()" class="float-right btn btn-primary waves-effect waves-light mr-1">
                                                <i class="mdi mdi-content-save mr-1"></i>
                                                Simpan
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
@push('css')
    <link href="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endpush

@push('js')
    <script src="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{url('Vertical/dist/assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script type="text/javascript">
        function submitConfirmation() {
        swal.fire({
            title: "Konseling Berakhir?",
            text: "Apakah anda yakin memasukan data ini!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                document.getElementById("form_konseling_selesai").submit();
            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
            })
        }
        </script>
@endpush
