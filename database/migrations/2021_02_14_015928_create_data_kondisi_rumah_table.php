<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKondisiRumahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kondisi_rumah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siswa_id');
            $table->tinyInteger('kepemilikan_rumah')->nullable();
            $table->tinyInteger('sumber_listrik')->nullable();
            $table->tinyInteger('daya_listrik')->nullable();
            $table->tinyInteger('luas_tanah')->nullable();
            $table->tinyInteger('luas_bangunan')->nullable();
            $table->tinyInteger('jenis_atap')->nullable();
            $table->tinyInteger('bahan_lantai')->nullable();
            $table->tinyInteger('bahan_tembok')->nullable();
            $table->tinyInteger('kamar_mandi')->nullable();
            $table->tinyInteger('sumber_air')->nullable();
            $table->tinyInteger('jumlah_tinggal')->nullable();
            $table->json('foto_rumah')->nullable();
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
        Schema::dropIfExists('data_kondisi_rumah');
    }
}
