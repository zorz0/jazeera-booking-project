@extends('frontend.layouts.master')


@section('content')
<section class="mosafer-deatels p-5 text-center">
    <div class="container">
        <h3>بيانات المسافر</h3>
        <h5 class="mb-2">كما ورد في جواز السفر</h5>
        <div class=" d-flex justify-content-center ">
            <div class="alert-passenger   p-2  mt-3  " role="alert">
                <div class="d-flex justify-content-between">
                    <div class="warn-cont  ">
                        <h4>ملاحظة مهمة</h4>
                        <p>يرجى ملاحظة أن بعض الدول تتطلب أن تكون تأشيرة الدخول صالحة لمدة 6 أشهر على الأقل قبل تاريخ
                            مغادرة الرحلة. ننصحك بالتحقق من لوائح تأشيرة الدخول لوجهتك.</p>
                    </div>
                    <div class="p-3 icon-box">
                        <i class="fa-solid fa-circle-exclamation fa-beat-fade"></i>
                    </div>
                    <div class="null-div"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=".container-fluid">
        <div class="bayanat-box mt-5 p-3">
            <div class="div-head-bayanat d-flex  ">
                <div class="radio-bayanat ">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                        value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        جهة التواصل الرئيسية
                    </label>

                </div>
                <div class="d-flex justify-content-center">
                    <div>
                        <h4>
                            أدخل بيانات المسافر</h4>
                        <p>
                            أدخل بيانات المسافر
                            كما ورد في جواز السفر</p>
                    </div>
                </div>
                <div class="bal8-person">
                    <h5 style="color: #3498db;"> 1 بالغ</h5>

                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 p-2">
                    <div class="box-1-bayanat mb-3 ">
                        <div class="row d-flex justify-content-between">

                            <div class="col-lg-4">
                                <div class="form-control overflow-hidden mb-3">
                                    <label for="" class="d-block ">اسم العائله</label>
                                    <input class="border-none " type="text">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-control overflow-hidden mb-3">
                                    <label for="" class="d-block">الاسم الاول</label>
                                    <input class="border-none" type="text">
                                </div>
                            </div>

                            <div class="col-lg-3">

                                <select class="form-select p-3 mb-3" aria-label="Default select example">
                                    <option selected>اللقب</option>
                                    <option value="1">السيد</option>
                                    <option value="2"> السيده</option>
                                    <option value="3">الانسه</option>
                                </select>
                            </div>


                            <!-- </div> -->
                        </div>
                        <div class="box-1-bayanat ">
                            <!-- <div class="form-control"> -->
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-6">
                                    <div class="form-control  mb-2">
                                        <label for="" class="d-block">الجنسيه</label>
                                        <input class="border-none" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-control  mb-2">
                                        <label for="" class="d-block">تارخ الميلاد</label>
                                        <input class="border-none" type="date">
                                    </div>
                                </div>
                            </div>

                            <!-- </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3>تفاصيل التواصل</h3>
            <h5 class="mb-2">جهة التواصل الرئيسية</h5>
            <div class=" d-flex justify-content-center ">

            </div>
        </div>
        <div class=".container-fluid">

            <div class="bayanat-box mt-5 p-3">
                <div class="div-head-bayanat d-flex justify-content-center m-3">

                    <div>
                        <h3>
                            أدخل بيانات المسافر</h3>
                    </div>

                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 p-2">
                        <div class="box-1-bayanat-2 mb-3 ">
                            <div class="row d-flex justify-content-between">

                                <!-- <div class="col-lg-4">

                            </div> -->

                                <div class="col-lg-6">
                                    <div class="form-control overflow-hidden mb-3">
                                        <label for="" class="d-block">الاسم الاول</label>
                                        <input class="border-none" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <select class="form-select p-3 mb-3" aria-label="Default select example">
                                        <option selected>اللقب</option>
                                        <option value="1">السيد</option>
                                        <option value="2"> السيده</option>
                                        <option value="3">الانسه</option>
                                    </select>
                                </div>


                                <!-- </div> -->
                            </div>
                            <div class="box-1-bayanat-2 ">
                                <!-- <div class="form-control"> -->
                                <div class="row d-flex justify-content-between">
                                    <div class="col-lg-6">
                                        <div class="form-control  mb-2">
                                            <label for="" class="d-block">بلد الاقامه</label>
                                            <input class="border-none" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-control  mb-2">
                                            <label for="" class="d-block "> المدينه</label>
                                            <input class="border-none" type="text">
                                        </div>
                                    </div>
                                </div>
                                <!--
                              <select class="form-select p-3" aria-label="Default select example">
                                <option selected>اللقب</option>
                                <option value="1">السيد</option>
                                <option value="2"> السيده</option>
                                <option value="3">الانسه</option>
                              </select> -->
                                <!-- </div> -->
                            </div>
                            <div class="box-1-bayanat-2">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-lg-6">
                                        <div class="form-control  mb-3">
                                            <label for="" class="d-block ">اسم العائله</label>
                                            <input class="border-none " type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-control  mb-2">
                                            <label for="" class="d-block">عنوان البريد الالكتروني</label>
                                            <input class="border-none" type="email">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="box-1-bayanat-2 ">
                                <!-- <div class="form-control"> -->
                                <div class="row d-flex justify-content-between">
                                    <!-- <div class="col-lg-4">

                           </div> -->

                                    <div class="col-lg-6">
                                        <div class="form-control  mb-2">
                                            <label for="" class="d-block "> رقم الهاتف المحمول</label>
                                            <input class="border-none" type="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-control  mb-2">
                                            <label for="" class="d-block "> الرمز الدولي</label>
                                            <input class="border-none " type="text">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box-1-bayanat-2">
                                <label class="form-check-label mx-2" for="flexCheckDefault">
                                    ارغب في تلقي رسائل بريد الكتروني ترويجيه
                                </label>
                                <input class="form-check-input" style="border: 2px rgba(128, 128, 128, 0.38) solid;"
                                    type="checkbox" value="" id="flexCheckDefault">

                            </div>
                            <!-- <div class="form-check bg-info">

                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- end mosafer deatels -->
<!-- start section eltaly -->
<section class="NextStep p-5 ">
    <!-- <div class="container"> -->
    <div _ngcontent-ttv-c186="" class="container text-center">
        <!---->
        <p _ngcontent-ttv-c186="" style="margin-bottom: 30px;"> بالضغط على زر المتابعة أدناه فأنت توافق على
            <a _ngcontent-ttv-c186="" target="_blank" href=""> شروط فئات الأسعار </a>
            و <a _ngcontent-ttv-c186="" target="_blank" href="">شروط وزن الأمتعة</a>
        </p>
        <!-- <div _ngcontent-ttv-c186="" class="buttons passenger_continue_btn d-flex w-90 justify-content-between"> -->
        <div class="row">
            <div class="col-lg-6">
                <button _ngcontent-ttv-c186="" class="btn btn-warning p-2 mt-3 " style="border-radius: 20px;">العودة
                    للخلف </button>
            </div>
            <div class="col-lg-6">
                <button _ngcontent-ttv-c186="" appdebounceclick="" type="submit"
                    class="btn mt-3 btn-primary btn-lg btn-wide" style="border-radius: 50px;">الخطوة التالية: اختيار
                    الإضافات</button>
            </div>
        </div>


        <!-- </div> -->
    </div>
    <!-- </div>  -->
</section>
<!-- end section eltaly -->
<!-- end navbar -->
@endsection
