<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonselingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konseling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('konselor_id')->unsigned();
            $table->bigInteger('siswa_id')->unsigned();
            $table->bigInteger('chat_room_id')->nullable();
            $table->json('kelompok')->nullable();
            $table->tinyInteger('jenis_konseling');
            $table->string('perantara');
            $table->date('tanggal');
            $table->string('jam');
            $table->string('jam_pengganti')->nullable();
            $table->text('link')->nullable();
            $table->text('masalah')->nullable();
            $table->text('harapan')->nullable();
            $table->integer('verified_by')->nullable();
            $table->date('verified_at')->nullable();
            $table->tinyInteger('selesai')->default(0);
            $table->text('penanganan')->nullable();
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
        Schema::dropIfExists('konseling');
    }
}
