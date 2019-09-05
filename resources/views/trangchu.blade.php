<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang Chủ</title>
    <link rel="stylesheet" type="text/css" href=" {{ asset('public/css/trangchu.css') }}">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset ('public/css/bootstrap.min.css')}}">
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
      <div class="phangioithieu">
        <div class="phangioithieu-left">
        <img src="public/images/anh1.png">
        <ul>
          <li><a href="#">Độc Quyền Giảm Giá</a></li>
          <li><a href="#">Săn Deal Trúng Lớn</a></li>
          <li><a href="#">Ưu đãi ngập tràn</a></li>
        </ul>
      </div>
      
    </div>
    <div class="dealchopnhoang">
      <div class="dealchopnhoang-tieude">
        <h3>DEAL CHỚP NHOÁNG</h3>
      </div>
      <div class="dealchopnhoang-timeline">
        <p>Đang bán</p>
        <div class="deal-clock">
          <p>MI</p>
          <p>SE</p>
          <p>HO</p>
        </div>
      </div>
    </div>
    </div>
    
   
  </body>
  
  
		
		{{--dữ liệu mọi đơn hàng--}}

		@foreach($duLieu as $value)
			<pre>
				@php
					print_r($value)
				@endphp
			</pre>
			<a href="{{ asset('kiem-tra-mua') }}">Mua</a>
			<br/>
		@endforeach
  </div>
  <div class="col-lg-3">
    @foreach($duLieu as $value)
      <pre>
        @php
          print_r($value)
        @endphp
      </pre>
      <a href="{{ asset('kiem-tra-mua') }}">Mua</a>
      <br/>
    @endforeach
  </div>
  <div class="col-lg-3">
    @foreach($duLieu as $value)
      <pre>
        @php
          print_r($value)
        @endphp
      </pre>
      <a href="{{ asset('kiem-tra-mua') }}">Mua</a>
      <br/>
    @endforeach
  </div>
  </div>
  <div class="the-tin">
  <h1>SẢN PHẨM TRONG THÁNG</h1>
  </div>
  <div class="container">
  <div class="row ">
    <div class="col-lg-3">
    @foreach($duLieu as $value)
      <pre>
        @php
          print_r($value)
        @endphp
      </pre>
      <a href="{{ asset('kiem-tra-mua') }}">Mua</a>
      <br/>
    @endforeach
  </div>
  <div class="col-lg-3">
    @foreach($duLieu as $value)
      <pre>
        @php
          print_r($value)
        @endphp
      </pre>
      <a href="{{ asset('kiem-tra-mua') }}">Mua</a>
      <br/>
    @endforeach
  </div>
  <div class="col-lg-3">
    @foreach($duLieu as $value)
      <pre>
        @php
          print_r($value)
        @endphp
      </pre>
      <a href="{{ asset('kiem-tra-mua') }}">Mua</a>
      <br/>
    @endforeach
  </div>
  </div>
</div><!--contain body-->

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>