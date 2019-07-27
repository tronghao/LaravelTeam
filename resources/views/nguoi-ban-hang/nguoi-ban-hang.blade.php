<!DOCTYPE html>
<html lang="vi">
	
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TRANG CHUNG </title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="public/css/home.css" rel="stylesheet" type="text/css" media="all" />
		
	</head>

	<body>
		
         

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>




























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