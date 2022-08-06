<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('gambar')->nullable();
            $table->integer('nis');
            $table->string('email')->unique();
            $table->string('jk',20);
            $table->string('alamat');
            $table->integer('kelas_id')->nullable();
            $table->string('durasi',15);
            $table->integer('jumlah_tagihan');
            $table->date('tgl_masuk');
            $table->integer('user_id');
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
        Schema::dropIfExists('siswa');
    }
}
