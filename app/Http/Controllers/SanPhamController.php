<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SanPhamModel;

class SanPhamController extends Controller
{
    public function addSanPham()
    {
    	$data = array(
    					/*
    					'idUser' => '', 
    					'name' => '',
    					'moTa' => '',
    					'srcImg' => '',
    					'giaKhuyenMai' => '',
    					'giaGoc' => '',
    					'soLuong' => '',
    					'thuongHieu' => '',
						*/
    					'idUser' => 1, 
    					'name' => 'Điện Thoại IPhone',
    					'moTa' => 'Đây là chiếc điện thoại mới nhất',
    					'srcImg' => '',
    					'giaKhuyenMai' => '499000',
    					'giaGoc' => '500000',
    					'soLuong' => '20',
    					'thuongHieu' => 'Apple',
    				);
    	/*
    		Lấy idUser
    	 */
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
    	echo "Thành Công";
    }
}
