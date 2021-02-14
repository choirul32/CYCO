<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siswa_id');
            $table->string('nama_ayah')->nullable();
            $table->integer('status_ayah')->nullable();
            $table->integer('hubungan_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->integer('agama_ayah')->nullable();
            $table->string('detail_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->integer('pendidikan_ayah')->nullable();
            $table->integer('pekerjaan_ayah')->nullable();
            $table->integer('penghasilan_ayah')->nullable();
            $table->string('phone_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->integer('status_ibu')->nullable();
            $table->integer('hubungan_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->integer('agama_ibu')->nullable();
            $table->string('detail_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->integer('pendidikan_ibu')->nullable();
            $table->integer('pekerjaan_ibu')->nullable();
            $table->integer('penghasilan_ibu')->nullable();
            $table->string('phone_ibu')->nullable();
            
            $table->text('detail_keluarga')->nullable();
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
        Schema::dropIfExists('data_keluarga');
    }
}
