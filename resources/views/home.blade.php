
<!DOCTYPE html>
<html lang="vi">
<head>
<title>Đăng Nhập</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Space Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- css files -->

<!-- Online-fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!-- //Online-fonts -->

</head>
<body>
	<!-- main -->
	<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3">Mua Hàng Online</h1>
			<div class="w3layouts-main">
				<h2><span>Đăng nhập ngay</span></h2>
				<div class="social">
					<a href="#">Login With Facebook</a>
				</div>
					<h3>(or)</h3>
					<form action="{{ asset('dang-nhap') }}" method="post">
						{{ csrf_field() }}
						<input placeholder="Email" name="tenDangnhap" type="email" required="">
						<input placeholder="Password" name="Password" type="password" required="">
						<input type="submit" value="Get Started" name="login">
					</form>
					<h6><a href="#"> 
						@if(isset($error))
							{{ $error }}
						@endif
					 </a></h6>
			</div>
			<!-- //main -->
			
			<!--footer-->
			<div class="footer-w3l">
				<p>&copy; 2019 Space Login Form. All rights reserved | Design by Hảo Tài Châu</a></p>
			</div>
			<!--//footer-->
		</div>
	</div>

</body>
</html>
