<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPhamModel extends Model
{
   	protected $table = 'SanPham';
    protected $fillable = ['idUser', 'id','name', 'moTa','srcImg', 'giaKhuyenMai', 'giaGoc', 'soLuong', 'thuongHieu'];
    public $timestamps = false;

    public function issetSanPham($idUser, $name)
    {
    	$kt = new SanPhamModel();
    	$kt->whereRaw("idUser = ? and name = ?", [$idUser, $name])->get()->count();
    	if($kt != 0)
    	{
    		return true;
    	}
    	else return false;
    }
}
