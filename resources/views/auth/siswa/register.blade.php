<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('Vertical/dist/assets/images/favicon.ico')}}">
        
        <!-- Bootstrap Css -->
        <link href="{{url('Vertical/dist/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('Vertical/dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('Vertical/dist/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        
    </head>

    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="{{url('siswa/home')}}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-sm-2">
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

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Register Siswa</h5>
                                    <form class="form-horizontal" action="{{ url('siswa/register') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="nama" type="text" class="form-control" id="username" required="">
                                                    <label for="username">Nama</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <select class="form-control" name="kelas" id="kelas" required>
                                                        <option value="" disabled selected></option>
                                                        <option value="1">X</option>
                                                        <option value="2">XI</option>
                                                        <option value="3">XII</option>
                                                    </select>
                                                    <label for="kelas">Kelas</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="no_handphone" type="text" class="form-control" id="nomor" required="">
                                                    <label for="nomor">Nomor Handphone</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="email" type="email" class="form-control" id="useremail" required="">
                                                    <label for="useremail">Email</label> 
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="password" type="password" class="form-control" id="password" required="">
                                                    <label for="password">Password</label>
                                                </div>
                                                {{-- <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="term-conditionCheck">
                                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                                </div> --}}
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Register</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="{{url('siswa/login')}}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have account?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

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
