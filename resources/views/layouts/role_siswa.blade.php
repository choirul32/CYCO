@if(Auth::user()->role_id == 6)
    <li>
        <a href="{{url('siswa/home')}}" class="waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
            {{-- <span class="badge badge-pill badge-success float-right">3</span> --}}
            <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div>
            <span>Data Master</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ url('siswa/data_siswa') }}">Data Siswa</a></li>
            <li><a href="{{ url('siswa/data_keluarga') }}">Keluarga</a></li>
            <li><a href="{{ url('siswa/data_akademik') }}">Akademik</a></li>
            <li><a href="{{ url('siswa/data_rumah') }}">Kondisi Rumah</a></li>
            <li><a href="{{ url('siswa/unggah_berkas') }}">Unggah Berkas</a></li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment"></i></div>
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
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-maximize"></i></div>
            <span>Profil Pengembang</span>
        </a>
    </li>
    <li>
        <a href="{{ url('siswa/masukan_saran') }}" class=" waves-effect">
            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-alt-dots"></i></div>
            <span>Masukan Dan Saran</span>
        </a>
    </li>
@endif
