@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Kritik Dan Saran</h4>
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

                            <h4 class="header-title">Kritik Dan Saran</h4>
                            {{-- <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                @if (!$krisar->isEmpty())
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="text-center mt-4">
                                            <h4>Anda sudah memberikan kritik dan saran</h4>
                                            <p class="text-muted">Tunggu hari esok untuk bisa memberikan kritik dan saran lagi</p>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <form id="form_kritik_dan_saran" method="POST" class="custom-validation" action="{{ url('siswa/masukan_saran/create') }}">
                                    @csrf
                                    <div class="form-group">
                                        <h5 class="font-size-14">Kritik</h5>
                                        <div>
                                            <textarea name="kritik" required class="form-control" rows="5" id="kritik"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5 class="font-size-14">Saran</h5>
                                        <div>
                                            <textarea name="saran" required class="form-control" rows="5" id="saran"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="button" onclick="submitConfirmation()" class="float-right btn btn-success waves-effect waves-light mr-1">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @endif
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
            title: "Kritik Dan Saran?",
            text: "Apakah anda yakin memasukan data ini!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                document.getElementById("form_kritik_dan_saran").submit();
            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
            })
        }
        </script>
@endpush
