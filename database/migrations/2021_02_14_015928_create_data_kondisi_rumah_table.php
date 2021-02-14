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
            $table->integer('kepemilikan_rumah')->nullable();
            $table->integer('sumber_listrik')->nullable();
            $table->integer('daya_listrik')->nullable();
            $table->integer('luas_tanah')->nullable();
            $table->integer('luas_bangunan')->nullable();
            $table->integer('jenis_atap')->nullable();
            $table->integer('bahan_lantai')->nullable();
            $table->integer('bahan_tembok')->nullable();
            $table->integer('kamar_mandi')->nullable();
            $table->integer('sumber_air')->nullable();
            $table->integer('jumlah_tinggal')->nullable();
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
