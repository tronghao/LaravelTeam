@extends('nguoi-ban-hang.chung')

@section('noi-dung')
	@foreach($duLieu as $value)
		<pre>
			@php
				print_r($value)
			@endphp
		</pre>
		<a href="{{ asset('ban-hang/sua-san-pham/'.$value["id"]) }}">Sửa</a> ||
		<a href="{{ asset('ban-hang/xoa-san-pham/'.$value["id"]) }}">Xóa</a> <br/>
	@endforeach
@stop