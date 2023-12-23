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
                            الوصول إلى المطار
                        </li>
                        <li class="active">
                            مبنى طيران الجزيرة T5
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
                            محطة الجزيرة 5
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                    <p style="opacity: 0; margin-bottom: 0px;">
                        dfdfdf
                    </p>
                </div>
            </div>
            <div alt class="banner-img last_banner" style="background-image:url(/images/jazeera-terminal-banner.jpg)">
                <div class="container">
                    <div class="banner-txt-inner additional center">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <p>
                        <br>
                        <br>
                    </p>
                    <p style="text-align: right;">
                        تم تصميم مبنى ركاب الجزيرة الجديد في مطار الكويت لتعزيز تجربة سفرك. يتضمن مبنى T5 على فريق لخدمة العملاء، أجهزة الخدمة الذاتية، السوق الحرة، مطاعم ومقاهي، خدمة الانترنت المجانية عند كل بوابة، والمزيد من الخدمات الأخرى.
                        <br>
                        <br>
                        شهد موسم ذروة السفر خلال الصيف ازدحامًا كبيرًا عبر مبنى ركاب طيران الجزيرة T5، الأمر الذي كان له أثر على تجربة العملاء في بعض الأحيان. واليوم، يسعدنا أن نعلن عن استكمال لعديد من التطورات لتحسين تجربة المسافرين مع طيران الجزيرة والتي تشمل:
                    </p>
                </div>
            </div>
        </section>
        <section class="things-to-do terminal-tab">
            <div class="custom-nav-tabs-filled">
                <div class="container">
                    <ul class="nav nav-tabs desk-top" role="tablist">
                        <li role="presentation">
                            <a aria-controls="touristAttractions" class="active" href="#touristAttractions" style="cursor:default">
                                معلومات أساسية
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content-wrap tint-fill">
                    <div class="container">
                        <div class="tab-content">
                            <!-- 1 -->
                            <div class="tab-pane active" id="touristAttractions" role="tabpanel">
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/terminal.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            الوصول إلى مبنى الجزيرة
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    توجّه إلى مبنى ركاب 5 بجوار مطار الكويت الدولي وتخطى الازدحام في المطار الرئيسي.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/security-check-gates-2.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            نقطة تفتيش أمنية واحدة
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    يحتوي المطار على نقطة تفتيش أمنية واحدة، و22 كاونتر لتسجيل الدخول وبوابات للصعود إلى الطائرة بشكل أسرع. يمكن للمسافرين إنهاء عملية تسجيل الدخول والوصول إلى بوابة الصعود إلى الطائرة في أقل من 10 دقائق!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/duty-free.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            السوق الحرّة ومحلات التسوق
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    تم تحسين السوق الحرة وإضافة خيارات عديدة من المنتجات والماركات للتسوق. يمكنك الآن شراء كل ما تحتاجه من العطور، الهدايا، الحلويات، ومنتجات التبغ قبل الصعود على الطائرة، بالإضافة إلى شراء احتياجات السفر من الصيدلية ومحل الالكترونيات الموجود في منطقة ما قبل الجوازات.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/food-outlets.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            المطاعم والكافيهات
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    تم افتتاح العديد من المطاعم والكافيهات للاستمتاع بها أثناء انتظار رحلتك، مثل كوستا كوفي، % &Delta;R&Delta;BIC&Delta;. وترقبوا المزيد.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/wifi2.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            خدمة الإنترنت المجانية
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    يمكن لجميع المسافرين الآن الاستفادة من خدمة الإنترنت المجانية عند جميع بوابات مبنى الجزيرة لمتابعة أعمالهم والبقاء على اتصال وجعل رحلتهم سهلة قدر الإمكان.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/early-check-in.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            تسجيل الدخول المبكر
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    يمكنك الآن الاستفادة من خدمة تسجيل الدخول المبكر في مبنى Park&amp;Fly من 36 إلى 12 ساعة قبل موعد الإقلاع.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/screen-shot-2019-06-18-at-1-57-35-pm.png">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            أجهزة تسجيل الدخول الذاتي
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    يمكنك استخدام أجهزة تسجيل الدخول الذاتيّة في المطار، وطباعة بطاقة الصعود إلى الطائرة، والحصول على بطاقات الأمتعة بسهولة. توجد هذه الأجهزة في الجسر الذي يصل بين موقف السيّارات والطابق الأوّل من مبنى الجزيرة.
                                                    <br>
                                                    <br>
                                                    يمكنك التوجّه إلى مكتب تسليم الحقائب في الطابق الأرضيّ بعد أن تنتهي من تسجيل الدخول وتثبيت البطاقات على أمتعتك بإحكام. أمّا إذا كنت تسافر دون أمتعة، فيمكنك تسجيل الدخول والتوجّه مباشرة إلى منطقة الجوازات.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/screen-shot-2019-06-18-at-2-05-53-pm.png">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            مواقف السيارات
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p style="text-align: right;">
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    يوجد موقف سيّارات مخصّص لمسافري طيران الجزيرة، وهو يتصل بواسطة جسر مع الطابق الأوّل من مبنى الجزيرة.
                                                </p>
                                                <p style="text-align: right;">
                                                    تكاليف مواقف السيارات هي كما يلي:
                                                    <br>
                                                    * 200 فلس للساعة الأولى أو جزء من الساعة
                                                    <br>
                                                    * 400 فلس لكل ساعة إضافية أو جزء من الساعة
                                                </p>
                                                <p style="text-align: right;">
                                                    تتوفر أيضًا خدمة صف السيارات (فاليه) في مبنى طيران الجزيرة، الموجود على الرصيف على يسار مدخل المبنى.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/transferdesk.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            مكتب الترانزيت
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    يقع مكتب الترانزيت الخاصّ بطيران الجزيرة في الطابق الأول بعد منطقة الوصول. ويقدّم هذا المكتب المساعدة اللازمة للمسافرين الذين لديهم رحلة ترانزيت.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/customer.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            مركز خدمة العملاء 24/7
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    تم افتتاح مركز خدمة العملاء في المكتب الرئيسي لطيران الجزيرة لمساعدة جميع الركاب على مدار الساعة.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-content-wrap white">
                                    <div class="plain-card">
                                        <div class="image-content">
                                            <div class="single-img">
                                                <img alt="Getting Here" class="lazyload" src="images/visa-1.jpg">
                                            </div>
                                        </div>
                                        <div class="image-content">
                                            <div class="single-desc">
                                                <div class="title">
                                                    <h3>
                                                        <strong class="spl">
                                                            مكتب التأشيرات
                                                        </strong>
                                                    </h3>
                                                </div>
                                                <p>
                                                    &nbsp;
                                                </p>
                                                <p style="text-align: right;">
                                                    يقع مكتب تأشيرات السفر في منطقة الوصول قبل منطقة الجوازات. إذا كنت تملك تأشيرة سفر (فيزا) أونلاين، يُرجى الحضور شخصيًّا إلى المكتب للحصول على النسخة الأصلية من التأشيرة. ستحتاج إلى جواز سفر صالح لمدّة تزيد عن 6 أشهر.
                                                    <br>
                                                    <br>
                                                    بناء على تعليمات من وزارة الداخلية، يمنح رعايا الدول الـ 53 التالية تأشيرة دخول إلى دولة الكويت عند وصولهم إلى المطار:
                                                    <br>
                                                    <br>
                                                    الولايات المتحدة الأمريكية - المملكة المتحدة - فرنسا - إيطاليا - ألمانيا - كندا - أستراليا - نيوزيلندا - اليابان - هولندا - بلجيكا - لوكسمبورغ - سويسرا - النمسا - السويد - النرويج - الدنمارك - البرتغال - اليونان - أيرلندا - فنلندا - إسبانيا - موناكو - الفاتيكان - أيسلندا - أندورا - سان مارينو - ليختنشتاين - بروناي - سنغافورة - ماليزيا - هونغ كونغ - كوريا الجنوبية - بوتان - بولندا - جورجيا - أوكرانيا - سلوفينيا - إستونيا - التشيك - تركيا - بلغاريا - رومانيا - قبرص - صربيا - سلوفاكيا - كمبوديا - لاتفيا - لاوس - ليتوانيا - مالطا - كرواتيا - هنغاريا.
                                                    <br>
                                                    <br>
                                                    شروط الحصول على التأشيرة عند الوصول:
                                                </p>
                                                <ul style="text-align: right;">
                                                    <li>
                                                        يجب أن يكون لدى جميع الركاب تذكرة عودة.
                                                    </li>
                                                    <li>
                                                        تحتفظ الجهات المعنية في دولة الكويت بالحق في رفض دخول أي شخص إلى البلاد دون إبداء أسباب.
                                                    </li>
                                                    <li>
                                                        يجب ألا يكون المسافر مدرجًا على القائمة السوداء في دولة الكويت.
                                                    </li>
                                                    <li>
                                                        يجب أن يحمل المسافر جواز سفر صالح لمدة تزيد عن 6 أشهر من تاريخ السفر إلى الكويت.
                                                    </li>
                                                    <li>
                                                        يجب على المسافر تسجيل عنوان إقامته في الكويت عند التقدم للحصول على التأشيرة في مكتب التأشيرات في المطار.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
