@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/ar-jo">
                                الصفحة الرئيسية
                            </a>
                        </li>
                        <li class="active">
                            سافر
                        </li>
                        <li class="active">
                            احجز
                        </li>
                        <li class="active">
                            خدمة الاستقبال والمساعدة
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
                            خدمة الاستقبال والمساعدة
                        </strong>
                    </h1>
                </div>
                <div class="content">
                    <p>
                        اكتشف المطارات التي تتوفر فيها خدمة طيران الجريرة الأردن للاستقبال و المساعدة لتقديم الخدمات الاستثنائية من لحظة دخولك إلى المطار حتى الوصول إلى وجهتك.
                    </p>
                </div>
            </div>
        </section>
        <section class="banner generic-banner">
            <div alt=" " class="banner-img" style="background-image:url(/images/meet-and-assist.jpg)">
                <div class="container">
                    <div class="banner-txt-inner additional center">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container">
                    <div style="margin: 60px 0;">
                        <p style="text-align: right;">
                            استكشف أدناه قائمة المطارات التي تتوفّر فيها هذه الخدمة.
                        </p>
                        &nbsp;
                        <div class="row">
                            <div class="col-md-5">
                                <!--- <div style="title">
                      <h3>Meet &amp; Assist</h3>
                      </div>
                      &nbsp; -->
                                <div class="form-field float-label-wrapper" data-select2-id="18">
                                    اختار المطاراختار المطاركويت (KWI)دبي صالة 1 (DXB)إسطنبول أتاتورك (IST)عمّان (AMM)القاهرة (CAI)شرم الشيخ (SSH)المدينة (MED)الدوحة (DOH)تبليسي (TBS)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                &nbsp;
            </div>
        </section>
    </main>

@endsection
