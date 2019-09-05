@extends("nguoi-ban-hang.chung")

@section('noi-dung')
	@if(count($duLieu) != 0)
		@foreach($duLieu as $value)
			<pre>
				@php
					print_r($value);
				@endphp
			</pre>
			<a href="{{ asset('ban-hang/dang-van-chuyen/'.$value['id']) }}">Đang Vận Chuyển</a> ||
			<a href="{{ asset('ban-hang/da-giao-hang/'.$value['id']) }}">Đã Giao Hàng</a>
		@endforeach
	@else
		<p>Không có đơn hàng nào!</p>
	@endif
@stop