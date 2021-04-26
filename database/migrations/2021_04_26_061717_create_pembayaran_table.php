<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id_pembayaran');
            $table->string('nama_pengirim');
            $table->date('tanggal_bayar');
            $table->string('foto_bukti');
            $table->string('keterangan');
            $table->string('nominal');
            $table->string('metode');
            $table->unsignedBigInteger('penyewaan_id')->nullable();
            $table->foreign('penyewaan_id')->references('id_penyewaan')->on('penyewaan');
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
        Schema::dropIfExists('pembayaran');
    }
}
