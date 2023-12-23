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
                        اختيار المقعد
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="header-title seat-section">
        <div class="container">
            <div class="title lg">
                <h1>
                    <strong class="spl">
                        اختيار المقعد
                    </strong>
                </h1>
            </div>
            <div class="content">
                <p>
                <div class="container">
                    <div class="content">
                        <p>
                            استكشف خيارات المقاعد التي نوفرها أدناه واختر المقعد الذي تفضّله قبل أو بعد إجراء الحجز. لمعرفة الأسعار يرجى الاطلاع على الخيارات المتاحة عند الحجز
                        </p>
                    </div>
                </div>
                <p>
                    &nbsp;
                </p>
                </p>
            </div>
        </div>
    </section>
    <section class="seat-selection-wrap">
        <div class="container">
            <div class="card icon-image-card">
                <div class="image-content-wrap">
                    <div class="image-content">
                        <div class="single-img">
                            <img alt="Seat Selection" class="ls-is-cached lazyloaded" data-src="/images/jazeera-seat.jpg" src="images/jazeera-seat.jpg">
                        </div>
                    </div>
                    <div class="icon-content-wrap">
                        <div class="icon-desc seat_header">
                            <div class="title split">
                                <h2>
                                    <strong class="spl">
                                        كيفية اختيار مقعدك
                                    </strong>
                                </h2>
                            </div>
                            <div class="content">
                                <div class="icon-content" style="display: flex;">
                                    <div class="icon-wrap" style="text-align: right;">
                                        <p>
                   <span class="icon-question1" style="width: 100px; font-size: 38px; color: #004a97;">
                    &nbsp;
                   </span>
                                        </p>
                                    </div>
                                    <div>
                                        <div style="text-align: right;">
                                            <strong>
                                                أثناء الحجز
                                            </strong>
                                        </div>
                                        <p style="text-align: right;">
                                            احجز المقعد الذي تريده مباشرة خلال عملية الحجز عبر موقعنا الإلكتروني.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="icon-content" style="display: flex;">
                                    <div class="icon-wrap" style="text-align: right;">
                                        <p>
                   <span class="icon-ticket" style="font-size: 38px; color: #004a97;">
                    &nbsp;
                   </span>
                                        </p>
                                    </div>
                                    <div>
                                        <div style="text-align: right;">
                                            <strong>
                                                بعد الحجز
                                            </strong>
                                        </div>
                                        <p style="text-align: right;">
                                            قم بشراء مقعد معيّن عبر خاصية "إدارة الحجز" إذا سبق أن حجزت رحلتك أو عند تسجيل الصعود إلى الطائرة عبر الموقع قبر موعد رحلتك.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header-title seat-types">
        <div class="container">
            <div class="title lg">
                <h2>
                    <strong class="spl">
              <span class="md-block">
               اختيارات المقاعد
              </span>
                        <span class="sm-block">
               اختيارات المقاعد
              </span>
                    </strong>
                </h2>
            </div>
            <div class="content seat_type_class">
                <p>
                    اختر المقعد الذي تفضّله بحسب ما يناسب احتياجاتك وميزانيتك. إذا كنت لا ترغب في حجز مقعد عند الحجز، سيتم تخصيص مقعداً لك عند التسجيل لصعود الطائرة.
                </p>
            </div>
        </div>
    </section>
    <section class="seat-type-listing-wrap">
        <div class="container">
            <div class="seat-types-wrap">
                <div class="flight-class-listing">
                    <div class="flight-class-listing-group">
                        <div class="group-wrapper wrapper-active" id="economic-class">
                            <div class="seat-type-icon group-item priority-seat-wrap active" data-seat-class="priority-seat" id="clsالمقاعد_المميزة">
                                <div class="group-item-title">
                                    <div class="seat-type-icon priority-seat">
                                        <div class="checkbox-wrap">
                                            <input id="firstflight6A" name="firstflight" type="radio" value="6A">
                                            <label data-html="true" data-original-title data-tooltip="tooltip" for="firstflight6A" title>
                                                <div class="seat-number">
                                                    6A
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="seat-type-info">
                                        <div class="seat-type-label">
                                            <h5>
                                                المقاعد المميزة
                                            </h5>
                                        </div>
                                        <div class="seat-type-price">
                                            <p class="seat_refer_num">
                    <span>
                     <div class="group-item-title">
                      <div class="seat-type-info">
                       <div class="seat-type-price">
                        <p>
                         الصفوف 1 - 3
                        </p>
                       </div>
                      </div>
                     </div>
                     <div class="group-item-body">
                     </div>
                    </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-item-body">
                                    <p>
                                        الصفوف من 1 إلى 3 سافر بكل راحة عند اختيارك المقاعد المميزة التي تقدّم لك مقاعد جلدية حصرية مع مسند للرأس، ومساحة أمامية تبلغ 33 بوصة، بالإضافة إلى الخدمة الأولوية لوجبتك من قائمة ـ J CAFE. وتقع هذه المقاعد في الصفوف الأمامية التي تمكّنك من الخروج أولاً من الطائرة عند الوصول. تتوفر مقابس كهرباء في كل مقعد مميز وعلى جميع الطائرات.
                                    </p>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div class="seat-type-icon group-item preferred-seat-wrap" data-seat-class="preffered-seat" id="clsالمقاعد_المفضّلة">
                                <div class="group-item-title">
                                    <div class="seat-type-icon preffered-seat">
                                        <div class="checkbox-wrap">
                                            <input id="firstflight6A" name="firstflight" type="radio" value="6A">
                                            <label data-html="true" data-original-title data-tooltip="tooltip" for="firstflight6A" title>
                                                <div class="seat-number">
                                                    6A
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="seat-type-info">
                                        <div class="seat-type-label">
                                            <h5>
                                                المقاعد المفضّلة
                                            </h5>
                                        </div>
                                        <div class="seat-type-price">
                                            <p class="seat_refer_num">
                    <span>
                     <div class="group-item-title">
                      <div class="seat-type-info">
                       <div class="seat-type-price">
                        <p>
                         الصفوف 4 - 10
                        </p>
                       </div>
                      </div>
                     </div>
                     <div class="group-item-body">
                     </div>
                    </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-item-body">
                                    <p>
                                        الصفوف من 4 إلى 10 سافر على متن النصف الأول من المقصورة واستمتع بمساحات أمامية تبلغ 31 بوصة.
                                        <br>
                                        <br>
                                        &ZeroWidthSpace;وتتوفر مقابس USB في المقعد على الطائرات من طراز A320neo.
                                    </p>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div class="seat-type-icon group-item extra-leg-room-wrap" data-seat-class="extra-leg-room" id="clsالمقاعد_ذات_المساحة_الإضافية">
                                <div class="group-item-title">
                                    <div class="seat-type-icon extra-leg-room">
                                        <div class="checkbox-wrap">
                                            <input id="firstflight6A" name="firstflight" type="radio" value="6A">
                                            <label data-html="true" data-original-title data-tooltip="tooltip" for="firstflight6A" title>
                                                <div class="seat-number">
                                                    6A
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="seat-type-info">
                                        <div class="seat-type-label">
                                            <h5>
                                                المقاعد ذات المساحة الإضافية
                                            </h5>
                                        </div>
                                        <div class="seat-type-price">
                                            <p class="seat_refer_num">
                    <span>
                     <div class="group-item-title">
                      <div class="seat-type-info">
                       <div class="seat-type-price">
                        <p>
                         الصفوف 11 - 12
                        </p>
                       </div>
                      </div>
                     </div>
                     <div class="group-item-body">
                     </div>
                    </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-item-body">
                                    <p>
                                        الصفوف من 11 إلى 12 لأولئك الذين يريدون أكبر مساحة ممكنة للساقين، توفّر المقاعد على هذه الصفوف مساحة بين 35 و 38 بوصة (بحسب نوع الطائرة). يرجى الملاحظة: الأطفال الذين تقل أعمارهم عن 18 عاماً أو كبار السن أو الأشخاص ذوي القدرة المحدودة على الحركة غير مؤهلين للحصول على هذه المقاعد نظراً لأنظمة السلامة. وتتوفر مقابس USB في المقعد على الطائرات من طراز A320neo.
                                    </p>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div class="seat-type-icon group-item standard-seat-wrap" data-seat-class="standard-seat" id="clsالمقاعد_الاعتيادية">
                                <div class="group-item-title">
                                    <div class="seat-type-icon standard-seat">
                                        <div class="checkbox-wrap">
                                            <input id="firstflight6A" name="firstflight" type="radio" value="6A">
                                            <label data-html="true" data-original-title data-tooltip="tooltip" for="firstflight6A" title>
                                                <div class="seat-number">
                                                    6A
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="seat-type-info">
                                        <div class="seat-type-label">
                                            <h5>
                                                المقاعد الاعتيادية
                                            </h5>
                                        </div>
                                        <div class="seat-type-price">
                                            <p class="seat_refer_num">
                    <span>
                     <div class="group-item-title">
                      <div class="seat-type-info">
                       <div class="seat-type-price">
                        <p>
                         الصفوف
                         <span>
                          &nbsp;13 - 28 / 29
                         </span>
                        </p>
                       </div>
                      </div>
                     </div>
                     <div class="group-item-body">
                     </div>
                    </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-item-body">
                                    <p>
                                        الصفوف من 13 إلى 29 هذه المقاعد الاعتيادية توفّر مساحات أمامية ما بين 28 و30 بوصة (بحسب نوع الطائرة) وهي مصمّمة لتوفّر أكثر قدر من الراحة وبأفضل قيمة. وتتوفر مقابس USB في المقعد على الطائرات من طراز A320neo.
                                    </p>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flight-class-listing-group" style="display:none">
                        <div class="group-title">
                            <h3>
                                Business Class
                            </h3>
                        </div>
                        <div class="group-wrapper" id="business-class">
                            <div class="group-item priority-seat-wrap" data-seat-class="business-class">
                                <div class="group-item-title">
                                    <div class="seat-type-icon priority-seat">
                                        <div class="checkbox-wrap">
                                            <input id="firstflight6A" name="firstflight" type="radio" value="6A">
                                            <label data-html="true" data-original-title data-tooltip="tooltip" for="firstflight6A" title>
                                                <div class="seat-number">
                                                    6A
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-item-body" style="margin-top:15px;">
                                    <p>
                                        All Business Class passengers will be the first to board the plane and the first to leave the plane. These seats are complimentary as part of the Business Class package.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flight-layout-scroller">
                    <div class="custom-scrollbar-wrapper">
                        <div class="flight-scrollbar ui-draggable ui-draggable-handle">
                        </div>
                        <div ; class="scrollbar-flight-mockup" style="background:url (~\wwwroot\images\fligh-mockup-thumb_neo.png) center center no-repeat">
                        </div>
                    </div>
                </div>
                <div class="flight-seat-selection-mockup-wrap" dir="ltr">
                    <div class="scroll-panel mCustomScrollbar _mCS_1 mCS-autoHide" style="position: relative; overflow: visible;">
                        <div class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" id="mCSB_1" style="max-height: none;" tabindex="0">
                            <div class="mCSB_container" dir="ltr" id="mCSB_1_container" style="position:relative; top:0; left:0;">
                                <div class="flight-mockup-wrap">
                                    <div class="flight-inside-wrap">
                                        <div class="flight-exit">
                   <span class="exit-arrow left-exit">
                    <i class="icon-exit-arrow-left">
                    </i>
                   </span>
                                            <span class="exit-txt">
                    Exit
                   </span>
                                            <span class="exit-arrow right-exit">
                    <i class="icon-exit-arrow-right">
                    </i>
                   </span>
                                        </div>
                                        <div class="flight-select-seat-wrap priority-seat active">
                                            <div class="seat-row seat-cols-label">
                                                <div class="seat-col left-col">
                                                    <div class="label">
                                                        A
                                                    </div>
                                                    <div class="label">
                                                        B
                                                    </div>
                                                    <div class="label">
                                                        C
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="label">
                                                        D
                                                    </div>
                                                    <div class="label">
                                                        E
                                                    </div>
                                                    <div class="label">
                                                        F
                                                    </div>
                                                </div>
                                            </div>
                                            <!--1row-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    1
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight1A" name="firstflight" type="radio" value="1A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;1A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight1A" title>
                                                            <div class="seat-number">
                                                                1A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight1B" name="firstflight" type="radio" value="1B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;1B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight1B" title>
                                                            <div class="seat-number">
                                                                1B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight1C" name="firstflight" type="radio" value="1C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;1C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight1C" title>
                                                            <div class="seat-number">
                                                                1C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight1D" name="firstflight" type="radio" value="1D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;1D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight1D" title>
                                                            <div class="seat-number">
                                                                1D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight1E" name="firstflight" type="radio" value="1E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;1E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight1E" title>
                                                            <div class="seat-number">
                                                                1E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight1F" name="firstflight" type="radio" value="1F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;1F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight1F" title>
                                                            <div class="seat-number">
                                                                1F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--1row-->
                                            <!--2row-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    2
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight2A" name="firstflight" type="radio" value="2A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;2A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight2A" title>
                                                            <div class="seat-number">
                                                                2A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight2B" name="firstflight" type="radio" value="2B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;2B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight2B" title>
                                                            <div class="seat-number">
                                                                2B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight2C" name="firstflight" type="radio" value="2C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;2C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight2C" title>
                                                            <div class="seat-number">
                                                                2C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight2D" name="firstflight" type="radio" value="2D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;2D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight2D" title>
                                                            <div class="seat-number">
                                                                2D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight2E" name="firstflight" type="radio" value="2E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;2E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight2E" title>
                                                            <div class="seat-number">
                                                                2E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight2F" name="firstflight" type="radio" value="2F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;2F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight2F" title>
                                                            <div class="seat-number">
                                                                2F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--2row-->
                                            <!--3row-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    3
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight3A" name="firstflight" type="radio" value="3A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;3A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight3A" title>
                                                            <div class="seat-number">
                                                                3A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight3B" name="firstflight" type="radio" value="3B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;3B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight3B" title>
                                                            <div class="seat-number">
                                                                3B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight3C" name="firstflight" type="radio" value="3C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;3C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight3C" title>
                                                            <div class="seat-number">
                                                                3C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight3D" name="firstflight" type="radio" value="3D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;3D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight3D" title>
                                                            <div class="seat-number">
                                                                3D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight3E" name="firstflight" type="radio" value="3E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;3E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight3E" title>
                                                            <div class="seat-number">
                                                                3E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight3F" name="firstflight" type="radio" value="3F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;3F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight3F" title>
                                                            <div class="seat-number">
                                                                3F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--3row-->
                                        <div class="flight-select-seat-wrap preffered-seat">
                                            <!--row 4-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    4
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight4A" name="firstflight" type="radio" value="4A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;4A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight4A" title>
                                                            <div class="seat-number">
                                                                4A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight4B" name="firstflight" type="radio" value="4B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;4B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight4B" title>
                                                            <div class="seat-number">
                                                                4B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight4C" name="firstflight" type="radio" value="4C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;4C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight4C" title>
                                                            <div class="seat-number">
                                                                4C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight4D" name="firstflight" type="radio" value="4D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;4D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight4D" title>
                                                            <div class="seat-number">
                                                                4D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight4E" name="firstflight" type="radio" value="4E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;4E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight4E" title>
                                                            <div class="seat-number">
                                                                4E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight4F" name="firstflight" type="radio" value="4F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;4F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight4F" title>
                                                            <div class="seat-number">
                                                                4F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 4-->
                                            <!--row 5-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    5
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight5A" name="firstflight" type="radio" value="5A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;5A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight5A" title>
                                                            <div class="seat-number">
                                                                5A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight5B" name="firstflight" type="radio" value="5B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;5B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight5B" title>
                                                            <div class="seat-number">
                                                                5B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight5C" name="firstflight" type="radio" value="5C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;5C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight5C" title>
                                                            <div class="seat-number">
                                                                5C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight5D" name="firstflight" type="radio" value="5D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;5D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight5D" title>
                                                            <div class="seat-number">
                                                                5D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight5E" name="firstflight5E" type="radio" value="5E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;5E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight5E" title>
                                                            <div class="seat-number">
                                                                5E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight5F" name="firstflight5F" type="radio" value="5F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;5F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight5F" title>
                                                            <div class="seat-number">
                                                                5F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 5-->
                                            <!--row 6-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    6
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight6A" name="firstflight" type="radio" value="6A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;6A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight6A" title>
                                                            <div class="seat-number">
                                                                6A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight6B" name="firstflight" type="radio" value="6B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;6B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight6B" title>
                                                            <div class="seat-number">
                                                                6B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight6C" name="firstflight" type="radio" value="6C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;6C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight6C" title>
                                                            <div class="seat-number">
                                                                6C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight6D" name="firstflight" type="radio" value="6D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;6D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight6D" title>
                                                            <div class="seat-number">
                                                                6D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight6E" name="firstflight" type="radio" value="6E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;6E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight6E" title>
                                                            <div class="seat-number">
                                                                6E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight6F" name="firstflight" type="radio" value="6F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;6F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight6F" title>
                                                            <div class="seat-number">
                                                                6F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 6-->
                                            <!--row 7-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    7
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight7A" name="firstflight" type="radio" value="7A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;7A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight7A" title>
                                                            <div class="seat-number">
                                                                7A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight7B" name="firstflight" type="radio" value="7B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;7B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight7B" title>
                                                            <div class="seat-number">
                                                                7B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight7C" name="firstflight" type="radio" value="7C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;7C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight7C" title>
                                                            <div class="seat-number">
                                                                7C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight7D" name="firstflight" type="radio" value="7D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;7D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight7D" title>
                                                            <div class="seat-number">
                                                                7D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight7E" name="firstflight" type="radio" value="7E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;7E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight7E" title>
                                                            <div class="seat-number">
                                                                7E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight7F" name="firstflight" type="radio" value="7F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;7F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight7F" title>
                                                            <div class="seat-number">
                                                                7F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 7-->
                                            <!--row 8-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    8
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight8A" name="firstflight" type="radio" value="8A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;8A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight8A" title>
                                                            <div class="seat-number">
                                                                8A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight8B" name="firstflight" type="radio" value="8B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;8B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight8B" title>
                                                            <div class="seat-number">
                                                                8B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight8C" name="firstflight" type="radio" value="8C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;8C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight8C" title>
                                                            <div class="seat-number">
                                                                8C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight8D" name="firstflight" type="radio" value="8D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;8D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight8D" title>
                                                            <div class="seat-number">
                                                                8D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight8E" name="firstflight" type="radio" value="8E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;8E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight8E" title>
                                                            <div class="seat-number">
                                                                8E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight8F" name="firstflight" type="radio" value="8F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;8F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight8F" title>
                                                            <div class="seat-number">
                                                                8F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 8-->
                                            <!--row 9-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    9
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight9A" name="firstflight" type="radio" value="9A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;9A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight9A" title>
                                                            <div class="seat-number">
                                                                9A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight9B" name="firstflight" type="radio" value="9B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;9B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight9B" title>
                                                            <div class="seat-number">
                                                                9B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight9C" name="firstflight" type="radio" value="9C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;9C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight9C" title>
                                                            <div class="seat-number">
                                                                9C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight9D" name="firstflight" type="radio" value="9D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;9D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight9D" title>
                                                            <div class="seat-number">
                                                                9D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight9E" name="firstflight" type="radio" value="9E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;9E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight9E" title>
                                                            <div class="seat-number">
                                                                9E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight9F" name="firstflight" type="radio" value="9F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;9F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight9F" title>
                                                            <div class="seat-number">
                                                                9F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 9-->
                                            <!--row 10-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    10
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight10A" name="firstflight" type="radio" value="10A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;10A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight10A" title>
                                                            <div class="seat-number">
                                                                10A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight10B" name="firstflight" type="radio" value="10B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;10B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight10B" title>
                                                            <div class="seat-number">
                                                                10B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight10C" name="firstflight" type="radio" value="10C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;10C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight10C" title>
                                                            <div class="seat-number">
                                                                10C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight10D" name="firstflight" type="radio" value="10D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;10D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight10D" title>
                                                            <div class="seat-number">
                                                                10D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight10E" name="firstflight" type="radio" value="10E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;10E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight10E" title>
                                                            <div class="seat-number">
                                                                10E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight10F" name="firstflight" type="radio" value="10F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;10F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight10F" title>
                                                            <div class="seat-number">
                                                                10F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 10-->
                                        </div>
                                        <!--exit-->
                                        <div class="flight-exit">
                   <span class="exit-arrow left-exit">
                    <i class="icon-exit-arrow-left">
                    </i>
                   </span>
                                            <span class="exit-txt">
                    Exit
                   </span>
                                            <span class="exit-arrow right-exit">
                    <i class="icon-exit-arrow-right">
                    </i>
                   </span>
                                        </div>
                                        <!--exit-->
                                        <div class="flight-select-seat-wrap extra-leg-room">
                                            <!--row 11-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    11
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight11A" name="firstflight" type="radio" value="11A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;11A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight11A" title>
                                                            <div class="seat-number">
                                                                11A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight11B" name="firstflight" type="radio" value="11B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;11B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight11B" title>
                                                            <div class="seat-number">
                                                                11B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight11C" name="firstflight" type="radio" value="11C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;11C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight11C" title>
                                                            <div class="seat-number">
                                                                11C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight11D" name="firstflight" type="radio" value="11D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;11D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight11D" title>
                                                            <div class="seat-number">
                                                                11D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight11E" name="firstflight" type="radio" value="11E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;11E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight11E" title>
                                                            <div class="seat-number">
                                                                11E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight11F" name="firstflight" type="radio" value="11F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;11F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight11F" title>
                                                            <div class="seat-number">
                                                                11F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 11-->
                                        </div>
                                        <!--exit-->
                                        <div class="flight-exit">
                   <span class="exit-arrow left-exit">
                    <i class="icon-exit-arrow-left">
                    </i>
                   </span>
                                            <span class="exit-txt">
                    Exit
                   </span>
                                            <span class="exit-arrow right-exit">
                    <i class="icon-exit-arrow-right">
                    </i>
                   </span>
                                        </div>
                                        <!--exit-->
                                        <div class="flight-select-seat-wrap extra-leg-room">
                                            <!--row 12-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    12
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight12A" name="firstflight" type="radio" value="12A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;12A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight12A" title>
                                                            <div class="seat-number">
                                                                12A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight12B" name="firstflight" type="radio" value="12B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;12B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight12B" title>
                                                            <div class="seat-number">
                                                                12B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight12C" name="firstflight" type="radio" value="12C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;12C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight12C" title>
                                                            <div class="seat-number">
                                                                12C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight12D" name="firstflight" type="radio" value="12D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;12D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight12D" title>
                                                            <div class="seat-number">
                                                                12D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight12E" name="firstflight" type="radio" value="12E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;12E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight12E" title>
                                                            <div class="seat-number">
                                                                12E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight12F" name="firstflight" type="radio" value="12F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;12F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight12F" title>
                                                            <div class="seat-number">
                                                                12F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 12-->
                                        </div>
                                        <div class="flight-select-seat-wrap standard-seat">
                                            <!--row 13-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    13
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight13A" name="firstflight" type="radio" value="13A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;13A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight13A" title>
                                                            <div class="seat-number">
                                                                13A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight13B" name="firstflight" type="radio" value="13B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;13B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight13B" title>
                                                            <div class="seat-number">
                                                                13B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight13C" name="firstflight" type="radio" value="13C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;13C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight13C" title>
                                                            <div class="seat-number">
                                                                13C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight13D" name="firstflight" type="radio" value="13D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;13D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight13D" title>
                                                            <div class="seat-number">
                                                                13D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight13E" name="firstflight" type="radio" value="13E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;13E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight13E" title>
                                                            <div class="seat-number">
                                                                13E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight13F" name="firstflight" type="radio" value="13F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;13F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight13F" title>
                                                            <div class="seat-number">
                                                                13F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 13-->
                                            <!--row 14-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    14
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight14A" name="firstflight" type="radio" value="14A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;14A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight14A" title>
                                                            <div class="seat-number">
                                                                14A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight14B" name="firstflight" type="radio" value="14B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;14B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight14B" title>
                                                            <div class="seat-number">
                                                                14B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight14C" name="firstflight" type="radio" value="14C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;14C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight14C" title>
                                                            <div class="seat-number">
                                                                14C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight14D" name="firstflight" type="radio" value="14D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;14D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight14D" title>
                                                            <div class="seat-number">
                                                                14D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight14E" name="firstflight" type="radio" value="14E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;14E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight14E" title>
                                                            <div class="seat-number">
                                                                14E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight14F" name="firstflight" type="radio" value="14F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;14F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight14F" title>
                                                            <div class="seat-number">
                                                                14F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 14-->
                                            <!--row 15-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    15
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight15A" name="firstflight" type="radio" value="15A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;15A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight15A" title>
                                                            <div class="seat-number">
                                                                15A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight15B" name="firstflight" type="radio" value="15B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;15B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight15B" title>
                                                            <div class="seat-number">
                                                                15B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight15C" name="firstflight" type="radio" value="15C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;15C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight15C" title>
                                                            <div class="seat-number">
                                                                15C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight15D" name="firstflight" type="radio" value="15D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;15D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight15D" title>
                                                            <div class="seat-number">
                                                                15D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight15E" name="firstflight" type="radio" value="15E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;15E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight15E" title>
                                                            <div class="seat-number">
                                                                15E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight15F" name="firstflight" type="radio" value="15F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;15F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight15F" title>
                                                            <div class="seat-number">
                                                                15F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 15-->
                                            <!--row 16-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    16
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight16A" name="firstflight" type="radio" value="16A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;16A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight16A" title>
                                                            <div class="seat-number">
                                                                16A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight16B" name="firstflight" type="radio" value="16B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;16B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight16B" title>
                                                            <div class="seat-number">
                                                                16B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight16C" name="firstflight" type="radio" value="16C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;16C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight16C" title>
                                                            <div class="seat-number">
                                                                16C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight16D" name="firstflight" type="radio" value="16D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;16D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight16D" title>
                                                            <div class="seat-number">
                                                                16D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight16E" name="firstflight" type="radio" value="16E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;16E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight16E" title>
                                                            <div class="seat-number">
                                                                16E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight16F" name="firstflight" type="radio" value="16F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;16F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight16F" title>
                                                            <div class="seat-number">
                                                                16F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 16-->
                                            <!--row 17-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    17
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight17A" name="firstflight" type="radio" value="17A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;17A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight17A" title>
                                                            <div class="seat-number">
                                                                17A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight17B" name="firstflight" type="radio" value="17B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;17B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight17B" title>
                                                            <div class="seat-number">
                                                                17B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight17C" name="firstflight" type="radio" value="17C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;17C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight17C" title>
                                                            <div class="seat-number">
                                                                17C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight17D" name="firstflight" type="radio" value="17D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;17D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight17D" title>
                                                            <div class="seat-number">
                                                                17D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight17E" name="firstflight" type="radio" value="17E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;17E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight17E" title>
                                                            <div class="seat-number">
                                                                17E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight17F" name="firstflight" type="radio" value="17F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;17F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight17F" title>
                                                            <div class="seat-number">
                                                                17F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 17-->
                                            <!--row 18-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    18
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight18A" name="firstflight" type="radio" value="18A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;18A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight18A" title>
                                                            <div class="seat-number">
                                                                18A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight18B" name="firstflight" type="radio" value="18B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;18B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight18B" title>
                                                            <div class="seat-number">
                                                                18B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight18C" name="firstflight" type="radio" value="18C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;18C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight18C" title>
                                                            <div class="seat-number">
                                                                18C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight18D" name="firstflight" type="radio" value="18D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;18D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight18D" title>
                                                            <div class="seat-number">
                                                                18D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight18E" name="firstflight" type="radio" value="18E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;18E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight18E" title>
                                                            <div class="seat-number">
                                                                18E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight18F" name="firstflight" type="radio" value="18F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;18F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight18F" title>
                                                            <div class="seat-number">
                                                                18F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 18-->
                                            <!--row 19-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    19
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight19A" name="firstflight" type="radio" value="19A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;19A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight19A" title>
                                                            <div class="seat-number">
                                                                19A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight19B" name="firstflight" type="radio" value="19B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;19B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight19B" title>
                                                            <div class="seat-number">
                                                                19B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight19C" name="firstflight" type="radio" value="19C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;19C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight19C" title>
                                                            <div class="seat-number">
                                                                19C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight19D" name="firstflight" type="radio" value="19D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;19D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight19D" title>
                                                            <div class="seat-number">
                                                                19D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight19E" name="firstflight" type="radio" value="19E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;19E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight19E" title>
                                                            <div class="seat-number">
                                                                19E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight19F" name="firstflight" type="radio" value="19F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;19F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight19F" title>
                                                            <div class="seat-number">
                                                                19F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 19-->
                                            <!--row 20-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    20
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight20A" name="firstflight" type="radio" value="20A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;20A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight20A" title>
                                                            <div class="seat-number">
                                                                20A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight20B" name="firstflight" type="radio" value="20B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;20B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight20B" title>
                                                            <div class="seat-number">
                                                                20B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight20C" name="firstflight" type="radio" value="20C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;20C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight20C" title>
                                                            <div class="seat-number">
                                                                20C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight20D" name="firstflight" type="radio" value="20D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;20D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight20D" title>
                                                            <div class="seat-number">
                                                                20D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight20E" name="firstflight" type="radio" value="20E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;20E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight20E" title>
                                                            <div class="seat-number">
                                                                20E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight20F" name="firstflight" type="radio" value="20F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;20F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight20F" title>
                                                            <div class="seat-number">
                                                                20F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 20-->
                                            <!--row 21-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    21
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight21A" name="firstflight" type="radio" value="21A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;21A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight21A" title>
                                                            <div class="seat-number">
                                                                21A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight21B" name="firstflight" type="radio" value="21B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;21B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight21B" title>
                                                            <div class="seat-number">
                                                                21B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight21C" name="firstflight" type="radio" value="21C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;21C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight21C" title>
                                                            <div class="seat-number">
                                                                21C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight21D" name="firstflight" type="radio" value="21D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;21D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight21D" title>
                                                            <div class="seat-number">
                                                                21D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight21E" name="firstflight" type="radio" value="21E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;21E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight21E" title>
                                                            <div class="seat-number">
                                                                21E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight21F" name="firstflight" type="radio" value="21F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;21F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight21F" title>
                                                            <div class="seat-number">
                                                                21F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 21-->
                                            <!--row 22-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    22
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight22A" name="firstflight" type="radio" value="22A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;22A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight22A" title>
                                                            <div class="seat-number">
                                                                22A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight22B" name="firstflight" type="radio" value="22B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;22B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight22B" title>
                                                            <div class="seat-number">
                                                                22B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight22C" name="firstflight" type="radio" value="22C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;22C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight22C" title>
                                                            <div class="seat-number">
                                                                22C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight22D" name="firstflight" type="radio" value="22D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;22D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight22D" title>
                                                            <div class="seat-number">
                                                                22D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight22E" name="firstflight" type="radio" value="22E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;22E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight22E" title>
                                                            <div class="seat-number">
                                                                22E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight22F" name="firstflight" type="radio" value="22F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;22F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight22F" title>
                                                            <div class="seat-number">
                                                                22F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 22-->
                                            <!--row 23-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    23
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight23A" name="firstflight" type="radio" value="23A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;23A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight23A" title>
                                                            <div class="seat-number">
                                                                23A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight23B" name="firstflight" type="radio" value="23B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;23B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight23B" title>
                                                            <div class="seat-number">
                                                                23B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight23C" name="firstflight" type="radio" value="23C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;23C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight23C" title>
                                                            <div class="seat-number">
                                                                23C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight23D" name="firstflight" type="radio" value="23D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;23D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight23D" title>
                                                            <div class="seat-number">
                                                                23D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight23E" name="firstflight" type="radio" value="23E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;23E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight23E" title>
                                                            <div class="seat-number">
                                                                23E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight23F" name="firstfli" type="radio" value="23F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;23F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight23F" title>
                                                            <div class="seat-number">
                                                                23F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 23-->
                                            <!--row 24-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    24
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight24A" name="firstflight" type="radio" value="24A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;24A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight24A" title>
                                                            <div class="seat-number">
                                                                24A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight24B" name="firstflight" type="radio" value="24B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;24B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight24B" title>
                                                            <div class="seat-number">
                                                                24B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight24C" name="firstflight" type="radio" value="24C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;24C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight24C" title>
                                                            <div class="seat-number">
                                                                24C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight24D" name="firstflight" type="radio" value="24D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;24D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight24D" title>
                                                            <div class="seat-number">
                                                                24D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight24E" name="firstflight" type="radio" value="24E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;24E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight24E" title>
                                                            <div class="seat-number">
                                                                24E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight24F" name="firstflight" type="radio" value="24F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;24F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight24F" title>
                                                            <div class="seat-number">
                                                                24F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 24-->
                                            <!--row 25-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    25
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight25A" name="firstflight" type="radio" value="25A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;25A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight25A" title>
                                                            <div class="seat-number">
                                                                25A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight25B" name="firstflight" type="radio" value="25B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;25B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight25B" title>
                                                            <div class="seat-number">
                                                                25B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight25C" name="firstflight" type="radio" value="25C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;25C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight25C" title>
                                                            <div class="seat-number">
                                                                25C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight25D" name="firstflight" type="radio" value="25D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;25D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight25D" title>
                                                            <div class="seat-number">
                                                                25D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight25E" name="firstflight" type="radio" value="25E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;25E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight25E" title>
                                                            <div class="seat-number">
                                                                25E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight25F" name="firstflight" type="radio" value="25F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;25F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight25F" title>
                                                            <div class="seat-number">
                                                                25F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 25-->
                                            <!--row 26-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    26
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight26A" name="firstflight" type="radio" value="26A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;26A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight26A" title>
                                                            <div class="seat-number">
                                                                26A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight26B" name="firstflight" type="radio" value="26B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;26B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight26B" title>
                                                            <div class="seat-number">
                                                                26B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight26C" name="firstflight" type="radio" value="26C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;26C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight26C" title>
                                                            <div class="seat-number">
                                                                26C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight26D" name="firstflight" type="radio" value="26D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;26D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight26D" title>
                                                            <div class="seat-number">
                                                                26D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight26E" name="firstflight" type="radio" value="26E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;26E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight26E" title>
                                                            <div class="seat-number">
                                                                26E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight26F" name="firstflight" type="radio" value="26F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;26F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight26F" title>
                                                            <div class="seat-number">
                                                                26F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 26-->
                                            <!--row 27-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    27
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight27A" name="firstflight" type="radio" value="27A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;27A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight27A" title>
                                                            <div class="seat-number">
                                                                27A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight27B" name="firstflight" type="radio" value="27B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;27B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight27B" title>
                                                            <div class="seat-number">
                                                                27B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight27C" name="firstflight" type="radio" value="27C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;27C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight27C" title>
                                                            <div class="seat-number">
                                                                27C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight27D" name="firstflight" type="radio" value="27D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;27D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight27D" title>
                                                            <div class="seat-number">
                                                                27D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight27E" name="firstflight" type="radio" value="27E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;27E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight27E" title>
                                                            <div class="seat-number">
                                                                27E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight27F" name="firstflight" type="radio" value="27F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;27F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight27F" title>
                                                            <div class="seat-number">
                                                                27F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 27-->
                                            <!--row 28-->
                                            <div class="seat-row">
                                                <div class="seat-row-label">
                                                    28
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight28A" name="firstflight" type="radio" value="28A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;28A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight28A" title>
                                                            <div class="seat-number">
                                                                28A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight28B" name="firstflight" type="radio" value="28B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;28B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight28B" title>
                                                            <div class="seat-number">
                                                                28B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight28C" name="firstflight" type="radio" value="28C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;28C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight28C" title>
                                                            <div class="seat-number">
                                                                28C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight28D" name="firstflight" type="radio" value="28D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;28D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight28D" title>
                                                            <div class="seat-number">
                                                                28D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight28E" name="firstflight" type="radio" value="28E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;28E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight28E" title>
                                                            <div class="seat-number">
                                                                28E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight28F" name="firstflight" type="radio" value="28F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;28F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight28F" title>
                                                            <div class="seat-number">
                                                                28F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 28-->
                                            <!--row 29-->
                                            <div class="seat-row" id="seat-row-29">
                                                <div class="seat-row-label">
                                                    29
                                                </div>
                                                <div class="seat-col left-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight29A" name="firstflight" type="radio" value="29A">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;29A&lt;/span&gt;" data-tooltip="tooltip" for="firstflight29A" title>
                                                            <div class="seat-number">
                                                                29A
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight29B" name="firstflight" type="radio" value="29B">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;29B&lt;/span&gt;" data-tooltip="tooltip" for="firstflight29B" title>
                                                            <div class="seat-number">
                                                                29B
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight29C" name="firstflight" type="radio" value="29C">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;29C&lt;/span&gt;" data-tooltip="tooltip" for="firstflight29C" title>
                                                            <div class="seat-number">
                                                                29C
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight29D" name="firstflight" type="radio" value="29D">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;29D&lt;/span&gt;" data-tooltip="tooltip" for="firstflight29D" title>
                                                            <div class="seat-number">
                                                                29D
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight29E" name="firstflight" type="radio" value="29E">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;29E&lt;/span&gt;" data-tooltip="tooltip" for="firstflight29E" title>
                                                            <div class="seat-number">
                                                                29E
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox-wrap">
                                                        <input id="firstflight29F" name="firstflight" type="radio" value="29F">
                                                        <label data-html="true" data-original-title="&lt;span class='seat-num'&gt;29F&lt;/span&gt;" data-tooltip="tooltip" for="firstflight29F" title>
                                                            <div class="seat-number">
                                                                29F
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row 28-->
                                            <div class="seat-row seat-cols-label">
                                                <div class="seat-col left-col">
                                                    <div class="label">
                                                        A
                                                    </div>
                                                    <div class="label">
                                                        B
                                                    </div>
                                                    <div class="label">
                                                        C
                                                    </div>
                                                </div>
                                                <div class="seat-col right-col">
                                                    <div class="label">
                                                        D
                                                    </div>
                                                    <div class="label">
                                                        E
                                                    </div>
                                                    <div class="label">
                                                        F
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--exit-->
                                        <div class="flight-exit">
                   <span class="exit-arrow left-exit">
                    <i class="icon-exit-arrow-left">
                    </i>
                   </span>
                                            <span class="exit-txt">
                    Exit
                   </span>
                                            <span class="exit-arrow right-exit">
                    <i class="icon-exit-arrow-right">
                    </i>
                   </span>
                                        </div>
                                        <!--exit-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical" id="mCSB_1_scrollbar_vertical" style="display: block; visibility: hidden;">
                            <div class="mCSB_draggerContainer">
                                <div class="mCSB_dragger" id="mCSB_1_dragger_vertical" style="position: absolute; min-height: 50px; display: block; height: 378px; max-height: 1190px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 50px;">
                                    </div>
                                </div>
                                <div class="mCSB_draggerRail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
