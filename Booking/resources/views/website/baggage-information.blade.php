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

        <div class="&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;-&#x639;&#x646;-&#x627;&#x644;&#x623;&#x645;&#x62A;&#x639;&#x629; clsFaqMianDiv">
            <div class="container">
                <div class="title between-top" >
                    <h2><strong class="spl"> <i class="icon-baggage"></i> &#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A; &#x639;&#x646; &#x627;&#x644;&#x623;&#x645;&#x62A;&#x639;&#x629;</strong></h2>

                </div>
                <div class="plain-content">
                    <p>
                    <p>تعرف على كل المعلومات المتعلقة بالأمتعة.</p>
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
                                                <p>ما هو الوزن المسموح بالنسبة للحقائب المسجّلة؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse1 clsAnswer1" role="tabpanel" aria-labelledby="heading-1">
                                        <p style="text-align: right;"> تقدّم خطوط طيران الجزيرة لمسافريها مساحة أمتعة كبيرة، حيث يمكن للمسافرين على الدرجة الاقتصاديّة تسجيل أمتعة بوزن 30 كيلوغرام (يعتمد على نوع التذكرة) أمّا مسافرو درجة رجال الأعمال فيحقّ لهم تسجيل أمتعة بوزنٍ يبلغ 50 كيلوغرامًا (ويصل الوزن إلى 60 كيلوغرام في رحلات معيّنة، ويمكنك معرفة المزيد من المعلومات عند تسجيل الوصول عبر الإنترنت<span>). </span>ويمكنك تسجيل وزن إضافي إذا كنت بحاجة إلى ذلك عبر خيار المزايا الإضافيّة ضمن صفحة إدارة الحجز<span>.</span></p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse2" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse2">
                                                <p>ما هو الوزن المسموح به لحقيبة المقصورة؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse2 clsAnswer1" role="tabpanel" aria-labelledby="heading-1" style="display:none">
                                        <p>يمكن لمسافري الدرجة الاقتصاديّة حمل حقيبة واحدة بوزن 7 كيلوغرامات إلى المقصورة</p>
                                        <p>أمّا مسافرو درجة رجال الأعمال فيحقّ لهم حمل حقيبتين بوزن إجمالي يبلغ 15 كيلوغرامًا. تبلغ أبعاد حقائب المقصورة: 55سم | 40 سم | 20 سم، ويجب التصريح عن جميع حقائب المقصورة في منافذ تسجيل بيانات الوصول، وأن تحمل بطاقات التعريف الخاصّة بطيران الجزيرة</p>
                                        <p>يشمل حجز الأطفال الرُضّع حقيبة في المقصورة لا تزيد عن ١٠ كيلو غراماً</p>
                                        <p> </p>
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
