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
Route::prefix('guru_bk/konseling_kelompok')->group(function () {
    Route::get('/', 'KonselingIndividu\ViewController@indexSiswa');
    Route::get('/create', 'KonselingIndividu\CreateController@createSiswa');
    Route::get('/delete', 'KonselingIndividu\DeleteController@deleteSiswa');
});
Route::prefix('guru_mapel/konseling_individu')->group(function () {
    Route::get('/', 'KonselingIndividu/ViewController@indexSiswa');
    Route::get('/delete', 'KonselingIndividu/DeleteController@deleteSiswa');
});
Route::get('/form1', function () {return view('siswa.tambah');});
Route::get('/form2', function () {return view('siswa.tambah2');});
Route::get('/form3', function () {return view('siswa.tambah3');});
Route::get('/form4', function () {return view('siswa.tambah4');});

Route::resource('guru', GuruController::class);
Route::resource('siswa', SiswaController::class);
Route::get('/api/siswa', 'SiswaController@getDataJson');
