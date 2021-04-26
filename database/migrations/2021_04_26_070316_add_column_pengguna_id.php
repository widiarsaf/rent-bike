<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPenggunaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penyewaan', function (Blueprint $table) {
        $table->unsignedBigInteger('pengguna_id')->nullable();
        $table->foreign('pengguna_id')->references('id_pengguna')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penyewaan', function (Blueprint $table) {
        $table->dropColumn('pengguna_id');
        });
    }
}
