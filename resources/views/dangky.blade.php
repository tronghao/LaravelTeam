<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Đăng Ký</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="public/css/dangky.css" rel="stylesheet" type="text/css" media="all" />
		
	</head>
	<body>
<!-- header ends here -->
		<div class="loginbox radius">
	  	<h2 style="color:#044723; text-align:center;">Chào mừng bạn đến trang bán hàng online của chúng tôi</h2>
	  	<div class="loginboxinner radius">
	    <div class="loginheader">
	      <h4 class="title"> Kinh doanh chia sẻ -  đem lại lợi ích cộng đồng</h4>
	    </div>
	    <!--loginheader-->
	    <div class="loginform">
	      <form id="login" action="" method="post" onsubmit="return kiemTra()">
	        <p>
	          <input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" />
	          <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" />
	        </p>
	        <p>
	          <input type="text" id="email" name="email" placeholder="Your Email" value="" class="radius" />
	        </p>
	        <p>
	          <input type="password" id="password" name="password" placeholder="Password" class="radius" />
	        </p>
	        <p>
	          <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ của bạn" class="radius" />
	        </p>
	        <p>
	          <input type="number" id="sdt" name="sdt" placeholder="Số điện thoại của bạn" class="radius" />
	        </p>
	        <p>
		  <div class="checkbox">
		  	<p>Bạn đăng ký tài khoản của bạn làm:</p>
	      	<label><input type="checkbox" id="nguoiban" name ="nguoimua" value="">Người mua</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="nguoimua" name ="nguoiban" value="">Người bán</label>
	    </div>
	          <button id="submit" class="radius title" name="signup">Gửi</button>
	        </p>
	      </form>
	    </div>
	    <!--loginform-->
	  </div>
	  <!--loginboxinner-->
	</div>
	<link rel="stylesheet" type="text/javacript">
	<script>
		function kiemTra()
		{
			var dem = 0;
			var nguoiBan = document.getElementById("nguoiban");
			var nguoiMua = document.getElementById("nguoimua");

			if(nguoiBan.checked == true)
				dem++;
			if(nguoiMua.checked == true)
				dem++;

			if(dem==2)
			{
				window.alert("Không thể check cả hai");
			}
			else if(dem == 0)
			{
				window.alert("phải check 1 trong hai");
			}
			else if(dem==1)
			{
				return true;
			}
			return false;
		}
			
    </script>
<!--loginbox-->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>