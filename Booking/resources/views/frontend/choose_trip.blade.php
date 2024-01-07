@extends('frontend.layouts.master')
@section('content')
    <!-- end navbar -->
    <!-- start section form tabs -->
    <section>
        <div class="container tab-panel">
            <!-- <div class=""> -->
            <div class="row titel-contant">

                <div class="col-4">
                    <h6 class="tab-titel   p-2" data-id="web">ّذهاب و عوده</h6>
                </div>
                <div class="col-4">
                    <h6 class="tab-titel active   p-2" data-id="ai">ذهاب فقط</h6>
                </div>
                <div class="col-4">
                    <h6 class="tab-titel    p-2" data-id="desigen">وجهات متعدده</h6>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12 ">
                    <div class="tab-contant  my-3 " id="web" style="overflow: hidden;">
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
                    <form action="" method="POST">
                        @method('POST')
                        @csrf

                        <div class="tab-contant active  my-3 " id="ai" style="overflow: hidden;">
                            <div class="row d-flex ">
                                <!-- <div class="tabs-info "> -->
                                <div class="from-info col-lg-3 bg-white mb-3 mx-2 p-2">
                                    <label for="" class="">من</label>
                                    <select class=" form-control " aria-label="Default  example" id="from_country">
                                        <option selected>اختر البلد</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="from-info col-lg-3  bg-white  mb-3 mx-2 p-2">
                                    <label for="" class="">إلى</label>
                                    <select class="form-control" aria-label="Default example"
                                        onchange="fillCities(this)">
                                        <option selected>اختر البلد</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
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
                    </form>
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
            @if (count($trips)>0)
            <div class='container row'>
                <div class="container col-lg-12">
                    
                    @foreach ($trips as $trip)
                            <li class="page-item content tab-titel-day-2 active-day-2" data-id="Day1-2"><a
                                class="page-link Day1" href="{{route('passengers_details',$trip->id)}}">
                                <div class="date-plan">
                                    <div class="box-of-country justify-content-center d-flex mt-2">
                                        <p>{{ $trip->toCity->name }} </p>
                                        <i class="fa-solid fa-plane  mx-3"></i>
                                        <p>{{ $trip->fromCity->name }}</p>
                                       
                                    </div>
                                    <div class="d-flex">
                                        <h5> موعد الإقلاع: </h5><span> {{ $trip->leaving_date }}</span>
                                    </div>
                                    <div class="d-flex">
                                        <h5> موعد الوصول: </h5><span> {{ $trip->arriving_date }}</span>
                                    </div>
                                   
                                </div>
                            </a></li>
                    @endforeach
                </div>
            </div>
            @else

            <div class='container row'>
                <div class="container col-lg-12">
                    <h5> لا رحلات طيران متوفرة</h5>
                    <p>يرجى تغيير معاملات البحث</p>

                </div>
            </div>
                
            @endif
            



        </div>

    </section>
    <!-- end section-ticket -->



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
