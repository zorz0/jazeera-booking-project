@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li><a href="/ar-jo">الصفحة الرئيسية</a></li>

                        <li class="active">سافر</li>
                        <li class="active">احجز</li>
                    </ol>
                </div>
            </div>
        </section>

        <style>
            .trip_images {
                /*height: 100% !important;*/

            }</style>

        <section class="contact-us">
            <div class="container">
                <div class="title lg">
                    <h1><strong class="spl">جولات وفعاليات سياحية</strong></h1>
                </div>

            </div>
        </section>
        <div class="container tripadmit_container">
            <div class="tripadmit_section1">

                <div class="row">
                    <div class="col-md-5 bg_col">
                        <div class="bg_img_section1">

                            <p class="tours_h4">Tours &amp; Activities</p>
                            <div class="heading_tripadmit">

                                <p class="d-flex flex-column justify-content-end" style="font-size:22px; font-style:sans-serif; color:#fff"></p><h2>اختر من بين مجموعة من الأنشطة الشيقة المتاحة للاستمتاع برحلتك.</h2><p></p>
                            </div>
                            <a class="btn_trip button_one" href="https://jazeera.tripadmit.com/" target="_blank">Explore Now</a>
                        </div>
                    </div>
                    <div class="col-md-7 img_col">
                        <a href="https://jazeera.tripadmit.com/" target="_blank"> <img class="trip_images" style="width:100%" src="/images/shutterstock_1921970801.jpg" alt=" "></a>
                    </div>
                </div>
            </div>
            <div class="tripadmit_section2">
                <div>
                    <p>تعاونت طيران الجزيرة مع TripAdmit لتوفير خيارات للمسافرين لحجز جولات وأنشطة مثيرة في وجهاتك المفضلة.</p>
                </div>
            </div>
            <div class="tripadmit_section3">
                <div class="row">
                    <div class="col-md-6 align_items_center content_column">
                        <p>
                        </p><p>اكتشف وخطط وحجز مجموعة واسعة من التجارب التي لا تُنسى في وجهتك واحصل على أفضل الصفقات حول الأشياء التي يمكنك القيام بها وخلق ذكريات لا تُنسى.</p>

                        <p></p>
                    </div>
                    <div class="col-md-6 img_col">
                        <a href="https://jazeera.tripadmit.com/" target="_blank">   <img class="trip_images" style="width:100%" src="/images/3.png" alt="image"></a>
                    </div>
                </div>
            </div>
            <div class="tripadmit_section4">
                <div class="row">
                    <div class="col-md-6 img_col">
                        <a href="https://jazeera.tripadmit.com/" target="_blank">    <img class="trip_images" style="width:100%" src="/images/shutterstock_1332565889.jpg" alt="image"></a>
                    </div>
                    <div class="col-md-6 align_items_center content_column">
                        <p>
                        </p><p>ما عليك سوى حجز جولة مخصصة وحزم حقائبك والاستعداد للاسترخاء حيث قمنا بتلبية جميع احتياجات السفر الخاصة بك حتى تتمكن من قضاء المزيد من الوقت في استكشاف وجهتك.</p>

                        <p></p>
                    </div>
                </div>
            </div>
            <div class="tripadmit_section5">
                <div class="row">
                    <div class="col-md-7 img_col">
                        <a href="https://jazeera.tripadmit.com/" target="_blank">    <img class="trip_images" style="width:100%" src="/images/shutterstock_1048459717.jpg" alt="image"></a>
                    </div>
                    <div class="col-md-5 align_items_center content_column bg_col">
                        <p>
                        </p><p>جولات مخصصة &amp; أنشطة</p>
                        <p>سهولة الحجز عبر الإنترنت</p>
                        <p>أفضل الأسعار والصفقات</p>

                        <p></p>
                    </div>
                </div>
                <div class="row row_button5">
                    <a class="btn_trip" href="https://jazeera.tripadmit.com/" target="_blank">Book Now</a>
                </div>
            </div>
            <div class="tripadmit_section6">
                <p><strong>الأحكام والشروط </strong></p>
                <p>&nbsp;</p>
                <ul>
                    <li>لا يمكن الاستفادة من حزم الرحلات إلا عند الحجز عبر صفحة TripAdmit على jazeera.tripadmit.com. &nbsp;</li>
                    <li>نحن نقبل جميع بطاقات الائتمان الرئيسية تقريبًا ، مثل Visa و MasterCard و American Express. لحجز الجولات ، يجب أن يتم السداد الكامل عن طريق بطاقة الائتمان / الخصم.</li>
                    <li>بمجرد إتمام الدفع ، سوف نرسل إليك تأكيد حجز يعمل كدليل على الدفع لاسترداد حزمة رحلتك. يرجى التأكد من تقديم المعلومات الصحيحة المتعلقة بمتطلبات السفر الخاصة بك في وقت الحجز.</li>
                    <li>تدير TripAdmit جميع حجوزات الجولات والأنشطة والمدفوعات. تطبق شروط وأحكام TripAdmit.</li>
                    <li>أسعار الجولات والأنشطة المعروضة ديناميكية وقابلة للتغيير.</li>
                    <li>قد يتم فرض ضرائب محلية ودفعها لشركة الجولات و / أو الأنشطة عند الاستلام.</li>
                    <li>تطبق قواعد برنامج تريب أدميت لطيران الجزيرة.</li>
                </ul>

            </div>
        </div>
        <style>
            .row_button5{
                padding: 20px 0px 0px 0px;
                justify-content: center;
            }

            /*  .button_one{
                  position: relative;
                  bottom: 37px;
              }*/
            .btn_trip{
                background-color: #FDC12A !important;
                border: unset;
                color: #004a97 !important;
                border-radius: 20px;
                padding: 9px 30px;
                min-width: 150px;
                height: 40px;
                font-weight: 500;
                line-height: 22px;
                font-weight: 600;
                font-size: 14px;
                margin: 10px 0px;
                text-align: center;

            }

            .tripadmit_section5 .col-md-5.align_items_center.content_column.bg_col::before{
                background-image: url(/images/Vector_reverse.png);
                background-color: unset !important;
                position: absolute;
                content: '';
                left: -200px;
                width: 200px;
                height: 101%;
                background-size: 200px 101%;
                background-repeat: no-repeat;
                top: -3px;
                z-index: 1;
            }

            .bg_col {
                background-color: #3989BA;
                color: #ffffff !important;
                padding: 15px 15px;
            }

            .col-md-5.align_items_center.content_column.bg_col{
                display: block;
                vertical-align: middle;
                padding-top: 8% !important;
            }

            .col-md-5.align_items_center.content_column.bg_col p{
                text-align:center;
                color:#ffffff !important;
                margin-bottom:0px !important;
            }
        </style>
    </main>
@endsection
