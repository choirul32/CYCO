<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'siswa', 'middleware' => ['auth:siswa']], function () {
    Route::get('/', 'Siswa\ViewController@index');
    Route::get('/home', 'Home\Siswa\HomeController@siswaHome');
    Route::get('/data_siswa', 'Siswa\ViewController@dataSiswa');
    Route::get('/data_keluarga', 'Siswa\ViewController@dataKeluarga');
    Route::get('/data_akademik', 'Siswa\ViewController@dataAkademik');
    Route::get('/data_rumah', 'Siswa\ViewController@dataRumah');
    Route::prefix('/edit')->group(function () {
        Route::get('/data_siswa', 'Siswa\EditController@dataSiswa');
        Route::get('/data_keluarga', 'Siswa\EditController@dataKeluarga');
        Route::get('/data_akademik', 'Siswa\EditController@dataAkademik');
        Route::get('/data_rumah', 'Siswa\EditController@dataRumah');
        Route::post('/data_siswa', 'Siswa\EditController@dataSiswaUpdate');
        Route::post('/data_keluarga', 'Siswa\EditController@dataKeluargaUpdate');
        Route::post('/data_akademik', 'Siswa\EditController@dataAkademikUpdate');
        Route::post('/data_rumah', 'Siswa\EditController@dataKondisiRumahUpdate');
    });
    Route::delete('/delete/{id}', 'Siswa\DeleteController@destroySiswa');
    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexSiswa');
        Route::post('/create', 'KonselingIndividu\CreateController@storeSiswa');
        Route::post('/edit/{id}', 'KonselingIndividu\EditController@editSiswa');
        Route::delete('/delete/{id}', 'KonselingIndividu\DeleteController@deleteSiswa');
        Route::get('/api/edit/{id}', 'KonselingIndividu\ReadController@getSingleKonseling');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexSiswa');
        Route::post('/create', 'KonselingKelompok\CreateController@storeSiswa');
        Route::post('/edit/{id}', 'KonselingKelompok\EditController@editSiswa');
        Route::delete('/delete/{id}', 'KonselingKelompok\DeleteController@deleteSiswa');
        Route::get('/api/edit/{id}', 'KonselingKelompok\ReadController@getSingleKonseling');
    });
    Route::prefix('/kehadiran_dan_poin')->group(function () {
        Route::get('/', 'KehadiranPoin\ViewController@indexSiswa');
    });
    Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
    Route::prefix('masukan_saran')->group(function () {
        Route::get('/', 'MasukanSaran\ViewController@index');
        Route::post('/create', 'MasukanSaran\CreateController@createKritikSaran');
    });
});

Route::group(['prefix' => 'guru', 'middleware' => ['auth:guru']], function () {
    Route::get('/', 'GuruBK\ViewController@index');
    Route::get('/home', 'Home\GuruBK\HomeController@guruBKHome');
    Route::get('/create', 'GuruBK\ViewController@form');
    Route::post('/create', 'GuruBK\CreateController@storeGuruBK');
    Route::delete('/delete/{id}', 'GuruBK\DeleteController@destroyGuruBK');
    Route::get('/api', 'GuruBK\ReadController@getAPIGuruBK');
    Route::prefix('/edit')->group(function () {
        Route::get('/data_diri', 'GuruBK\EditController@dataDiri');
        Route::get('/riwayat_pendidikan', 'GuruBK\EditController@riwayatPendidikan');
        Route::get('/riwayat_pekerjaan', 'GuruBK\EditController@riwayatPekerjaan');
        Route::get('/publikasi_artikel', 'GuruBK\EditController@publikasiArtikel');
        Route::get('/pengalaman_penelitian', 'GuruBK\EditController@pengalamanPenelitian');
        Route::post('/data_diri', 'GuruBK\EditController@dataDiriUpdate');
        Route::post('/riwayat_pendidikan', 'GuruBK\EditController@riwayatPendidikanUpdate');
        Route::post('/riwayat_pekerjaan', 'GuruBK\EditController@riwayatPekerjaanUpdate');
        Route::post('/publikasi_artikel', 'GuruBK\EditController@publikasiArtikelUpdate');
        Route::post('/pengalaman_penelitian', 'GuruBK\EditController@pengalamanPenelitianUpdate');
    });
    // Route::prefix('/konten')->group(function () {
    //     Route::get('/', 'Konten\ViewController@index');
    //     Route::get('/create', 'Konten\CreateController@form');
    // });
    Route::get('/data_siswa', 'Siswa\ViewController@index');
    Route::get('/data_guru_bk', 'GuruBK\ViewController@index');
    Route::get('/data_guru_mapel', 'GuruMapel\ViewController@index');
    Route::get('/data_orang_tua', 'OrangTua\ViewController@index');
    Route::prefix('/api')->group(function () {
        Route::get('/data_siswa/{id}', 'Siswa\ReadController@getAPISiswaById');
        Route::get('/data_guru_bk/{id}', 'GuruBK\ReadController@getAPIGuruBKById');
        Route::get('/data_guru_mapel/{id}', 'GuruMapel\ReadController@getAPIGuruMapelById');
        Route::get('/data_orang_tua/{id}', 'OrangTua\ReadController@getAPIOrangtuaById');
    });

    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexGuruBK');
        Route::get('/verifikasi/{id}', 'KonselingIndividu\EditController@verifikasiPermintaan');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexGuruBK');
        Route::get('/verifikasi/{id}', 'KonselingIndividu\EditController@verifikasiPermintaan');
    });
    Route::prefix('/profil')->group(function () {
        Route::get('/data_diri', 'GuruBK\ViewController@dataDiri');
        Route::get('/riwayat_pendidikan', 'GuruBK\ViewController@riwayatPendidikan');
        Route::get('/riwayat_pekerjaan', 'GuruBK\ViewController@riwayatPekerjaan');
        Route::get('/publikasi_artikel', 'GuruBK\ViewController@publikasiArtikel');
        Route::get('/pengalaman_penelitian', 'GuruBK\ViewController@pengalamanPenelitian');
    });

    Route::get('kritik_dan_saran', 'MasukanSaran\ViewController@indexTable');
    Route::get('/materi_bk', 'MateriBK\ViewController@index');
    Route::get('/materi_bk/create', 'MateriBK\CreateController@createForm');
    Route::get('/konten', 'Konten\ViewController@index');
    Route::get('/konten/create', 'Konten\CreateController@createForm');
    Route::get('/pengumuman', 'Pengumuman\ViewController@index');
    Route::get('/pengumuman/create', 'Pengumuman\CreateController@createForm');
    Route::get('/kehadiran_dan_poin', 'KehadiranPoin\ViewController@indexTable');
    // Route::prefix('/kehadiran_dan_poin')->group(function () {
    //     Route::get('/', 'KehadiranPoin\ViewController@indexGuruBK');
    // });
    // Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
});

Route::group(['prefix' => 'orangtua', 'middleware' => ['auth:orangtua']], function () {
    Route::get('/', 'OrangTua\ViewController@index');
    Route::get('/home', 'Home\OrangTua\HomeController@orangtuaHome');
    Route::get('/create', 'OrangTua\ViewController@form');
    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexOrangtua');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexOrangtua');
    });
    Route::prefix('/kehadiran_dan_poin')->group(function () {
        Route::get('/', 'KehadiranPoin\ViewController@indexOrangtua');
    });
    Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth:web']], function () {
    Route::get('/', 'GuruBK\ViewController@index');
    Route::get('/home', 'Home\GuruBK\HomeController@guruBKHome');
    Route::get('/create', 'GuruBK\ViewController@form');
    Route::post('/create', 'GuruBK\CreateController@storeGuruBK');
    Route::delete('/delete/{id}', 'GuruBK\DeleteController@destroyGuruBK');
    Route::get('/api', 'GuruBK\ReadController@getAPIGuruBK');
    Route::prefix('/edit')->group(function () {
        Route::get('/data_diri', 'GuruBK\EditController@dataDiri');
        Route::get('/riwayat_pendidikan', 'GuruBK\EditController@riwayatPendidikan');
        Route::get('/riwayat_pekerjaan', 'GuruBK\EditController@riwayatPekerjaan');
        Route::get('/publikasi_artikel', 'GuruBK\EditController@publikasiArtikel');
        Route::get('/pengalaman_penelitian', 'GuruBK\EditController@pengalamanPenelitian');
    });
    // Route::prefix('/konten')->group(function () {
    //     Route::get('/', 'Konten\ViewController@index');
    //     Route::get('/create', 'Konten\CreateController@form');
    // });
    Route::get('/data_siswa', 'Siswa\ViewController@index');
    Route::get('/data_guru_bk', 'GuruBK\ViewController@index');
    Route::get('/data_guru_mapel', 'GuruMapel\ViewController@index');
    Route::get('/data_orang_tua', 'OrangTua\ViewController@index');
    Route::prefix('/api')->group(function () {
        Route::get('/data_siswa/{id}', 'Siswa\ReadController@getAPISiswaById');
        Route::get('/data_guru_bk/{id}', 'GuruBK\ReadController@getAPIGuruBKById');
        Route::get('/data_guru_mapel/{id}', 'GuruMapel\ReadController@getAPIGuruMapelById');
        Route::get('/data_orang_tua/{id}', 'OrangTua\ReadController@getAPIOrangtuaById');
    });

    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexGuruBK');
        Route::get('/verifikasi/{id}', 'KonselingIndividu\EditController@verifikasiPermintaan');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexGuruBK');
        Route::get('/verifikasi/{id}', 'KonselingIndividu\EditController@verifikasiPermintaan');
    });
    Route::prefix('/profil')->group(function () {
        Route::get('/data_diri', 'GuruBK\ViewController@dataDiri');
        Route::get('/riwayat_pendidikan', 'GuruBK\ViewController@riwayatPendidikan');
        Route::get('/riwayat_pekerjaan', 'GuruBK\ViewController@riwayatPekerjaan');
        Route::get('/publikasi_artikel', 'GuruBK\ViewController@publikasiArtikel');
        Route::get('/pengalaman_penelitian', 'GuruBK\ViewController@pengalamanPenelitian');
    });

    Route::get('kritik_dan_saran', 'MasukanSaran\ViewController@indexTable');
    Route::get('/materi_bk', 'MateriBK\ViewController@index');
    Route::get('/materi_bk/create', 'MateriBK\CreateController@createForm');
    Route::get('/konten', 'Konten\ViewController@index');
    Route::get('/konten/create', 'Konten\CreateController@createForm');
    Route::get('/pengumuman', 'Pengumuman\ViewController@index');
    Route::get('/pengumuman/create', 'Pengumuman\CreateController@createForm');
    Route::get('/kehadiran_dan_poin', 'KehadiranPoin\ViewController@indexTable');
    // Route::prefix('/kehadiran_dan_poin')->group(function () {
    //     Route::get('/', 'KehadiranPoin\ViewController@indexGuruBK');
    // });
    // Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
});

Route::prefix('pengumuman')->group(function () {
    Route::get('/', 'Pengumuman\ViewController@index');
    Route::get('/create', 'Pengumuman\CreateController@form');
});

Route::get('/api/siswa', 'SiswaController@getDataJson');

//sistem otentikasi
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm');
    Route::post('/login', 'Auth\Admin\LoginController@login');
    Route::get('/logout', 'Auth\Admin\LoginController@logout');
});

Route::prefix('siswa')->group(function () {
    Route::get('/login', 'Auth\Siswa\LoginController@showLoginForm');
    Route::post('/login', 'Auth\Siswa\LoginController@login');
    Route::get('/logout', 'Auth\Siswa\LoginController@logout');
    Route::get('/register', 'Auth\Siswa\RegisterController@showRegisterForm');
    Route::post('/register', 'Auth\Siswa\RegisterController@create');
});

Route::prefix('guru')->group(function () {
    Route::get('/login', 'Auth\Guru\LoginController@showLoginForm');
    Route::post('/login', 'Auth\Guru\LoginController@login');
    Route::get('/logout', 'Auth\Guru\LoginController@logout');
    Route::get('/register', 'Auth\Guru\RegisterController@showRegisterForm');
    Route::post('/register', 'Auth\Guru\RegisterController@create');
});

Route::prefix('orangtua')->group(function () {
    Route::get('/login', 'Auth\Orangtua\LoginController@showLoginForm');
    Route::post('/login', 'Auth\Orangtua\LoginController@login');
    Route::get('/logout', 'Auth\Orangtua\LoginController@logout');
    Route::get('/register', 'Auth\Orangtua\RegisterController@showRegisterForm');
    Route::post('/register', 'Auth\Orangtua\RegisterController@create');
});

Route::get('/', function(){
    return view('website.index');
});
