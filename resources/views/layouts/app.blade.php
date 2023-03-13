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
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"> </script>
	<link rel="stylesheet" href="{{URL::asset('frontend/css/custom.css')}}">
	<script src="{{URL::asset('frontend/js/custom.js')}}" defer></script>

	@yield('title')

</head>

	<body>
	@yield('content')
	@yield('Js')

	</body>

</html>