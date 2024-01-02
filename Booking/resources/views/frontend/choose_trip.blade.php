@extends('frontend.layouts.master')
@section('content')
<!-- end navbar -->
<!-- start section form tabs -->
<section>
    <div class="container tab-panel">
        <!-- <div class=""> -->
        <div class="row titel-contant">

            <div class="col-4">
                <h6 class="tab-titel active   p-2" data-id="web">ّذهاب و عوده</h6>
            </div>
            <div class="col-4">
                <h6 class="tab-titel   p-2" data-id="ai">ذهاب فقط</h6>
            </div>
            <div class="col-4">
                <h6 class="tab-titel    p-2" data-id="desigen">وجهات متعدده</h6>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 ">
                <div class="tab-contant active  my-3 " id="web" style="overflow: hidden;">
                    <div class="row d-flex " style="overflow: hidden;">
                        <!-- <div class="tabs-info "> -->
                        <div class="from-info col-lg-3 mb-3 bg-white mx-2 p-2">
                            <label for="" class="">من</label>
                            <!-- <input type="text" id="From-value" value=""> -->
                            <div class="dropdown">
                                <input type="text" id="searchInput1" oninput="filterCountries(1)"
                                    onclick="showDropdown(1)" placeholder="  ابحث عن البلد">
                                <div id="countryDropdown1" class="dropdown-content"></div>
                            </div>

                        </div>

                        <div class="from-info col-lg-3 mb-3 bg-white mx-2 p-2">
                            <label for="" class="">الي</label>
                            <!-- <input type="text" id="ToValue" value=""> -->
                            <div class="dropdown">
                                <input type="text" id="searchInput2" oninput="filterCountries(2)"
                                    onclick="showDropdown(2)" placeholder="  ابحث عن البلد">
                                <div id="countryDropdown2" class="dropdown-content"></div>
                            </div>
                        </div>
                        <div class="from-info col-lg-2 mb-3 bg-white mx-2 p-2">
                            <label for="" class="">تاريخ المغادره</label>
                            <input type="date" value="">
                        </div>
                        <div class="from-info col-lg-2 mb-3  bg-white mx-2 p-2">
                            <label for="" class="">ذهاب وعوده</label>
                            <input type="date" value="">
                        </div>

                        <div class="col-lg-1  p-3 mdf-btn d-flex justify-content-between " style="height: 50px;">

                            <i class="fa-solid fa-plane "></i>
                            <label for="" class="">تعديل</label>


                        </div>
                        <div class="from-info col-lg-4 mt-3 mb-3 bg-white mx-2 p-2">
                            <!-- <input type="" value=""> -->
                            <label for="">المسافرون</label>
                            <div class="dropdown form-control text-center w-100">
                                <a class="dropbtn">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-chevron-down"></i>

                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <h6>مقعد مزدوج</h6>
                                                <h6 id="inpt4">0</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>رضيغ</h6>
                                                <h6 id="inpt3">0</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>الاطفال</h6>
                                                <h6 id="inpt2">0</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>بالغ</h6>
                                                <h6 id="inpt">1</h6>
                                            </div>

                                        </div>

                                        <div class="d-flex">
                                            <h6>ركاب</h6>
                                            <i class="fa-solid fa-person"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-content">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement()">-</button>
                                            <span id="counter">1</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment()">+</button>
                                        </div>
                                        <h6>بالغ ( الأعمار 12+ )</h6>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement2()">-</button>
                                            <span id="counter2">0</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment2()">+</button>
                                        </div>
                                        <h6>الأطفال ( الأعمار 2-11 ) </h6>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement3()">-</button>
                                            <span id="counter3">0</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment3()">+</button>
                                        </div>
                                        <h6>رضيع ( الأعمار 0-2 ) </h6>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement4()">-</button>
                                            <span id="counter4">0</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment4()">+</button>
                                        </div>
                                        <h6>مقعد مزدوج</h6>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-between"><label for="" class="">المسافرون</label>
                        <label for="" class=""></label></div>
                      <a class="btn btn-white d-flex justify-content-between " style="width: 100%;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        بالغ
                        <i class="fa-solid fa-chevron-down mx-2"></i>
                      </a>

                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul> -->
                            </div>
                        </div>


                        <div class="from-info col-lg-3 mt-3 mb-3  bg-white mx-2 p-2">
                            <label for="" class="">ادخل الرمز الترويجي</label>
                            <input type="text" value="">
                        </div>
                        <div class="from-info col-lg-3 mt-3 mb-3  bg-white mx-2 p-2">
                            <label for="" class="">اسعار خاصه</label>
                            <select class="form-control">
                                <option>لا يوجد</option>
                                <option>طالب علم</option>

                            </select>
                        </div>
                        <!-- </div> -->
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-contant  my-3 " id="ai" style="overflow: hidden;">
                    <div class="row d-flex ">
                        <!-- <div class="tabs-info "> -->
                        <div class="from-info col-lg-3 bg-white mb-3 mx-2 p-2">
                            <label for="" class="">من</label>
                            <div class="dropdown">
                                <input type="text" id="searchInput3" oninput="filterCountries(3)"
                                    onclick="showDropdown(3)" placeholder="  ابحث عن البلد">
                                <div id="countryDropdown3" class="dropdown-content"></div>
                            </div>
                        </div>
                        <div class="from-info col-lg-3  bg-white  mb-3 mx-2 p-2">
                            <label for="" class="">الي</label>
                            <div class="dropdown">
                                <input type="text" id="searchInput4" oninput="filterCountries(4)"
                                    onclick="showDropdown(4)" placeholder="  ابحث عن البلد">
                                <div id="countryDropdown4" class="dropdown-content"></div>
                            </div>
                        </div>
                        <div class="from-info col-lg-2 bg-white  mb-3 mx-2 p-2">
                            <label for="" class="">تاريخ المغادرة</label>
                            <input type="date" value="">
                        </div>
                        <div class="from-info col-lg-2  bg-white  mb-3 mx-2 p-2">
                            <label for="" class="">عوده</label>
                            <input type="date" value="">
                        </div>
                        <div class="col-lg-1  p-3 mdf-btn d-flex justify-content-between " style="height: 50px;">

                            <i class="fa-solid fa-plane "></i>
                            <label for="" class="">تعديل</label>


                        </div>
                        <div class="from-info col-lg-4 mt-3  mb-3  bg-white mx-2 p-2">
                            <label for="" class="">المسافرون</label>
                            <div class="dropdown form-control text-center w-100">
                                <a class="dropbtn">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa-solid fa-chevron-down"></i>

                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <h6>مقعد مزدوج</h6>
                                                <h6 id="inpt4-2">0</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>رضيغ</h6>
                                                <h6 id="inpt3-2">0</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>الاطفال</h6>
                                                <h6 id="inpt2-2">0</h6>
                                            </div>
                                            <div class="d-flex">
                                                <h6>بالغ</h6>
                                                <h6 id="inpt-2">1</h6>
                                            </div>

                                        </div>

                                        <div class="d-flex">
                                            <h6>ركاب</h6>
                                            <i class="fa-solid fa-person"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-content">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement22()">-</button>
                                            <span id="counter-2">1</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment22()">+</button>
                                        </div>
                                        <h6>بالغ ( الأعمار 12+ )</h6>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement2T()">-</button>
                                            <span id="counter2-2">0</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment2T()">+</button>
                                        </div>
                                        <h6>الأطفال ( الأعمار 2-11 ) </h6>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement3T()">-</button>
                                            <span id="counter3-2">0</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment3T()">+</button>
                                        </div>
                                        <h6>رضيع ( الأعمار 0-2 ) </h6>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="decrement4T()">-</button>
                                            <span id="counter4-2">0</span>
                                            <button class="text-center"
                                                style="border-radius: 20px; line-height: 20px; display: inline-block; height: 22px;width: 22px;"
                                                onclick="increment4T()">+</button>
                                        </div>
                                        <h6>مقعد مزدوج</h6>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-between"><label for="" class="">المسافرون</label>
                        <label for="" class=""></label></div>
                      <a class="btn btn-white d-flex justify-content-between " style="width: 100%;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        بالغ
                        <i class="fa-solid fa-chevron-down mx-2"></i>
                      </a>

                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul> -->
                            </div>
                        </div>

                        <div class="from-info col-lg-3 mt-3  mb-3  bg-white mx-2 p-2">
                            <label for="" class="">الرمز الترويجي</label>
                            <input type="text" value="">
                        </div>
                        <div class="from-info col-lg-3 mt-3  mb-3  bg-white mx-2 p-2">

                            <label for="" class="">اسعار خاصه</label>


                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>عدم الاختيار </option>

                                <option>طالب علم</option>

                            </select>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-contant  my-3 " id="desigen" style="overflow: hidden;">
                    <div class="row  tabs-describtion d-flex">
                        <!-- <div class="  d-flex"> -->
                        <!-- <div class=" " style="overflow: hidden;"> -->
                        <div class="row tabs-information">
                            <div class="col-lg-3 bg-white d-flex p-2 mb-3 overflow-hidden">
                                <label for="" class="p-2">من</label>
                                <div class="dropdown">
                                    <input type="text" id="searchInput4" oninput="filterCountries(4)"
                                        onclick="showDropdown(4)" placeholder="  ابحث عن البلد">
                                    <div id="countryDropdown4" class="dropdown-content"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 p-2  bg-white d-flex mb-3">
                                <label for="" class="p-2">الي</label>
                                <div class="dropdown">
                                    <input type="text" id="searchInput4" oninput="filterCountries(4)"
                                        onclick="showDropdown(4)" placeholder="  ابحث عن البلد">
                                    <div id="countryDropdown4" class="dropdown-content"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex mb-3  justify-content-between bg-white p-2 overflow-hidden">
                                <label for="" class="p-1 ">تاريخ المغادرة </label>
                                <input type="date" value="">
                            </div>
                        </div>
                        <!-- </div> -->
                        <div class="row tabs-information">
                            <div class="col-lg-3 bg-white d-flex p-2 mb-3 ">
                                <label for="" class="p-2">من</label>
                                <input type="text" value="" style="overflow: hidden;">
                            </div>
                            <div class="col-lg-3 p-2  bg-white d-flex mb-3 overflow-hidden">
                                <label for="" class="p-2">الي</label>
                                <input type="text" value="">
                            </div>
                            <div class="col-lg-4 d-flex mb-3  justify-content-between bg-white p-2 overflow-hidden">
                                <label for="" class="p-1 ">تاريخ المغادرة</label>
                                <input type="date" value="">
                            </div>
                        </div>
                        <!-- </div> -->
                        <div class="  tabs-edit mt-3  d-flex">
                            <div class="col-lg-3 pass-atrr bg-white d-flex p-2">
                                <label for="" class="p-2">ذهاب وعوده</label>
                                <input type="text" value="">
                            </div>

                            <div class="col-lg-3 p-2 mx-3 mdf-btn d-flex justify-content-between">

                                <i class="fa-solid fa-plane p-2"></i>
                                <label for="" class="">تعديل</label>


                            </div>


                        </div>
                        <div class="  tabs-edit mt-3  d-flex">
                            <div class="col-lg-3 pass-atrr bg-white  p-2">
                                <label for="" class="p-2 d-block">الرمز الترويجي</label>
                                <input type="text" value="">
                            </div>

                            <div class="col-lg-3 mx-3 pass-atrr bg-white p-2">


                                <label for="" class="p-2  d-block">اسعار خاصه </label>
                                <!-- <label for="" class="">اسعار خاصه</label> -->
                                <select class="form-control">
                                    <option>لا يوجد</option>
                                    <option>طالب علم</option>

                                </select>

                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- </div> -->
    </div>
</section>
<!-- end section form tabs -->

<!-- start section-ticket -->
<section class="tecket-section mt-5 text-center">
    <h3>اختيار رحلة المغادرة</h3>
    <div class="container">
        <div class="box-of-country justify-content-center d-flex mt-2">
            <p>عمان</p>
            <i class="fa-solid fa-plane  mx-3"></i>
            <p>القاهره</p>
        </div>
        <div class="days-ticket d-flex justify-content-center text-center w-100">
            <div id="scrollableDiv">
                <li class="page-item content tab-titel-day-2 active-day-2" data-id="Day1-2"><a class="page-link Day1"
                        href="#">

                        <div class="date-plan">
                            <div class="d-flex">
                                <h5>15 ديسمبر </h5><span>الجمعه</span>
                            </div>
                            <p>لا رحلات طيران متوفره</p>

                        </div>
                    </a></li>
                <li class="page-item  content tab-titel-day-2" data-id="Day2-2"><a class="page-link " href="#">
                        <div class="date-plan">
                            <div class="d-flex">
                                <h5>14 ديسمبر </h5><span>الخميس</span>
                            </div>
                            <p>لا رحلات طيران متوفره</p>
                        </div>
                    </a></li>
                <li class="page-item content tab-titel-day-2" data-id="Day3-2"><a class="page-link Day1" href="#">

                        <div class="date-plan">
                            <div class="d-flex">
                                <h5>15 ديسمبر </h5><span>الجمعه</span>
                            </div>
                            <p>لا رحلات طيران متوفره</p>

                        </div>
                    </a></li>
                <li class="page-item content tab-titel-day-2" data-id="Day4-2"><a class="page-link Day1" href="#">

                        <div class="date-plan">
                            <div class="d-flex">
                                <h5>15 ديسمبر </h5><span>الجمعه</span>
                            </div>
                            <p>لا رحلات طيران متوفره</p>

                        </div>
                    </a></li>
                <li class="page-item content tab-titel-day-2" data-id="Day5-2"><a class="page-link Day1" href="#">

                        <div class="date-plan">
                            <div class="d-flex">
                                <h5>15 ديسمبر </h5><span>الجمعه</span>
                            </div>
                            <p>لا رحلات طيران متوفره</p>

                        </div>
                    </a></li>
                <li class="page-item content tab-titel-day-2 " data-id="Day6-2"><a class="page-link Day1" href="#">

                        <div class="date-plan">
                            <div class="d-flex">
                                <h5>15 ديسمبر </h5><span>الجمعه</span>
                            </div>
                            <p>لا رحلات طيران متوفره</p>

                        </div>
                    </a></li>
                <!-- Add more content divs as needed -->
            </div>
        </div>
        <!-- start section-tecket-img -->
        <div class="img-ticket ">
            <div class="container">
                <div class="div-timer d-flex p-2">

                    <p>كل الاوقات الظاهره هيا محليه لكل مدينه</p>
                    <i class="fa-regular fa-clock mx-2"></i>
                </div>
                <div class="ticket-beber  tab-contant-day-2 active-day-2" id="Day1-2">
                    <!-- <div class="marg mb-3"></div> -->
                    <div class="row d-flex justify-content-center p-3 ">

                        <div class="  text-center justify-content-center">
                            <div class="row d-flex justify-content-center p-3">

                                <div class="col-lg-2 cut-ticket  text-center  p-3">
                                    <div class="d-flex justify-content-center">
                                        <img class="mx-2" src="./assets/images/new-savers-club-logo.svg" alt=""
                                            srcset="">
                                        <h5>سعر</h5>
                                    </div>
                                    <p>ابتداء من</p>
                                    <h4>4,977.20 EGP</h4>
                                    <div class="d-flex p-2 justify-content-between"
                                        style="border: 1px solid rgba(126, 126, 246, 0.335); border-radius: 20px;">
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <h5>اختيار</h5>

                                    </div>
                                </div>
                                <div class="col-lg-2 bg-white cut-ticket-2 text-center  p-3"
                                    style="border-right:2px #D7D7D7 dashed ;border-left:2px #D7D7D7 dashed;">
                                    <h5 style="color: #004A97;">السعر العادي </h5>

                                    <p>ابتداء من</p>
                                    <h4>5,277.20 EGP</h4>
                                    <div class="d-flex p-2 justify-content-between"
                                        style="border: 1px solid rgba(126, 126, 246, 0.335); border-radius: 20px;">
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <h5>اختيار</h5>

                                    </div>
                                </div>
                                <div class="col-lg-6 bg-white p-3">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-lg-3 kol-k">
                                            <h3>21:35</h3>
                                            <div class="d-flex justify-content-center">
                                                <p>15 ديسمبر </p><span>2022</span>
                                            </div>
                                            <p>الجمعه</p>
                                        </div>
                                        <div class="col-lg-5 text-center kol-k">
                                            <h5>J9 722, J9 251</h5>
                                            <p>إجمالي : 11 ساعة 55 دقيقة</p>
                                            <div class="country-plan d-flex justify-content-between">
                                                <p>الاسكندريه</p>
                                                <i class="fa-solid fa-plane mx-2"></i>
                                                <p>عمان</p>
                                            </div>
                                            <div class="country-plan d-flex justify-content-center">

                                                <i class="fa-solid fa-plane-arrival mx-3"></i>
                                                <p>1 stop الكويت</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <h3>21:35</h3>
                                            <div class="d-flex justify-content-center">
                                                <p>22 ديسمبر </p><span>2022</span>
                                            </div>
                                            <p>الثلاثاء</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center p-3">

                                <div class="col-lg-2  cut-ticket  text-center  p-3">
                                    <div class="d-flex justify-content-center">
                                        <img class="mx-2" src="./assets/images/new-savers-club-logo.svg" alt=""
                                            srcset="">
                                        <h5>سعر</h5>
                                    </div>
                                    <p>ابتداء من</p>
                                    <h4>4,977.20 EGP</h4>
                                    <div class="d-flex p-2 justify-content-between"
                                        style="border: 1px solid rgba(126, 126, 246, 0.335); border-radius: 20px;">
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <h5>اختيار</h5>

                                    </div>
                                </div>
                                <div class="col-lg-2 bg-white cut-ticket-2 text-center  p-3"
                                    style="border-right:2px #D7D7D7 dashed ;border-left:2px #D7D7D7 dashed;">
                                    <h5 style="color: #004A97;">السعر العادي </h5>

                                    <p>ابتداء من</p>
                                    <h4>5,277.20 EGP</h4>
                                    <div class="d-flex p-2 justify-content-between"
                                        style="border: 1px solid rgba(126, 126, 246, 0.335); border-radius: 20px;">
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <h5>اختيار</h5>

                                    </div>
                                </div>
                                <div class="col-lg-6 bg-white p-3">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-lg-3 kol-k">
                                            <h3>21:35</h3>
                                            <div class="d-flex justify-content-center">
                                                <p>15 ديسمبر </p><span>2022</span>
                                            </div>
                                            <p>الجمعه</p>
                                        </div>
                                        <div class="col-lg-5 text-center kol-k">
                                            <h5>J9 722, J9 251</h5>
                                            <p>إجمالي : 11 ساعة 55 دقيقة</p>
                                            <div class="country-plan d-flex justify-content-between">
                                                <p>الاسكندريه</p>
                                                <i class="fa-solid fa-plane mx-2"></i>
                                                <p>عمان</p>
                                            </div>
                                            <div class="country-plan d-flex justify-content-center ">

                                                <i class="fa-solid fa-plane-arrival mx-3"></i>
                                                <p>1 stop الكويت</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <h3>21:35</h3>
                                            <div class="d-flex justify-content-center">
                                                <p>22 ديسمبر </p><span>2022</span>
                                            </div>
                                            <p>الثلاثاء</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class=" p-5 tab-contant-day-2 text-center " id="Day2-2">
                    <div class="row d-flex justify-content-center p-3">

                        <div class="col-lg-2 cut-ticket  text-center  p-3">
                            <div class="d-flex justify-content-center">
                                <img class="mx-2" src="./assets/images/new-savers-club-logo.svg" alt="" srcset="">
                                <h5>سعر</h5>
                            </div>
                            <p>ابتداء من</p>
                            <h4>4,977.20 EGP</h4>
                            <div class="d-flex p-2 justify-content-between"
                                style="border: 1px solid rgba(126, 126, 246, 0.335); border-radius: 20px;">
                                <i class="fa-solid fa-chevron-down"></i>
                                <h5>اختيار</h5>

                            </div>
                        </div>
                        <div class="col-lg-2 bg-white cut-ticket-2 text-center  p-3"
                            style="border-right:2px #D7D7D7 dashed ;border-left:2px #D7D7D7 dashed;">
                            <h5 style="color: #004A97;">السعر العادي </h5>

                            <p>ابتداء من</p>
                            <h4>5,277.20 EGP</h4>
                            <div class="d-flex p-2 justify-content-between"
                                style="border: 1px solid rgba(126, 126, 246, 0.335); border-radius: 20px;">
                                <i class="fa-solid fa-chevron-down"></i>
                                <h5>اختيار</h5>

                            </div>
                        </div>
                        <div class="col-lg-6 bg-white p-3">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 justify-content-center kol-k">
                                    <h3>21:35</h3>
                                    <div class="d-flex">
                                        <p>15 ديسمبر </p><span>2022</span>
                                    </div>
                                    <p>الجمعه</p>
                                </div>
                                <div class="col-lg-5 text-center kol-k">
                                    <h5>J9 722, J9 251</h5>
                                    <p>إجمالي : 11 ساعة 55 دقيقة</p>
                                    <div class="country-plan d-flex justify-content-between">
                                        <p>الاسكندريه</p>
                                        <i class="fa-solid fa-plane mx-2"></i>
                                        <p>عمان</p>
                                    </div>
                                    <div class="country-plan d-flex justify-content-center">

                                        <i class="fa-solid fa-plane-arrival mx-3"></i>
                                        <p>1 stop الكويت</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h3>21:35</h3>
                                    <div class="d-flex justify-content-center">
                                        <p>22 ديسمبر </p><span>2022</span>
                                    </div>
                                    <p>الثلاثاء</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 tab-contant-day-2 text-center " id="Day3-2">
                    <div class="row d-flex justify-content-center p-3">


                        <div class="col-lg-4 bg-white cut-ticket-2 text-center  p-3"
                            style="border-right:2px #D7D7D7 dashed ;border-left:2px #D7D7D7 dashed;">
                            <h5 style="color: #004A97;">السعر العادي </h5>

                            <p>ابتداء من</p>
                            <h4>5,277.20 EGP</h4>
                            <div class="d-flex p-2 justify-content-between"
                                style="border: 1px solid rgba(126, 126, 246, 0.335); border-radius: 20px;">
                                <i class="fa-solid fa-chevron-down"></i>
                                <h5>اختيار</h5>

                            </div>
                        </div>
                        <div class="col-lg-6 bg-white p-3">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 justify-content-center kol-k">
                                    <h3>21:35</h3>
                                    <div class="d-flex">
                                        <p>15 ديسمبر </p><span>2022</span>
                                    </div>
                                    <p>الجمعه</p>
                                </div>
                                <div class="col-lg-5 text-center kol-k">
                                    <h5>J9 722, J9 251</h5>
                                    <p>إجمالي : 11 ساعة 55 دقيقة</p>
                                    <div class="country-plan d-flex justify-content-between">
                                        <p>الاسكندريه</p>
                                        <i class="fa-solid fa-plane mx-2"></i>
                                        <p>عمان</p>
                                    </div>
                                    <div class="country-plan d-flex justify-content-center">

                                        <i class="fa-solid fa-plane-arrival mx-3"></i>
                                        <p>1 stop الكويت</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h3>21:35</h3>
                                    <div class="d-flex justify-content-center">
                                        <p>22 ديسمبر </p><span>2022</span>
                                    </div>
                                    <p>الثلاثاء</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" p-5 tab-contant-day-2 text-center " id="Day4-2">
                    <div class="row d-flex justify-content-center p-3">


                        <div class="col-lg-4 bg-white cut-ticket-2 text-center  p-5"
                            style="border-right:2px #D7D7D7 dashed ;border-left:2px #D7D7D7 dashed;">
                            <h4>Sold Out</h4>
                        </div>
                        <div class="col-lg-6 bg-white p-3">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 justify-content-center kol-k">
                                    <h3>21:35</h3>
                                    <div class="d-flex">
                                        <p>15 ديسمبر </p><span>2022</span>
                                    </div>
                                    <p>الجمعه</p>
                                </div>
                                <div class="col-lg-5 text-centerkol-k">
                                    <h5>J9 722, J9 251</h5>
                                    <p>إجمالي : 11 ساعة 55 دقيقة</p>
                                    <div class="country-plan d-flex justify-content-between">
                                        <p>الاسكندريه</p>
                                        <i class="fa-solid fa-plane mx-2"></i>
                                        <p>عمان</p>
                                    </div>
                                    <div class="country-plan d-flex justify-content-center ">

                                        <i class="fa-solid fa-plane-arrival mx-3"></i>
                                        <p>1 stop الكويت</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <h3>21:35</h3>
                                    <div class="d-flex justify-content-center">
                                        <p>22 ديسمبر </p><span>2022</span>
                                    </div>
                                    <p>الثلاثاء</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" p-5 tab-contant-day-2 text-center" id="Day5-2">
                    <i class="fa-solid fa-otter"></i>
                    <p class="mt-2">عذرا لايوجد رحلات متوفرهtttttttttttttt لاختيارك من التاريخ والمكان<br>.نرجو تغيير
                        اختيارات البحث</p>
                </div>
                <div class="p-5 tab-contant-day-2 text-center" id="Day6-2">
                    <i class="fa-solid fa-otter"></i>
                    <p class="mt-2">عذرا لايوجد رحلات متوفرهtttttttttttttt لاختيارك من التاريخ والمكان<br>.نرجو تغيير
                        اختيارات البحث</p>
                </div>
            </div>
        </div>
        <!-- End section-tecket-img -->
</section>
<!-- end section-ticket -->

<!-- start section-ticket22222222222 -->
<section class="tecket-section mt-5 text-center">
    <h3>اختيار رحله العوده</h3>
    <div class="container">
        <div class="box-of-country justify-content-center d-flex mt-2">
            <p>القاهره </p>
            <i class="fa-solid fa-plane  mx-3"></i>
            <p>عمان</p>
        </div>

    </div>
    <div class="days-ticket d-flex justify-content-center text-center w-100">
        <div id="scrollableDiv">
            <li class="page-item content tab-titel-day active-day" data-id="Day1"><a class="page-link Day1" href="#">

                    <div class="date-plan">
                        <div class="d-flex">
                            <h5>15 ديسمبر </h5><span>الجمعه</span>
                        </div>
                        <p>لا رحلات طيران متوفره</p>

                    </div>
                </a></li>
            <li class="page-item Day2 content tab-titel-day" data-id="Day2"><a class="page-link " href="#">
                    <div class="date-plan">
                        <div class="d-flex">
                            <h5>14 ديسمبر </h5><span>الخميس</span>
                        </div>
                        <p>لا رحلات طيران متوفره</p>
                    </div>
                </a></li>
            <li class="page-item content tab-titel-day" data-id="Day3"><a class="page-link Day1" href="#">

                    <div class="date-plan">
                        <div class="d-flex">
                            <h5>15 ديسمبر </h5><span>الجمعه</span>
                        </div>
                        <p>لا رحلات طيران متوفره</p>

                    </div>
                </a></li>
            <li class="page-item content tab-titel-day" data-id="Day4"><a class="page-link Day1" href="#">

                    <div class="date-plan">
                        <div class="d-flex">
                            <h5>15 ديسمبر </h5><span>الجمعه</span>
                        </div>
                        <p>لا رحلات طيران متوفره</p>

                    </div>
                </a></li>
            <li class="page-item content tab-titel-day" data-id="Day5"><a class="page-link Day1" href="#">

                    <div class="date-plan">
                        <div class="d-flex">
                            <h5>15 ديسمبر </h5><span>الجمعه</span>
                        </div>
                        <p>لا رحلات طيران متوفره</p>

                    </div>
                </a></li>
            <li class="page-item content tab-titel-day " data-id="Day6"><a class="page-link Day1" href="#">

                    <div class="date-plan">
                        <div class="d-flex">
                            <h5>15 ديسمبر </h5><span>الجمعه</span>
                        </div>
                        <p>لا رحلات طيران متوفره</p>

                    </div>
                </a></li>
            <!-- Add more content divs as needed -->
        </div>

    </div>
    <!-- start section-tecket-img -->
    <div class="img-ticket ">
        <div class="container">

            <div class="ticket-beber ">
                <!-- <div class="marg mb-3"></div> -->
                <div class="row d-flex justify-content-center p-3">

                    <div class="col-lg-6 tab-contant-day active-day p-5 text-center" id="Day1">
                        <i class="fa-solid fa-otter"></i>
                        <p class="mt-2">عذرا لايوجد رحلات متوفره لاختيارك من التاريخ والمكان<br>.نرجو تغيير اختيارات
                            البحث</p>
                    </div>
                    <div class="col-lg-6 p-5 tab-contant-day text-center " id="Day2">
                        <i class="fa-solid fa-otter"></i>
                        <p class="mt-2">t<br>.نرجو تغيير اختيارات البحث</p>
                    </div>
                    <div class="col-lg-6 p-5 tab-contant-day text-center" id="Day3">
                        <i class="fa-solid fa-otter"></i>
                        <p class="mt-2">عذرا لايوجد رحلات متوفره ffffffffffلاختيارك من التاريخ والمكان<br>.نرجو تغيير
                            اختيارات البحث</p>
                    </div>
                    <div class="col-lg-6 p-5 tab-contant-day text-center" id="Day4">
                        <i class="fa-solid fa-otter"></i>
                        <p class="mt-2">عذرا لايوجد رحلات متوفره bbbbbbbbbbلاختيارك من التاريخ والمكان<br>.نرجو تغيير
                            اختيارات البحث</p>
                    </div>
                    <div class="col-lg-6 p-5 tab-contant-day text-center" id="Day5">
                        <i class="fa-solid fa-otter"></i>
                        <p class="mt-2">عذرا لايوجد رحلات متوفرهtttttttttttttt لاختيارك من التاريخ والمكان<br>.نرجو
                            تغيير اختيارات البحث</p>
                    </div>
                    <div class="col-lg-6 p-5 tab-contant-day text-center" id="Day6">
                        <i class="fa-solid fa-otter"></i>
                        <p class="mt-2">عذرا لايوجد رحلات متوفره ggggggggggggggلاختيارك من التاريخ والمكان<br>.نرجو
                            تغيير اختيارات البحث</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End section-tecket-img -->
</section>
<!-- end section-ticket-222222 -->
<!-- start next-step -->
<section class="p-5">
    <div class="d-flex justify-content-center">
        <div class="alert alert-warning w-50 text-center" role="alert">
            الخطوه التاليه : بيانات المسافر
        </div>
    </div>
</section>
<!-- end next-step -->
@endsection
