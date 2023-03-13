@extends('layouts.app')
@section('title')
    <title>
اضافة مكلف - مهام متعددة
    </title>
@endsection

@section('content')
    @include('layouts.nav')

    <div class="container-fluid">
        <div class="parent-add-multiple-o" style=" margin: 20px;">
            <form action="{{url ('/assignment_persons/store')}}" method="POST">
                @csrf
                <div class="row row-gap-15px" id="occupations">
                    <div class="col-12 col-md-6">
                        <div class="wrapper-form">
                            <div class="d-flex align-items-center me-4  col-gap-15px form-taxpayer-h">
                                <h6 class="f-a-t-title" style="color: #b41e47;">البيانات الشخصية للمكلف</h6>
                                <button class="f-a-t-action" type="button"><span class="d-flex align-items-center justify-content-center col-gap-10px">
                      <select name="type" style="border: 0; outline: none;">
                        <option value="">اختر النوع  </option>
                        <option value="0">شركة  </option>
                        <option value="1">اعمال حرة </option>
                      </select></span></button>
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الرقم الضريبي:</span></label>
                                <input type="text"name="tax_number">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>اسم المكلف:</span></label>
                                <input type="text" name="full_name">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>اسم الأب:</span></label>
                                <input type="text" name="father_name">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>اسم الأم:</span></label>
                                <input type="text"name="mother_name">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>تاريخ التولد:</span></label>
                                <input type="text"name="birth_date">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الرقم الوطني:</span></label>
                                <input type="text" name="id_number">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="opacity-0 text-danger">*</span><span>رقم الهاتف:</span></label>
                                <input type="text"name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper-form">
                            <div class="d-flex align-items-center me-4  col-gap-15px form-taxpayer-h">
                                <h6 class="me-4 f-a-t-title" style="color: #1e78b4;">بيانات المهنة 1 للمكلف</h6>
                                <button class="f-a-t-action" type="button" btn-addNew-occupation><span class="d-flex align-items-center justify-content-center col-gap-10px"><svg class="d-none" xmlns="http://www.w3.org/2000/svg" width="13.131" height="13.131" viewBox="0 0 13.131 13.131">
<path id="arrow" d="M0,9.416V0H9.155V.714H.693v8.7Z" transform="translate(6.473 13.131) rotate(-135)" fill="#003d65"/>
</svg><span>إضافة مهنة؟</span></span></button>
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>المهنة:</span></label>
                                <input type="text"name="professions[0][occupation]">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>العنوان:</span></label>
                                <textarea name="professions[0][address]"></textarea>
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>تاريخ المباشرة:</span></label>
                                <input type="text" name="professions[0][start_date]">
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                                <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>تاريخ التبليغ:</span></label>
                                <input type="text"  name="professions[0][notified_date]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-4 col-gap-15px wrapper-submit-cancel">
                    <button class="d-flex align-items-center justify-content-center col-gap-10px btn-true-action" type="submit"><span>حفظ</span><img src="./icons/tick-green-icon.png" alt=""></button>
                    <button class="d-flex align-items-center justify-content-center col-gap-10px btn-false-action" type="button"><span>إلغاء</span><img src="./icons/tick Red icon.png" alt=""></button>
                </div>
                <p class="fw-bold text-center my-2" style="color: #b41e47;">ملاحظة : اذا المكلف لديه أقل من 5 مهن , يكفي أن تقوم بإدخال المهن المطلوبة فقط لهذا المكلف وترك باقي المهن فارغة </p>
            </form>
        </div>
    </div>

@endsection
@section('Js')
@endsection