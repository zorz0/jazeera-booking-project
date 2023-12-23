@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">
                                الصفحة الرئيسية
                            </a>
                        </li>
                        <li class="active">
                            سافر
                        </li>
                        <li class="active">
                            الوصول إلى المطار
                        </li>
                        <li class="active">
                            تسجيل الدخول المبكر
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="contact-us">
            <div class="container">
                <div class="title lg">
                    <h1>
                        <strong class="spl">
                            تسجيل الدخول المبكر
                        </strong>
                    </h1>
                </div>
                <div class="content">
                    <p>
                        يمكن للمسافرين الحصول على خدمة تسجيل الدخول المبكر وتخطي طوابير الإنتظار عند كاونترات تسجيل الدخول في مبنى T5. قم بزيارة موقع طيران الجزيرة السعودية للمزيد.
                    </p>
                </div>
            </div>
        </section>
        <section class="banner generic-banner">
            <div alt=" " class="banner-img" style="background-image:url(/images/early-check-in-landing-banner-ar.jpg)">
                <div class="container">
                    <div class="banner-txt-inner additional center">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container">
                    <p style="margin-top: 25px;">
                        استمتع برحلة مريحة وخالية من المتاعب مع خدمة تسجيل الدخول المبكر مقابل 1 دينار كويتي!
                        <br>
                        <br>
                        &nbsp;يمكنك الآن تسجيل حقائبك والحصول على تذكرة الصعود مع خدمة تسجيل الدخول المبكر من طيران الجزيرة Park&amp;Fly , بالقرب من مطار الكويت الدولي مقابل مبنى مطار الأميري. الخدمة متاحة من 12 حتى 36 ساعة قبل موعد إقلاع الرحلة.
                        <br>
                        &nbsp;
                        <br>
                        &nbsp;بمجرد الانتهاء من تسجيل الدخول المبكر يمكنك ببساطة المتابعة إلى قسم الهجرة عند وصولك إلى المبنى 5 بمدة ساعة على الأقل قبل رحلتك، اصطحب تذكرة الصعود معك وحقيبة اليد (أقصى وزن مسموح 7 كيلوغرام ).
                        <br>
                        &nbsp;
                        <br>
                        يرجى العلم:
                    </p>
                    <ul>
                        <li>
                            <p>
                                أوقات العمل: 7 صباحاً حتى 10 مساءً
                            </p>
                        </li>
                        <li>
                            <p>
                                يتم احتساب 1 دينار كويتي لكل مسافر، يتم دفعه أثناء عملية تسجيل الدخول
                            </p>
                        </li>
                        <li>
                            <p>
                                الدفع من خلال البطاقات الائتمانية
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <iframe allowfullscreen height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2010.9600403521467!2d47.9714803376324!3d29.249451656408986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9911f8caf659%3A0x4241d5c86c8b735b!2sJazeera%20Park%20%26%20Fly!5e0!3m2!1sar!2skw!4v1656325255264!5m2!1sar!2skw" style="border: 0;" width="100%">
                    </iframe>
                </div>
                <br>
                &nbsp;
            </div>
        </section>
    </main>

@endsection
