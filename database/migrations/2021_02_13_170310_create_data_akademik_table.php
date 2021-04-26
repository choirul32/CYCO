<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAkademikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_akademik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siswa_id');
            $table->string('sekolah_asal')->nullable();
            $table->text('alasan')->nullable();
            $table->string('waktu_rencana')->nullable();
            $table->text('rencana_keterima')->nullable();
            $table->json('ekskul')->nullable();
            $table->tinyInteger('rencana_lulus')->nullable();
            $table->string('cita_pekerjaan')->nullable();
            $table->string('cita_perguruan')->nullable();
            $table->string('cita_jurusan')->nullable();
            $table->json('mapel_senangi')->nullable();
            $table->json('nilai')->nullable();
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
        Schema::dropIfExists('data_akademik');
    }
}
