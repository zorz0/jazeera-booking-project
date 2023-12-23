@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/ar-jo">
                                الصفحة الرئيسية
                            </a>
                        </li>
                        <li class="active">
                            سافر
                        </li>
                        <li class="active">
                            الوصول إلى المطار
                        </li>
                        <li class="active">
                            جدول رحلات الطيران
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="search-flights-wrapper">
            <div class="container">
                <div class="tab-panel">
                    <div class="panel-switch">
                        <a class="btn btn-switch" data-switch href="#flight-schedule">
                            جدول رحلات الطيران
                        </a>
                    </div>
                    <!--flightschedule-->
                    <!--R@esHelper.LocalizeString("flightscheduleTab", Culture)-->
                    <a class="btn btn-switch active" data-collapse href="#flight-schedule">
                        جدول رحلات الطيران
                    </a>
                    <div class="panel-data-wrapper active" data-panel id="flight-schedule">
                        <!--flight Schedule-->
                        <div class="sub-panel-data active" data-panel id="flightschedule">
                            <form action id="searchflightschedule" name="searchflightschedule">
                                <div class="form-wrap">
                                    <div class="form-row row">
                                        <div class="col-md-6 locations">
                                            <div class="form-file-label">
                                                <a class="close-popup" href="#">
                                                    <i class="icon icon-wrong">
                                                    </i>
                                                </a>
                                                <span class="icon icon-departure">
              </span>
                                                <div class="title">
                                                    <h5>
                                                        SelectDepatureAirport
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="form-field float-label-wrapper">
              <span class="icon">
               <i class="icon-pin">
               </i>
              </span>
                                                <label for="name">
                                                    من
                                                </label>
                                                <input autocomplete="off" class="form-control input-invert location-select from" id="from_flight_search_flightschedule" name="from_flight_search_flightschedule" placeholder="من" tabindex="1" type="text" value>
                                            </div>
                                        </div>
                                        <button class="btn switch-btn switchLocations">
                                        </button>
                                        <div class="col-md-6 locations disabled">
                                            <div class="form-file-label">
                                                <a class="close-popup" href="#">
                                                    <i class="icon icon-wrong">
                                                    </i>
                                                </a>
                                                <span class="icon icon-departure">
              </span>
                                                <div class="title">
                                                    <h5>
                                                        SelectReturningAirport
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="form-field float-label-wrapper">
              <span class="icon">
               <i class="icon-pin">
               </i>
              </span>
                                                <label for="name">
                                                    إلى
                                                </label>
                                                <input autocomplete="off" class="form-control input-invert location-select to" id="to_flight_search_flightschedule" name="to_flight_search_flightschedule" placeholder="إلى" tabindex="2" type="text" value>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row row group-field">
                                        <div class="col-md-6 static-parent">
                                            <div class="group-field-wrap daterangepicker-single">
                                                <div class="form-field float-label-wrapper">
               <span class="icon">
                <i class="icon-calender-range">
                </i>
               </span>
                                                    <label for="name">
                                                        تاريخ المغادرة
                                                    </label>
                                                    <input autocomplete="off" class="form-control input-invert single-date-picker-schedule datepicker" id="departure_flight_search_flightschedule" name="departure_flight_search_flightschedule" placeholder="تاريخ المغادرة" readonly tabindex="3" type="text">
                                                </div>
                                                <div class="range-picker-wrap first-grid">
                                                    <div class="form-file-label">
                                                        <a class="close-popup" href="#">
                                                            <i class="icon icon-wrong">
                                                            </i>
                                                        </a>
                                                        <span class="icon icon-calender">
                </span>
                                                        <div class="title">
                                                            <h5>
                                                                تاريخ المغادرة
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="range-picker" id="departure_flight_search_flightschedule_range_picker">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-wrap flight_shedule_button_div">
                                                <button class="btn btn-primary btn-lg btn-icon-right flight-schedule-search-btn">
                                                    بحث جدول الرحلات
                                                    <i class="icon icon-flight">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--flight Schedule-->
                    </div>
                    <!-- End flightschedule-->
                </div>
            </div>
        </section>
        <section class="search-wrapper" style="margin-top: 15px;">
            <div class="container" id="flightStatusResultContainerNew" style="overflow:auto;display:none">
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
