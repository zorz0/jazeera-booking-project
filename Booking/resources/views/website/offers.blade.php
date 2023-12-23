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
                            عروض
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
                            عروض
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                    <p>
                        تحقق من أحدث العروض والقسائم على تذاكر الجزيرة. استخدام رموز الترويجي وكوبونات للحجوزات الرحلة. احجز الآن لتوفير المزيد!
                    </p>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <p class="ar-offers1">
                        &nbsp;
                    </p>
                    <div class="row">
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
    </main>

@endsection
