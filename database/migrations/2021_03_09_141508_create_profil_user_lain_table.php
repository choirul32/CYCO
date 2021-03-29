<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilUserLainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_user_lain', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->json('riwayat_pendidikan')->nullable()->default([]);
            $table->json('riwayat_pekerjaan')->nullable()->default([]);
            $table->json('publikasi_artikel')->nullable()->default([]);
            $table->json('pengalaman_penelitian')->nullable()->default([]);
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
        Schema::dropIfExists('profil_user_lain');
    }
}
