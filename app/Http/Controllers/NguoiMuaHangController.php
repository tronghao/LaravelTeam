<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SanPhamModel;
use App\DonDatHangModel;

class NguoiMuaHangController extends Controller
{
    public function home()
    {
    	$kt = new SanPhamModel();
        $kq["duLieu"] = $kt->all()->sortByDesc('id')->toArray();
    	return view('nguoi-mua-hang.nguoi-mua-hang')->with($kq);
    }

    public function getViewMuaSanPham($id)
    {
    	$kt = new SanPhamModel();
    	$kq["duLieu"] = $kt->getSanPhamById($id);
    	return view('nguoi-mua-hang.thong-tin-don-hang')->with($kq);
    }

    public function muaSanPham($id, request $rq)
    {
    	$data = array(
    				'idNguoiMua' => $rq->session()->get('idUser'),
    				'idNguoiBan' => '',
    				'idSanPham' => $id,
    				'soLuong' => $rq->soLuong,
    			);
    	$kt = new SanPhamModel();
    	$kq = $kt->getSanPhamById($id);
    	$data["idNguoiBan"] = $kq[0]["idUser"];

    	$datHang = new DonDatHangModel();
    	$datHang->idNguoiMua = $data["idNguoiMua"];
    	$datHang->idNguoiBan = $data["idNguoiBan"];
    	$datHang->idSanPham = $data["idSanPham"];
    	$datHang->soLuong = $data["soLuong"];
    	$datHang->save();
    	return view('nguoi-mua-hang.thong-tin-don-hang')->with('info',"Đặt Hàng Thành Công");
    }

    public function getAllDonHang()
    {
    	$kt = new DonDatHangModel();
    	
    	return view();
    }
}
