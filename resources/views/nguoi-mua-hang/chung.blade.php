<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Trang Người Mua Hàng</p>
	<p><a href="{{ asset('mua-hang/home') }}">Home</a></p>
	<p><a href="{{ asset('mua-hang/cac-don-hang') }}">Các đơn hàng đã đặt</a></p>
	<p><a href="{{ asset('dang-xuat') }}">Đăng Xuất</a></p>
	@yield('noi-dung')
</body>
</html>