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

        <div class="&#x645;&#x637;&#x627;&#x631;-&#x627;&#x644;&#x643;&#x648;&#x64A;&#x62A;-&#x627;&#x644;&#x62F;&#x648;&#x644;&#x64A; clsFaqMianDiv">
            <div class="container">
                <div class="title between-top" >
                    <h2><strong class="spl"> <i class="icon-departure"></i> &#x645;&#x637;&#x627;&#x631; &#x627;&#x644;&#x643;&#x648;&#x64A;&#x62A; &#x627;&#x644;&#x62F;&#x648;&#x644;&#x64A;</strong></h2>

                </div>
                <div class="plain-content">
                    <p>
                    <p>تقع خطوط طيران الجزيرة خارج مطار الكويت الدولي، وتمتلك مبنىً خاصًّا بمسافريها.</p>
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
                                                <p>أين أقوم بتسجيل الوصول في رحلات الجزيرة في مطار الكويت الدولي؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse1 clsAnswer1" role="tabpanel" aria-labelledby="heading-1">
                                        <div style="text-align: right;">توجّه إلى مبنى طيران الجزيرة الجديد (تي5) المصمّم خصيّصًا لمسافري طيران الجزيرة، ويحتوي على فريق لخدمة العملاء، وأكشاك الخدمات الذاتيّة، ومنطقة سوق حرّة، ومنافذ طعام وخمة الإنترنت لاسلكي مجّاني عند كلّ بوابة وغيرها. وسوف يجعل هذا المبنى الجديد في الكويت رحلتك أكثر راحة وسهولة من قبل<span>.</span></div>
                                        <div style="text-align: right;"> </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse2" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse2">
                                                <p>من هو المسؤول عن تقديم المساعدة في المطار؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse2 clsAnswer1" role="tabpanel" aria-labelledby="heading-1" style="display:none">
                                        <div style="text-align: right;">يعمل فريق الدعم في مبنى (<span>T5</span>) لضمان حصول مسافري طيران الجزيرة على تجربةٍ استثنائيّة تتفوّق على سابقاتها. ويتولّى الفريق تقديم المساعدة اللازمة لمسافري طيران الجزيرة، من تقديم المعلومات الخاصّة بالرحلة الجويّة إلى المساعدة في حالة تضرّر الأمتعة<span>. </span>اتّصل على الرقم 176: يمكنك الاتّصال على الرقم 176 المخصّص لتقديم المساعدة إذا كانت لديك أيّ أسئلة أو استفسارات، أو احتجت إلى المساعدة في مبنى (<span>T5</span>)</div>
                                        <div style="text-align: right;"> </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse3" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse3">
                                                <p>كيف أقوم بتسجيل بيانات الوصول في المطار؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse3 clsAnswer1" role="tabpanel" aria-labelledby="heading-1" style="display:none">
                                        <div style="text-align: right;">يمكنك استخدام أكشاك الخدمة الذاتيّة في المطار لتسجيل بيانات الوصول، وطباعة بطاقة صعود الطائرة، والحصول على بطاقة الأمتعة بمُنتهى السهولة<span>. </span>توجد هذه الأكشاك في الطابق الأرضيّ في قاعة تسجيل بيانات الوصول، وفي سكاي بريدج الذي يصل بين موقف السيّارات والطابق الأوّل من المبنى<span>.</span><br /> <br /> <strong>تسليم الأمتعة:</strong> يمكنك التوجّه إلى مكتب تسليم الحقائب في الطابق الأرضيّ بعد أن تنتهي من تسجيل بياناتك وتضع بطاقات الأمتعة بإحكام في مكانها<span>. </span>أمّا إذا كنت تسافر دون أمتعة، فيمكنك تسجيل بياناتك في أحد الأكشاك للحصول على بطاقة صعود الطائرة ثمّ التوجّه مباشرةً إلى مكتب الهجرة<span>.</span><br /> <br /> <strong>منافذ تسجيل الوصول:</strong> إذا لم تقم بتسجيل بيانات الوصول عبر الإنترنت أو في أكشاك الخدمة الذاتيّة، فيمكنك التوجّه إلى منافذ تسجيل الوصول الخاصّة بمسافري الدرجة الاقتصاديّة أو درجة رجال الأعمال للقيام بذلك. معلومات إضافيّة عن تسجيل بيانات الوصول.<br /><br />تفضّل بالاطّلاع على صفحة مبنى طيران الجزيرة للمزيد من المعلومات.</div>
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
