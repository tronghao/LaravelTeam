@extends('nguoi-ban-hang.chung')

@section('noi-dung')
	<form action="{{ asset('ban-hang/them-san-pham') }}" method="post">
		{{ csrf_field() }}
    	<br/> <br/> Name: <input type="text" name="name">
    	<br/> <br/> Mô Tả: <input type="text" name="moTa">
    	<br/> <br/> Đường dẫn hình ảnh: <input type="text" name="srcImg">
    	<br/> <br/> Giá Khuyến Mãi: <input type="text" name="giaKhuyenMai">
    	<br/> <br/> Giá gốc: <input type="text" name="giaGoc">
    	<br/> <br/> Số Lượng: <input type="text" name="soLuong">
    	<br/> <br/> Thương Hiệu: <input type="text" name="thuongHieu">
    	<br/> <br/> <input type="submit" name="them" value="Thêm Sản Phẩm">
	</form>
	<br/>
	@if(isset($info))
		{{ $info }}
	@endif
@stop