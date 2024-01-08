@extends('frontend.layouts.master')
@section('content')
    <!-- start section one -->
    <section class="section-box mb-3 p-2">
        <div class="container form-control ">
            <div class="row">
                <div class="col-lg-3 d-flex justify-content-between" style="border-right: 1px gray solid;">
                    <i class="fa-solid fa-chevron-up"></i>
                    <h6>انظر للاسعار بالعملات الاخرى</h6>
                </div>
                <div class="col-lg-9 d-flex justify-content-between" style="color: #3498db;">
                    <h5>KWD 223.44.2</h5>
                    <h5>تغيير العمله</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end section one -->
    <!-- start second section -->
    <section class="second-section">
        <div class="container text-center mb-2">
            <div class="">
                <h4 style="color: #3498db;">أضف مزايا قيمة عديدة لتعزيز تجربة سفرك مع طيران الجزيرة
                </h4>
                <a href="http://" class="mt-2" style="color:
        black;">انتقل الي الدفع</a>


            </div>
        </div>
        <div class="container   mb-3">
            <div class="bg-advertise">

            </div>
        </div>
    </section>
    <!-- end second section -->
    <!-- start section three -->
    <section class="third-section mb-3 p-2">
        <div class="row d-flex justify-content-center p-3">
            <div class="col-lg-6 p-3" style="border: 1px #3498db solid;border-radius: 20px;">
                <h5 style="color: #3498db;">ملخص الحجز</h5>
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-4">
                        <hr>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h5>{{ $trip->fromCity->name }} - {{ $trip->toCity->name }}</h5>
                    </div>
                    <div class="col-lg-4">
                        <hr>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <h6>KWD {{ $trip->price_adult }}</h6>
                    <h6>1 x بالغ</h6>

                </div>
                <div class="d-flex justify-content-between">
                    <h6>KWD 10</h6>
                    <h6>الضرائب و الرسوم</h6>

                </div>

                <div class="d-flex justify-content-between">
                    <h6>KWD {{$trip->price_adult*$clientTrip->adult_no+10}}</h6>
                    <h6>المجموع</h6>

                </div>
            </div>
        </div>
    </section>
    <!-- end section three -->
    <!-- start section btns -->
    <section class="NextStep p-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-6">
                    <button _ngcontent-ttv-c186="" class="btn btn-secondary p-2 mt-3 " style="border-radius: 20px;">العودة
                        للخلف </button>
                </div>
                <div class="col-lg-6">
                    <a _ngcontent-ttv-c186="" appdebounceclick="" href="{{route('bank_info',[$trip->id,$clientTrip->client->id])}}"
                        class="btn mt-3 btn-warning btn-lg btn-wide" style="border-radius: 50px;">الخطوة التالية:
                        ادفع</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section btns -->
@endsection
