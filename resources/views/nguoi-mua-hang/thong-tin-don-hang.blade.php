@extends("nguoi-mua-hang.chung")

@section('noi-dung')
	@if(isset($duLieu))
		<pre>
			@php
				print_r($duLieu)
			@endphp
		</pre>
		<form action="{{ asset('mua-hang/mua-san-pham/'.$duLieu[0]["id"])}}" method="post">
			{{ csrf_field() }}
	    	<br/> <br/> Số Lượng: <input type="text" name="soLuong">
	    	<br/> <br/> <input type="submit" name="them" value="Xác Nhận Mua">
		</form>
		<br/>
		<p><a href="{{ asset('mua-hang/home') }}">Bỏ đơn hàng</a></p>
	@else
		@if(isset($info))
			{{ $info }}
		@endif
	@endif
@stop