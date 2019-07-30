@extends("nguoi-mua-hang.chung")

@section('noi-dung')
	@if(count($duLieu) != 0)
		@foreach($duLieu as $value)
			<pre>
				@php
					print_r($value);
				@endphp
			</pre>
			<p><a href="{{ asset('mua-hang/huy-don-hang/'.$value["idNguoiMua"].'/'.$value["idSanPham"]) }}">Hủy</a></p>
			<br/>
		@endforeach
	@else
		<p>Không có đơn hàng nào!</p>
	@endif
@stop