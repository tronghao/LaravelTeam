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
Route::post('dang-ky', "UserController@postDangKy");
Route::get('dang-xuat', "UserController@dangXuat");



Route::group(['prefix'=>'ban-hang'], function(){
	Route::get('home', 'NguoiBanHangController@home');
	Route::get('them-san-pham', "NguoiBanHangController@getAddSanPham");
	Route::post('them-san-pham', "NguoiBanHangController@postAddSanPham");
	Route::get('sua-san-pham/{id}', "NguoiBanHangController@getViewEditSanPham");
	Route::post('sua-san-pham/{id}', "NguoiBanHangController@editSanPham");
	Route::get('xoa-san-pham/{id}', "NguoiBanHangController@deleteSanPham");
});