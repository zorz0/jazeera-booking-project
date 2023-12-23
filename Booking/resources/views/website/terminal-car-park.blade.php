@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                        <li class="active">سافر</li>
                        <li class="active">الوصول إلى المطار</li>
                        <li class="active">مواقف سيارات مبنى ركاب T5</li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="banner generic-banner">
            <div class="container">
                <div class="title lg">
                    <h1><strong class="spl">مواقف سيارات مبنى ركاب T5</strong></h1>
                </div>
                <div class="content baggage_class">



                </div>
            </div>

            <div class="">
                <div id="jazeeraTerminalCarParking" class="container"><br>تتوفر مواقف سيارات مخصصة للمسافرين عبر مبنى ركاب الجزيرة، إذ أنها متصلة بالمبنى عبر جسرٍ يصل إلى الطابق الأول. تكاليف مواقف السيارات هي كما يلي:<br><br>* 200 فلس للساعة الأولى أو جزء من الساعة<br>* 400 فلس لكل ساعة إضافية أو جزء من الساعة</div>


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
