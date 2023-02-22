{{-- @include('layouts.nav') --}}
<nav class="nav mb-2">
	<div class="s-row px-1 ">


		<ul class="all-item">

			{{-- 1 --}}
			<li>
				<a href="#">
					<img src="{{ URL::asset('frontend/img/add-user-icon.png') }}" class="me-2" alt="">
					المكلفين
				</a>
			</li>
			{{-- 2 --}}
			<li>
				<a href="#">
					<img src="{{ URL::asset('frontend/img/maintenance-icon.png') }}" class="me-2" alt="">
					إعدادات الضريبة</a>
			</li>
			{{-- 3 --}}
			<li>
				<a href="#">
					<img src="{{ URL::asset('frontend/img/report.png') }}" class="me-2" alt="">
					التقارير
					<span class="arrow-white-cont">
						<img src="{{ URL::asset('frontend/img/arrow.png') }}" class="me-2 arrow-white arrow-fa-down" alt="">
					</span>
				</a>
				<ul>
					<li><a href="#" data-bs-toggle="modal" data-bs-target="#add-boxes">إضافة صندوق</a></li>
					<li><a href="">عرض الصناديق</a></li>
				</ul>
			</li>
			{{-- 4 --}}
			<li>
				<a href="#">
					<img src="{{ URL::asset('frontend/img/maintenance-icon.png') }}" class="me-2" alt="">
					الإعدادات
					<span class="arrow-white-cont">
						<img src="{{ URL::asset('frontend/img/arrow.png') }}" class="me-2 arrow-white arrow-fa-down" alt="">
					</span>
				</a>
				<ul>

					<li><a href="#" data-bs-toggle="modal" data-bs-target="#add-boxes">إضافة صندوق</a></li>
					<li>

						<a href="#">
							<img src="{{ URL::asset('frontend/img/maintenance-icon.png') }}" class="me-2" alt="">
							الإعدادات
							<span class="arrow-white-cont">
								<img src="{{ URL::asset('frontend/img/arrow.png') }}" class="me-2 arrow-white" alt="">
							</span>
						</a>
						<ul>

							<li><a href="#" data-bs-toggle="modal" data-bs-target="#add-boxes">إضافة صندوق</a></li>
							<li><a href="">عرض الصناديق</a></li>
						</ul>

					</li>
				</ul>
			</li>

			{{-- log out --}}
			<li class="ms-auto">
				<a href="#">
					<img src="{{ URL::asset('frontend/img/exit-sign-icon.png') }}" class="me-2" alt="">
					تسجيل الخروج
				</a>
			</li>



		</ul>


	</div>
</nav>