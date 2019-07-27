<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonDatHangModel extends Model
{
    protected $table = 'DonDatHang';
    protected $fillable = ['idNguoiBanHang', 'idNguoiMuaHang','idSanPham', 'soLuong'];
    public $timestamps = false;

    public function getDonHangCuaNguoiMua($id)
    {
    	$kt = new DonDatHangModel();
    	$kq = $kt->join('SanPham.id', '=', 'DonDatHang.id')->where('idNguoiMuaHang', '=' , $id)->get()->toArray();
    	return $kq;
    }
}
