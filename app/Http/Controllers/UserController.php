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
        $data = array(
                    
                    "email" => $rq->tenDangnhap,
                    "password" =>  $rq->Password
                    
                    /*"email" => "110117051@sv.tvu.edu.vn",
                    "password" => "123456"*/
                );
    	$kt = new UserModel;
    	$kq = $kt->getUserDangNhap($data["email"],$data["password"]);
    	
    	if($kq == 0)
    	{
    		//return view('dang-nhap.form-dang-nhap')->with('error','Tên Đăng Nhập Hoặc Mật Khẩu Sai!');
    		echo "Thất bại";
    	}
    	else
    	{

    		if($data["email"] == "admin@admin.com")
    		{
    			$rq->Session()->put('user','admin');
    			//return redirect("admin/home");
    			echo "admin";
    		}
    		else
    		{
    			//$level = $kt->getUserLevel($rq->tenDangNhap, $rq->pass);
    			$level = $kt->getUserLevel($data["email"]);
    			
    			if($level == 1)
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

    function postDangKy()
    {
        $data = array(
                    /*
                    "email" => "",
                    "matKhau" => "",
                    "hoTen" => "",
                    "diaChi" => "",
                    "sdt" => "",
                    "level" => 0,
                    */
                    "email" => "tr@gmail.com",
                    "matKhau" => "123456",
                    "hoTen" => "ABC",
                    "diaChi" => "123 VN",
                    "sdt" => "0003330002",
                    "level" => 0,
                    );
        /*
            Lấy level
         */
        $kt = new UserModel;
        $kiemTraUserTonTai = $kt->issetUser($data["email"]);

        if($kiemTraUserTonTai == true)
        {
            echo "Dang Ky That Bai";
        }
        else
        {
            $user = new UserModel();
            $user->email = $data["email"];
            $user->password = $data["matKhau"];
            $user->hoTen = $data["hoTen"];
            $user->diaChi = $data["diaChi"];
            $user->sdt = $data["sdt"];
            $user->level = $data["level"];
            $user->save();
            echo "Dang Ky THanh Cong!";
        }
    }

    function getDangXuat(request $rq)
    {
    	$rq->Session()->flush();
    	return redirect('');
    }
}
