<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Sistem Informasi Bimbingan Konseling</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('Vertical/dist/assets/images/favicon.ico')}}">
        <!-- DataTables -->
        <link href="{{url('Vertical/dist/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('Vertical/dist/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{url('Vertical/dist/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{url('Vertical/dist/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('Vertical/dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('Vertical/dist/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Sweet Alert-->
        <link href="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @stack('css')
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.page-topbar')
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.vertical-menu')
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            @yield('content')
            @include('layouts.footer')
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{url('Vertical/dist/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
        <!-- Required datatable js -->
        <script src="{{url('Vertical/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <!-- Datatable init js -->
        <script src="{{url('Vertical/dist/assets/js/pages/datatables.init.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/js/app.js')}}"></script>
        <!-- parsleyjs -->
        <script src="{{url('Vertical/dist/assets/libs/parsleyjs/parsley.min.js')}}"></script>
        <!-- validation init -->
        <script src="{{url('Vertical/dist/assets/js/pages/form-validation.init.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/js/app.js')}}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{url('Vertical/dist/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Sweet alert init js-->
        <script src="{{url('Vertical/dist/assets/js/pages/sweet-alerts.init.js')}}"></script>
        @stack('js')
    </body>
</html>
