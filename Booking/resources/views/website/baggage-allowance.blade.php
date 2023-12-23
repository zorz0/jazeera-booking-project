@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>

                        <li class="active">&#x633;&#x627;&#x641;&#x631;</li>
                        <li class="active">&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;
                            &#x627;&#x644;&#x633;&#x641;&#x631;</li>
                        <li class="active">&#x648;&#x632;&#x646; &#x627;&#x644;&#x62D;&#x642;&#x627;&#x626;&#x628;
                            &#x627;&#x644;&#x645;&#x633;&#x645;&#x648;&#x62D;</li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="banner generic-banner">
            <div class="container">
                <div class="title lg">
                    <h1><strong class="spl">&#x648;&#x632;&#x646; &#x627;&#x644;&#x62D;&#x642;&#x627;&#x626;&#x628;
                            &#x627;&#x644;&#x645;&#x633;&#x645;&#x648;&#x62D;</strong></h1>
                </div>
                <div class="content baggage_class">

                    <p>استعرض سياسة الأمتعة التي تم فحصها وحقائب اليد المفصلة أدناه لمعرفة المزيد حول مواصفات الوزن
                        والحجم.</p>
                    <p>خذ أكثر من الأمتعة المسموح بها عن طريق شراء أمتعة زائدة على موقعنا، أو في مكاتب التذاكر في
                        مطار الجزيرة، أو مركز الاتصال، أو عند تسجيل الوصول في المطار.</p>

                </div>
            </div>
            <div class="banner-img last_banner" style="background-image:url(/images/baggage-allowance.jpg)"
                 alt="">
                <div class="container">
                    <div class="banner-txt-inner additional center">
                    </div>
                </div>
            </div>

            <div class="">
                <div class="container" style="text-align: right;">
                    <h3 style="margin: 60px 0px 40px;">ستساعدك المعلومات التالية في تحديد عدد ووزن قطع الأمتعة التي
                        يُسمح لك بحملها أثناء رحلتك مع طيران الجزيرة. تختلف بدلات الأمتعة وفقًا للطريق وفئة المقصورة
                        / الأجرة. يرجى التحقق من لوائح الأمتعة الدقيقة المطبوعة على تأكيد الحجز للحصول على مزيد من
                        التفاصيل أو ؛ الاتصال ؛ مركز الاتصال الخاص بنا.</h3>
                </div>
                <div class="container">
                    <h3 style="text-align: right;"><a
                            href="/images/dg_prohibited-items_2019.pdf">قائمة
                            المواد المحظورة</a></h3>
                </div>
                <div class="container">
                    <div class="table-two-column-wrap">
                        <div class="table-two-column">
                            <div class="table-two-head">
                                <h3 style="text-align: right;">الأمتعة المسجلة المسموح بها</h3>
                            </div>
                            <div class="table-sm-two-wrap">
                                <div class="table-sm-two" style="width: 100%;">
                                    <div class="title" style="display: block; text-align: right;">
                                        <h4 style="direction: initial;">(الدرجة السياحية: لغاية 30 كجم)* الدرجة
                                            ‍السياحية</h4>
                                        <div> </div>
                                        <h4 style="color: #000;">* بحسب فئات الأسعار الجديدة</h4>

                                        <table border="1" cellspacing="1" cellpadding="1" style="width: 100%;">
                                            <tbody>
                                            <tr>
                                                <td
                                                    style="text-align: center; color: white; background-color: #40b4e5;">
                                                    Light</td>
                                                <td>
                                                    <p style="text-align: center;">غير متوفر</p>
                                                    <p style="text-align: center;">شراء وزن إضافي عند تسجيل
                                                        الصعود إلى الطائرة</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="text-align: center; color: white; background-color: #00a0df;">
                                                    Value</td>
                                                <td>
                                                    <p style="text-align: center;">20 كجم (قطعة واحدة)</p>
                                                    <p style="text-align: center;">يمكن شراء 10 كجم إضافية
                                                        مسبقاً عبر الموقع</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="text-align: center; color: white; background-color: #004a97;">
                                                    Extra</td>
                                                <td>
                                                    <p style="text-align: center;">30 كجم (قطعتان)</p>
                                                    <p style="text-align: center;">يمكن شراء 10 كجم إضافية
                                                        مسبقاً عبر الموقع</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="bullet-list">
                                <ul class="list">
                                    <li style="text-align: right;">
                                        <p>وفقًا للقوانين الدولية، لا يُسمح لك بحمل أي قطعة من حقائب تسجيل الوصول
                                            التي يزيد وزنها عن 32 كجم.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>المأكولات البحرية المجمدة واللحوم أو أي نوع آخر من المواد الغذائية يجب أن
                                            تكون ‍مختومة ‍بشكل صحيح في صناديق الجليد من النوع القباني قوي مع غلاف
                                            بلاستيكي.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>لأسباب أمنية، لا يُسمح بتجميع حقائب تسجيل الوصول مع ضيوف آخرين.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>لا يسمح بتسجيل دخول أمتعة الأطفال الرضع. ولكن، يُسمح للمسافرين الذين
                                            لديهم أطفال رضع بحمل قطعة إضافية من الأمتعة المحمولة لا تزيد عن 10 كج
                                            ولا يتجاوز حجمها كما هو مذكور من قبل.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>يجب ألا يتجاوز حجم الأمتعة المسجلة 158 سم لكل حقيبة.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>يجب ألا يتجاوز حجم الأمتعة المسجلة 158 سم لكل حقيبة</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>يمكن شراء أكياس إضافية فوق بدلك عند تسجيل الوصول.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-two-column">
                            <div class="table-two-head">
                                <h3 style="text-align: right;">الأمتعة المحمولة المسموح بها</h3>
                            </div>
                            <div class="table-sm-two-wrap" style="width: 100%; min-height: 100px;">
                                <div class="table-sm-two">
                                    <div class="title" style="display: block; text-align: right;">
                                        <h4>الدرجة السياحية 1 قطعة</h4>

                                        <h4 class="baggage_title">7 كجم الوزن الكلي</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="bullet-list">
                                <ul class="list">
                                    <li style="text-align: right;">
                                        <p>أبعاد الأمتعة المحمولة = 55 سم × 40 سم × 20 سم.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>المأكولات البحرية المجمدة واللحوم أو أي نوع آخر من المواد الغذائية يجب أن
                                            تكون مختومة ‍بشكل صحيح في صناديق الجليد من النوع القباني قوي مع غلاف
                                            بلاستيكي.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>يجب الإعلان عن جميع القطع المحمولة في عدادات تسجيل الوصول وخطوط طيران
                                            الجزيرة‍، ‍يجب إرفاق العلامات المحمولة على كل قطعة حمل.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>لا يسمح بتسجيل دخول أمتعة الأطفال الرضع. ولكن، يُسمح للمسافرين الذين
                                            لديهم أطفال رضع بحمل قطعة إضافية من الأمتعة المحمولة لا تزيد عن 10 كج
                                            ولا يتجاوز حجمها كما هو مذكور من قبل.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="table-two-column-wrap">
                        <div class="table-two-column">
                            <div class="table-sm-two-wrap">
                                <div class="table-sm-two"
                                     style="width: 100%; min-height: 100px; max-height: 200px;">
                                    <div class="title" style="display: block; text-align: right;">
                                        <h4 style="direction: initial;">درجة الأعمال (الرحلات من وإلى القاهرة فقط)
                                        </h4>
                                        <div> </div>
                                        <h4 style="color: #000;"> 60 كجم الوزن الكل</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="bullet-list">
                                <ul class="list">
                                    <li style="text-align: right;">
                                        <p>وفقا وفقا قوانين الطيران الدولية‍، ‍لا يمكنك تسجيل أي حقيبة تزن أكثر من
                                            32 كلغ.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>يسمح بتسجيل 3 قطعة من الحقائب لدرجة الأعمال.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>أبعاد القطع لا يمكن أن تتجاوز الـ 158 سم لكل حقيبة.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>الحقائب الاضافية فوق الحد المسموح لك به (وزن / قطعة / حجم ) يمكن شراؤها
                                            عند تسجيل الحقائب.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>المأكولات البحرية المجمدة‍، ‍اللحوم‍، ‍أو أي نوع آخر من المأكولات يجب
                                            تغليفها بشكل جيد بالبلاستيك‍، ‍و وضعها في صندوق ثلج من نوع igloo </p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>لأسباب أمنية‍، ‍لا يسمح بتسجيل الحقائب الجماعي مع ركاب آخرين.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>لا يتم احتساب وزن إضافي للأطفال عند تسجيل الحقائب.</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>المسافرين الذين لديهم أطفال يسمح لهم بحمل حقيبة يد إضافية بحد أقصى للوزن
                                            10 كلغ لدرجة الأعمال, و لا تتجاوز الحجم و الأبعاد المذكورة بالأعلى.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-two-column">
                            <div class="table-sm-two-wrap">
                                <div class="table-sm-two"
                                     style="width: 100%; min-height: 100px; max-height: 200px;">
                                    <div class="title" style="display: block; text-align: right;">
                                        <h4>درجة الأعمال (الرحلات من وإلى القاهرة فقط) قطعتين</h4>
                                        <div> </div>
                                        <h4 style="color: #000;">15 كجم الوزن الكلي</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="bullet-list">
                                <ul class="list">
                                    <li style="text-align: right;">
                                        <p>أبعاد الحقائب المسموح بحملها على متن الطائرة = 55 سم ×40 سم ×20 سم</p>
                                    </li>
                                    <li style="text-align: right;">
                                        <p>كل الحقائب المحمولة على متن الطائرة يجب الإعلان عنها عند مكتب تسجيل
                                            الوصول لطيران الجزيرة‍، ‍و يجب وضع بطاقات الحمل على متن الطائرة على كل
                                            من تلك الحقائب.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br />
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
