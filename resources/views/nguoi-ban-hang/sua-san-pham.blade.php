@extends('nguoi-ban-hang.chung')

@section('noi-dung')
	@if(isset($duLieu))
		<pre>
			@php
				print_r($duLieu)
			@endphp
		</pre>
		<form action="{{ asset('ban-hang/sua-san-pham/'.$duLieu[0]['id']) }}" method="post">
			{{ csrf_field() }}
	    	<br/> <br/> Name: <input type="text" name="name" value="{{$duLieu[0]['name']}}">
	    	<br/> <br/> Mô Tả: <input type="text" name="moTa" value="{{$duLieu[0]['moTa']}}">
	    	<br/> <br/> Đường dẫn hình ảnh: <input type="text" name="srcImg" value="{{$duLieu[0]['srcImg']}}">
	    	<br/> <br/> Giá Khuyến Mãi: <input type="text" name="giaKhuyenMai" value="{{$duLieu[0]['giaKhuyenMai']}}">
	    	<br/> <br/> Giá gốc: <input type="text" name="giaGoc" value="{{$duLieu[0]['giaGoc']}}">
	    	<br/> <br/> Số Lượng: <input type="text" name="soLuong" value="{{$duLieu[0]['soLuong']}}">
	    	<br/> <br/> Thương Hiệu: <input type="text" name="thuongHieu" value="{{$duLieu[0]['thuongHieu']}}">
	    	<br/> <br/> <input type="submit" name="sua" value="Sửa Sản Phẩm">
		</form>
		<br/>
	@else
		@if(isset($info))
			{{ $info }}
		@endif
	@endif
@stop