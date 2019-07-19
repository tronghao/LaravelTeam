<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiBanHangModel extends Model
{
    protected $table = 'User';
    protected $fillable = ['id','password', 'hoTen','email'];
    public $timestamps = false;
}
