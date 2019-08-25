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

    // thêm địa chỉ giao hàng
    // Khi đặt hàng sẽ chờ xác nhận - chỉ nhập 1 lần lưu vào csdl
    // đã xác nhận
    // đang vận chuyển
    // đã giao hàng
    public function muaSanPham($id, request $rq)
    {
    	$data = array(
    				'idNguoiMua' => $rq->session()->get('idUser'),
    				'idNguoiBan' => '',
    				'idSanPham' => $id,
    				'soLuongDatHang' => $rq->soLuong,
    			);
    	$kt = new SanPhamModel();
    	$kq = $kt->getSanPhamById($id);
    	$data["idNguoiBan"] = $kq[0]["idUser"];

        $kiemTraDonDatHang = new DonDatHangModel();
        if($kiemTraDonDatHang->daDatSanPhamNay($data['idNguoiMua'], $data['idSanPham']) == true)
        {
            $tamDonDatHangModel = new DonDatHangModel(); 
            $data['soLuongDatHang'] += $tamDonDatHangModel->laySoLuongSanPham($data['idNguoiMua'], $data['idSanPham']);
            $datHang = DonDatHangModel::whereRaw('idNguoiMua = ? and idSanPham = ?', [$data['idNguoiMua'], $data['idSanPham']])->update(['soLuongDatHang' => $data['soLuongDatHang']]);
            return view('nguoi-mua-hang.thong-tin-don-hang')->with('info',"Đặt Hàng Thành Công");
        }else
        {
            $datHang = new DonDatHangModel();
            $datHang->idNguoiMua = $data["idNguoiMua"];
            $datHang->idNguoiBan = $data["idNguoiBan"];
            $datHang->idSanPham = $data["idSanPham"];
            $datHang->soLuongDatHang = $data["soLuongDatHang"];
            $datHang->save();
            return view('nguoi-mua-hang.thong-tin-don-hang')->with('info',"Đặt Hàng Thành Công");
        }
    }

    public function getAllDonHang(request $rq)
    {
    	$kt = new DonDatHangModel();
    	$kq["duLieu"] = $kt->getDonHangCuaNguoiMua($rq->session()->get('idUser'));
    	return view("nguoi-mua-hang.quan-ly-don-hang")->with($kq);
    }

    public function huyDonHang($idNguoiMua, $idSanPham)
    {
    	$kt = new DonDatHangModel();
    	$kt->xoaDonHang($idNguoiMua, $idSanPham);
    	return redirect("mua-hang/cac-don-hang");
    }
}
