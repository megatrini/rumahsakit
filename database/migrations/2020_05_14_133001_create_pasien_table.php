<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id_pas')->nullable();
            $table->string('nama_pasien')->nullable();
            $table->string('jk')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kota_asal')->nullable();
            $table->string('goldar')->nullable();
            $table->text('nama_wali')->nullable();
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
        Schema::dropIfExists('pasien');
    }
}
