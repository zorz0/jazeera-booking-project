@extends('website.layout.app')

@section('content')
    <main>
        <section class="faq" id="faq">
            <div class="container">
                <div class="title lg">
                    <h1>
                        <strong class="spl">
                            الأسئلة الشائعة
                        </strong>
                    </h1>
                </div>
                <div class="content">
                    <p>
                    <p>
                        هل لديك أسئلة أو استفسارات؟ نقدّم في هذه الصفحة جميع المعلومات التي تحتاج لها من سياسة الحقائب
                        إلى إدارة الحجز وكافة تفاصيل رحلتك حتى تستمتع بتجربة سفر سلسلة مع طيران الجزيرة.
                    </p>
                    </p>
                </div>
                <div class="search-bar-block">
                    <form>
                        <div class="search-area-grp">
                            <div class="form-field">
                                <input autocomplete="false" class="form-control" id="whatCanwehelp" name="whatCanwehelp"
                                       placeholder="What can we help you with today?" type="text" value>
                            </div>
                            <button class="btn btn-primary" id="btnSearch" name="btnSearch" onclick="searchFaq()"
                                    type="button">
                                <b>
                                    Search
                                </b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>


        @include('website.components.faq-card-list')


        <div class="مساعدة-خاصة clsFaqMianDiv">
            <div class="container">
                <div class="title between-top">
                    <h2>
                        <strong class="spl">
                            <i class="icon-exclamation">
                            </i>
                            مساعدة خاصة
                        </strong>
                    </h2>
                </div>
                <div class="plain-content">
                    <p>
                    <p>
                        تسعى طيران الجزيرة على الدوام لتلبية كافّة الاحتياجات الخاصّة لجميع المسافرين.
                    </p>
                    <p>
                        ندعوك للاطّلاع على دليل المساعدة الخاصة التي تقدمها خطوط طيران الجزيرة. كما يمكنك التواصل مع
                        مكتب طيران الجزيرة في منطقتك أو مع قسم خدمة العملاء إذا لم تجد الإجابة على كافة تساؤلاتك في
                        الدليل.
                    </p>
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-accordian">
                            <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="heading-1" role="tab">
                                        <div class="panel-title">
                                            <a aria-controls="collapse1" aria-expanded="false"
                                               class="collapsed clsQuestion1 new_clsCollapse1" data-parent="#accordion"
                                               data-toggle="collapse" id="clsCollapse1" role="button">
                                                <p>
                                                    كيف أطلب كرسيًّا متحرّكًا؟
                                                </p>
                                                <span>
               <i class="icon icon-arrow-down">
               </i>
              </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div aria-labelledby="heading-1" class="clsCollapse1 clsAnswer1" role="tabpanel">
                                        <p style="text-align: right;">
                                            إذا كان الشخص المسافر أو أحد أفراد مجموعته بحاجة إلى كرسيّ متحرّك بداخل مطار
                                            جزيرة
                                            <span>
              T5
             </span>
                                            فيرجى إعلامنا بذلك وقت حجز التذكرة أو قبل 48 ساعة على الأقلّ من موعد الرحلة.
                                            وتُطبّق الرسوم الخاصّة بهذه الخدمة كما هو موضّح في الأسفل
                                            <span>
              .
             </span>
                                        </p>
                                        <div style="text-align: right;">
                                            &nbsp;
                                        </div>
                                        <p style="text-align: right;">
                                            يمكنك أن تستخدم الكرسيّ المتحرّك الخاصّ بك أو جهاز المساعدة على الحركة حسبما
                                            هو مسموح، ولكن قد يتمّ استخدام كرسي متحرّك آخر لنقلك إلى الطائرة
                                            <span>
              .
             </span>
                                            تُقبل الكراسي المتحرّكة وأجهزة المساعدة على الحركة كأمتعة مُسجّلة وتُحفظ في
                                            مستودع الطائرة، ولا تقبل طيران الجزيرة نقل الأجهزة التي تحتوي على بطّاريّات
                                            تالفة أو متآكلة
                                            <span>
              .
             </span>
                                            <br>
                                            &nbsp;
                                            <br>
                                            الرجاء تقديم تفاصيل وافية عن الكرسي المتحرّك/جهاز المساعدة على الحركة
                                            والبطّاريّات (في حال وجودها) لفريق الخدمة قبل السفر، لكي يتمكّن الفريق من
                                            تقديم المساعدة الأفضل إضافةً إلى اتّخاذ إجراءات السلامة المناسبة
                                            <br>
                                            &nbsp;
                                            <br>
                                            تكلفة الخدمة للشخص الواحد لكلّ منطقة:
                                            <span>
              KWD 15
             </span>
                                            <br>
                                            تكلفة النقل للشخص الواحد إلى الوجهة النهائيّة:
                                            <span>
              KWD 15
             </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="heading-1" role="tab">
                                        <div class="panel-title">
                                            <a aria-controls="collapse1" aria-expanded="false"
                                               class="collapsed clsQuestion1 new_clsCollapse2" data-parent="#accordion"
                                               data-toggle="collapse" id="clsCollapse2" role="button">
                                                <p>
                                                    هل يحتاج الأطفال الرضّع إلى مقعدٍ خاصّ أم يمكنهم الجلوس في حضن
                                                    والديهم؟
                                                </p>
                                                <span>
               <i class="icon icon-arrow-down">
               </i>
              </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div aria-labelledby="heading-1" class="clsCollapse2 clsAnswer1" role="tabpanel"
                                         style="display:none">
                                        <p style="text-align: right;">
                                            يُعتبر أيّ طفل يتراوح عمره بين 14 يومًا وعامين بمثابة رضيع، ويمكنه السفر في
                                            حضن والديه. ويجب تقديم وثيقة ميلاد الطفل للتحقّق من عمره
                                            <br>
                                            يستطيع كلّ مسافر بالغ (أكثر من 18 عامًا) أن يحمل طفلًا رضيعًا واحدًا فقط في
                                            حضنه/حضنها، ويخضع ذلك لرسوم معيّنة. ولكن يجب حجز مقعد آخر بالتعرفة الكاملة
                                            في حال وجود رضيعٍ ثانٍ، على أن يحضر الشخص البالغ المقعد المُعتمد الخاصّ
                                            بالطفل. وفي حال عدم وجود هذا المقعد، فلن يتمّ السماح للمسافرين المعنيين
                                            بركوب الطائرة في منفذ تسجيل الوصول
                                            <span>
              .
             </span>
                                            لا يجوز نقل أمتعة مسجّلة أو في المقصورة على الحجز المسجّل باسم الطفل الرضيع
                                            <span>
              .
             </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="heading-1" role="tab">
                                        <div class="panel-title">
                                            <a aria-controls="collapse1" aria-expanded="false"
                                               class="collapsed clsQuestion1 new_clsCollapse3" data-parent="#accordion"
                                               data-toggle="collapse" id="clsCollapse3" role="button">
                                                <p>
                                                    كيف تقومون برعاية الأشخاص الذين يعانون من ضعف حسيّ؟
                                                </p>
                                                <span>
               <i class="icon icon-arrow-down">
               </i>
              </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div aria-labelledby="heading-1" class="clsCollapse3 clsAnswer1" role="tabpanel"
                                         style="display:none">
                                        <p style="text-align: right;">
                                            &nbsp;للمسافرين الذين يعانون من ضعف في الرؤية أو السمع: يقوم طاقم المقصورة
                                            بتقديم إرشادات السلامة والمساعدة اللازمة خلال الرحلة. ويُرجى الانتباه إلى
                                            عدم جواز نقل الحيوانات المُساعدة في مقصورة الركّاب أو في قسم الأمتعة في
                                            الطائرة. ويمكنك التواصل مع مكتب طيران الجزيرة المحليّ أو خدمة العملاء لمزيدٍ
                                            من التفاصيل
                                            <span>
              .
             </span>
                                        </p>
                                        <div style="text-align: right;">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="heading-1" role="tab">
                                        <div class="panel-title">
                                            <a aria-controls="collapse1" aria-expanded="false"
                                               class="collapsed clsQuestion1 new_clsCollapse4" data-parent="#accordion"
                                               data-toggle="collapse" id="clsCollapse4" role="button">
                                                <p>
                                                    هل تحتوي طائرات أسطول الجزيرة على تجهيزات للأشخاص العاجزين عن
                                                    الحركة؟
                                                </p>
                                                <span>
               <i class="icon icon-arrow-down">
               </i>
              </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div aria-labelledby="heading-1" class="clsCollapse4 clsAnswer1" role="tabpanel"
                                         style="display:none">
                                        <p style="text-align: right;">
                                            نعم، تتوفّر هذه التجهيزات على متن طائراتنا كالمقاعد المزوّدة بمساند يدين
                                            متحرّكة ومساند لليدين في دورة المياه.
                                            <br>
                                            &nbsp;
                                            <br>
                                            وبهدف تقديم خدمةٍ أفضل، يُرجى إعلامنا بالاحتياجات الخاصّة للمسافر عبر
                                            التواصل مع مكتب طيران الجزيرة في منطقتك أو الاتّصال مع مركز خدمة العملاء قبل
                                            48 ساعة من موعد الرحلة، وحجز الخدمات المعيّنة ودفع تكاليفها حسبما هو موضّح
                                            في الجدول التالي نظرًا إلى محدودية خدمات الاحتياجات الخاصّة في كلّ رحلة
                                            <span>
              :
             </span>
                                            <br>
                                            &nbsp;&nbsp;
                                            <br>
                                            1. أيّ مسافر يعاني من ضعف السمع أو الرؤية، أو لا يستطيع فهم إرشادات السلامة
                                            أو النصائح أو التعليمات التي يقدّمها طاقم الطائرة في حالات الطوارئ بمن فيها
                                            المعلومات المنقولة بصيغة سهلة الفهم.
                                            <br>
                                            &nbsp;
                                            <br>
                                            2. أيّ مسافر يحتاج إلى المساعدة لوضع حزام الأمان، أو مغادرة مقعده والوصول
                                            إلى مخرج الطوارئ، أو فتح وارتداء سترة النجاة أو وضع قناع الأوكسجين.
                                            <br>
                                            &nbsp;
                                            <br>
                                            3. أيّ مسافر يحتاج إلى مساعدة شخصية طبيّة للتنفّس بجهاز أكسجين خارجي، أو
                                            لتناول الطعام أو استخدام المرحاض. ولا يستطيع طاقم الطائرة المساعدة في هذه
                                            الأنشطة.&nbsp;
                                            <br>
                                            &nbsp;
                                        </p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="heading-1" role="tab">
                                        <div class="panel-title">
                                            <a aria-controls="collapse1" aria-expanded="false"
                                               class="collapsed clsQuestion1 new_clsCollapse5" data-parent="#accordion"
                                               data-toggle="collapse" id="clsCollapse5" role="button">
                                                <p>
                                                    ما هي إرشادات السفر الخاصّة بالنساء الحوامل في طيران الجزيرة؟
                                                </p>
                                                <span>
               <i class="icon icon-arrow-down">
               </i>
              </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div aria-labelledby="heading-1" class="clsCollapse5 clsAnswer1" role="tabpanel"
                                         style="display:none">
                                        <p style="text-align: right;">
                                            تنصح طيران الجزيرة النساء الحوامل بمراجعة الطبيب المختصّ قبل السفر للتأكّد
                                            من إمكانية السفر، مع الأخذ بعين الاعتبار الوضع الصحيّ ومدّة الرحلة
                                            <span>
              .
             </span>
                                            وتعتمد أهلية المرأة الحامل للسفر مع طيران الجزيرة على مرحلة الحمل ووضع
                                            الجنين. وقد يُطلب في بعض الحالات تقديم وثائق طبيّة معيّنة قبل السفر
                                            <span>
              .
             </span>
                                            تضع طيران الجزيرة سلامة المرأة الحامل وجنينها فوق كلّ اعتبار
                                            <span>
              .
             </span>
                                            يجب تقديم تقرير طبّي قبل السفر اعتمادًا على وضع الحمل وفيما إذا كان قد تجاوز
                                            28 أسبوعًا. ولا تسمح طيران الجزيرة للمرأة الحامل في الأسبوع 32 +6 أيام أو ما
                                            بعده بالسفر حرصًا على سلامتها وسلامة جنينها
                                            <span>
              .
             </span>
                                            <br>
                                            &nbsp;
                                            <br>
                                            &nbsp;يجب أن تكون الوثائق الطبيّة مكتوبة باللغة الإنجليزيّة، وتحتوي على
                                            المعلومات التالية:
                                            <br>
                                            &nbsp;
                                        </p>
                                        <ul>
                                            <li style="text-align: right;">
                                                أن تكون الوثيقة الطبيّة صادرة خلال 7 أيّام من تقديمها
                                            </li>
                                            <li style="text-align: right;">
                                                تقديم الوثيقة الطبيّة خلال عملية تسجيل البيانات ولطاقم المقصورة عند ركوب
                                                الطائرة
                                            </li>
                                            <li style="text-align: right;">
                                                أن تحتوي الوثيقة على اسم المرأة وتاريخ ولادتها
                                            </li>
                                            <li style="text-align: right;">
                                                &nbsp;أن تحتوي الوثيقة على تاريخ الولادة المتوقّع وفترة الحمل بالأسابيع
                                            </li>
                                            <li style="text-align: right;">
                                                &nbsp;أن تحتوي الوثيقة على التواريخ المُقترحة للسفر جوًّا
                                            </li>
                                            <li style="text-align: right;">
                                                &nbsp;أن تحتوي الوثيقة على تأكيد وجود حالة حمل وحيدة غير معقّدة أو حمل
                                                متعدّد ومعقّد
                                            </li>
                                            <li style="text-align: right;">
                                                &nbsp;أن تحتوي الوثيقة على تأكيد على أهليّة المرأة الحامل للسفر طوال
                                                مدّة الرحلة، بمن فيها رحلة العودة (عند الإمكان
                                                <span>
               (
              </span>
                                            </li>
                                            <li style="text-align: right;">
                                                &nbsp;أن تحتوي الوثيقة على التاريخ، وختم الطبيب المُعتمد وتفاصيل
                                                الاتّصال معه
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="heading-1" role="tab">
                                        <div class="panel-title">
                                            <a aria-controls="collapse1" aria-expanded="false"
                                               class="collapsed clsQuestion1 new_clsCollapse6" data-parent="#accordion"
                                               data-toggle="collapse" id="clsCollapse6" role="button">
                                                <p>
                                                    هل يستطيع الأطفال السفر مع طيران الجزيرة دون مرافقين؟
                                                </p>
                                                <span>
               <i class="icon icon-arrow-down">
               </i>
              </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div aria-labelledby="heading-1" class="clsCollapse6 clsAnswer1" role="tabpanel"
                                         style="display:none">
                                        <p style="text-align: right;">
                                            تقدّم خطوط طيران الجزيرة خدمة الرعاية الخاصّة للمسافرين الصغار دون مرافقين،
                                            وتقوم بجميع الترتيبات التي تضمن لهم رحلةً آمنة للوصول إلى وجهتهم
                                            <span>
              .
             </span>
                                            بعد أن تقوم بتسليم طفلك إلى ممثّل طيران الجزيرة في مكتب تسجيل البيانات، يقوم
                                            الشخص المسؤول بالاعتناء به ومرافقته طوال الوقت، بما في ذلك عبور نقاط التفتيش
                                            الأمني في المطار، ومرافقته إلى بوابة المغادرة وصعود الطائرة. كما يقوم فريق
                                            العمليات الميدانيّة في طيران الجزيرة بالاعتناء بالطفل بعد الوصول إلى الوجهة
                                            المعنيّة، ومرافقته عبر منطقة ختم جوازات السفر وتسليمه إلى الشخص الذي ينتظره
                                            <span>
              .
             </span>
                                        </p>
                                        <p style="text-align: right;">
                                            المسافرين الصغار دون مرافق هم الذين تتراوح أعمارهم بين 5 سنوات و12 سنة (ولا
                                            يشمل العمر عيد الميلاد الثاني عشر)، ويسافرون بمفردهم بتذكرة سفر مؤكدة.
                                        </p>
                                        <p style="text-align: right;">
                                            <strong>
                                                سياسة قبول سفرهم:
                                            </strong>
                                        </p>
                                        <ul>
                                            <li style="text-align: right;">
                                                تقبل طيران الجزيرة المسافرين الصغار الذين تتراوح أعمارهم بين 5 سنوات و12
                                                سنة (ولا يشمل العمر عيد الميلاد الثاني عشر) على أن يتم حجز جميع
                                                الترتيبات اللازمة في وقت الحجز.
                                            </li>
                                            <li style="text-align: right;">
                                                لا تقبل طيران الجزيرة المسافرين الصغار الذين لا يتعدى عمرهم 5 سنوات (ولا
                                                يشمل العمر عيد الميلاد الخامس) للسفر بمفردهم. على جميع المسافرين الصغار
                                                الذين لا يتعدى عمرهم 5 سنوات أن يكونوا برفقة مسافر بالغ (يتعدى عمره 12
                                                سنة). وفي مثل هذه الحالات، يجلس المسافر البالغ المرافق والمسافر الصغير
                                                معاً. ولا يمكن تخصيص مقاعد لهم في صف مخارج الطوارئ.
                                            </li>
                                            <li style="text-align: right;">
                                                تسمح طيران الجزيرة بحد أقصى ثمانية مسافرين صغار دون مرافقين على متن
                                                الرحلة الواحدة.
                                            </li>
                                            <li style="text-align: right;">
                                                تقبل طيران الجزيرة خدمة المسافرين الصغار دون مرافق فقط على الرحلات
                                                المباشرة من وجهة إلى وجهة أخرى وليس على رحلات الترانزيت.
                                            </li>
                                        </ul>
                                        <p style="text-align: right;">
                                            مثال: المسافر لم يكمل عيد ميلاده الثاني عشر ويسافر بمفرده. سيتم اعتباره
                                            كمسافر صغير دون مرافق ولن يُسمح لهذا المسافر السفر بمفرده دون مرافق بالغ ما
                                            لم يُكمِل عيد ميلاده الخامس بالسفر.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .info-card .info-data-wrap .icon-wrap {
                font-size: 24px !important;
            }
        </style>
        <script>
            $(document).ready(function () {
                $(".clsQuestion1").click(function () {
                    var Id = $(this).attr("id");

                    // Check if the clicked question is already selected
                    if ($(this).hasClass("selected")) {
                        $("." + Id).css("display", "none");
                        $(this).removeClass("selected");
                    } else {
                        $(".clsAnswer1").css("display", "none");
                        $(".clsQuestion1").removeClass("selected");
                        $(this).addClass("selected");
                        $("." + Id).css("display", "block");
                    }
                });
            })
        </script>
    </main>

@endsection
