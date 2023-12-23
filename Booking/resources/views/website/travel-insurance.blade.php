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
                            تأمين السفر
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
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                </div>
            </div>
            <div class="">
                <div id="insurance-div" style="margin-top: -15px;">
                    <img alt src="images/insurance-landing.jpg" width="100%">
                    <div class="white-section">
                        <div class="container" style="text-align: center;">
                            <p style="text-align: center; margin-bottom: 30px; margin-top: -20px;">
           <span class="icon-security" style="font-size: 70px; color: #004a97;">
            &nbsp;
           </span>
                            </p>
                            <p class="insu-title travel_insurance_class align-center">
                                قد يكون السفر مكلفًا وحافلًا بالمفاجآت في بعض الأحيان - ولهذا السبب نقدم لك راحة البال من خلال تأمين السفر والتأمين الصحيّ ذات المستوى العالمي من مجموعة الخليج للتأمين (GIG) ويوروب أسيستانس.
                            </p>
                        </div>
                    </div>
                    <div class="grey-section">
                        <div class="container">
                            <div class="flex-div">
                                <div class="flex-col-md-6 add-pad-bottom-m" style="text-align: center;">
                                    <img alt class="img-responsive" id="logos" src="/images/europe-assis-logo.png" width="100%">
                                </div>
                                <div class="flex-col-md-6">
                                    <p class="insu-title middle_para_insu align-left">
                                        <strong>
                                            تأمين السفر الرائد في العالم
                                        </strong>
                                    </p>
                                    <p class="text_travel_insu align-left">
                                        تعتبر Europ Assistance إحدى المؤسسات العالمية الرائدة في مجال تأمين السفر والمساعدة وهي جزء من مجموعة شركات Generali و GIG هي واحدة من أكبر شركات التأمين في الشرق الأوسط التي تخدم العملاء في الكويت وجميع أنحاء المنطقة.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="white-section">
                        <div class="container">
                            <div class="flex-div">
                                <div class="flex-col-md-8 add-pad-bottom-m">
                                    <img alt class="img-responsive" src="images/insurance-flow.png" width="100%">
                                </div>
                                <div class="flex-col-md-4">
                                    <p class="insu-title trav_insu align-left" style="line-height: 39px !important;">
                                        <strong>
                                            كيف يمكن الحصول عليه؟
                                        </strong>
                                    </p>
                                    <p class="text align-left">
                                        يمكن شراء تأمين السفر أونلاين عند إجراء الحجز أو بعده من خلال الانتقال إلى صفحة إدارة الحجز.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grey-section">
                        <div class="container">
                            <p class="insu-title last_para_insu align-center">
                                يرجى الرجوع إلى الروابط أدناه للحصول على مزيد من المعلومات.
                            </p>
                            <div class="flex-div">
                                <div class="flex-col-md-4">
                                    <div class="links-box">
                                        <p class="links-text">
                                            <a href="{{ route('travel-insurance') }}" rel="cononical">
                                                الأسئلة الشائعة
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-col-md-4">
                                    <div class="links-box">
                                        <p class="links-text">
                                            <a href="https://static.jazeeraairways.com/wisinsurance/Policy_Summary_Arabic.pdf?_ga=2.41202338.1072375165.1681905399-41150229.1681905399" rel="cononical">
                                                ملخص سياسة التأمين
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-col-md-4">
                                    <div class="links-box">
                                        <p class="links-text">
                                            <a href="https://static.jazeeraairways.com/wisinsurance/Jazeera_Policywording_Arabic.pdf?_ga=2.41202338.1072375165.1681905399-41150229.1681905399" rel="cononical">
                                                شروط وأحكام سياسة التأمين
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p class="small-note">
                                قد تختلف الشركات التي تكتتب وتخدم بوليصة التأمين من دولة إلى أخرى ، للحصول على تفاصيل كاملة عن ذلك ، يرجى الرجوع إلى شهادة التأمين ووثيقة التأمين الخاصة بك.
                            </p>
                        </div>
                    </div>
                    <div class="white-section">
                        &nbsp;
                    </div>
                    </img>
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
