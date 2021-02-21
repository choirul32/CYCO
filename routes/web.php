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
Route::prefix('siswa')->group(function () {
    Route::get('/', 'Siswa\ViewController@index');
    Route::get('/create', 'Siswa\ViewController@form');
    Route::get('/create2', 'Siswa\ViewController@form2');
    Route::get('/create3', 'Siswa\ViewController@form3');
    Route::get('/create4', 'Siswa\ViewController@form4');
    Route::prefix('/konseling_individu')->group(function () {
        Route::get('/', 'KonselingIndividu\ViewController@indexSiswa');
        Route::get('/create', 'KonselingIndividu\CreateController@createSiswa');
        Route::get('/delete', 'KonselingIndividu\DeleteController@deleteSiswa');
    });
    Route::prefix('/konseling_kelompok')->group(function () {
        Route::get('/', 'KonselingKelompok\ViewController@indexSiswa');
        Route::get('/create', 'KonselingKelompok\CreateController@createSiswa');
        Route::get('/delete', 'KonselingKelompok\DeleteController@deleteSiswa');
    });
    Route::prefix('/kehadiran_dan_poin')->group(function () {
        Route::get('/', 'KehadiranPoin\ViewController@indexSiswa');
    });
    Route::get('/upload_berkas', function () {return view('data_master_user.siswa.upload_berkas');});
});

Route::prefix('guru_bk')->group(function () {
    Route::get('/', 'GuruBK\ViewController@index');
    Route::get('/create', 'GuruBK\ViewController@form');
    Route::get('/api', 'GuruBK\ReadController@getAPIGuruBK');
    Route::prefix('/materi_bk')->group(function () {
        Route::get('/', 'MateriBK\ViewController@index');
        Route::get('/create', 'MateriBK\CreateController@form');
    });
    Route::prefix('/konten')->group(function () {
        Route::get('/', 'Konten\ViewController@index');
        Route::get('/create', 'Konten\CreateController@form');
    });
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
});
Route::prefix('pengumuman')->group(function () {
    Route::get('/', 'Pengumuman\ViewController@index');
    Route::get('/create', 'Pengumuman\CreateController@form');
});
// Route::resource('guru', GuruController::class);
// Route::resource('siswa', SiswaController::class);

Route::get('/api/siswa', 'SiswaController@getDataJson');
