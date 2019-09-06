<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang Chủ</title>
    <link rel="stylesheet" type="text/css" href=" {{ asset('public/css/trangchu.css') }}">
		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <!--phan dau-->
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">SIT-SHOP</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Trang Chủ</a></li>
          <li><a href="#">Sản Phẩm</a></li>
          <li><a href="#">Dịch vụ</a></li>
          <li><a href="#">Chăm sóc khách hàng</a></li>
          <li><a href="#">Training trong tuần</a></li>
          <li><a href="#">Quản lý </a></li>
        </ul>
        <form class="navbar-form" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Tìm Kiếm">
          </div>
        </form>
        
        <div class="navbar-right">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Quản lý</a></li>
          <li><a href=" {{ asset('dang-ky') }}">Đăng Ký</a></li>
          <li><a href=" {{ asset('dang-nhap') }}">Đăng Nhập</a></li>
        </ul>
      </div>

      </div><!-- /.navbar-collapse -->
    </br>
      
    </div>
  </nav>
	<body>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.tgdd.vn/2019/09/banner/800-300-800x300-(2).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.tgdd.vn/2019/09/banner/800-300-800x300.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.tgdd.vn/2019/09/banner/oppo-A9-800-300-800x300.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="container product-item">
    <div class="row">
      @foreach($duLieu as $value)
      <div class="col-lg-3">
        <div class="card" style="width: 18rem;">
          <div class="promo product-discount">10% OFF</div>
        <img src="{{ $value['srcImg'] }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $value['name'] }}</h5>
          <p class="card-text">{{ $value['moTa'] }}</p>
         <div class="khung gia">
            <p class="giaKhuyenMai"><del>{{ $value['giaKhuyenMai']}}</del></p>
              <button class="btn btn-info">{{ $value['giaGoc'] }}</button>
              <a class="muahang" href="{{asset('kiem-tra-mua')}}">Mua</a>
         </div>
        </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
 {{--dữ liệu mọi đơn hàng--}}
    <!--contain body-->

		<!-- jQuery -->
    <script src="{{asset('public/jquery-3.4.1.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>