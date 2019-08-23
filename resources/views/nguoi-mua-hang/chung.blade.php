<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bán hàng</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href=" {{ asset('public/css/chung.css') }}">
	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<p>TRANG NGƯỜI BÁN SẢN PHẨM</p>
	<div class="carousel container">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img src="public/images/anh1.png">
          
        </div>
        <div class="item">
          <img src="public/images/anh2.png">
          
        </div>
        <div class="item active">
          <img src="public/images/anh3.png">
          <div class="container">
            
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    
  </div><!-- container case-->

	
	<p><a href="{{ asset('mua-hang/home') }}">Home</a></p>
	<p><a href="{{ asset('mua-hang/cac-don-hang') }}">Các đơn hàng đã đặt</a></p>
	<p><a href="{{ asset('dang-xuat') }}">Đăng Xuất</a></p>
	@yield('noi-dung')
</body>
</html>