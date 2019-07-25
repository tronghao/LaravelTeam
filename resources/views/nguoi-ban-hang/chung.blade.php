<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Trang Người Bán Hàng</p>
	<p><a href="{{ asset('ban-hang/home') }}">Home</a></p>
	<p><a href="{{ asset('ban-hang/them-san-pham') }}">Thêm sản phẩm</a></p>
	<p><a href="{{ asset('dang-xuat') }}">Đăng Xuất</a></p>
	@yield('noi-dung')
</body>
</html>