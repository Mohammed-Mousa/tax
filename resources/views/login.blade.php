@extends('layouts.app')
@section('title')
<title>
	تسجيل الدخول
</title>
@endsection

@section('content')

<section class="loginPage">
	<div>
		<form action="" class="w-75 m-auto needs-validation" novalidate>
			<h1>
				أهلاً بك في برنامج حساب الضرائب
			</h1>
			<img src="{{URL::asset('frontend/img/customer-servicea@2x.png')}}" alt="">
			<p>أدخل اسم المستخدم وكلمة المرور للمتابعة</p>
			<input required class="form-control" type="text" placeholder="اسم المستخدم">
			<div class="invalid-feedback text-center text-white w-100 mt-0 mb-1">
       الرجاء كتابة اسم المستخدم
      </div>

			<input required class="form-control" type="password" placeholder="كلمة المرور">
			<div class="invalid-feedback text-center text-white w-100 mt-0 mb-1">
				الرجاء كتابة  كلمة المرور
      </div>

			<button type="submit">
				تسجيل الدخول
			</button>

			<section class="checkbox-section text-end w-100">
				<div>
					<label class="form-check-label" for="f-checkbox">
						حفظ اسم المستخدم
					</label>
					<input class="form-check-input ms-2" type="checkbox" value="" id="f-checkbox">

				</div>
				<div>

					<label class="form-check-label" for="s-checkbox">
						حفظ كلمة السر
					</label>
					<input class="form-check-input ms-2" type="checkbox" value="" id="s-checkbox">
				</div>
			</section>
		</form>
	</div>
	<p class="zk">
		فكرة وتطوير : الأستاذ زكي حسن
	</p>
</section>
@endsection
@section('Js')
@endsection