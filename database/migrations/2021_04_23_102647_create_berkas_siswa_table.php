<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siswa_id')->nullable();
            $table->string('foto_diri')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('skhu')->nullable();
            $table->string('kk')->nullable();
            $table->string('akta_kelahiran')->nullable();
            $table->string('lainnya')->nullable();
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
        Schema::dropIfExists('berkas_siswa');
    }
}
