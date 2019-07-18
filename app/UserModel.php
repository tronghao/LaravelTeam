<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'User';
    protected $fillable = ['id','password', 'hoTen','email'];
    public $timestamps = false;

    public function getUserDangNhap($user, $pass)
    {
    	$kq = UserModel::whereRaw('username = ? and password = ?', [$user, $pass])->get()->count();
    	return $kq;
    }

    public function getUserLevel($user, $pass)
    {
    	$kq = UserModel::whereRaw('username = ? and password = ?', [$user, $pass])->get();
    	return $kq;
    }
}
