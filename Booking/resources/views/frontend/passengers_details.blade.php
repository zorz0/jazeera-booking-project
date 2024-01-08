@extends('frontend.layouts.master')


@section('content')
    <form action="{{ route('passengers_details.store') }}" method="post">
        @method('POST')
        @csrf
        <section class="mosafer-deatels p-5 text-center">
            <input type="hidden" name="trip_id" value="{{ $trip_id }}">
            <div class="container">
                <h3>بيانات المسافر</h3>
                <h5 class="mb-2">كما ورد في جواز السفر</h5>
                <div class=" d-flex justify-content-center ">
                    <div class="alert-passenger   p-2  mt-3  " role="alert">
                        <div class="d-flex justify-content-between">
                            <div class="warn-cont  ">
                                <h4>ملاحظة مهمة</h4>
                                <p>يرجى ملاحظة أن بعض الدول تتطلب أن تكون تأشيرة الدخول صالحة لمدة 6 أشهر على الأقل قبل
                                    تاريخ
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
                                <h5>أدخل بيانات المسافر
                                    كما ورد في جواز السفر</h5>

                            </div>
                        </div>
                        <div class="bal8-person">
                            <h5 style="color: #3498db;"> 1 بالغ</h5>

                        </div>
                    </div>
                </div>
                <div class=".container-fluid">

                    <div class="bayanat-box mt-5 p-3">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6 p-2">
                                <div class="box-1-bayanat-2 mb-3 ">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-lg-4">
                                            <div class="form-control overflow-hidden mb-3">
                                                <label for="" class="d-block"> اللقب</label>
                                                <select class="form-control" aria-label="Default example" name="title">
                                                    <option selected>اختر من القائمة</option>
                                                    <option value="السيد">السيد</option>
                                                    <option value="السيدة"> السيدة</option>
                                                    <option value="الآنسة">الآنسة</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block">الاسم الاول</label>
                                            <input class="border-none" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block"> اسم العائلة</label>
                                            <input class="border-none" type="text" name="family_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block"> الجنسية</label>
                                            <input class="border-none" type="text" name="nationality">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block"> تاريخ الميلاد</label>
                                            <input class="border-none" type="date" name="birth_date">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block"> البريد الالكتروني</label>
                                            <input class="border-none" type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block"> بلد الإقامة</label>
                                            <select class="form-control" aria-label="Default example"
                                                name="residence_country">
                                                <option selected>Open this select menu</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block"> المدينة</label>
                                            <input type="text" name="residence_city">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-control overflow-hidden mb-3">
                                            <label for="" class="d-block"> الهاتف المحمول </label>
                                            <input class="border-none" type="text" name="phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
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
                        <button _ngcontent-ttv-c186="" class="btn btn-warning p-2 mt-3 "
                            style="border-radius: 20px;">العودة
                            للخلف </button>
                    </div>
                    <div class="col-lg-6">
                        <button _ngcontent-ttv-c186="" appdebounceclick="" type="submit"  id="nxtButton"
                            class="btn mt-3 btn-primary btn-lg btn-wide" style="border-radius: 50px;">الخطوة التالية
                            </button>
                    </div>
                </div>


                <!-- </div> -->
            </div>
            <!-- </div>  -->
        </section>
        <!-- end section eltaly -->
        <!-- end navbar -->
    </form>
@endsection

@section('custom-script')
    <script>
    </script>
@endsection
