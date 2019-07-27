<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>them san pham</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="public/css/them-san-pham.css">
       
    </head>
    <body>
        @extends('nguoi-ban-hang.chung')

@section('noi-dung')
    <div class="noi dung">
        <form action="{{ asset('ban-hang/them-san-pham') }}" method="post">
            <h2> THÊM SẢN PHẨM </h2>
        {{ csrf_field() }}
        <br/> <br/> Name: <input type="text" name="name">
        <br/> <br/> Mô Tả: <input type="text" name="moTa">
        <br/> <br/> Đường dẫn hình ảnh: <input type="text" name="srcImg">
        <br/> <br/> Giá Khuyến Mãi: <input type="text" name="giaKhuyenMai">
        <br/> <br/> Giá gốc: <input type="text" name="giaGoc">
        <br/> <br/> Số Lượng: <input type="text" name="soLuong">
        <br/> <br/> Thương Hiệu: <input type="text" name="thuongHieu">
        <br/> <br/> <input type="submit" name="them" value="Thêm Sản Phẩm">
        <p><a href="#"> Quay lại trang chủ </a></p>
    </form>
    </div>
    
    <br/>
    @if(isset($info))
        {{ $info }}
    @endif
@stop

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="Hello World"></script>
    </body>
</html>
