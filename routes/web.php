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
});

Route::prefix('guru_bk')->group(function () {
    Route::get('/', 'GuruBK\ViewController@index');
    Route::get('/create', 'GuruBK\ViewController@form');
    Route::post('/create', 'GuruBK\CreateController@storeGuruBK');
    Route::delete('/delete/{id}', 'GuruBK\DeleteController@destroyGuruBK');
    Route::get('/api', 'GuruBK\ReadController@getAPIGuruBK');
    // Route::prefix('/materi_bk')->group(function () {
    //     Route::get('/', 'MateriBK\ViewController@index');
    //     Route::get('/create', 'MateriBK\CreateController@form');
    //     Route::post('/create', 'MateriBK\CreateController@store');
    // });
    // Route::prefix('/konten')->group(function () {
    //     Route::get('/', 'Konten\ViewController@index');
    //     Route::get('/create', 'Konten\CreateController@form');
    // });
    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexGuruBK');
        Route::get('/verifikasi/{id}', 'KonselingIndividu\EditController@verifikasiPermintaan');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexGuruBK');
        Route::get('/verifikasi/{id}', 'KonselingIndividu\EditController@verifikasiPermintaan');
    });
    // Route::prefix('/kehadiran_dan_poin')->group(function () {
    //     Route::get('/', 'KehadiranPoin\ViewController@indexGuruBK');
    // });
    // Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
});

Route::prefix('guru_mapel')->group(function () {
    Route::get('/', 'GuruMapel\ViewController@index');
    Route::get('/create', 'GuruMapel\ViewController@form');
    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexSiswa');
        Route::get('/create', 'KonselingIndividu\CreateController@createGuruBK');
        Route::get('/delete', 'KonselingIndividu\DeleteController@deleteGuruBK');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexSiswa');
        Route::get('/create', 'KonselingKelompok\CreateController@createGuruBK');
        Route::get('/delete', 'KonselingKelompok\DeleteController@deleteGuruBK');
    });
    Route::prefix('/kehadiran_dan_poin')->group(function () {
        Route::get('/', 'KehadiranPoin\ViewController@indexGuruBK');
    });
    Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
});

Route::prefix('orang_tua')->group(function () {
    Route::get('/', 'OrangTua\ViewController@index');
    Route::get('/create', 'OrangTua\ViewController@form');
    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexSiswa');
        Route::get('/create', 'KonselingIndividu\CreateController@createGuruBK');
        Route::get('/delete', 'KonselingIndividu\DeleteController@deleteGuruBK');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexSiswa');
        Route::get('/create', 'KonselingKelompok\CreateController@createGuruBK');
        Route::get('/delete', 'KonselingKelompok\DeleteController@deleteGuruBK');
    });
    Route::prefix('/kehadiran_dan_poin')->group(function () {
        Route::get('/', 'KehadiranPoin\ViewController@indexGuruBK');
    });
    Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
});

Route::prefix('masukan_saran')->group(function () {
    Route::get('/', 'MasukanSaran\ViewController@index');
    Route::post('/create', 'MasukanSaran\CreateController@createKritikSaran');
});
Route::prefix('pengumuman')->group(function () {
    Route::get('/', 'Pengumuman\ViewController@index');
    Route::get('/create', 'Pengumuman\CreateController@form');
});
// Route::resource('guru', GuruController::class);
// Route::resource('siswa', SiswaController::class);

Route::get('/api/siswa', 'SiswaController@getDataJson');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm');
});

Route::prefix('siswa')->group(function () {
    Route::get('/login', 'Auth\Siswa\LoginController@showLoginForm');
    Route::post('/login', 'Auth\Siswa\LoginController@login');
    Route::get('/register', 'Auth\Siswa\RegisterController@showRegisterForm');
});

Route::prefix('guru')->group(function () {
    Route::get('/login', 'Auth\Guru\LoginController@showLoginForm');
    Route::get('/register', 'Auth\Guru\RegisterController@showRegisterForm');
});

Route::prefix('orangtua')->group(function () {
    Route::get('/login', 'Auth\Orangtua\LoginController@showLoginForm');
    Route::get('/register', 'Auth\Orangtua\RegisterController@showRegisterForm');
});