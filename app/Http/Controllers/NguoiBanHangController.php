<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserModel;
use App\SanPhamModel;
use App\DonDatHangModel;

class NguoiBanHangController extends Controller
{
    public function home(request $rq)
    {
    	$kt = new SanPhamModel();
    	$data['duLieu'] = $kt->getAllSanPhamCuaUser($rq->session()->get('idUser'));
    	return view('nguoi-ban-hang.nguoi-ban-hang')->with($data);
    }

    public function getAddSanPham()
    {
        return view('nguoi-ban-hang.them-san-pham');
    }

    public function postAddSanPham(request $rq)
    {
    	$data = array(
    					
    					'idUser' => $rq->session()->get('idUser'), 
    					'name' => $rq->name,
    					'moTa' => $rq->moTa,
    					'srcImg' => $rq->srcImg,
    					'giaKhuyenMai' => $rq->giaKhuyenMai,
    					'giaGoc' => $rq->giaGoc,
    					'soLuong' => $rq->soLuong,
    					'thuongHieu' => $rq->thuongHieu,
						/*
    					'idUser' => 1, 
    					'name' => 'Điện Thoại IPhone',
    					'moTa' => 'Đây là chiếc điện thoại mới nhất',
    					'srcImg' => '',
    					'giaKhuyenMai' => '499000',
    					'giaGoc' => '500000',
    					'soLuong' => 20,
    					'thuongHieu' => 'Apple',*/
    				);
    	/*
    		kiểm tra IdUser và name có tồn tại không
    	 */
    	$kt = new SanPhamModel();
    	$kq = $kt->issetSanPham($data["idUser"], $data["name"]);

    	if($kq == true)
    	{
    		return view('nguoi-ban-hang.them-san-pham')->with('info', 'Đã tồn tại sản phẩm');
    	}
    	else
    	{
    		$cate = new SanPhamModel;
	    	$cate->idUser = $data["idUser"];
	    	$cate->name = $data["name"];
	    	$cate->moTa = $data["moTa"];
	    	$cate->srcImg = $data["srcImg"];
	    	$cate->giaKhuyenMai = $data["giaKhuyenMai"];
	    	$cate->giaGoc = $data["giaGoc"];
	    	$cate->soLuong = $data["soLuong"];
	    	$cate->thuongHieu = $data["thuongHieu"];
	    	$cate->save();
	    	return view('nguoi-ban-hang.them-san-pham')->with('info', 'Thành Công');
    	}
    }


    public function getViewEditSanPham($id, request $rq)
    {
    	$kt = new SanPhamModel();
    	$kq['duLieu'] = $kt->getSanPhamById($id);
    	return view('nguoi-ban-hang.sua-san-pham')->with($kq);
    }

    public function editSanPham($id, request $rq)
    {
    	$data = array(
    					
    					'idUser' => $rq->session()->get('idUser'), 
    					'name' => $rq->name,
    					'moTa' => $rq->moTa,
    					'srcImg' => $rq->srcImg,
    					'giaKhuyenMai' => $rq->giaKhuyenMai,
    					'giaGoc' => $rq->giaGoc,
    					'soLuong' => $rq->soLuong,
    					'thuongHieu' => $rq->thuongHieu,
						/*
    					'idUser' => 1, 
    					'name' => 'Điện Thoại IPhone X',
    					'moTa' => 'Đây là chiếc điện thoại mới nhất',
    					'srcImg' => '',
    					'giaKhuyenMai' => '1499000',
    					'giaGoc' => '1500000',
    					'soLuong' => 20,
    					'thuongHieu' => 'Apple',*/
    				);

    	/*
    		kiểm tra tồn tại
    	*/
    	$kt = new SanPhamModel();
    	//$kq = $kt->issetSanPham($data["idUser"], $data["name"]);
    	$kq = $kt->getSanPhamById($id);
    	if($kq[0]['name'] != $data['name'])
    	{
    		$kq2 = $kt->issetSanPham($data["idUser"], $data["name"]);
    		if($kq2 != 0)
    		{
    			return view('nguoi-ban-hang.sua-san-pham')->with('info', 'Tên sản phẩm  đã tồn tại');
    		}    		
    	}
    	
       	$cate = SanPhamModel::find($id);
    	$cate->name = $data["name"];
    	$cate->moTa = $data["moTa"];
    	$cate->srcImg = $data["srcImg"];
    	$cate->giaKhuyenMai = $data["giaKhuyenMai"];
    	$cate->giaGoc = $data["giaGoc"];
    	$cate->soLuong = $data["soLuong"];
    	$cate->thuongHieu = $data["thuongHieu"];
    	$cate->save();
    	return view('nguoi-ban-hang.sua-san-pham')->with('info', "Sửa Thành Công");
	    
    }

    public function deleteSanPham($id)
    {
    	$cate = new SanPhamModel();
    	$cate->destroy($id);
    	return redirect('ban-hang/home');
    }

    public function getAllDonHang(request $rq)
    {
    	$kt = new DonDatHangModel();
    	$kq['duLieu'] = $kt->getDonHangCuaNguoiBan($rq->session()->get('idUser'));
    	return view("nguoi-ban-hang.quan-ly-don-hang")->with($kq);
    }
}
