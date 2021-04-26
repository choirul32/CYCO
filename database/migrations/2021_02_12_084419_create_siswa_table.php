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
            $table->string('nisn', 15)->nullable();
            $table->string('nama_panggilan', 20)->nullable();
            $table->integer('kelas_id')->unsigned()->nullable();
            $table->integer('jurusan_id')->unsigned()->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->string('nik', 20)->nullable();
            $table->boolean('jenis_kelamin')->nullable();
            $table->tinyInteger('agama')->nullable();
            $table->tinyInteger('kewarganegaraan')->unsigned()->nullable();
            $table->json('bahasa')->nullable();
            $table->tinyInteger('anak_ke')->unsigned()->nullable();
            $table->tinyInteger('jumlah_saudara')->unsigned()->nullable();
            $table->string('no_handphone', 15)->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('alamat')->nullable();
            $table->string('koordinat_rumah', 50)->nullable();
            $table->tinyInteger('jenis_tinggal')->unsigned()->nullable();
            $table->tinyInteger('alat_transportasi_sekolah')->unsigned()->nullable();
            $table->tinyInteger('gol_darah')->unsigned()->nullable();
            $table->string('riw_penyakit')->nullable();
            $table->string('berat_badan', 10)->nullable();
            $table->string('tinggi_badan', 10)->nullable();
            $table->bigInteger('orangtua_id')->nullable();
            $table->rememberToken();
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
