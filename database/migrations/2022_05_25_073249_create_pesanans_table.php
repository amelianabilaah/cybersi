<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Nomor HP');
            $table->date('Tanggal Layanan');
            $table->time('Waktu Layanan');
            $table->enum('Jenis Layanan', ['Hair Treatment', 'Nail Treatment', 'Body Treatment']);
            $table->string('Nama Layanan');
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
        Schema::dropIfExists('pesanans');
    }
}
