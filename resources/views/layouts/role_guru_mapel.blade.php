@if (Auth::user()->role_id == 4 || Auth::user()->role_id == 5)
    <li>
        <a href="{{url('guru/home')}}" class="waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
            <span>Dashboard</span>
        </a>
    </li>
    {{-- <li>
        <a href="index.html" class="waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">3</span>
            <span>Profil BK</span>
        </a>
    </li> --}}

    {{-- <li>
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
    </li> --}}
    <li>
        <a href="{{ url('guru/konseling') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment"></i></div>
            <span>Riwayat Konseling</span>
        </a>
    </li>
    <li>
        <a href="{{ url('guru/data_siswa') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div>
            <span>Rekap Data Siswa</span>
        </a>
    </li>
    <li>
        <a href="{{ url('guru/tindak-lanjut-siswa') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div>
            <span>Tindak Lanjut Siswa</span>
        </a>
    </li>
    <li>
        <a href="{{ url('guru/kehadiran_dan_poin') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-exclamation-circle"></i></div>
            <span>Kehadiran dan Poin</span>
        </a>
    </li>
    <li>
        <a href="{{ url('guru/kritik_dan_saran') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-alt-dots"></i></div>
            <span>Masukan Dan Saran</span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-circle"></i></div>
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
