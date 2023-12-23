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
                            الوصول إلى المطار
                        </li>
                        <li class="active">
                            حالة الرحلة
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="search-flights-wrapper">
            <div class="container">
                <div class="tab-panel">
                    <div class="panel-switch">
                        <a class="btn btn-switch" data-switch href="#flight-status">
                            حالة الرحلة
                        </a>
                    </div>
                    <!--FlightStatus-->
                    <!--R@esHelper.LocalizeString("FlightStatusTab", Culture)-->
                    <a class="btn btn-switch" data-collapse href="#flight-status">
                        Flight Status
                    </a>
                    <div class="panel-data-wrapper active" data-panel id="flight-status">
                        <!--flight status-->
                        <div class="sub-panel-data active" data-panel id="flightStatus">
                            <form action id="searchFlightStatus" name="searchFlightStatus">
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
                                                        Select Departure Airport
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
                                                <input autocomplete="off" class="form-control input-invert location-select from" id="from_flight_search_flightstatus" name="from_flight_search_flightstatus" placeholder="من" tabindex="1" type="text" value>
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
                                                        Select Returning Airport
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
                                                <input autocomplete="off" class="form-control input-invert location-select to" id="to_flight_search_flightstatus" name="to_flight_search_flightstatus" placeholder="إلى" tabindex="2" type="text" value>
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
                                                    <input autocomplete="off" class="form-control input-invert flight-status-datepicker datepicker" id="departure_flight_search_flightstatus" name="departure_flight_search_flightstatus" placeholder="تاريخ المغادرة" readonly tabindex="3" type="text">
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
                                                                Choose your departure date
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="range-picker" id="departure_flight_search_flightstatus_range_picker">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-wrap search_flight_button_div">
              <span hidden id="flightStatusDomainCulture">
               https://localhost:44383/ar-kw
              </span>
                                                <button class="btn btn-primary btn-lg btn-icon-right flight-status-search-btn">
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
                        <!--flight status-->
                    </div>
                    <!-- End FlightStatus-->
                </div>
            </div>
        </section>
        <section class="search-wrapper" style="margin-top:15px;">
            <div class="container" id="flightStatusResultContainer" style="overflow:auto;display:none">
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
