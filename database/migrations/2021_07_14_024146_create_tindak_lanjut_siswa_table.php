<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakLanjutSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindak_lanjut_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('siswa_id');
            $table->bigInteger('guru_bk_id')->nullable();
            $table->bigInteger('guru_mapel_id');
            $table->text('masukan')->nullable();
            $table->text('tanggapan')->nullable();
            $table->text('keterangan')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tindak_lanjut_siswa');
    }
}
