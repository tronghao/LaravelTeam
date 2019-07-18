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
      		array('username'=>'admin', 'password'=>'123456','email'=>'', 'hoTen'=>'', 'level'=>'2'),
      		array('username'=>'tai', 'password'=>'123456', 'email'=>'110117058@sv.tvu.edu.vn', 'hoTen'=>'Nguyễn Huỳnh Hữu Tài', 'level'=>'1'),
          array('username'=>'hao', 'password'=>'123456', 'email'=>'110117051@sv.tvu.edu.vn', 'hoTen'=>'Đổ Trọng Hảo', 'level'=>'0'),
      		array('username'=>'chau', 'password'=>'123456', 'email'=>'110117045@sv.tvu.edu.vn', 'hoTen'=>'Võ Minh Châu', 'level'=>'0')
      	]); 
    }
}
