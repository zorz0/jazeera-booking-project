@extends('website.layout.app' , [
    'green'=>1
])


@section('head')
    <style>
        footer ul.footer-menu li a strong {
            color: #127a45;
        }

        .breadcrumb-wrap ol.breadcrumb {
            color: #127a45;
        }
        .title .spl {
            color: #127a45;
        }
        .banner-txt-inner additional h2{
            color: #127a45;
        }
        a, a:focus, a:hover {
            color: #127a45;
        }
        .banner-txt-inner p {
            color: #000;
        }
        .banner-txt-inner {
            background-color: #fff;
            opacity: 0.9;
            padding: 15px;
        }
        h2 {
            color: #127a45;
        }
        .banner-img {
            background-size: 100%;
            background-repeat: no-repeat;
            min-height: 400px;
        }
        .stickyfooter-choose h4{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        header .header-inner .main-nav>li .sub-menu{
            background: #127a45 !important;
        }
        #dountryDropdownCountry.btn.btn-dropdown .options.active{
            color:#127a45 !important;
        }

        footer {
            margin-bottom: 5% !important;
        }
        #myNavbar.show{
            background: #127a45 !important;
        }
    </style>

@endsection



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
                            بصمتك الكربونية
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="contact-us">
            <div class="container">
                <div class="title lg">
                    <h1 class="carbon_page" style="font-size:20px !important;">
                        <strong class="spl" style="color:#127a45 !important;">
                            بصمتك الكربونية
                        </strong>
                    </h1>
                </div>
                <div class="content">
                    <p>
                    </p>
                </div>
            </div>
        </section>
        <div class="banner-img" style="background-image: url('https://static.jazeeras.com/jazeera/media/english/header-banner.jpg');">
            <div class="container" style="padding-top: 5%;">
                <div class="carbon-banner-text">
                    <div class="col-md-4 col-sm-6 col-xs-12 banner-txt-inner additional">
                        <h2 style="text-align: right; font-size: 19px !important; font-weight: 400 !important;">
                            عوّض انبعاثاتك الكربونية خلال السفر مع طيران الجزيرة
                        </h2>
                        <p style="text-align: right;">
                            قمنا بالتعاون مع منظمة &trade;CHOOOSE العالمية المختصة في إدارة المشاريع البيئية، وذلك لتمكينك من اتخاذ الخطوة الإيجابية نحو تقليل تأثير بصمتك الكربونية على البيئة من خلال دعم المشاريع البيئة عبر الدول التي تخدمها طيران الجزيرة.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 10px;">
            <h2 style="color: #55565a; text-align: center;">
                عوض بصمتك الكربونية خلال السفر
            </h2>
            <p style="text-align: center;">
                أدخل معلومات رحلتك لحسابة الانبعاثات الكربونية منها ومعرفة كيفية تعويضها أثناء رحلتك
            </p>
        </div>
        <p>
            <iframe frameborder="0" scrolling="no" src="https://jazeeraairways.chooose.today/jazeera-offset-embed" width="100%">
            </iframe>
        </p>
        <div>
            <p style="text-align: center;">
                قبل رحلتك القادمة مع طيران الجزيرة، ستتمكّن من إضافة خيار شراء "رصيد تعويض الانبعاث الكربوني" وتعويض بصمتك الكربونية عبر اختيار هذه الخدمة تحت قسم إضافات السفر.
            </p>
            <h3 style="color: #55565a; text-align: center; font-weight: 600;">
                هذه هيالمشاريع البيئية التي تدعمها
            </h3>
            <p style="text-align: center;">
                اضغط على الخريطة لمعرفة المزيد عن كل مشروع
            </p>
        </div>
        <p>
            <iframe frameborder="0" scrolling="no" src="https://jazeeraairways.chooose.today/jazeera-projects-embed" width="100%">
            </iframe>
        </p>
        <div class="jazeera-carbon-faq">
            <h3 style="text-align: center; background-color: #127a45; color: #ffffff !important;">
                كيف تعمل خدمة تعويض البصمة الكربونية؟
            </h3>
            <iframe frameborder="0" scrolling="no" src="https://jazeeraairways.chooose.today/jazeera-faq-embed" width="100%">
            </iframe>
        </div>
        <div class="stickyfooter-choose" style="position: fixed; left: 0; bottom: 0; width: 100%; color: #ffffff; text-align: center;">
            <iframe frameborder="0" height="75" scrolling="no" src="https://counter.chooose.today/?variantColor=pine&amp;variant=slim&amp;unit=kg&amp;equivalent=avocado&amp;partnershipId=6155c739ffd50a3454476235" width="100%">
            </iframe>
        </div>
        <style>
            footer ul.footer-menu li a strong {
                color: #127a45;
            }

            .breadcrumb-wrap ol.breadcrumb {
                color: #127a45;
            }
            .title .spl {
                color: #127a45;
            }
            .banner-txt-inner additional h2{
                color: #127a45;
            }
            a, a:focus, a:hover {
                color: #127a45;
            }
            .banner-txt-inner p {
                color: #000;
            }
            .banner-txt-inner {
                background-color: #fff;
                opacity: 0.9;
                padding: 15px;
            }
            h2 {
                color: #127a45;
            }
            .banner-img {
                background-size: 100%;
                background-repeat: no-repeat;
                min-height: 400px;
            }
            .stickyfooter-choose h4{
                padding-top: 20px;
                padding-bottom: 20px;
            }
            header .header-inner .main-nav>li .sub-menu{
                background: #127a45 !important;
            }
            #dountryDropdownCountry.btn.btn-dropdown .options.active{
                color:#127a45 !important;
            }

            footer {
                margin-bottom: 5% !important;
            }
            #myNavbar.show{
                background: #127a45 !important;
            }
        </style>
        <script type="text/javascript">
            window.addEventListener('message', function (e) {
                if (e.data && e.data.type === 'offset-page') {
                    const el = document.querySelector('iframe[src*="' + e.data.pageUrl + '"]');
                    if (el) {
                        el.style.height = e.data.height;
                    }
                }
            });
            $(document).ready(function () {
                $(".breadcrumb-wrap a").removeAttr("href");
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
