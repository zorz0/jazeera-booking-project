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
                            استكشف
                        </li>
                        <li class="active">
                            عن رحلتك
                        </li>
                        <li class="active">
                            مقعد مزدوج جديد.
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="banner generic-banner">
            <div class="container">
                <div class="title lg">
                    <h1>
                        <strong class="spl">
                            مقعد مزدوج جديد.
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                    <p style="margin-top: 15px;">
                        احجز مقعداً بجوارك للسفر بكل راحة واسترخاء.
                    </p>
                </div>
            </div>
            <div alt class="banner-img last_banner" style="background-image:url(/images/jezeera-duoseat-pageheader-arabic-1.jpg)">
                <div class="container">
                    <div class="banner-txt-inner additional center">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <h4 style="margin-top: 35px; margin-bottom: 35px;">
                        المقعد المزدوج هو خدمة جديدة يقدمها لك طيران الجزيرة. حيث يمكنك الآن حجز المقعد المجاور لمقعدك لإبقائه خالياً خلال فترة الرحلة، لتتمتع بمزيد من الراحة والاسترخاء.
                    </h4>
                    <hr>
                    <div class="image-content-wrap" style="padding-bottom: 15px;">
                        <div class="image-content">
                            <br>
                            <img alt src="https://static.jazeeras.com/jazeera/media/english/duo-seat.png">
                        </div>
                        <div class="image-content">
                            <h3 style="text-align: right;">
                                طريقة الحجز
                            </h3>
                            <p>
                                لحجز مقعد مزدوج، قم ببساطة بإضافة خيار مقعد مزدوج من قائمة الركاب عند قيامك بالحجز لراكب بالغ أو طفل. وذلك في لوحة البحث عن رحلات في الصفحة الرئيسية.
                                <br>
                                <br>
                                لن تتجاوز أسعار المقاعد المزدوجة أكثر من ٧٠٪ من سعر المقعد الأساسي من دون ضريبة مما يجعلها خياراً مناسباً للجميع.
                                <br>
                                <br>
                                يمكنك اختيار المقعد الأساسي والمقعد المزدوج المجاور من صفحة خريطة المقاعد خلال عملية الحجز، وذلك بالضغط على اختيار مقعد في صفحة اختيار الإضافات.
                                <br>
                                <strong>
                                    إذا كنت قد قمت بالحجز من قبل، يمكنك دوماً الاستفسار عن توافر مقعد مزدوج باتصالك على الرقم 177.
                                </strong>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div style="text-align: center;">
                        <br>
                        تأكد من أنك قرأت الشروط والأحكام قبل الحجز
                        <br>
                        <a href="https://static.jazeeraairways.com/jazeera/media/english/duo-seat-terms-and-conditions-(ar).pdf" rel="noopener" target="_blank">
                            الشروط والأحكام
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('.challange').click(function () {
                var val = $(this)[0].children[0].innerText;
                dataLayer.push({
                    'event': 'ctaClick',
                    'ctaName': 'career select',
                    'productName': val,
                    'section': 'carrers',
                    'userType': document.cookie.includes("agent_dashboardCookie") ? 'agent' : document.cookie.includes("loggedInUser") ? 'member' : 'guest',
                    'language': window.location.href.indexOf('/ar-') > 0 ? 'ar' : 'en',
                    'country': localStorage.pageCountry.toUpperCase(),
                    'channel': 'Web',
                    'pos': 'J9WEB'
                });
            })
        </script>
        <script>
            $('.challange').click(function () {
                var val = $(this)[0].children[0].innerText;
                dataLayer.push({
                    'event': 'ctaClick',
                    'ctaName': 'career select',
                    'productName': val,
                    'section': 'carrers',
                    'userType': document.cookie.includes("agent_dashboardCookie") ? 'agent' : document.cookie.includes("loggedInUser") ? 'member' : 'guest',
                    'language': window.location.href.indexOf('/ar-') > 0 ? 'ar' : 'en',
                    'country': localStorage.pageCountry.toUpperCase(),
                    'channel': 'Web',
                    'pos': 'J9WEB'
                });
            })
        </script>
    </main>

@endsection
