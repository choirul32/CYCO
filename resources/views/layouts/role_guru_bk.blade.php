@if (Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
    <li>
        <a href="{{url('guru/home')}}" class="waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
            <span>Dashboard</span>
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
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment"></i></div>
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
    {{-- <li>
        <a href="{{ url('guru/konten') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
            <span>Konten</span>
        </a>
    </li> --}}
    {{-- <li>
        <a href="{{ url('guru/pengumuman') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
            <span>Pengumuman</span>
        </a>
    </li> --}}
    <li>
        <a href="{{ url('guru/kritik_dan_saran') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-alt-dots"></i></div>
            <span>Rekap Kritik Saran</span>
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
{{-- end guru bk role --}}
