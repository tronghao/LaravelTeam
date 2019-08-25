<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bán hàng</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href=" {{ asset('public/css/chung.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MUAHANG</a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="{{ asset('mua-hang/home') }}">Home</a></li>
      <li><a href="{{ asset('mua-hang/cac-don-hang') }}">Các đơn hàng đã đặt</a></li>
      <li><a href="{{ asset('ban-hang/them-san-pham') }}">Thêm sản phẩm</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><p><a href="{{ asset('dang-xuat') }}">Đăng Xuất</a></p></span></li>
    </ul>
  </div>
</nav>
  <body>
  <h1 class="text-center">Chào Mừng Bạn Đến Mua Sắm</h1>
  <div class="container">
    <div class="danhmuc-right">
      <div class="tieude">
        <h1>Danh Mục Sản Phẩm Đã Mua</h1>
        <table class="table">
      <thead>
        <tr>
          <th>TênSảnPhẩm</th>
          <th>TìnhTrạng</th>
          <th>NgàyMua</th>
          <th>NhàCungCấp</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>DT</td>
          <td>New99%</td>
          <td>25/08/19</td>
          <td>SHOPDIENMAY</td>

        </tr>
        <tr>
          <td>TuLạnh</td>
          <td>Cũ</td>
          <td>22/08/19</td>
          <td>TPHCM</td>
          
        </tr>
        <tr>
          <td>Dieuhoa</td>
          <td>New100%</td>
          <td>25/08/19</td>
          <td>Dienlanh.com</td>
        </tr>
      </tbody>
    </table>
      </div>
      
    </div>
    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
@yield('noi-dung')
</div> 
</body>
</html>