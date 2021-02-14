<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('password');
            $table->integer('role_id');
            $table->string('nama_lengkap')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->integer('kelas_id')->nullable();
            $table->integer('jurusan_id')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('nik')->nullable();
            $table->boolean('jenis_kelamin');
            $table->integer('agama_id')->nullable();
            $table->integer('kewarganegaraan')->nullable();
            $table->integer('bahasa_id')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('jumlah_saudara')->nullable();
            $table->string('no_handphone')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('koordinat_rumah')->nullable();
            $table->integer('jenis_tinggal')->nullable();
            $table->integer('alat_transportasi_sekolah')->nullable();
            $table->integer('gol_darah')->nullable();
            $table->string('riw_penyakit')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
