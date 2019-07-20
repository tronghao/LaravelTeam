<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserModel;

class UserController extends Controller
{
	function getDangNhap()
	{
		return view("home");
	}

    function postDangNhap(request $rq)
    {
    	$kt = new UserModel;
    	$kq = $kt->getUserDangNhap($rq->tenDangnhap, $rq->Password);
    	
    	if($kq == 0)
    	{
    		return view('home')->with('error','Tên Đăng Nhập Hoặc Mật Khẩu Sai!');
    		
    	}
    	else
    	{

    		if($rq->tenDangnhap == "admin")
    		{
    			$rq->Session()->put('user','admin');
    			//return redirect("admin/home");
    			echo "admin";
    		}
    		else
    		{
    			//$level = $kt->getUserLevel($rq->tenDangNhap, $rq->pass);
    			$user = $kt->getUserLevel($rq->tenDangnhap, $rq->Password);
    			
    			if($user[0]['level'] == 1)
    			{
    				//$rq->Session()->put('user',$rq->tenDangNhap);
    				echo "Người Bán Hàng";
    			}else
    			{
    				echo "Người mua hàng";
    			}
    		}
    	}
    }

    function getDangXuat(request $rq)
    {
    	$rq->Session()->flush();
    	return redirect('');
    }
}
