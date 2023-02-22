@extends('layouts.app')
@section('title')
<title>
	الصحفة الرئيسية
</title>
@endsection

@section('content')

@include('layouts.nav')

<section class="main">
	<div class="px-1 d-flex btn-container">
		<div class="dropdown">
			<button class="btn btn-secondary main-btn dropdown-toggle" type="button" id="dropdownMenuButton1"
				data-bs-toggle="dropdown" aria-expanded="false">
				إضافة مكلف
			</button>
			<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
		</div>

		<a href="" class="main-btn">
			استيراد Excel
		</a>

		<form action="" class="flex-grow-1">
			<input type="search" name="" id="" placeholder="ابحث عن شيء: اسم المكلف أو رقمه الضريبي أو حالة التبليغ او حالة الدفع">
		</form>

	</div>
</section>
@endsection
@section('Js')
@endsection