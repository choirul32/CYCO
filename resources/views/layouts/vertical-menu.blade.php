<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            {{-- guru bk role --}}
                            @include('layouts.role_guru_bk')
                            {{-- guru mapel role --}}
                            @include('layouts.role_guru_mapel')
                            {{-- end guru mapel role --}}
                            {{-- siswa role --}}
                            @include('layouts.role_siswa')
                            {{-- end siswa role --}}
                            @if(Auth::user()->role_id == 7)
                                <li>
                                    <a href="{{url('orangtua/home')}}" class="waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right"></span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Data Konseling</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{url('orangtua/konseling_individu')}}">Riwayat Konseling</a></li>
                                        <li><a href="{{url('orangtua/kehadiran_dan_poin')}}">Kehadiran dan Poin Pelanggaran</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('profil_pengembang') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Profil Pengembang</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ url('orangtua/masukan_saran') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Masukan Dan Saran</span>
                                    </a>
                                </li> --}}
                            @endif
                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
