
<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{config('app.name')}} | Payment Link</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('/payment/css/bootstrap.min.css')}}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('/payment/css/fontawesome-all.min.css')}}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{asset('/payment/font/flaticon.css')}}">
	<!-- Google Web Fonts -->
	<link href="../../../css.css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('/payment/style.css')}}">
</head>

<body>

	<section class="fxt-template-animation fxt-template-layout21">
		<!-- Animation Start Here -->

		<!-- Animation End Here -->
		<div class="container">
			<div class="row align-items-center justify-content-center">
				@yield('content')
			</div>

		</div>

	</section>

	<!-- jquery-->
	<script src="{{asset('/payment/js/jquery-3.5.0.min.js')}}"></script>
	<!-- Popper js -->
	<script src="{{asset('/payment/js/popper.min.js')}}"></script>
	<!-- Bootstrap js -->
	<script src="{{asset('/payment/js/bootstrap.min.js')}}"></script>
	<!-- Imagesloaded js -->
	<script src="{{asset('/payment/js/imagesloaded.pkgd.min.js')}}"></script>
	<!-- Particles js -->
	<script src="{{asset('/payment/js/particles.min.js')}}"></script>
	<script src="{{asset('/payment/js/particles-1.js')}}"></script>
	<!-- Validator js -->
	<script src="{{asset('/payment/js/validator.min.js')}}"></script>
	<!-- Custom Js -->
	<script src="{{asset('/payment/js/main.js')}}"></script>

</body>

</html>
