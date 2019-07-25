<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserModel;

class UserController extends Controller
{
    function getTrangChu()
    {
        return view("trangchu");
    }

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
    		return view('home')->with('error','Tên Đăng Nhập Hoặc Mật Khẩu Sai!');
    		
    	}
    	else
    	{

            if($data["email"] == "admin@admin.com")
    		{
    			$rq->Session()->put('user','admin');
                $rq->Session()->put('idUser', $kt->getIdUser($data["email"]));
    			//return redirect("admin/home");
    			echo "admin";
    		}
    		else
    		{
    			//$level = $kt->getUserLevel($rq->tenDangNhap, $rq->pass);

    			$level = $kt->getUserLevel($data["email"]);

    			
    			if($level == 1)
    			{
    				$rq->Session()->put('user',"NguoiBanHang");
                    $rq->Session()->put('idUser', $kt->getIdUser($data["email"]));
                    return redirect('ban-hang/home');
    			}else
    			{
                    $rq->Session()->put('user',"NguoiMuaHang");
                    $rq->Session()->put('idUser', $kt->getIdUser($data["email"]));
    				echo "Người mua hàng";
    			}
    		}
    	}
    }

    function getDangKy()
    {
        return view('dangky');
    }

    function postDangKy(request $rq)
    {
        $data = array(
                    
                    "email" => $rq->email,
                    "matKhau" => $rq->password,
                    "hoTen" => $rq->firstname." ".$rq->lastname,
                    "diaChi" => $rq->diachi,
                    "sdt" => $rq->sdt,
                    "level" => 0,
                    
                    /*
                    "email" => "tr@gmail.com",
                    "matKhau" => "123456",
                    "hoTen" => "ABC",
                    "diaChi" => "123 VN",
                    "sdt" => "0003330002",
                    "level" => 0,
                    */
                    );
        if(isset($rq->nguoiban))
            $data["level"] = 1;
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

    function DangXuat(request $rq)
    {
    	$rq->Session()->flush();
    	return redirect('');
    }
}
