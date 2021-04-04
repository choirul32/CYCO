<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            {{-- guru bk role --}}
                            @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                <li>
                                    <a href="{{url('guru/home')}}" class="waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="index.html" class="waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                        <span>Profil BK</span>
                                    </a>
                                </li> --}}

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Data Master User</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{ url('guru/data_guru_bk') }}">Data Guru BK</a></li>
                                        <li><a href="{{ url('guru/data_siswa') }}">Data Siswa</a></li>
                                        <li><a href="{{ url('guru/data_guru_mapel') }}">Data Guru Mapel</a></li>
                                        <li><a href="{{ url('guru/data_orang_tua') }}">Data Orang Tua</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Data Konseling</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{url('guru/konseling_individu')}}">Individual</a></li>
                                        <li><a href="{{url('guru/konseling_kelompok')}}">Kelompok</a></li>
                                        <li><a href="{{url('guru/kehadiran_dan_poin')}}">Kehadiran dan Poin Pelanggaran</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('guru/materi_bk') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Materi BK</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('guru/konten') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Konten</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('guru/pengumuman') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Pengumuman</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('guru/kritik_dan_saran') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Masukan Dan Saran</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Profil</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{url('guru/profil/data_diri')}}">Data Diri</a></li>
                                        <li><a href="{{url('guru/profil/riwayat_pendidikan')}}">Riwayat Pendidikan</a></li>
                                        <li><a href="{{url('guru/profil/riwayat_pekerjaan')}}">Riwayat Pekerjaan</a></li>
                                        <li><a href="{{url('guru/profil/publikasi_artikel')}}">Publikasi Artikel</a></li>
                                        <li><a href="{{url('guru/profil/pengalaman_penelitian')}}">Pengalaman Penelitian</a></li>
                                    </ul>
                                </li>
                            @endif
                            {{-- end guru bk role --}}
                            {{-- guru mapel role --}}
                            @if (Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
                                <li>
                                    <a href="{{url('guru/home')}}" class="waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="index.html" class="waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                        <span>Profil BK</span>
                                    </a>
                                </li> --}}

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Data Master User</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{ url('guru/data_guru_bk') }}">Data Guru BK</a></li>
                                        <li><a href="{{ url('guru/data_siswa') }}">Data Siswa</a></li>
                                        <li><a href="{{ url('guru/data_guru_mapel') }}">Data Guru Mapel</a></li>
                                        <li><a href="{{ url('guru/data_orang_tua') }}">Data Orang Tua</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('guru/kritik_dan_saran') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Masukan Dan Saran</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Profil</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{url('guru/profil/data_diri')}}">Data Diri</a></li>
                                        <li><a href="{{url('guru/profil/riwayat_pendidikan')}}">Riwayat Pendidikan</a></li>
                                        <li><a href="{{url('guru/profil/riwayat_pekerjaan')}}">Riwayat Pekerjaan</a></li>
                                        <li><a href="{{url('guru/profil/publikasi_artikel')}}">Publikasi Artikel</a></li>
                                        <li><a href="{{url('guru/profil/pengalaman_penelitian')}}">Pengalaman Penelitian</a></li>
                                    </ul>
                                </li>
                            @endif
                            {{-- end guru mapel role --}}
                            @if(Auth::user()->role_id == 6)
                                <li>
                                    <a href="{{url('siswa/home')}}" class="waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
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
                                        <span>Data Konseling</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{url('siswa/konseling_individu')}}">Individual</a></li>
                                        <li><a href="{{url('siswa/konseling_kelompok')}}">Kelompok</a></li>
                                        <li><a href="{{url('siswa/kehadiran_dan_poin')}}">Kehadiran dan Poin Pelanggaran</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('profil_pengembang') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Profil Pengembang</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('siswa/masukan_saran') }}" class=" waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                        <span>Masukan Dan Saran</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->role_id == 7)
                                <li>
                                    <a href="{{url('orangtua/home')}}" class="waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                {{-- <li>
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
                                </li> --}}
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                        <span>Data Konseling</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{url('orangtua/konseling_individu')}}">Individual</a></li>
                                        <li><a href="{{url('orangtua/konseling_kelompok')}}">Kelompok</a></li>
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
