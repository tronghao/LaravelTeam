<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'User';
    protected $fillable = ['id','password', 'hoTen', 'email', ''];
    public $timestamps = false;

    public function getUserDangNhap($email, $pass)
    {
    	$kq = UserModel::whereRaw('email = ? and password = ?', [$email, $pass])->get()->count();
    	return $kq;
    }

    public function issetUser($email)
    {
        $kq = UserModel::where('email', '=', $email)->get()->count();
        if($kq != 0)
            return true;
        else return false;
    }

    public function getUserLevel($email)
    {
    	$kq = UserModel::where('email', '=', $email)->select('level')->get();
    	return $kq[0]["level"];
    }

    public function getIdUser($email)
    {
        $kq = UserModel::where('email', '=' , $email)->select('id')->get();
        return $kq[0]["id"];
    }
}
