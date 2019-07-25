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
    	$kq = $kt->whereRaw("idUser = ? and name = ?", [$idUser, $name])->get()->count();
    	if($kq != 0)
    	{
    		return true;
    	}
    	else return false;
    }

    public function getAllSanPhamCuaUser($idUser)
    {
        $kt = new SanPhamModel();
        $kq = $kt->whereRaw("idUser = ?", [$idUser])->get()->toArray();
        return $kq;
    }

    public function getSanPhamById($idUser, $id)
    {
        $kt = new SanPhamModel();
        $kq = $kt->whereRaw("idUser = ? and id = ?", [$idUser, $id])->get()->toArray();
        return $kq;
    }
}
