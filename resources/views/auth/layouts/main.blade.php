<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>CYCO - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('Vertical/dist/assets/images/favicon.ico')}}">
        @stack('css')
        <!-- Bootstrap Css -->
        <link href="{{url('Vertical/dist/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('Vertical/dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('Vertical/dist/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        
    </head>

    <body class="bg-primary bg-pattern">
        @if ($message = Session::get('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>{{ $message }}</strong>
        </div>
	    @endif

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            {{-- <a href="index.html" class="logo"><img src="assets/images/logo-light.png" height="24" alt="logo"></a> --}}
                            {{-- <h5 class="font-size-16 text-white-50 mb-4">Responsive Bootstrap 4 Admin Dashboard</h5> --}}
                        </div>
                    </div>
                </div>
                <!-- end row -->
                @yield('content')
                
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->
        @stack('script')
        <!-- JAVASCRIPT -->
        <script src="{{url('Vertical/dist/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('Vertical/dist/assets/libs/node-waves/waves.min.js')}}"></script>
        
        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
        
        <script src="{{url('Vertical/dist/assets/js/app.js')}}"></script>
        
    </body>
</html>
