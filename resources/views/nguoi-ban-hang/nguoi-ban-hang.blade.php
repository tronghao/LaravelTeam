@extends('nguoi-ban-hang.chung')

@section('noi-dung')
	@foreach($duLieu as $value)
		@foreach($value as $value2)
			{{ $value2 }}
			<br/>
		@endforeach
		<a href="{{ asset('ban-hang/sua-san-pham/'.$value["id"]) }}">Sửa</a> ||
		<a href="{{ asset('ban-hang/xoa-san-pham/'.$value["id"]) }}">Xóa</a> <br/>
	@endforeach
@stop