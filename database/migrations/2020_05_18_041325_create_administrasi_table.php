<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrasi', function (Blueprint $table) {
            $table->increments('no_antrian')->nullable();
            $table->string('tgl')->nullable();
            $table->string('keluhan')->nullable();
            $table->string('no_kamar')->nullable();
            $table->string('nama_kamar')->nullable();
            $table->string('pasien_id_pas')->nullable();
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
        Schema::dropIfExists('administrasi');
    }
}
