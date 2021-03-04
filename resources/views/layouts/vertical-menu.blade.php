<div class="vertical-menu">

                <div data-simplebar class="h-100">
                    
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{url('siswa/home')}}" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            @auth("guru")
                            <li>
                                <a href="index.html" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                    <span>Profil BK</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                    <span>Data Master User</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('guru_bk') }}">Data Guru BK</a></li>
                                    <li><a href="{{ url('siswa') }}">Data Siswa</a></li>
                                    <li><a href="{{ url('guru_mapel') }}">Data Guru Mapel</a></li>
                                    <li><a href="{{ url('orang_tua') }}">Data Orang Tua</a></li>
                                </ul>
                            </li>
                            @endauth
                            @auth("siswa")
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Data Master</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{ url('siswa/data_siswa') }}">Data Siswa</a></li>
                                        <li><a href="{{ url('siswa/data_keluarga') }}">Keluarga</a></li>
                                        <li><a href="{{ url('siswa/data_akademik') }}">Akademik</a></li>
                                        <li><a href="{{ url('siswa/data_rumah') }}">Kondisi Rumah</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Data Konseling Siswa</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{url('siswa/konseling_individu')}}">Individual</a></li>
                                        <li><a href="{{url('siswa/konseling_kelompok')}}">Kelompok</a></li>
                                        <li><a href="{{url('siswa/kehadiran_dan_poin')}}">Kehadiran dan Poin Pelanggaran</a></li>
                                    </ul>
                                </li>
                            @endauth
                            
                            @auth("guru")
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                    <span>Data Konseling Guru BK</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{url('guru_bk/konseling_individu')}}">Individual</a></li>
                                    <li><a href="{{url('guru_bk/konseling_kelompok')}}">Kelompok</a></li>
                                    <li><a href="{{url('guru_bk/kehadiran_dan_poin')}}">Kehadiran dan Poin Pelanggaran</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('guru_bk/materi_bk') }}" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Materi BK</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('guru_bk/konten') }}" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Konten</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('pengumuman') }}" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Pengumuman</span>
                                </a>
                            </li>
                            @endauth

                            @if (Auth::guard('siswa')->user() || Auth::guard('orangtua')->user())
                                <li>
                                    <a href="{{ url('profil_pengembang') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Profil Pengembang</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('masukan_saran') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Masukan Dan Saran</span>
                                    </a>
                                </li>
                            @endif

                            @auth("guru")
                                <li>
                                    <a href="{{ url('masukan_saran') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Daftar Masukan Dan Saran</span>
                                    </a>
                                </li>
                            @endauth
                            
                            {{-- <li>
                                <a href="" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Profil Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Profil Guru BK</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Profil Guru Mapel</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Profil Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                    <span>Profil Orang Tua</span>
                                </a>
                            </li> --}}
                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>