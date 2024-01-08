@extends('frontend.layouts.master')


@section('content')
    <section class="mosafer-deatels p-5 text-center">
        <div class=".container-fluid">
            <div class="bayanat-box mt-5 p-3">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 p-2">
                        <h2>{{ $client->title }} {{ $client->first_name }} {{ $client->family_name }}</h2>
                        <br>
                        <h3>تم تسجيل البيانات بنجاح</h3>
                        <br>
                        <h4>نشكر لك التسجيل على الرحلة</h4>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="NextStep p-5 ">
        <!-- <div class="container"> -->
        <div _ngcontent-ttv-c186="" class="container text-center">
             
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{route('home')}}" _ngcontent-ttv-c186="" class="btn btn-warning p-2 mt-3 "
                        style="border-radius: 20px;">العودة
                        إلى الصفحة الرئيسية </a>
                </div>
                
            </div>


            <!-- </div> -->
        </div>
        <!-- </div>  -->
    </section>
@endsection

@section('custom-script')
    <script>
        function sendOTP() {
            alert('تم الإرسال بنجاح');
            document.getElementById("otp_code").disabled = false;
        }

        function testOTP() {
            document.getElementById("nxtButton").disabled = false;
            // alert('inside OTP scripts');
        }
    </script>
@endsection
