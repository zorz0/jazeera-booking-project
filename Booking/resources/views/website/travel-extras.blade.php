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

        <div class="&#x627;&#x644;&#x645;&#x632;&#x627;&#x64A;&#x627;-&#x627;&#x644;&#x625;&#x636;&#x627;&#x641;&#x64A;&#x629; clsFaqMianDiv">
            <div class="container">
                <div class="title between-top" >
                    <h2><strong class="spl"> <i class="icon-add"></i> &#x627;&#x644;&#x645;&#x632;&#x627;&#x64A;&#x627; &#x627;&#x644;&#x625;&#x636;&#x627;&#x641;&#x64A;&#x629;</strong></h2>

                </div>
                <div class="plain-content">
                    <p>
                    <p>هل تريد أن تعرف كيف تقوم بترقية رحلتك أو زيادة وزن الأمتعة المسموح؟ يمكنك القيام بذلك بسهولة من خلال مزايا الجزيرة الإضافيّة.</p>
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
                                                <p>ما هي المزايا الإضافيّة التي تقدّمها طيران الجزيرة؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse1 clsAnswer1" role="tabpanel" aria-labelledby="heading-1">
                                        <p style="text-align: right;">تشمل المزايا الإضافيّة من طيران الجزيرة اختيار وجبة الطعام، والتأمين، واختيار المقعد، وزيادة مساحة الأمتعة وخدمة الاستقبال والمساعدة. ويمكنك إضافة العديد من هذه المزايا عندما تقوم بالحجز أو في وقتٍ لاحق.</p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" id="clsCollapse2" aria-expanded="false" aria-controls="collapse1" class="collapsed clsQuestion1 new_clsCollapse2">
                                                <p>ما هي تكلفة إضافة مزايا السفر إلى الحجز؟</p>
                                                <span><i class="icon icon-arrow-down"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clsCollapse2 clsAnswer1" role="tabpanel" aria-labelledby="heading-1" style="display:none">
                                        <p style="text-align: right;">تعتمد التكلفة على المزايا التي تختارها، فلكلّ واحدةٍ منها تكلفة خاصّة سنطلعك عليها عندما تختار إضافة هذه الميزة في وقت الحجز، أو لاحقًا عبر صفحة إدارة الحجز</p>
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
