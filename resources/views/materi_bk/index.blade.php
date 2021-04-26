@extends('layouts.main')

@section('content')

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Materi BK</h4>
                        {{-- <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Materi BK</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                {{-- <h4 class="header-title">Buttons example</h4>
                                <p class="card-title-desc">The Buttons extension for DataTables
                                    provides a common set of options, API methods and styling to display
                                    buttons on a page that will interact with a DataTable. The core library
                                    provides the based framework upon which plug-ins can built.
                                </p> --}}
                                <div class="button-items mb-2">
                                    <a href="{{url('guru/materi_bk/create')}}" class="btn btn-primary waves-effect waves-light">Tambah Materi</a>
                                </div>
                                {{-- <h4 class="header-title">Accordion example</h4>
                                <p class="card-title-desc">Extend the default collapse behavior to create an accordion.</p> --}}
                                @for ($i = 0; $i < count($materi); $i++)
                                <div id="accordion-{{$i}}">
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="m-0 font-size-14">
                                                <a data-toggle="collapse" data-parent="#accordion-{{$i}}"
                                                    href="#collapse-{{$i}}" aria-expanded="true"
                                                    aria-controls="collapse-{{$i}}" class="text-dark">
                                                    {{$materi[$i]->nama}}
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse-{{$i}}" class="collapse" aria-labelledby="heading-{{$i}}" data-parent="#accordion-{{$i}}">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-10">
                                                        {{$materi[$i]->keterangan}}
                                                    </div>
                                                    <div class="col-2 m-auto">
                                                        <button class="btn btn-outline-danger waves-effect waves-light" onclick="deleteConfirmation({{ $materi[$i]->id }})" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-delete-alert"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endfor
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->
@endsection

@push('css')
    <!-- Plugins css -->
    <link href="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endpush

@push('js')
    <script src="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{url('Vertical/dist/assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script type="text/javascript">
        function deleteConfirmation(id) {
        swal.fire({
            title: "Hapus?",
            text: "Apakah anda yakin ingin menghapuas data ini!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'DELETE',
                    url: "{{ url('guru/materi_bk/delete') }}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });
            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
            })
        }
    </script>

@endpush
