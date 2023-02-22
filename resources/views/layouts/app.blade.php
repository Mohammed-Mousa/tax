<!DOCTYPE html>
<html lang="ar">

<head>
	<meta charset="utf-8">

	<meta name="viewport"
		content="width=device-width, minimum-scale=1 , initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#000">

	<link rel="icon" href="{{URL::asset('frontend/img/logo.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.rtl.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet" class="app-css" type="text/css" href="{{URL::asset('frontend/css/app-ar.css')}}" media="all">


	@yield('title')


	<style type="text/css">
		#small-screen {
			display: none;
		}

		#cover,
		#small-screen {
			position: fixed;
			height: 100vh;
			width: 100%;
			top: 0;
			left: 0;
			background: #000;

			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			transition: 0.3s all linear;
		}

		#small-screen {
			z-index: 10004 !important;
		}

		@media screen and (max-width:899px) {

			#cover,
			#body {
				/* display: none !important; */
			}

			#small-screen {
				z-index: 10005;
			}
		}

		@media screen and (min-width:900px) {
			#cover {
				z-index: 10005;
			}

			#small-screen {
				display: none;
			}
		}

		#body {
			opacity: 0;
			transition: 0.3s all linear;
		}
	</style>


	<!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body dir="rtl">

	<div id="cover" style="font-size: calc(1.3rem + .6vw);font-family: Verdana, Geneva, Tahoma, sans-serif;">
		<span class="spinner-grow text-light me-2" role="status">
			<span class="visually-hidden" style="opacity:.000000000001">Loading...</span>
		</span>
		الرجاء الانتظار...
	</div>


	<div id="body">
		@yield('content')
	</div>

{{-- 
	<div id="small-screen" class="text-center"
		style="font-size: calc(1.3rem + .6vw);font-family: Verdana, Geneva, Tahoma, sans-serif;">

		هذا التطبيق مخصص لأجهزة الحاسوب
		يرجى فتح التطبيق من خلال
		حاسب
		<br>
		(لابتوب - ديسكتوب)
	</div> --}}


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script type="text/javascript" src="{{URL::asset('frontend/js/main.js')}}"></script>


	@yield('Js')

</body>

</html>