<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('User')->insert([
      		array('password'=>'123456','email'=>'admin@admin.com', 'hoTen'=>'', 'level'=>'2', "diaChi"=>"", "sdt"=>""),
      		array('password'=>'123456', 'email'=>'110117058@sv.tvu.edu.vn', 'hoTen'=>'Nguyễn Huỳnh Hữu Tài', 'level'=>'1', "diaChi"=>"123 VietNam", "sdt"=>"0123456789"),
          array('password'=>'123456', 'email'=>'110117051@sv.tvu.edu.vn', 'hoTen'=>'Đổ Trọng Hảo', 'level'=>'0', "diaChi"=>"123 VietNam", "sdt"=>"0987654321"),
      		array('password'=>'123456', 'email'=>'110117045@sv.tvu.edu.vn', 'hoTen'=>'Võ Minh Châu', 'level'=>'0', "diaChi"=>"123 VietNam", "sdt"=>"0355335533")
      	]); 
    }
}
