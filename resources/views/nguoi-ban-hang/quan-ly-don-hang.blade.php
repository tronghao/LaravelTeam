@extends("nguoi-ban-hang.chung")

@section('noi-dung')
	@if(count($duLieu) != 0)
		@foreach($duLieu as $value)
			<pre>
				@php
					print_r($value);
				@endphp
			</pre>
		@endforeach
	@else
		<p>Không có đơn hàng nào!</p>
	@endif
@stop