<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserModel;
use App\SanPhamModel;

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


    public function getViewEditSanPham()
    {

    }

    public function editSanPham($id, request $rq)
    {
    	$data = array(
    					/*
    					'idUser' => $rq->session()->get('idUser'), 
    					'name' => '',
    					'moTa' => '',
    					'srcImg' => '',
    					'giaKhuyenMai' => '',
    					'giaGoc' => '',
    					'soLuong' => '',
    					'thuongHieu' => '',
						*/
    					'idUser' => 1, 
    					'name' => 'Điện Thoại IPhone X',
    					'moTa' => 'Đây là chiếc điện thoại mới nhất',
    					'srcImg' => '',
    					'giaKhuyenMai' => '1499000',
    					'giaGoc' => '1500000',
    					'soLuong' => 20,
    					'thuongHieu' => 'Apple',
    				);

    	$cate = SanPhamModel::find($id);
    	$cate->name = $data["name"];
    	$cate->moTa = $data["moTa"];
    	$cate->srcImg = $data["srcImg"];
    	$cate->giaKhuyenMai = $data["giaKhuyenMai"];
    	$cate->giaGoc = $data["giaGoc"];
    	$cate->soLuong = $data["soLuong"];
    	$cate->thuongHieu = $data["thuongHieu"];
    	$cate->save();
    	echo "thành công";
    }

    public function deleteSanPham($id)
    {
    	$cate = new SanPhamModel();
    	$cate->destroy($id);
    	return redirect('ban-hang/home');
    }
}
