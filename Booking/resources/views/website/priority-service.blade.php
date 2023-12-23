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
                            احجز
                        </li>
                        <li class="active">
                            خدمة الأولوية
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
                            خدمة الأولوية
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                </div>
            </div>
            <div alt class="banner-img last_banner" style="background-image:url(/images/priority-serrvice-landing-page-ar.jpg)">
                <div class="container">
                    <div class="banner-txt-inner additional center">
                    </div>
                </div>
            </div>
            <div class="">
                <p>
                    <br>
                    <br>
                    &nbsp;
                </p>
                <div class="container" style="margin-top: -20px;">
                    <p>
                        نوفّر لكم خدمة الأولوية الجديدة التي تخدّم الركاب الذين يبحثون عن خدمة أسرع عند السفر. عند شراء خدمة أولوية مع طيران الجزيرة، سوف تحصل على المزايا التالية:
                    </p>
                    <div class="bullet-list" style="text-align: right;">
                        <ul class="list">
                            <li style="text-align: right;">
                                <strong>
                                    أولوية التسجيل لصعود الطائرة في المطار:
                                </strong>
                                <p>
                                    يتم تخصيص كاونترات خاصة للأولوية لتسجيلك بسرعة.
                                </p>
                            </li>
                            <li style="text-align: right;">
                                <strong>
                                    أولوية الحصول على حقائبك
                                </strong>
                                :
                                <p>
                                    يتم وضع علامة الأولوية على حقائبك ليتم تسليمها أولاً على سير الحقائب عند الوصول.
                                </p>
                            </li>
                            <li style="text-align: right;">
                                <strong>
                                    أولوية الصعود على متن الطائرة:
                                </strong>
                                <p>
                                    عند بوابة الصعود، يمكنك استخدام صف الأولوية إذ يتم دعوة ركاب الأولوية إلى صعود الطائرة أولاً أو الحافلة في حالة المغادرة من البوابة السفلية في مبنى ركاب الجزيرة T5 في مطار الكويت الدولي.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <h4 class="title">
                        السعر:
                    </h4>
                    <p>
                        للرحلة بالاتجاه الواحد: 10 دينار كويتي (أو ما يعادلها بالعملة المحلية)
                    </p>
                    &nbsp;
                    <p>
                        للرحلات المتواصلة : 15 دينار كويتي (أو ما يعادلها بالعملة المحلية)
                    </p>
                    <p>
                        جميع الركاب الذين يقومون بشراء خدمة الأولوية يحصلون على كلمة PRIORITY على بطاقة الصعود إلى الطائرة.
                    </p>
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
    </main>



@endsection
