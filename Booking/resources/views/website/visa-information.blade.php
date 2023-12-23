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
                            معلومات عن تأشيرات الدخول
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
                            معلومات عن تأشيرات الدخول
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                </div>
            </div>
            <div class="">
                <div class="container">
                    <br>
                    <p style="text-align: right;">
                        على جميع المسافرين التأكد من حملهم لوثائق السفر الملزمة والمعتمدة عند التسجيل للصعود للطائرة. يمكنكم تصفح قائمة الوثائق ومنها جواز السفر وتأشيرة الدخول بحسب الدول التي تقوم بزيارتها وذلك بالضغط على الروابط أدناه.
                    </p>
                    <p style="text-align: right;">
                        طيران الجزيرة غير مسؤولة عن أي ارباك، تأخير أو إلغاء ناجم عن عدم توفير المسافر للوثائق الملزمة والصحيحة.
                    </p>
                    <ul class="fa-ul">
                        <!-- <li style="padding-bottom: 25px;">
                                    <span class="fa-li fa flag-icon flag-icon-at"></span><a href="https://www.bmeia.gv.at/en/travel-stay/entry-and-residence-in-austria/entrance-and-residence/visa/" target="_blank">النمسا</a>
                                    </li> -->
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-az" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://evisa.gov.az/en/" rel="noopener" target="_blank">
                                أذربيجان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-jo" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://international.visitjordan.com/page/4/VisasToJordan.aspx" rel="noopener" target="_blank">
                                الأردن
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-al" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://e-visa.al/" rel="noopener" target="_blank">
                                ألبانيا
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-ae" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://u.ae/en/information-and-services/visa-and-emirates-id/do-you-need-an-entry-permit-or-a-visa-to-enter-the-uae" rel="noopener" target="_blank">
                                الإمارات العربية المتحدة
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-uz" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://e-visa.gov.uz/main" rel="noopener" target="_blank">
                                أوزبكستان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-ir" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://evisa.mfa.ir/en/" rel="noopener" target="_blank">
                                إيران
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-pk" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://visa.nadra.gov.pk/tourist-visa/" rel="noopener" target="_blank">
                                باكستان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-bh" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.evisa.gov.bh/VISA/visaInput" rel="noopener" target="_blank">
                                البحرين
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-bd" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.visa.gov.bd/" rel="canonical">
                                بنغلاديش
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-ba" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="http://msb.gov.ba/inf_za_strance/default.aspx?id=14555&amp;langTag=en-US" rel="noopener" target="_blank">
                                البوسنة والهرسك
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-tr" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.evisa.gov.tr/en/" rel="noopener" target="_blank">
                                تركيا
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-cz" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.mzv.cz/jnp/en/information_for_aliens/types_of_visas/index.html" rel="noopener" target="_blank">
                                جمهورية التشيك
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-om" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://evisa.rop.gov.om/en/home" rel="noopener" target="_blank">
                                سلطنة عمان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-lk" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="http://www.immigration.gov.lk/web/index.php?option=com_content&amp;view=article&amp;id=151&amp;Itemid=196&amp;lang=en" rel="noopener" target="_blank">
                                سيريلانكا
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-tj" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.visa.gov.tj/index.html" rel="noopener" target="_blank">
                                طاجيكستان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-iq" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.mofa.gov.iq/visa" rel="noopener" target="_blank">
                                العراق
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-qa" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.visitqatar.qa/en/plan-your-trip/visas" rel="noopener" target="_blank">
                                قطر
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-kg" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.evisa.e-gov.kg/step_1.php" rel="noopener" target="_blank">
                                قيرغيزستان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-kz" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.vmp.gov.kz/en" rel="noopener" target="_blank">
                                كازاخستان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-kw" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://evisa.moi.gov.kw/evisa/home_e.do" rel="noopener" target="_blank">
                                الكويت
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-lb" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.general-security.gov.lb/en/posts/38" rel="noopener" target="_blank">
                                لبنان
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-eg" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://visa2egypt.gov.eg/eVisa/Home;jsessionid=1ngCdGp1XZzBDqBEGIzBdUEpr_l9XTEB-3hCyuOh.pp-ui-02?VISTK=6LH7-2LZ8-Q34R-U332-LAUV-PVFR-IAO5-VFT3-AWOX-H98W-4GLJ-1THI-IBK8-037J-7KYC-S074" rel="noopener" target="_blank">
                                مصر
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-mv" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://www.gov.mv/en/publications/maldives-visa" rel="noopener" target="_blank">
                                الملديف
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-sa" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://visa.visitsaudi.com/" rel="noopener" target="_blank">
                                المملكة العربية السعودية
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-np" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://mofa.gov.np/visa-information/" rel="noopener" target="_blank">
                                نيبال
                            </a>
                        </li>
                        <!-- <li style="padding-bottom: 25px;">
                                    <span class="fa-li fa flag-icon flag-icon-ua"></span><a href="https://mfa.gov.ua/en/consular-affairs/entry-and-stay-foreigners-ukraine/entry-regime-ukraine-foreign-citizens" target="_blank">أوكرانيا</a>
                                    </li> -->
                        <!--<li style="padding-bottom: 25px;">
                                    <span class="fa-li fa flag-icon flag-icon-gb"></span><a href="https://www.gov.uk/check-uk-visa" target="_blank">المملكة المتحدة</a>
                                    </li>-->
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-rs" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://mfa.gov.rs/en/citizens/travel-serbia/visa-requirements" rel="noopener" target="_blank">
                                صربيا
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-me" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://evisa-montenegro.com/" rel="noopener" target="_blank">
                                مونتينيغرو
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-cy" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://mfa.gov.cy/visa-information.html" rel="noopener" target="_blank">
                                قبرص
                            </a>
                        </li>
                        <li style="padding-bottom: 25px;">
              <span class="fa-li fa flag-icon flag-icon-in" style="right: -2em; position: absolute; width: 2em; line-height: inherit;">
              </span>
                            <a href="https://indianvisaonline.gov.in/" rel="noopener" target="_blank">
                                الهند
                            </a>
                            <p style="text-align: center;">
                                &nbsp;
                            </p>
                        </li>
                    </ul>
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
