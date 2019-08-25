<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chung</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/chung.css') }}">
    </head>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">BANHANG</a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="{{ asset('ban-hang/home') }}">Home</a></li>
      <li><a href="{{ asset('ban-hang/cac-don-hang') }}">Các đơn hàng</a></li>
      <li><a href="{{ asset('ban-hang/them-san-pham') }}">Thêm sản phẩm</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><p><a href="{{ asset('dang-xuat') }}">LogOut</a></p></span></li>
    </ul>
  </div>
</nav>
  <body>
  <h1 class="text-center">Trang Người Bán Hàng</h1>
  <div class="container">
    <div class="danhmuc-right">
      <div class="tieude">
        <h1>Danh Mục Sản Phẩm</h1>
        <table class="table">
      <thead>
        <tr>
          <th>TênSảnPhẩm</th>
          <th>TìnhTrạng</th>
          <th>NgàyBán</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>DT</td>
          <td>New99%</td>
          <td>25/08/19</td>

        </tr>
        <tr>
          <td>TuLạnh</td>
          <td>Cũ</td>
          <td>22/08/19</td>
          
        </tr>
        <tr>
          <td>Dieuhoa</td>
          <td>New100%</td>
          <td>25/08/19</td>
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
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
  </body>
</html>
	

