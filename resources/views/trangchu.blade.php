<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang Chủ</title>

         <link rel="stylesheet" type="text/css" href=" {{ asset('public/css/trangchu.css') }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		
	</head>
	<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SIT.TV</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Deal Hot</a></li>
            <li><a href="#">Qua Tang</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm Cua SIT.TV <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Gia Dụng</a></li>
                <li><a href="#">Điện Tử</a></li>
                <li><a href="#">Quần Áo</a></li>
                <li><a href="#">Linh Kiện</a></li>
                <li><a href="#">Máy Tính - Điện Thoại</a></li>
                <li><a href="#">Sách - Vở - Bút</a></li>
                <li><a href="#">Máy Quay - Máy Ảnh</a></li>
                <li><a href="#">Hàng Quốc Tế</a></li>

              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">TimKiem</button>
          </form>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="#">Đăng Ký</a></li>
            <li><a href="#">Đăng Nhập</a></li>

            <li><a href=" {{ asset('dang-ky') }}">Đăng Ký</a></li>
            <li><a href=" {{ asset('dang-nhap') }}">Đăng Nhập</a></li>

            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
	<body>
<<<<<<< HEAD
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
  
  <div class="container">
    <div class="the-tin">
    <h1> SẢN PHẨM TRONG TUẦN</h1>
  </div>
  <div class="row ">
    <div class="col-lg-3">
		<h1 class="text-center">Trang Chủ</h1>
		
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
<<<<<<< HEAD
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