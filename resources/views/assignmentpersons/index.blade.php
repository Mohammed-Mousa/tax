@extends('layouts.app')
@section('title')
    <title>
        الصحفة الرئيسية
    </title>
@endsection

@section('content')

    @include('layouts.nav')

    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between py-2 col-gap-10px wrapper-controls">
            <button class="btn-add-taxpayer">
                <div class="d-flex align-items-center"><span class="mx-auto">إضافة مكلف</span><svg class="add-icon-btn" xmlns="http://www.w3.org/2000/svg" width="17.136" height="17.136" viewBox="0 0 17.136 17.136">
                        <path id="arrow" d="M0,12.118V0H12.116V.919H.917v11.2Z" transform="translate(8.568 17.136) rotate(-135)" fill="#fff"/>
                    </svg>
                </div>
                <div class="box-add-taxpayer">
                    <ul>
                        <li init-add-taxpayer>مهنة واحدة</li>
                        <li><a href="{{url('/assignment_persons/multyOccupation')}}">مهن متعددة</a></li>
                    </ul>
                </div>
            </button>
            <button class="btn-restore ltr">Excel استيراد</button>
            <label style="flex: 1;" for="input-main-search"><svg id="search-icon" xmlns="http://www.w3.org/2000/svg" width="26.822" height="26.15" viewBox="0 0 26.822 26.15">
                    <path id="Path_2" data-name="Path 2" d="M10.911,0h0V0A10.908,10.908,0,0,1,21.821,10.9h0v.016h0a10.9,10.9,0,0,1-.566,3.469q-.092.274-.191.526v0a10.916,10.916,0,0,1-1.211,2.25L26.2,22.872l0,0,.034.032,0,0a1.885,1.885,0,0,1,.146,2.565l0,0-.038.044-.008.008-.032.035,0,0a1.886,1.886,0,0,1-2.565.146l0,0-.045-.038-.006-.005-6.493-5.835q-.288.2-.587.385c-.269.165-.548.32-.832.462a10.864,10.864,0,0,1-4.861,1.14v0h0v0A10.908,10.908,0,0,1,0,10.919H0v-.011H0A10.907,10.907,0,0,1,10.9,0V0Zm0,2.447v0H10.9v0a8.466,8.466,0,0,0-8.457,8.461h0v.011h0a8.466,8.466,0,0,0,8.461,8.457v0h.011v0a8.466,8.466,0,0,0,8.457-8.46h0V10.9h0a8.466,8.466,0,0,0-8.46-8.457Z" fill="#003d65"/>
                </svg>
                <input class="rtl" type="text" placeholder="ابحث عن شيء: اسم المكلف أو رقمه الضريبي أو حالة التبليغ او حالة الدفع" id="input-main-search">
            </label>
        </div>
        @include('assignmentpersons.assignmentpersons_table')
        <!-- Create assignment person modal-->
        <!-- Modal -->
        <div class="parent-add-taxpayer addNew-taxpayer-modal" addNew-taxpayer-modal>
            <div class="wrapper-form">
                <form action="{{url ('/assignment_persons/store')}}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center me-4  col-gap-15px form-taxpayer-h">
                        <h6 class="f-a-t-title">البيانات الشخصية للمكلف</h6>
                        <button class="px-3 f-a-t-action" type="button" style="padding: 2px 0;">
                            <select name="type" style="background-color: transparent; width: 100%; outline: none; border: none; color: #003d65; cursor: pointer;">
                                <option value="" style="color: #000;">اختر النوع  </option>
                                <option value="0" style="color: #000;">شركة  </option>
                                <option value="1" style="color: #000;">اعمال حرة  </option>
                            </select>
                        </button>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                        <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الرقم الضريبي:</span></label>
                        <input type="text" name="tax_number">
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
                        <input type="text" name="mother_name">
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                        <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>تاريخ التولد:</span></label>
                        <input type="text"  name="birth_date">
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                        <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>الرقم الوطني:</span></label>
                        <input type="text" name="id_number">
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                        <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="opacity-0 text-danger">*</span><span>رقم الهاتف:</span></label>
                        <input type="text" name="phone">
                    </div>
                    <div class="d-flex align-items-center me-4  col-gap-15px form-taxpayer-h">
                        <h6 class="my-3 me-4 f-a-t-title">بيانات المهنة للمكلف</h6>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-10px mt-1 wrapper-form-input-taxpayer">
                        <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="text-danger">*</span><span>المهنة:</span></label>
                        <input type="text" name="professions[0][occupation]">
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
                        <label class="d-flex align-items-center fw-bold col-gap-10px" for=""><span class="opacity-0 text-danger">*</span><span>تاريخ التبليغ:</span></label>
                        <input type="text" name="professions[0][notified_date]">
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-3 col-gap-15px wrapper-submit-cancel">
                        <button class="d-flex align-items-center justify-content-center col-gap-10px btn-true-action" type="submit"><span>حفظ</span><img src="frontend/icons/tick-green-icon.png" alt=""></button>
                        <button class="d-flex align-items-center justify-content-center col-gap-10px btn-false-action" type="button" cancel-taxpayer-modal><span>إلغاء</span><img src="frontend/icons/tick Red icon.png" alt=""></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <!-- Create assignment person modal-->


    </div>
@endsection
@section('Js')
@endsection