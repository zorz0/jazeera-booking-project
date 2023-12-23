@extends('website.layout.app')

@section('content')

    <main>
        <section id="faq" class="faq">
            <div class="container">
                <div class="title lg">
                    <h1><strong class="spl">&#x627;&#x644;&#x623;&#x633;&#x626;&#x644;&#x629; &#x627;&#x644;&#x634;&#x627;&#x626;&#x639;&#x629;</strong></h1>
                </div>
                <div class="content">
                    <p>
                    <p>هل لديك أسئلة أو استفسارات؟ نقدّم في هذه الصفحة جميع المعلومات التي تحتاج لها من سياسة الحقائب إلى إدارة الحجز وكافة تفاصيل رحلتك حتى تستمتع بتجربة سفر سلسلة مع طيران الجزيرة.</p>
                    </p>
                </div>
                <div class="search-bar-block">
                    <form>
                        <div class="search-area-grp">
                            <div class="form-field">
                                <input id="whatCanwehelp" name="whatCanwehelp" type="text" value="" class="form-control" placeholder="What can we help you with today?" autocomplete="false">
                            </div>
                            <button type="button" onclick="searchFaq()" class="btn btn-primary" id="btnSearch" name="btnSearch"><b>Search</b></button>
                        </div>
                    </form>

                </div>
            </div>
        </section>

        @include('website.components.faq-card-list')

        <div class="&#x627;&#x644;&#x62D;&#x62C;&#x632;-&#x648;&#x62A;&#x633;&#x62C;&#x64A;&#x644;-&#x627;&#x644;&#x648;&#x635;&#x648;&#x644; clsFaqMianDiv">
            <div class="container">
                <div class="title between-top" >
                    <h2><strong class="spl"> <i class="icon-ticket-tick"></i> &#x627;&#x644;&#x62D;&#x62C;&#x632; &#x648;&#x62A;&#x633;&#x62C;&#x64A;&#x644; &#x627;&#x644;&#x648;&#x635;&#x648;&#x644;</strong></h2>

                </div>
                <div class="plain-content">
                    <p>
                    <p>إذا كنت ترغب أن تتعرف كيف تقوم بتسجيل الوصول عبر الإنترنت فأنت في المكان الصحيح.</p>
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-accordian">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse1">
                                                <p>متى أقوم بتسجيل الوصول؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse1 clsAnswer1" role="tabpanel" aria-labelledby="heading-1">
                                        <p> يمكنك تسجيل بياناتك عبر الإنترنت خلال <span>24</span> ساعة من وقت المغادرة<br /> <br />يُرجى الانتباه إلى أنّه إذا كانت رحلة العودة/ الرحلة الانتقاليّة ستنطلق بعد أكثر من 60 ساعة من رحلة الذهاب في مطارٍ لا تتوفّر فيه خدمة تسجيل الوصول عبر الإنترنت، فعليكَ التوجّه إلى مكتب طيران الجزيرة وتسجيل وصولك هناك<span>.</span></p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse2" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse2">
                                                <p>كيف أقوم بتسجيل الوصول؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse2 clsAnswer1" role="tabpanel" aria-labelledby="heading-1" style="display:none">
                                        <p style="text-align: right;">تأكّد قبل تسجيل الوصول عبر الإنترنت من وجود اسم العائلة (الاسم الأخير) لجميع المسافرين وكذلك رقم الحجز المرجعي<span>. </span>ثم قمّ بالخطوات الخمس التالية<span>:</span></p>
                                        <p> </p>
                                        <ol>
                                            <li style="text-align: right;">قم بزيارة صفحة تسجيل بيانات الوصول على موقع طيران الجزيرة.</li>
                                            <li style="text-align: right;">أدخل اسم العائلة ورقم الحجز المرجعي</li>
                                            <li style="text-align: right;">اختر جميع المسافرين الذين تريد تسجيل بياناتهم<span>.</span></li>
                                            <li style="text-align: right;">قد يُطلب منك إدخال المزيد من المعلومات عن المسافر إذا كان ذلك مطلوبًا في بلد الوجهة</li>
                                            <li style="text-align: right;">ستحتاج تفاصيل جواز السفر لجميع المسافرين</li>
                                            <li style="text-align: right;"> يمكنك في هذه المرحلة أن تختار المزايا الإضافيّة من طيران الجزيرة، كتغيير المقعد، أو حجز صالة رجال الأعمال أو إضافة وجبة محدّدة من مقهى الجزيرة</li>
                                        </ol>
                                        <p style="text-align: right;"> <br />حالما تنهي عملية تسجيل البيانات، ستحصل على بطاقة صعود الطائرة التي سيتمّ إرسالها عبر البريد الإلكتروني، أو طباعتها أو إرسالها مباشرةً إلى الهاتف المحمول لجميع المسافرين عبر تطبيق طيران الجزيرة (حسب المطار المحدّد)<br /> </p>
                                        <p style="text-align: right;">قد يتطلّب السفر إلى وجهاتٍ معيّنة أو منها التحقّق من وثيقة السفر قبل إصدار بطاقة صعود الطائرة. ولن تستطيع في هذه الحالة الحصول على البطاقة عندما تقوم بتسجيل بياناتك عبر الإنترنت، ويمكنك التوجّه إلى منافذ تسجيل الوصول الخاصّة بطيران الجزيرة في المطار لاستلام بطاقة صعود الطائرة<span>.</span></p>
                                        <p style="text-align: right;"> </p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse3" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse3">
                                                <p>أين يوجد رقم الحجز المرجعي؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse3 clsAnswer1" role="tabpanel" aria-labelledby="heading-1" style="display:none">
                                        <p>إذا استلمت بطاقة صعود الطائرة على بريدك الإلكتروني، فإنّ رقم الحجز المرجعي هو الرمز المكوّن من 6 أرقام وحروف، وهو يوجد بعد خانة "مرجع الحجز". ويبدأ هذا الرمز بأحد الحروف التالية <span>.B, C, D, E, F, G, H, I, J, K ,L </span>  </p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse4" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse4">
                                                <p>ماذا يحدث إذا لم أستطع تسجيل الوصول عبر الإنترنت؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse4 clsAnswer1" role="tabpanel" aria-labelledby="heading-1" style="display:none">
                                        <p>إذا واجهت مشاكل في تسجيل بياناتك عبر الإنترنت فيُرجى مراجعة مكتب طيران الجزيرة في المطار لتسجيل الوصول هناك. كما ننصحك بتخصيص وقتٍ كافٍ لإكمال هذه الإجراءات القياسيّة<span>.</span></p>
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
