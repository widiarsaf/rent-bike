<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->bigIncrements('id_penyewaan');
            $table->string('status_pembayaran');
            $table->string('status_pengembalian');
            $table->string('status_jaminan');
            $table->integer('total_biaya');
            $table->date('tanggal');
            // $table->unsignedBigInteger('pengguna_id')->nullable();
            // $table->foreign('pengguna_id')->references('id_pengguna')->on('users');
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
        Schema::dropIfExists('penyewaan');
    }
}
