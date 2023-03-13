@extends('layouts.app')
@section('title')
    <title>
      عرض معلومات مكلف
    </title>
@endsection

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="parent-one-occupation">
            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px one-occupation-actions">
                <button class="d-flex align-items-center justify-content-center" type="button"><span>حفظ السجل</span></button>
                <button class="d-flex align-items-center justify-content-center" type="button"><img class="d-none" src="./icons/arrow.png" alt="arrow">
                    <select name="" style="background-color: transparent; width: 100%; outline: none; border: none; color: #FFF;">
                        <option value="" style="color: #000;">اختر حالة الدفع  </option>
                        <option value="" style="color: #000;">مدفوع  </option>
                        <option value="" style="color: #000;">غير مدفوع  </option>
                        <option value="" style="color: #000;">الكل </option>
                    </select>
                </button>
                <button class="d-flex align-items-center justify-content-center" type="button"><img class="d-none" src="./icons/arrow.png" alt="arrow">
                    <select name="" style="background-color: transparent; width: 100%; outline: none; border: none; color: #FFF;">
                        <option value="" style="color: #000;">اختر حالة الإبلاغ  </option>
                        <option value="" style="color: #000;">مبلغ  </option>
                        <option value="" style="color: #000;">غير مبلغ  </option>
                    </select>
                </button>
                <button class="d-flex align-items-center justify-content-center" type="button"><img class="d-none" src="./icons/arrow.png" alt="arrow">
                    <select name="" style="background-color: transparent; width: 100%; outline: none; border: none; color: #FFF;">
                        <option value="" style="color: #000;">اختر حالة التحقق  </option>
                        <option value="" style="color: #000;">تم التحقق  </option>
                        <option value="" style="color: #000;">غير محقق  </option>
                    </select>
                </button>
                <button class="d-flex align-items-center justify-content-center" type="button" style="min-width: 204px;" onclick="printHTML('print-occupation.html')"><span>طباعة</span></button>
            </div>
            <div class="one-occupation-info">
                <div class="d-flex align-items-center col-gap-10px mb-3">
                    <h6 class="mb-0 o-o-title">حساب ضريبة للمكلف: </h6>
                    <p class="mb-0 o-o-val">{{$assignment_person->full_name}}   </p>
                </div>
                <div class="d-flex align-items-center col-gap-10px mb-3">
                    <h6 class="mb-0 o-o-title c-g">المجموع النهائي رقماً: </h6>
                    <p class="mb-0 o-o-val c-g">10000000000000 </p>
                </div>
                <div class="d-flex align-items-center col-gap-10px mb-3">
                    <h6 class="mb-0 o-o-title c-r">المجموع النهائي كتابة: </h6>
                    <p class="mb-0 o-o-val c-r">مئة وخمسة وخمسون مليون ليرة سورية فقط لا غير </p>
                </div>
            </div>
            <div class="one-occupation-accourdion">
                <h5 class="one-occupation-data-title">البيانات المالية لأعمال المكلف</h5>
                <ul>
                    @foreach($assignment_person->professions as $key=> $profession)
                        <li>
                            <div class="wrapper-h-a" data-bs-toggle="collapse" data-bs-target="#occupation-{{$key+1}}" aria-expanded="false">
                                <h6 class="mb-0 form-one-occupation-title">مدخلات المهنة {{$key+1}} لحساب ضريبتها</h6><span class="form-one-occupation-title title-ts o-underline" style="margin-right: -209px;">مبلغ الضريبة المستحق للمهنة {{$key+1}}</span><img src="frontend/icons/arrow.svg" alt="">
                            </div>
                            <div class="one-occupation-data accordion-collapse collapse show" id="occupation-{{$key+1}}">
                                <div class="d-flex flex-column flex-md-row wrapper-one-occupation-data">
                                    <div class="one-occupation-data-1">
                                        <div class="wrapper-form-one-occupation">
                                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer one-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الإيرادات اليومية للمهنة {{$key+1}}:</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer one-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>عدد أيام العمل:</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer one-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>نسبة الربح:</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer one-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>
                            الحد الأدنى المعفى من الضريبة:</span></label>
                                                <input type="text">
                                            </div>
                                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer one-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="opacity-0 text-danger">*</span><span>ملاحظات</span></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one-occupation-data-2">
                                        <div class="wrapper-form-one-occupation">
                                            <div class="d-flex align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer two-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الإيرادات السنوية:</span></label>
                                                <input class="flex-1" type="text" readonly disabled value="35,000,000">
                                            </div>
                                            <div class="d-flex align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer two-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>
                            :الأرباح الخاضعةللضريبة:</span></label>
                                                <input class="flex-1" type="text" readonly disabled value="37,000,000">
                                            </div>
                                            <div class="d-flex align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer two-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الضريبة السنوية وفق الشريحة 1:</span></label>
                                                <input type="text" readonly disabled value="180,000">
                                            </div>
                                            <div class="d-flex align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer two-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الضريبة السنوية وفق الشريحة 2</span></label>
                                                <input type="text" readonly disabled value="1,500,000">
                                            </div>
                                            <div class="d-flex align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer two-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="opacity-0 text-danger">*</span><span>الضريبة السنوية وفق الشريحة 3</span></label>
                                                <input type="text" readonly disabled value="90,000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="one-occupation-data-3">
                                        <div class="d-flex flex-column h-100 justify-content-between wrapper-form-one-occupation" style="padding-top: 27px;">
                                            <div class="d-flex align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer three-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الأرباح السنوية:</span></label>
                                                <input type="text" readonly disabled value="22,000,000">
                                            </div>
                                            <div class="d-flex align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer three-b">
                                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>المجموع:</span></label>
                                                <input class="text-danger" type="text" readonly disabled value="1,770,000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
@section('Js')
@endsection