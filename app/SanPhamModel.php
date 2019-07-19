<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPhamModel extends Model
{
   	protected $table = 'SanPham';
    protected $fillable = ['idUser', 'id','name', 'moTa','srcImg', 'giaKhuyenMai', 'giaGoc', 'soLuong', 'thuongHieu'];
    public $timestamps = false;

    
}
