<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DonDatHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DonDatHang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idNguoiMua');
            $table->integer('idNguoiBan');
            $table->integer('idSanPham');
            $table->integer('soLuongDatHang');
            $table->string('trangThaiDonHang'); //dang xu ly, dang van chuyen, da giao hang
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
        Schema::drop('DonDatHang');
    }
}
