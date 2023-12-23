@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            سافر
                        </li>
                        <li class="active">
                            معلومات السفر
                        </li>
                        <li class="active">
                            السفر مع الحيوانات
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
                            السفر مع الحيوانات
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                </div>
            </div>
            <div class="">
                <div id="travelling-with-animals-cms-ar">
                    <div class="container LiveAnimalsDesktop">
                        <div class="row clearfix" style="margin-bottom: 40px;">
                            <div class="column" style="padding-right: 0; padding-left: 0;">
                                <div class="umb-inner-page-about-vismis-p1" style="background: #004A97; height: 296px; padding: 80px 15px 0px 10px; color: white !important;">
                                    <h2 style="color: white !important;">
                                        نقل الحيوانات الحية على متن الطائرة
                                    </h2>
                                    <p style="color: white !important;">
                                        تلتزم طيران الجزيرة بضمان سلامة وراحة جميع ركابنا ولهذا السبب نرحب بحيواناتكم الأليفة على متن رحلاتكم القادمة. نرحب بالصقور الأليفة وكلاب الإرشاد لمساعدة المسافرين من ذوي الاحتياجات الخاصة. يرجى مراجعة الشروط والمتطلبات والتأكد من أن لديكم الشهادات والمستندات اللازمة لسفر حيواناتكم الأليفة معكم بكل سلاسة.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 column" style="padding-right: 0; padding-left: 0;">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row clearfix" style="margin-bottom: 40px;">
                            <div class="col-md-8 column" style="padding-right: 0; padding-left: 0;">
                                <div class="umb-inner-page-about-vismis-p1" style="background: #004A97; height: auto; padding: 10px 15px 0px 10px; color: white !important;">
                                    <h2 style="color: white !important;">
                                        الصقور:
                                    </h2>
                                    <p style="color: white !important;">
                                        ووفرنا لكم الإرشادات الرئيسية التي يجب اتباعها حرصاً على أن تكون رحلتكم القادمة سلسة:
                                    </p>
                                    <ol>
                                        <li>
                                            يقوم موظفو طيران الجزيرة بالتحقق من جميع المستندات المطلوبة في مرحلة الحجز، وسيتم رفض نقل الصقر في حالة عدم استيفاء المتطلبات.
                                        </li>
                                        <li>
                                            على الحيوان أن يكون:
                                            <ol style="list-style-type: lower-alpha;">
                                                <li>
                                                    نظيفاً وبصحة وغير مؤذٍ ولا تفوح رائحته
                                                </li>
                                                <li>
                                                    ألا يكون حامل
                                                </li>
                                                <li>
                                                    ألا يزعج الركاب الآخرين
                                                </li>
                                            </ol>
                                        </li>
                                        <li>
                                            يجب أن تكون الصقور مصحوبة بشهادات صحية سارية المفعول وتصاريح الدخول المعروفة باسم Falcon Passport &nbsp;المطلوبة من قبل دول الوجهة أو للعبور، إن يطبق الأمر.
                                        </li>
                                        <li>
                                            المالك / المدرّب المرافق مسؤول عن توفير الطعام والماء للحيوان. يرجى توخي الحذر لضمان عدم ملئ حاويات الطعام والماء حتى لا تنسكب في المقصورة.
                                        </li>
                                        <li>
                                            يمكن قبول 5 صقور كحد أقصى في المقصورة للنقل مع مدرّب واحد (صقر واحد على ذراع المدرّب وصقران لكل مقعد فارغ).
                                        </li>
                                        <li>
                                            يجب ربط سلسلة بساق الصقر، ويجب تثبيت الطرف الآخر من السلسلة بإحكام على المدرّب أو مقعد الطائرة من أجل منع الصقر من الطيران في المقصورة. يمكن أن يكون الصقر على وكر يتم وضعه على المقعد ويتم تأمين بإحكام إلى المقعد بواسطة سلسلة. على المدرّب حمل الوكر وألا يُسمح يتكون عائقاً لحركة الركاب داخل الطائرة في حالة الطوارئ.
                                        </li>
                                        <li>
                                            قد يتم رفض نقل الصقر داخل المقصورة إذا كان يشكل تهديداً أو خطراً على سلامة الركاب.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-4 column" style="padding-right: 0; padding-left: 0;">
                                <div class="liveAnimalsImage" style="background-image: url('/images/animals-on-board-images-620x349-4.jpg');">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix" style="margin-bottom: 40px;">
                            <div class="col-md-8 column" style="padding-right: 0; padding-left: 0;">
                                <div class="umb-inner-page-about-vismis-p1" style="background: #004A97; height: 296px; padding: 10px 15px 0px 10px; color: white !important;">
                                    <h2 style="color: white !important;">
                                        الصقور الصغيرة:
                                    </h2>
                                    <ol>
                                        <li>
                                            أبعاد القفص محددة لتناسب المقعد، وعليها أن تكون 48 سم &times; 58 سم &times; 70 سم.
                                        </li>
                                        <li>
                                            لا يوجد حد لعدد الصقور الصغيرة التي يمكن نقلها بشرط أن تكون في أقفاص. يجب أن تكون هذه الصقور داخل القفص بالكامل بما في ذلك رأسها وذيلها وطوال مدة الرحلة. يجب أن يكون القفص مغلق في جميع الأوقات.
                                        </li>
                                        <li>
                                            الحد الأقصى 2 قفص لكل راكب.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-4 column" style="padding-right: 0; padding-left: 0;">
                                <div class="liveAnimalsImage" style="background-image: url('/images/animals-on-board-images-620x349-2.jpg');">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix" style="margin-bottom: 40px;">
                            <div class="col-md-8 column" style="padding-right: 0; padding-left: 0;">
                                <div class="umb-inner-page-about-vismis-p1" style="background: #004A97; height: 296px; padding: 10px 15px 0px 10px; color: white !important;">
                                    <h2 style="color: white !important;">
                                        كلاب الإرشاد&nbsp;
                                    </h2>
                                    <p style="color: white !important;">
                                        يجوز فقط لكلاب الإرشاد المدرّبة والمرافقة للراكب الصم أو المكفوف مرافقو الراكب على متن الرحلة. ولا يُسمح بوجود أي حيوان خدمة آخر في مقصورة الركاب في الوقت الحالي. الشروط العامة لقبول هذه الكلاب هي كما يلي:
                                    </p>
                                    <ol>
                                        <li>
                                            يتم قبول كلاب الإرشاد مجاناً بغض النظر عن الوزن والحجم.
                                        </li>
                                        <li>
                                            يجب ألا يشكل كلب الإرشاد أي تهديد مباشر على صحة وسلامة الركاب الآخرين في المقصورة.
                                        </li>
                                        <li>
                                            يجب ألا يشكل الكلب خطراً من حدوث أي اضطراب في المقصورة خلال مدة الرحلة.
                                        </li>
                                        <li>
                                            يجب وضع سرج أو تقييدها بأي طريقة أخرى.
                                        </li>
                                        <li>
                                            لا يجوز تجوّل الكلب في المقصورة.
                                        </li>
                                        <li>
                                            قد يتم رفض نقل كلب الإرشاد في المقصورة إذا كان يشكل تهديداً على سلامة الركاب الآخرين ولا يمكن السيطرة عليه.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-4 column" style="padding-right: 0; padding-left: 0;">
                                <div class="liveAnimalsImage" style="background-image: url('/images/animals-on-board-images-620x349-1.jpg');">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                        <p style="text-align: center;">
                            <strong>
                                يجب الحجز لنقل حيوان أليف مسبقاً من خلال التواصل مع مركز خدمة العملاء على الرقم 177.
                            </strong>
                            <br>
                            نتطلع إلى خدمتكم وخدمة حيواناتكم الأليفة المرافقة على متن رحلاتنا!
                        </p>
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
