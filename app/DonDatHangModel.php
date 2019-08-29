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

    public function daDatSanPhamNay($idNguoiMua, $idSanPham)
    {
        $kt = new DonDatHangModel();
        $kq = $kt->join('SanPham', 'DonDatHang.idSanPham' , "=", "SanPham.id")->whereRaw('idNguoiMua = ? and idSanPham = ? and trangThaiDonHang = ?', [$idNguoiMua, $idSanPham, 'Đang xử lý'])->get()->count(); 
        if($kq > 0)
            return true;
        else return false;
    }

    public function laySoLuongSanPham($idNguoiMua, $idSanPham)
    {
        $kt = new DonDatHangModel();
        $kq = $kt->whereRaw('idNguoiMua = ? and idSanPham = ?', [$idNguoiMua, $idSanPham])->get()->toArray();
        return $kq[0]['soLuongDatHang'];
    }
}
