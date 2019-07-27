@extends('nguoi-mua-hang.chung')

@section('noi-dung')
	@foreach($duLieu as $value)
		<pre>
			@php
				print_r($value)
			@endphp
		</pre>
		<a href="{{ asset('mua-hang/mua-san-pham/'.$value["id"]) }}">Mua</a>
		<br/>
	@endforeach
@stop