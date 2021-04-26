<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenyewaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('detailPenyewaan', function (Blueprint $table) {
            $table->bigIncrements('id_detailPenyewaan');
            $table->unsignedBigInteger('penyewaan_id')->nullable();
            $table->foreign('penyewaan_id')->references('id_penyewaan')->on('penyewaan');
            $table->unsignedBigInteger('sepeda_id')->nullable();
            $table->foreign('sepeda_id')->references('id_sepeda')->on('sepeda');
            $table->unsignedBigInteger('paket_id')->nullable();
            $table->foreign('paket_id')->references('id_paket')->on('paket');
            $table->integer('denda');
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
        Schema::dropIfExists('detail_penyewaan');
    }
}
