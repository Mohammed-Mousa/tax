@extends('layouts.app')
@section('title')
    <title>
       اعدادات الضرائب
    </title>
@endsection

@section('content')
    @include('layouts.nav')

<div class="container-fluid">
    <div class="parent-tax-settings my-2">
        <div class="wrapper-tax-settings mb-5">
            <div class="d-flex align-items-end justify-content-between wrapper-tax-settings-actions mb-2">
                <button class="tax-settings-action">النسبة</button>
                <button class="tax-settings-action add-new-tax" btn-addNew-tax>إضافة نسبة جديدة</button>
            </div>
            <div class="wrapper-tax-settings-content">
                <div class="tax-settings-content-parent">
                    <ul class="tax-settings-content-wrapper">
                        @foreach($percentege as $per)

                            <li class="d-flex align-items-center justify-content-between"><span>{{$per->value}}<span class="mx-3">% </span></span>
                                <div class="d-flex align-items-center col-gap-10px">
                                    <button class="btn-edit-tax"><img src="frontend/icons/pen.png" alt="edit tax"></button>
                                    <button class="btn-del-tax"><img src="frontend/icons/Delete.png" alt="delete tax"></button>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper-tax-settings mb-5">
            <div class="d-flex align-items-end justify-content-between wrapper-tax-settings-actions mb-2">
                <button class="tax-settings-action">مبالغ الشرائح للأعمال الحرة</button>
                <button class="tax-settings-action add-new-tax" btn-edit-tax>تعديل مبالغ الشرائح</button>
            </div>
            <div class="wrapper-tax-settings-content">
                <div class="tax-settings-content-parent">
                    <ul class="tax-settings-content-wrapper">
                        @foreach($freelance_slides as $slide)

                            <li class="d-flex align-items-center justify-content-between slide-amount"><span class="fw-bold">{{$slide->name}} </span><span class="fw-bold">{{$slide->value}}</span><span class="fw-bold">{{$slide->percentege_value}}<span class="mx-3">%</span></span></li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="wrapper-tax-settings mb-5">
            <div class="d-flex align-items-end justify-content-between wrapper-tax-settings-actions mb-2">
                <button class="tax-settings-action">مبالغ الشرائح للشركات</button>
                <button class="tax-settings-action add-new-tax" btn-edit-tax>تعديل مبالغ الشرائح</button>
            </div>
            <div class="wrapper-tax-settings-content">
                <div class="tax-settings-content-parent">
                    <ul class="tax-settings-content-wrapper">
                        @foreach($company_slides as $slide)

                            <li class="d-flex align-items-center justify-content-between slide-amount"><span class="fw-bold">{{$slide->name}} </span><span class="fw-bold">{{$slide->value}}</span><span class="fw-bold">{{$slide->percentege_value}}<span class="mx-3">%</span></span></li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="edit-tax-modal" modal-edit-tax>
        <form action="">
            <div class="edit-tax-modal-header"><span>مبالغ الشرائح</span></div>
            <div class="edit-tax-modal-body">
                <div class="wrapper-edit-tax-modal-body-items">
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-15px edit-tax-modal-body-item mb-2">
                        <label class="fw-bold"> <span class="text-danger mx-1">*</span><span>الشريحة الأولى:</span></label>
                        <input type="text" placeholder="المبلغ">
                        <input type="text" placeholder="النسبة المئوية">
                    </div>
                </div>
                <div class="wrapper-edit-tax-modal-body-items">
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-15px edit-tax-modal-body-item mb-2">
                        <label class="fw-bold"> <span class="text-danger mx-1">*</span><span>الشريحة الثانية:</span></label>
                        <input type="text" placeholder="المبلغ">
                        <input type="text" placeholder="النسبة المئوية">
                    </div>
                </div>
                <div class="wrapper-edit-tax-modal-body-items">
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-15px edit-tax-modal-body-item mb-2">
                        <label class="fw-bold"> <span class="text-danger mx-1">*</span><span>الشريحة الثالثة:</span></label>
                        <input type="text" placeholder="المبلغ">
                        <input type="text" placeholder="النسبة المئوية">
                    </div>
                </div>
            </div>
            <p class="text-center fw-bold edit-tax-modal-note">ملاحظة: فقط قم بإدخال الرقم بدون % , سوف ستم حسابها بشكل آلي </p>
            <div class="d-flex align-items-center justify-content-center mt-4 col-gap-15px wrapper-submit-cancel">
                <button class="d-flex align-items-center justify-content-center col-gap-10px btn-true-action" type="button"><span>حفظ</span><img src="frontend/icons/tick-green-icon.png" alt=""></button>
                <button class="d-flex align-items-center justify-content-center col-gap-10px btn-false-action" type="button" cancel-edit-tax><span>إلغاء</span><img src="frontend/icons/tick Red icon.png" alt=""></button>
            </div>
        </form>
    </div>
    <div class="addNew-tax-modal" modal-addNew-tax>
        <form action="{{url('/tax_settings/addPercentege')}}" method="POST">
            @csrf
            <div class="addNew-tax-modal-header mb-2"><span>إضافة نسبة جديدة</span></div>
            <div class="addNew-tax-modal-body">
                <div class="wrapper-addNew-tax-modal-body-items">
                    <div class="d-flex flex-column flex-md-row align-items-center col-gap-15px addNew-tax-modal-body-item mb-2">
                        <label class="fw-bold"> <span class="text-danger mx-1">*</span><span>النسبة:</span></label>
                        <input type="number" name="value" placeholder="ملاحظة النسبة سوف تكون مئوية بشكل آلي">
                    </div>
                </div>
            </div>
            <p class="text-center fw-bold my-3 addNew-tax-modal-note">ملاحظة: فقط قم بإدخال الرقم بدون % , سوف ستم حسابها بشكل آلي </p>
            <div class="d-flex align-items-center justify-content-center col-gap-15px wrapper-submit-cancel">
                <button class="d-flex align-items-center justify-content-center col-gap-10px btn-true-action" type="submit"><span>حفظ</span><img src="frontend/icons/tick-green-icon.png" alt=""></button>
                <button class="d-flex align-items-center justify-content-center col-gap-10px btn-false-action" type="button" cancel-addNew-tax><span>إلغاء</span><img src="frontend/icons/tick Red icon.png" alt=""></button>
            </div>
        </form>
    </div>
</div>

@endsection
@section('Js')
@endsection