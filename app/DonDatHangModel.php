<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonDatHangModel extends Model
{
    protected $table = 'DonDatHang';
    protected $fillable = ['idNguoiBan', 'idNguoiMua','idSanPham', 'soLuong'];
    public $timestamps = false;

    public function getDonHangCuaNguoiMua($idNguoiMua)
    {
    	$kt = new DonDatHangModel();
    	$kq = $kt->join('SanPham', 'DonDatHang.idSanPham' , "=", "SanPham.id")->where('idNguoiMua', '=' , $idNguoiMua)->get()->toArray();
    	return $kq;
    }

    public function getDonHangCuaNguoiBan($idNguoiBan)
    {
    	$kt = new DonDatHangModel();
    	$kq = $kt->join('SanPham', 'DonDatHang.idSanPham' , "=", "SanPham.id")->where('idNguoiBan', '=' , $idNguoiBan)->get()->toArray();
    	return $kq;
    }
    public function xoaDonHang($idNguoiMua, $idSanPham)
    {
    	$kt = new DonDatHangModel();
    	$kt->whereRaw('idNguoiMua = ? and idSanPham = ?', [$idNguoiMua, $idSanPham])->delete();
    }
}
