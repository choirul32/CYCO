
<header id="page-topbar">

    <div class="navbar-header">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: absolute; right: 20px; top: 20px; z-index: 1">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: absolute; right: 20px; top: 20px; z-index: 1">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    {{-- <span class="logo-sm">
                        <img src="{{url('Vertical/dist/assets/images/logo-sm-dark.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('Vertical/dist/assets/images/logo-dark.png')}}" alt="" height="20">
                    </span> --}}
                    {{-- <span>
                        CYCO
                    </span> --}}
                </a>

                <a href="index.html" class="logo logo-light">
                    {{-- <span class="logo-sm">
                        <img src="{{url('Vertical/dist/assets/images/logo-sm-light.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('Vertical/dist/assets/images/logo-light.png')}}" alt="" height="20">
                    </span> --}}
                    {{-- <span>
                        CYCO
                    </span> --}}
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-backburger"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{url('Vertical/dist/assets/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                    <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->username }}</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div> --}}
                    @auth('siswa')
                        <a class="dropdown-item" href="{{ url('siswa/logout') }}"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                    @endauth
                    @auth('guru')
                        <a class="dropdown-item" href="{{ url('guru/logout') }}"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                    @endauth
                    @auth('orangtua')
                        <a class="dropdown-item" href="{{ url('orangtua/logout') }}"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                    @endauth
                </div>
            </div>

        </div>
    </div>

</header>
