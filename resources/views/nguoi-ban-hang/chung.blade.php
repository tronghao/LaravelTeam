<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chung</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/chung.css">
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">San Pham Cua SIT.TV <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Gia Dung</a></li>
                <li><a href="#">Dien Tu</a></li>
                <li><a href="#">Quan Ao</a></li>
                <li><a href="#">Linh Kien</a></li>
                <li><a href="#">May Tinh - Dien Thoai</a></li>
                <li><a href="#">Sach - Vo - But</a></li>
                <li><a href="#">May Quay - May Anh</a></li>
                <li><a href="#">Hang Quoc Te</a></li>

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
            <li><a href="#">Don Hang</a></li>
            <li><a href="#">Ca Nhan</a></li>
            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  <body>
    <h1 class="text-center">Hello World</h1>
     <p>Trang Người Bán Hàng</p>
  <p><a href="{{ asset('ban-hang/home') }}">Home</a></p>
  <p><a href="{{ asset('ban-hang/them-san-pham') }}">Thêm sản phẩm</a></p>
  <p><a href="{{ asset('dang-xuat') }}">Đăng Xuất</a></p>
  @yield('noi-dung')
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
  </body>
</html>
	

