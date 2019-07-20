<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "UserController@getTrangChu");
Route::get('dang-nhap', "UserController@getDangNhap");
Route::post('dang-nhap', "UserController@postDangNhap");
Route::get('dang-ky', "UserController@getDangKy");
Route::get('them-san-pham', "SanPhamController@addSanPham");

Route::get('test-sua/{id}', "SanPhamController@editSanPham");
Route::get('test-xoa/{id}', "SanPhamController@deleteSanPham");