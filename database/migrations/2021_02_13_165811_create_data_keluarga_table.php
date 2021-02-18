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
            $table->tinyInteger('status_ayah')->nullable();
            $table->tinyInteger('hubungan_ayah')->nullable();
            $table->string('nik_ayah', 20)->nullable();
            $table->tinyInteger('agama_ayah')->nullable();
            $table->text('detail_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->tinyInteger('pendidikan_ayah')->nullable();
            $table->tinyInteger('pekerjaan_ayah')->nullable();
            $table->tinyInteger('penghasilan_ayah')->nullable();
            $table->string('phone_ayah', 15)->nullable();
            $table->string('nama_ibu')->nullable();
            $table->tinyInteger('status_ibu')->nullable();
            $table->tinyInteger('hubungan_ibu')->nullable();
            $table->string('nik_ibu', 20)->nullable();
            $table->tinyInteger('agama_ibu')->nullable();
            $table->text('detail_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->tinyInteger('pendidikan_ibu')->nullable();
            $table->tinyInteger('pekerjaan_ibu')->nullable();
            $table->tinyInteger('penghasilan_ibu')->nullable();
            $table->string('phone_ibu', 15)->nullable();
            
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
