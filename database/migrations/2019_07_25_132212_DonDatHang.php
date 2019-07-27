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
            $table->integer('idNguoiMua');
            $table->integer('idNguoiBan');
            $table->integer('idSanPham');
            $table->integer('soLuong');
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
