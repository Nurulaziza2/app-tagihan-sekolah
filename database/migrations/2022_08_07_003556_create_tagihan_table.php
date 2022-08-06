<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa_id');
            $table->date('tanggal_tagihan');
            $table->date('tanggal_jatuh_tempo');
            $table->double('jumlah');
            $table->string('keterangan')->nullable();
            $table->double('denda')->default(0);
            $table->double('jumlah_bayar')->nullable();
            $table->string('status',20);
            $table->string('dibuat_oleh');
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
        Schema::dropIfExists('tagihan');
    }
}
