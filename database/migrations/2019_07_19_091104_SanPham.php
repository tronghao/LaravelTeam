<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->integer('idUser');
            $table->increments('id');
            $table->string('name');
            $table->string('moTa');
            $table->string('srcImg');
            $table->string('giaKhuyenMai');
            $table->string('giaGoc');
            $table->integer('soLuong');
            $table->string('thuongHieu');
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
        Schema::drop('SanPham');
    }
}
