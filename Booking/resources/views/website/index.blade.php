@extends('website.layout.app')
@section('content')
<main>
    <div>
        <section class="banner" id="homeBanner">
            <div class="wrapper slider_wrapper">
                <div class="slick-slider">
                    <div class="slide-item website_banners lazyload">
                        <div class="homeslicksliderbanner" onclick="window.location.href='javascript:void(0);';"
                            style="background-image: url(/images/vetrina-jordan-holiday-ar.jpg); width:100%;height:100%;display:block;background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="slide-item website_banners lazyload">
                        <div class="homeslicksliderbanner" onclick="window.location.href='javascript:void(0);';"
                            style="background-image: url(/images/vetrina-jordan-kuwait-ar.jpg); width:100%;height:100%;display:block;background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="slide-item website_banners lazyload">
                        <div class="homeslicksliderbanner" onclick="window.location.href='javascript:void(0);';"
                            style="background-image: url(/images/vetrina-jordan-almaty-ar.jpg); width:100%;height:100%;display:block;background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="slide-item website_banners lazyload">
                        <div class="homeslicksliderbanner" onclick="window.location.href='javascript:void(0);';"
                            style="background-image: url(/images/vetrina-jordan-bahrain-ar.jpg); width:100%;height:100%;display:block;background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="slide-item website_banners lazyload">
                        <div class="homeslicksliderbanner" onclick="window.location.href='javascript:void(0);';"
                            style="background-image: url(/images/vetrina-jordan-colombo-ar.jpg); width:100%;height:100%;display:block;background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div>
                    <div class="slide-item website_banners lazyload">
                        <div class="homeslicksliderbanner" onclick="window.location.href='javascript:void(0);';"
                            style="background-image: url(/images/vetrina-jordan-moscow-ar.jpg); width:100%;height:100%;display:block;background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
        $(document).ready(function() {
            try {
                $(".slick-slider").slick({
                    speed: 1000,
                    autoplay: true,
                    dots: true,
                    nav: true,
                    prevArrow: '<div class="slick-prev"></div>',
                    nextArrow: '<div class="slick-next"></div>',
                });
            } catch (e) {}
        });
        </script>
        <style>
        .slick-dots {
            >li {
                display: inline-block;
            }

            >li:only-child {
                display: none;
            }

            .newbanner {
                position: absolute;
                background: rgb(24, 75, 146);
                background: -moz-linear-gradient(90deg, rgba(24, 75, 146, 0.9192051820728291) 29%, rgba(24, 75, 146, 0.06206232492997199) 88%);
                background: -webkit-linear-gradient(90deg, rgba(24, 75, 146, 0.9192051820728291) 29%, rgba(24, 75, 146, 0.06206232492997199) 88%);
                background: linear-gradient(90deg, rgba(24, 75, 146, 0.9192051820728291) 29%, rgba(24, 75, 146, 0.06206232492997199) 88%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#184B92", endColorstr="#184B92", GradientType=1);
            }
        </style>
        <style>
        .passenger_type {
            margin-left: 3px;
        }

        #return .group-field-wrap {
            width: 269px;
        }

        .panel-data-wrapper.active.new-class-for-panel.sticky {
            width: 1366px;
            left: 0px !important;
        }

        .hide_multicity_passenger {
            /*  display: flex !important;*/
        }

        .new_multi_2_sticky {
            /*display: flex !important;*/
            /*  margin-top:30px;*/
        }

        #flights.new-class-for-panel {
            top: 0px !important;
            position: fixed !important;
            width: 100%;
            left: 0px;
            /*height:119%*/
        }

        #flights.new-class-for-panel.sticky .booking_return_btn.active {
            background-color: #1D4992;
            height: 30px;
        }

        #flights.new-class-for-panel.sticky .booking_oneway_btn.active {
            background-color: #1D4992;
            height: 30px;
        }

        #flights.new-class-for-panel.sticky .booking_multi_btn.active {
            background-color: #1D4992;
            height: 30px;
            /*height:100%*/
        }

        #flights.new-class-for-panel .switch-sub-panel {
            width: 100%;
            max-width: 1201px;
            margin: 0px auto;
        }

        #flights.new-class-for-panel .sub-panel-data.active {
            width: 100%;
            max-width: 1201px;
            margin: 0px auto;
        }

        .new-sticky-class-for-down.sticky {
            /* top: 61px !important;
        position:fixed !important;
        width:1304px !important;
       left:31px !important;*/
            /*  max-width:97%;*/
        }

        .sticky-fields {
            position: relative;
            /*height:98px;*/
        }

        .oneway-sticky-fields {
            position: relative;
        }

        .oneway-sticky-fields.sticky {
            position: fixed;
            top: 41px;
            left: 0;
            width: 100%;
            background-color: #1D4992;
            z-index: 100;
            height: 100px;
            padding: 16px 16px 16px 16px;
            text-align: -webkit-center;
        }

        .form-row row form-wrap active #demo {
            position: relative;
        }

        #demo.form-row row form-wrap active .sticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #1D4992;
            z-index: 100;
        }

        .sticky-fields.sticky {
            position: fixed;
            top: 41px;
            left: 0;
            width: 100%;
            background-color: #1D4992;
            z-index: 100;
            height: 98px;
            padding: 16px 16px 0px 16px;
        }

        /*#OnewayDisableInput {
   padding-right: 12%;
}*/
        #multicity-sticky.sticky-fields.sticky {
            position: fixed;
            top: 41px;
            left: 0;
            width: 100%;
            background-color: #1D4992;
            z-index: 100;
            height: 98px;
            padding: 16px 74px 0px 74px;
        }

        #multicity-sticky.sticky-fields.sticky.multicity_sticky_div {
            position: unset !important;
            padding: 0;
        }

        .sticky-fields.sticky .location-select.active {
            background-color: #F5F5F5;
        }

        .sticky-fields.sticky input::-webkit-search-cancel-button {
            display: none;
        }

        .sticky-fields.sticky input::-ms-clear {
            display: none;
        }

        .sticky-fields.sticky input::-moz-clear {
            display: none;
        }

        .sticky-fields .widjet-adding-class {
            display: flex;
            justify-content: flex-start;
            /*align-items:center;*/
        }

        .sticky-fields.sticky .widjet-adding-class {
            justify-content: center;
        }

        .sticky-fields.sticky .booking-widgit {
            max-width: 43.755% !important;
        }

        .sticky-fields .booking-widgit {
            max-width: 50.755% !important;
        }

        /*  #flight_search_promo_code .input-invert{
        position:fixed;
    }
    #flight_search_promo_code_oneway .input-invert{
        position:fixed;
    }*/
        @Media (min-width:320px) and (max-width:449px) {
            .new_multi_2_sticky {
                margin-top: 30% !important;
            }
        }

        @Media (min-width:450px) and (max-width:991px) {
            .new_multi_2_sticky {
                margin-top: 17% !important;
            }
        }

        .over.sticky {
            position: fixed;
            top: 0;
            width: 100%;
            left: 0;
            padding: 19px 0px 0px 112px;
        }
        </style>
        <section class="search-flights-wrapper" id="outside-click">
            <div class="container">
                <div class="tab-panel">
                    <div class="panel-switch flighttabs">
                        <a href="#flights" id="flights-in-url" class="btn btn-switch active booking_flights"
                            data-switch>&#x631;&#x62D;&#x644;&#x627;&#x62A;
                            &#x637;&#x64A;&#x631;&#x627;&#x646;</a>
                        <a href="#manage-booking" id="mngBookingHomePage" class="btn btn-switch"
                            data-switch>&#x625;&#x62F;&#x627;&#x631;&#x629;
                            &#x627;&#x644;&#x62D;&#x62C;&#x632;</a>
                        <a href="#check-in" id="check-in-url" class="btn btn-switch"
                            data-switch>&#x62A;&#x633;&#x62C;&#x64A;&#x644; &#x635;&#x639;&#x648;&#x62F;
                            &#x627;&#x644;&#x637;&#x627;&#x626;&#x631;&#x629;</a>



                        <a href="#hotels" class="btn btn-switch"
                            data-switch>&#x627;&#x644;&#x641;&#x646;&#x627;&#x62F;&#x642;</a>
                    </div>
                    <a href="#flights" class="btn btn-switch active" id="flights-in-url" data-collapse>Flights</a>
                    <div class="panel-data-wrapper active sticky" id="flights" data-panel>

                        <div class="switch-sub-panel">
                            <a href="#return" class="btn btn-link btn-switch autobind active booking_return_btn"
                                data-switch>&#x630;&#x647;&#x627;&#x628; &#x648;&#x639;&#x648;&#x62F;&#x629;</a>
                            <a href="#one-way" class="btn btn-link btn-switch booking_oneway_btn"
                                data-switch>&#x627;&#x62A;&#x62C;&#x627;&#x647; &#x648;&#x627;&#x62D;&#x62F;</a>
                            <a href="#multi-city" class="btn btn-link btn-switch booking_multi_btn"
                                data-switch>&#x648;&#x62C;&#x647;&#x627;&#x62A;
                                &#x645;&#x62A;&#x639;&#x62F;&#x62F;&#x629;</a>
                        </div>

                        <!--return-->
                        <div class="sub-panel-data active" id="return" data-panel>
                            <form action="/" method="post" id="searchReturnFlight" name="searchReturnFlight">
                                <div class="sticky-fields" id="to-input-reset">
                                    <div class="form-wrap">

                                        <div class="form-row row location-ltr widjet-adding-class">
                                            <div class="col-md-6 locations booking-widgit">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-departure"></span>
                                                    <div class="title">
                                                        <h5>SelectDepatureAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable from_terms_activate"
                                                        id="from_terms_applicable" data-toggle="modal"
                                                        data-target="#from_termsApplyModal">Terms applicable for
                                                        the selection *</span>
                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label for="name">&#x645;&#x646;</label>
                                                    <input id="from_flight_search" name="from_flight_search" type="text"
                                                        class="form-control input-invert location-select from" value=""
                                                        autocomplete="off" placeholder="&#x645;&#x646;" tabindex="1">
                                                </div>
                                            </div>
                                            <button class="btn switch-btn switchLocations"></button>
                                            <div class="col-md-6 locations travel-advisory-to disabled booking-widgit"
                                                id="disableInput">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-return"></span>
                                                    <div class="title">
                                                        <h5>SelectReturningAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable to_terms_activate"
                                                        id="to_terms_applicable" data-toggle="modal"
                                                        data-target="#to_termsApplyModal">Terms applicable for
                                                        the selection *</span>
                                                    <span class="inline-message inline-message-ui"
                                                        style="display:none;">CheckAdvisory</span>
                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label for="name">&#x625;&#x644;&#x649;</label>
                                                    <input id="to_flight_search" name="to_flight_search" type="text"
                                                        class="form-control input-invert location-select to" value=""
                                                        autocomplete="off" placeholder="&#x625;&#x644;&#x649;"
                                                        tabindex="2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row hidden return_date_picker" id="ClickHideReturn">
                                            <div class="col-md-6 group-field daterangepicker-group">
                                                <div class="checkbox-wrap primary isFlexibleCheckbox">
                                                    <input type="checkbox" name="flexibleDatesRoundDeparture"
                                                        id="flexibleDatesRoundDeparture">
                                                    <label for="flexibleDatesRoundDeparture">
                                                        &#x62A;&#x648;&#x627;&#x631;&#x64A;&#x62E;&#x64A;
                                                        &#x645;&#x631;&#x646;&#x629; (-/+ 3 days)
                                                    </label>
                                                </div>
                                                <div class="group-field-wrap">
                                                    <div class="form-field float-label-wrapper special_fare">
                                                        <span class="icon">
                                                            <i class="icon-calender-range"></i>
                                                        </span>
                                                        <label for="name">&#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                            &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;</label>
                                                        <input id="departure_flight_search"
                                                            name="departure_flight_search" type="text"
                                                            class="form-control input-invert datepicker travel-backdrop"
                                                            autocomplete="off"
                                                            placeholder="&#x62A;&#x627;&#x631;&#x64A;&#x62E; &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;"
                                                            tabindex="3" value="" readonly>
                                                    </div>
                                                    <div class="range-picker-wrap first-grid">
                                                        <div class="form-file-label">
                                                            <a href="#" class="close-popup"><i
                                                                    class="icon icon-wrong"></i></a>
                                                            <span class="icon icon-calender"></span>
                                                            <div class="title">
                                                                <h5>Departure Date</h5>
                                                            </div>
                                                        </div>
                                                        <div class="header">
                                                            <h5>&#x627;&#x62E;&#x62A;&#x631;
                                                                &#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                                &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;
                                                            </h5>
                                                        </div>
                                                        <div class="range-picker" id="departure_flight_date_range">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="group-field-wrap">
                                                    <div class="form-field float-label-wrapper booking_date_return">
                                                        <span class="icon">
                                                            <i class="icon-calender-range"></i>
                                                        </span>
                                                        <label for="name">&#x630;&#x647;&#x627;&#x628;
                                                            &#x648;&#x639;&#x648;&#x62F;&#x629;</label>
                                                        <input id="return_flight_search" name="return_flight_search"
                                                            type="text"
                                                            class="form-control input-invert datepicker travel-backdrop1"
                                                            autocomplete="off"
                                                            placeholder="&#x630;&#x647;&#x627;&#x628; &#x648;&#x639;&#x648;&#x62F;&#x629;"
                                                            tabindex="4" value="" readonly>
                                                    </div>
                                                    <div class="range-picker-wrap second-grid">
                                                        <div class="form-file-label">
                                                            <a href="#" class="close-popup"><i
                                                                    class="icon icon-wrong"></i></a>
                                                            <span class="icon icon-calender"></span>
                                                            <div class="title">
                                                                <h5>ReturnDate</h5>
                                                            </div>
                                                        </div>
                                                        <div class="header">
                                                            <h5>&#x627;&#x62E;&#x62A;&#x631;
                                                                &#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                                &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;
                                                            </h5>
                                                            <div class="checkbox-wrap primary">
                                                                <input type="checkbox" name="flexibleDatesRoundReturn"
                                                                    id="flexibleDatesRoundReturn">
                                                            </div>
                                                        </div>
                                                        <div class="range-picker" id="return_flight_date_range">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-0">
                                                <div class="form-field float-label-wrapper passengers_field">
                                                    <span class="icon">
                                                        <i class="icon-adult"></i>
                                                    </span>
                                                    <label for="name">&#x631;&#x643;&#x627;&#x628;</label>
                                                    <input id="passengers_flight_search" name="passengers_flight_search"
                                                        type="text"
                                                        class="form-control input-invert dropdown-toggle passengercount"
                                                        data-toggle="dropdown-menu" autocomplete="off" placeholder=""
                                                        tabindex="5" value="1 &#x628;&#x627;&#x644;&#x63A;" readonly>
                                                    <div class="dropdown-menu passengers_flight_search_list">
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x628;&#x627;&#x644;&#x63A;</strong> (
                                                                &#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                12+ )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x628;&#x627;&#x644;&#x63A;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button type="button" id="roundAdult_btn_down"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="1" data-min="1"
                                                                        readonly="true" data-max="9" id="roundAdult"
                                                                        readonly="true">
                                                                    <button type="button" id="roundAdult_btn_up"
                                                                        data-spin="up">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x627;&#x644;&#x623;&#x637;&#x641;&#x627;&#x644;</strong>
                                                                (
                                                                &#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                2-11 )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x627;&#x644;&#x623;&#x637;&#x641;&#x627;&#x644;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button type="button" id="roundChild_btn_down"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="0" data-min="0"
                                                                        readonly="true" data-max="9" id="roundChild"
                                                                        readonly="true">
                                                                    <button type="button" id="roundChild_btn_up"
                                                                        data-spin="up">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x631;&#x636;&#x64A;&#x639;</strong> (
                                                                &#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                0-2 )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x631;&#x636;&#x64A;&#x639;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button type="button" id="roundInfant_btn_down"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="0" data-min="0"
                                                                        readonly="true" data-max="4" id="roundInfant"
                                                                        readonly="true">
                                                                    <button type="button" id="roundInfant_btn_up"
                                                                        data-spin="up" class="disabled">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="IfSaversReturn">
                                                            <div class="dropdown-option">
                                                                <h5>
                                                                    <strong>&#x645;&#x642;&#x639;&#x62F;
                                                                        &#x645;&#x632;&#x62F;&#x648;&#x62C;</strong>
                                                                    <div class="tooltip">
                                                                        <i class="fa fa-question-circle"></i>
                                                                        <span
                                                                            class="tooltiptext">&#x627;&#x62D;&#x62C;&#x632;
                                                                            &#x645;&#x642;&#x639;&#x62F;&#x627;&#x64B;
                                                                            &#x628;&#x62C;&#x648;&#x627;&#x631;&#x643;
                                                                            &#x644;&#x625;&#x628;&#x642;&#x627;&#x626;&#x647;
                                                                            &#x641;&#x627;&#x631;&#x63A;&#x627;&#x64B;
                                                                            &#x62E;&#x644;&#x627;&#x644;
                                                                            &#x627;&#x644;&#x631;&#x62D;&#x644;&#x629;<br><a
                                                                                href="{{ route('duo-seat') }}"
                                                                                target="_blank"
                                                                                style="color:#03618a;">&#x644;&#x645;&#x632;&#x64A;&#x62F;
                                                                                &#x645;&#x646;
                                                                                &#x627;&#x644;&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;
                                                                                &#x627;&#x636;&#x63A;&#x637;
                                                                                &#x647;&#x646;&#x627;</a></span>
                                                                    </div>
                                                                </h5>

                                                                <div class="spinner-wrap"
                                                                    data-label="&#x645;&#x642;&#x639;&#x62F; &#x645;&#x632;&#x62F;&#x648;&#x62C;">
                                                                    <div data-trigger="spinner" class="spinner-input">
                                                                        <button type="button" id="roundExtra_btn_down"
                                                                            data-spin="down">-</button>
                                                                        <input type="text" value="0" data-min="0"
                                                                            readonly="true" data-max="9" id="roundExtra"
                                                                            readonly="true">
                                                                        <button type="button" id="roundExtra_btn_up"
                                                                            data-spin="up" class="disabled">+</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="dropdown-arrow">
                                                        <i class="icon icon-arrow-down"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="btn-wrap align-right">
                                                    <button
                                                        class="btn btn-primary btn-lg btn-icon-right login-message-search search_btn"
                                                        onclick="loadAnalyticsDataForFlightsReturnType();">&#x628;&#x62D;&#x62B;
                                                        <i class="icon icon-flight"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-btn-wrap hidden travel-advisory-message div_jusify promo_code_values"
                                        id="hidingPromo" style="position:relative;margin-top:2%;">
                                        <div class="promo-wrap " style="height: 60px;">
                                            <div class="promo-info">

                                                <div class="form-row row promo-info-container">
                                                    <div class="col-md-6 group-field">
                                                        <div class="group-field-wrap">
                                                            <div
                                                                class="form-field float-label-wrapper promo_code_enter">
                                                                <label for="name"
                                                                    class="promo_code_enter">&#x623;&#x62F;&#x62E;&#x644;
                                                                    &#x627;&#x644;&#x631;&#x645;&#x632;
                                                                    &#x627;&#x644;&#x62A;&#x631;&#x648;&#x64A;&#x62C;&#x64A;</label>
                                                                <input id="flight_search_promo_code" type="text"
                                                                    class="form-control input-invert" autocomplete="off"
                                                                    value=""
                                                                    placeholder="&#x623;&#x62F;&#x62E;&#x644; &#x627;&#x644;&#x631;&#x645;&#x632; &#x627;&#x644;&#x62A;&#x631;&#x648;&#x64A;&#x62C;&#x64A;"
                                                                    tabindex="3" maxlength="20">
                                                                <span class="validate success">
                                                                    <i class="icon icon-correct"></i>
                                                                </span>
                                                                <span class="validate loading">
                                                                    <i class="icon icon-load-more"></i>
                                                                </span>
                                                                <span class="validate error">
                                                                    <i class="icon icon-wrong"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 promocode-message-container">
                                                        <span class="promocode-message" style="display:none;"><i
                                                                class="icon icon-load-info"></i>InvalidPromotionalCode</span>
                                                    </div>
                                                </div>



                                            </div>

                                        </div>
                                        <div
                                            class="form-row row promo-info-container passenger_type sepcial_fare_content">
                                            <div class="form-field float-label-wrapper special_fare_container_field">
                                                <label for="PaxType_return"
                                                    class="special_fare_rules">&#x623;&#x633;&#x639;&#x627;&#x631;
                                                    &#x62E;&#x627;&#x635;&#x629;</label>
                                                <select class="form-control input-invert dropdown-toggle passengercount"
                                                    name="Paxs" id="PaxTypes_return">
                                                    <option value="">None</option>
                                                </select>
                                                <span class="dropdown-arrow">
                                                    <i class="icon icon-arrow-down"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--return-->
                        <!--one-way-->
                        <div class="sub-panel-data" id="one-way" data-panel>
                            <form action="" id="searchOneWayFlight" name="searchOneWayFlight">
                                <div class="oneway-sticky-fields" id="OnewayToInputReset">
                                    <div class="form-wrap">
                                        <div class="form-row row widjet-adding-class">
                                            <div class="col-md-6 locations booking-widgit">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-departure"></span>
                                                    <div class="title">
                                                        <h5>SelectDepatureAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable from_terms_activate"
                                                        id="from_terms_applicable" data-toggle="modal"
                                                        data-target="#from_termsApplyModal">ta_lable</span>

                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label for="name">&#x645;&#x646;</label>
                                                    <input id="from_flight_search_oneway"
                                                        name="from_flight_search_oneway" type="text"
                                                        class="form-control input-invert location-select from" value=""
                                                        autocomplete="off" placeholder="&#x645;&#x646;" tabindex="1">
                                                </div>
                                            </div>
                                            <button class="btn switch-btn switchLocations"></button>
                                            <div class="col-md-6 locations disabled  travel-advisory-to"
                                                id="OnewayDisableInput">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-departure"></span>
                                                    <div class="title">
                                                        <h5>SelectReturningAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable to_terms_activate"
                                                        id="to_terms_applicable" data-toggle="modal"
                                                        data-target="#to_termsApplyModal">Terms applicable for
                                                        the selection *</span>
                                                    <span class="inline-message inline-message-ui"
                                                        style="display:none;">CheckAdvisory</span>
                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label for="name">&#x625;&#x644;&#x649;</label>
                                                    <input id="to_flight_search_oneway" name="to_flight_search_oneway"
                                                        type="text" class="form-control input-invert location-select to"
                                                        value="" autocomplete="off" placeholder="&#x625;&#x644;&#x649;"
                                                        tabindex="2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row group-field group_oneway_date hidden"
                                            id="OnewayClickHide">
                                            <div class="col-md-6 static-parent">
                                                <div class="group-field-wrap daterangepicker-single">
                                                    <div class="form-field float-label-wrapper">
                                                        <span class="icon">
                                                            <i class="icon-calender-range"></i>
                                                        </span>
                                                        <label for="name">&#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                            &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;</label>
                                                        <input id="departure_flight_search_oneway"
                                                            name="departure_flight_search_oneway" type="text"
                                                            class="form-control input-invert calendar-date-picker2 single-date-picker datepicker travel-backdrop"
                                                            autocomplete="off"
                                                            placeholder="&#x62A;&#x627;&#x631;&#x64A;&#x62E; &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;"
                                                            tabindex="3" readonly>
                                                    </div>
                                                    <div class="range-picker-wrap first-grid">
                                                        <div class="form-file-label">
                                                            <a href="#" class="close-popup"><i
                                                                    class="icon icon-wrong"></i></a>
                                                            <span class="icon icon-calender"></span>
                                                            <div class="title">
                                                                <h5>Departure Date</h5>
                                                            </div>
                                                        </div>
                                                        <div class="header">
                                                            <h5>&#x627;&#x62E;&#x62A;&#x631;
                                                                &#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                                &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;
                                                            </h5>
                                                            <div class="checkbox-wrap primary">
                                                                <input type="checkbox"
                                                                    name="flexibleDatesOneWayDeparture"
                                                                    id="flexibleDatesOneWayDeparture">
                                                                <label
                                                                    for="flexibleDatesOneWayDeparture">&#x62A;&#x648;&#x627;&#x631;&#x64A;&#x62E;&#x64A;
                                                                    &#x645;&#x631;&#x646;&#x629;</label>
                                                            </div>
                                                        </div>
                                                        <div id="departure_flight_search_oneway_range_picker"
                                                            class="range-picker"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-0">
                                                <div class="form-field float-label-wrapper">
                                                    <span class="icon">
                                                        <i class="icon-adult"></i>
                                                    </span>
                                                    <label for="name">&#x631;&#x643;&#x627;&#x628;</label>
                                                    <input id="passengers_flight_search_oneway"
                                                        name="passengers_flight_search_oneway" type="text"
                                                        class="form-control input-invert dropdown-toggle"
                                                        value="1 Adult" data-toggle="dropdown-menu" autocomplete="off"
                                                        placeholder=">&#x631;&#x643;&#x627;&#x628;" tabindex="4"
                                                        readonly>
                                                    <div class="dropdown-menu" class="passengers_flight_search_list">
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x628;&#x627;&#x644;&#x63A;</strong> (
                                                                &#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                12+ )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x628;&#x627;&#x644;&#x63A;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button id="oneWayAdult_btn_down" type="button"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="1" data-min="1"
                                                                        readonly="true" data-max="9" id="oneWayAdult">
                                                                    <button id="oneWayAdult_btn_up" type="button"
                                                                        data-spin="up">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x627;&#x644;&#x623;&#x637;&#x641;&#x627;&#x644;</strong>
                                                                (
                                                                &#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                2-11 )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x627;&#x644;&#x623;&#x637;&#x641;&#x627;&#x644;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button id="oneWayChild_btn_down" type="button"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="0" data-min="0"
                                                                        readonly="true" data-max="9" id="oneWayChild">
                                                                    <button id="oneWayChild_btn_up" type="button"
                                                                        data-spin="up">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x631;&#x636;&#x64A;&#x639;</strong> (
                                                                &#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                0-2 )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x631;&#x636;&#x64A;&#x639;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button id="oneWayInfant_btn_down" type="button"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="0" data-min="0"
                                                                        readonly="true" data-max="4" id="oneWayInfant">
                                                                    <button id="oneWayInfant_btn_up" type="button"
                                                                        data-spin="up" class="disabled">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="IfSaversOneway">
                                                            <div class="dropdown-option">
                                                                <h5>
                                                                    <strong>&#x645;&#x642;&#x639;&#x62F;
                                                                        &#x645;&#x632;&#x62F;&#x648;&#x62C;</strong>
                                                                    <div class="tooltip">
                                                                        <i class="fa fa-question-circle"></i>
                                                                        <span
                                                                            class="tooltiptext">&#x627;&#x62D;&#x62C;&#x632;
                                                                            &#x645;&#x642;&#x639;&#x62F;&#x627;&#x64B;
                                                                            &#x628;&#x62C;&#x648;&#x627;&#x631;&#x643;
                                                                            &#x644;&#x625;&#x628;&#x642;&#x627;&#x626;&#x647;
                                                                            &#x641;&#x627;&#x631;&#x63A;&#x627;&#x64B;
                                                                            &#x62E;&#x644;&#x627;&#x644;
                                                                            &#x627;&#x644;&#x631;&#x62D;&#x644;&#x629;<br><a
                                                                                href="{{ route('duo-seat') }}"
                                                                                target="_blank"
                                                                                style="color:#03618a;">&#x644;&#x645;&#x632;&#x64A;&#x62F;
                                                                                &#x645;&#x646;
                                                                                &#x627;&#x644;&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;
                                                                                &#x627;&#x636;&#x63A;&#x637;
                                                                                &#x647;&#x646;&#x627;</a></span>
                                                                    </div>
                                                                </h5>
                                                                <div class="spinner-wrap"
                                                                    data-label="&#x645;&#x642;&#x639;&#x62F; &#x645;&#x632;&#x62F;&#x648;&#x62C;">
                                                                    <div data-trigger="spinner" class="spinner-input">
                                                                        <button type="button" id="oneWayExtra_btn_down"
                                                                            data-spin="down">-</button>
                                                                        <input type="text" value="0" data-min="0"
                                                                            readonly="true" data-max="9"
                                                                            id="oneWayExtra" readonly="true">
                                                                        <button type="button" id="oneWayExtra_btn_up"
                                                                            data-spin="up" class="disabled">+</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="dropdown-arrow">
                                                        <i class="icon icon-arrow-down"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="btn-wrap align-right">
                                                    <button
                                                        class="btn btn-primary btn-lg btn-icon-right login-message-search search_btn"
                                                        onclick="loadAnalyticsDataForFlightsOneWayType();">&#x628;&#x62D;&#x62B;
                                                        <i class="icon icon-flight"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-btn-wrap hidden travel-advisory-message div_jusify oneway-sticky-promo sticky oneway_promo_code"
                                        id="hidingPromo1" style="position:relative;margin-top:2%;">
                                        <div class="promo-wrap" style="height: 60px;">
                                            <div class="promo-info">
                                                <div class="form-row row promo-info-container">
                                                    <div class="col-md-6 group-field">
                                                        <div class="group-field-wrap">
                                                            <div
                                                                class="form-field float-label-wrapper oneway_enter_promo_code">
                                                                <label for="name"
                                                                    class="promo_code_enter">&#x623;&#x62F;&#x62E;&#x644;
                                                                    &#x627;&#x644;&#x631;&#x645;&#x632;
                                                                    &#x627;&#x644;&#x62A;&#x631;&#x648;&#x64A;&#x62C;&#x64A;</label>
                                                                <input id="flight_search_promo_code_oneway" type="text"
                                                                    class="form-control input-invert" autocomplete="off"
                                                                    value=""
                                                                    placeholder="&#x623;&#x62F;&#x62E;&#x644; &#x627;&#x644;&#x631;&#x645;&#x632; &#x627;&#x644;&#x62A;&#x631;&#x648;&#x64A;&#x62C;&#x64A;"
                                                                    tabindex="3" maxlength="20">
                                                                <span class="validate success">
                                                                    <i class="icon icon-correct"></i>
                                                                </span>
                                                                <span class="validate loading">
                                                                    <i class="icon icon-load-more"></i>
                                                                </span>
                                                                <span class="validate error">
                                                                    <i class="icon icon-wrong"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 promocode-message-container">
                                                        <span class="promocode-message" style="display:none"><i
                                                                class="icon icon-load-info"></i>InvalidPromotionalCode</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="PassengerDiscount form-row row passenger_type">
                                            <div class="form-field float-label-wrapper oneway_special_fare_container">
                                                <label for="PaxType_oneway">&#x623;&#x633;&#x639;&#x627;&#x631;
                                                    &#x62E;&#x627;&#x635;&#x629;</label>
                                                <select name="Paxs" id="PaxTypes_oneway">
                                                    <option value="">None</option>
                                                </select>
                                                <span class="dropdown-arrow">
                                                    <i class="icon icon-arrow-down"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--one-way-->
                        <!--multi-city-->
                        <div class="sub-panel-data" id="multi-city" data-panel>
                            <form action="" id="searchMultiCityFlight" name="searchMultiCityFlight">
                                <!--1-->
                                <div class="sticky-fields new-sticky-class-for-down" id="multicity-sticky">
                                    <div class="form-row row form-wrap active multi_city_fileds_property">
                                        <div class="col-md-8 group-field locations_multicity d-flex">
                                            <div class="group-field-wrap locations col-md-6">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-departure"></span>
                                                    <div class="title">
                                                        <h5>SelectDepatureAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable from_terms_activate"
                                                        id="from_terms_applicable" data-toggle="modal"
                                                        data-target="#from_termsApplyModal">Terms applicable for
                                                        the selection *</span>
                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label for="from_flight_search_muticity1">&#x645;&#x646;</label>
                                                    <input id="from_flight_search_muticity1"
                                                        name="from_flight_search_muticity1" type="text"
                                                        class="form-control input-invert location-select from" value=""
                                                        autocomplete="off" placeholder="&#x645;&#x646;" tabindex="1">
                                                </div>
                                            </div>
                                            <div class="group-field-wrap locations col-md-6 disabled"
                                                id="mulicityInputDisable">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-departure"></span>
                                                    <div class="title">
                                                        <h5>SelectReturningAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable to_terms_activate"
                                                        id="to_terms_applicable" data-toggle="modal"
                                                        data-target="#to_termsApplyModal">Terms applicable for
                                                        the selection *</span>
                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label
                                                        for="to_flight_search_muticity1">&#x625;&#x644;&#x649;</label>
                                                    <input id="to_flight_search_muticity1"
                                                        name="to_flight_search_muticity1" type="text"
                                                        class="form-control input-invert location-select to" value=""
                                                        autocomplete="off" placeholder="&#x625;&#x644;&#x649;"
                                                        tabindex="2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 static-parent">
                                            <div class="group-field-wrap daterangepicker-single">
                                                <div class="form-field float-label-wrapper">
                                                    <span class="icon">
                                                        <i class="icon-calender-range"></i>
                                                    </span>
                                                    <label
                                                        for="departure_flight_search_muticity1">&#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                        &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;</label>
                                                    <input id="departure_flight_search_muticity1"
                                                        name="departure_flight_search_muticity1" type="text"
                                                        class="form-control input-invert single-date-picker travel-backdrop calendar-date-picker"
                                                        autocomplete="off"
                                                        placeholder="&#x62A;&#x627;&#x631;&#x64A;&#x62E; &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;"
                                                        tabindex="3" readonly>
                                                </div>
                                                <div class="range-picker-wrap third-grid">
                                                    <div class="form-file-label">
                                                        <a href="#" class="close-popup"><i
                                                                class="icon icon-wrong"></i></a>
                                                        <span class="icon icon-calender"></span>
                                                        <div class="title">
                                                            <h5>DepartureDate</h5>
                                                        </div>
                                                    </div>
                                                    <div class="header">
                                                        <h5>&#x627;&#x62E;&#x62A;&#x631;
                                                            &#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                            &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;
                                                        </h5>
                                                        <div class="checkbox-wrap primary" style="display:none">
                                                            <input type="checkbox"
                                                                name="flexibleDatesMultiCityDeparture1"
                                                                id="flexibleDatesMultiCityDeparture1">
                                                            <label
                                                                for="flexibleDatesMultiCityDeparture1">&#x62A;&#x648;&#x627;&#x631;&#x64A;&#x62E;&#x64A;
                                                                &#x645;&#x631;&#x646;&#x629;</label>
                                                        </div>
                                                    </div>
                                                    <div id="departure_flight_search_muticity1_range_picker"
                                                        class="range-picker"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--1-->
                                    <!--2-->
                                    <div class="form-row row form-wrap new_multi_2_sticky" id="addmulticity2sticky">
                                        <div class="col-md-8 group-field locations_multicity d-flex">
                                            <div class="group-field-wrap col-md-6 locations multicity-form-row">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-departure"></span>
                                                    <div class="title">
                                                        <h5>SelectDepatureAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable from_terms_activate1"
                                                        id="from_terms_applicable" data-toggle="modal"
                                                        data-target="#from_termsApplyModal">Terms applicable for
                                                        the selection *</span>
                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label for="from_flight_search_muticity2">&#x645;&#x646;</label>
                                                    <input id="from_flight_search_muticity2"
                                                        name="from_flight_search_muticity2" type="text"
                                                        class="form-control input-invert location-select from" value=""
                                                        autocomplete="off" placeholder="&#x645;&#x646;" tabindex="1">
                                                </div>
                                            </div>
                                            <div
                                                class="group-field-wrap col-md-6 locations travel-advisory-to travel-advisory-to-multicity">
                                                <div class="form-file-label">
                                                    <a href="#" class="close-popup"><i class="icon icon-wrong"></i></a>
                                                    <span class="icon icon-departure"></span>
                                                    <div class="title">
                                                        <h5>SelectReturningAirport</h5>
                                                    </div>
                                                </div>
                                                <div class="form-field float-label-wrapper">
                                                    <span class="terms_applicable to_terms_activate1"
                                                        id="to_terms_applicable" data-toggle="modal"
                                                        data-target="#to_termsApplyModal">Terms applicable for
                                                        the selection *</span>
                                                    <span
                                                        class="inline-message inline-message-ui inline-message-ui-multicity"
                                                        style="display:none;">CheckAdvisory</span>
                                                    <span class="icon">
                                                        <i class="icon-pin"></i>
                                                    </span>
                                                    <label
                                                        for="to_flight_search_muticity2">&#x625;&#x644;&#x649;</label>
                                                    <input id="to_flight_search_muticity2"
                                                        name="to_flight_search_muticity2" type="text"
                                                        class="form-control input-invert location-select to" value=""
                                                        autocomplete="off" placeholder="&#x625;&#x644;&#x649;"
                                                        tabindex="2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 static-parent">
                                            <div class="group-field-wrap daterangepicker-single">
                                                <div class="form-field float-label-wrapper">
                                                    <span class="icon">
                                                        <i class="icon-calender-range"></i>
                                                    </span>
                                                    <label
                                                        for="departure_flight_search_muticity2">&#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                        &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;</label>
                                                    <input id="departure_flight_search_muticity2"
                                                        name="departure_flight_search_muticity2" type="text"
                                                        class="form-control input-invert single-date-picker travel-backdrop1 calendar-date-picker1"
                                                        autocomplete="off"
                                                        placeholder="&#x62A;&#x627;&#x631;&#x64A;&#x62E; &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;"
                                                        tabindex="3" readonly>
                                                </div>
                                                <div class="range-picker-wrap third-grid">
                                                    <div class="form-file-label">
                                                        <a href="#" class="close-popup"><i
                                                                class="icon icon-wrong"></i></a>
                                                        <span class="icon icon-calender"></span>
                                                        <div class="title">
                                                            <h5>DepartureDate</h5>
                                                        </div>
                                                    </div>
                                                    <div class="header">
                                                        <h5>&#x627;&#x62E;&#x62A;&#x631;
                                                            &#x62A;&#x627;&#x631;&#x64A;&#x62E;
                                                            &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;
                                                        </h5>
                                                        <div class="checkbox-wrap primary" style="display:none">
                                                            <input type="checkbox"
                                                                name="flexibleDatesMultiCityDeparture2"
                                                                id="flexibleDatesMultiCityDeparture2">
                                                            <label
                                                                for="flexibleDatesMultiCityDeparture2">&#x62A;&#x648;&#x627;&#x631;&#x64A;&#x62E;&#x64A;
                                                                &#x645;&#x631;&#x646;&#x629;</label>
                                                        </div>
                                                    </div>
                                                    <div id="departure_flight_search_muticity2_range_picker"
                                                        class="range-picker"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--2-->
                                    <div class="hidden-field-group">
                                    </div>
                                    <div class="form-wrap">
                                        <div class="form-row row hide_multicity_passenger sticy_multi_passenger"
                                            id="hidemulticity">
                                            <div class="col-md-4">
                                                <div class="form-field float-label-wrapper">
                                                    <label for="name">&#x631;&#x643;&#x627;&#x628;</label>
                                                    <input id="passengers_flight_search_multi_city"
                                                        name="passengers_flight_search_multi_city" type="text"
                                                        class="form-control input-invert dropdown-toggle"
                                                        data-toggle="dropdown-menu" autocomplete="off"
                                                        placeholder="&#x631;&#x643;&#x627;&#x628;" tabindex="5"
                                                        value="1 &#x628;&#x627;&#x644;&#x63A;" readonly>
                                                    <div class="dropdown-menu" class="passengers_flight_search_list">
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x628;&#x627;&#x644;&#x63A;</strong>
                                                                (&#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                12+)</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x628;&#x627;&#x644;&#x63A;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button type="button" id="multiWayAdult_btn_down"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="1" data-min="1"
                                                                        readonly="true" data-max="9" id="multiWayAdult">
                                                                    <button type="button" id="multiWayAdult_btn_up"
                                                                        data-spin="up">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x627;&#x644;&#x623;&#x637;&#x641;&#x627;&#x644;</strong>
                                                                (&#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                2-11 )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x627;&#x644;&#x623;&#x637;&#x641;&#x627;&#x644;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button type="button" id="multiWayChildren_btn_down"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="0" data-min="0"
                                                                        readonly="true" data-max="9" id="multiWayChild">
                                                                    <button type="button" id="multiWayChildren_btn_up"
                                                                        data-spin="up">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-option">
                                                            <h5><strong>&#x631;&#x636;&#x64A;&#x639;</strong> (
                                                                &#x627;&#x644;&#x623;&#x639;&#x645;&#x627;&#x631;
                                                                0-2 )</h5>
                                                            <div class="spinner-wrap"
                                                                data-label="&#x631;&#x636;&#x64A;&#x639;">
                                                                <div data-trigger="spinner" class="spinner-input">
                                                                    <button type="button" id="multiWayInfant_btn_down"
                                                                        data-spin="down">-</button>
                                                                    <input type="text" value="0" data-min="0"
                                                                        readonly="true" data-max="4"
                                                                        id="multiWayInfant">
                                                                    <button type="button" id="multiWayInfant_btn_up"
                                                                        data-spin="up" class="disabled">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="IfSaversMulti">
                                                            <div class="dropdown-option">
                                                                <h5>
                                                                    <strong>&#x645;&#x642;&#x639;&#x62F;
                                                                        &#x645;&#x632;&#x62F;&#x648;&#x62C;</strong>
                                                                    <div class="tooltip">
                                                                        <i class="fa fa-question-circle"></i>
                                                                        <span
                                                                            class="tooltiptext">&#x627;&#x62D;&#x62C;&#x632;
                                                                            &#x645;&#x642;&#x639;&#x62F;&#x627;&#x64B;
                                                                            &#x628;&#x62C;&#x648;&#x627;&#x631;&#x643;
                                                                            &#x644;&#x625;&#x628;&#x642;&#x627;&#x626;&#x647;
                                                                            &#x641;&#x627;&#x631;&#x63A;&#x627;&#x64B;
                                                                            &#x62E;&#x644;&#x627;&#x644;
                                                                            &#x627;&#x644;&#x631;&#x62D;&#x644;&#x629;<br><a
                                                                                href="{{ route('duo-seat') }}"
                                                                                target="_blank"
                                                                                style="color:#03618a;">&#x644;&#x645;&#x632;&#x64A;&#x62F;
                                                                                &#x645;&#x646;
                                                                                &#x627;&#x644;&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;
                                                                                &#x627;&#x636;&#x63A;&#x637;
                                                                                &#x647;&#x646;&#x627;</a></span>
                                                                    </div>
                                                                </h5>
                                                                <div class="spinner-wrap"
                                                                    data-label="&#x645;&#x642;&#x639;&#x62F; &#x645;&#x632;&#x62F;&#x648;&#x62C;">
                                                                    <div data-trigger="spinner" class="spinner-input">
                                                                        <button type="button"
                                                                            id="multiWayExtra_btn_down"
                                                                            data-spin="down">-</button>
                                                                        <input type="text" value="0" data-min="0"
                                                                            readonly="true" data-max="9"
                                                                            id="multiWayExtra" readonly="true">
                                                                        <button type="button" id="multiWayExtra_btn_up"
                                                                            data-spin="up" class="disabled">+</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="dropdown-arrow">
                                                        <i class="icon icon-arrow-down"></i>
                                                    </span>
                                                </div>
                                                <!--
                                    <div class="group-field-wrap">
                                      <div class="form-field float-label-wrapper">
                                        <label for="name">Cabin Type</label>
                                        <select class="custom-select">
                                          <option>Economy Class</option>
                                          <option>Business Class</option>
                                        </select>
                                      </div>
                                    </div>
                                    -->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="btn-wrap align-right">
                                                    <button
                                                        class="btn btn-primary btn-lg btn-icon-right login-message-search search_btn px-3 w-100 sameOriginPopup"
                                                        onclick="loadAnalyticsDataForFlightsMultiCityType();">&#x628;&#x62D;&#x62B;
                                                        <i class="icon icon-flight"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btn-wrap hidden travel-advisory-message div_jusify"
                                        id="hidingPromo2" style="position:relative;margin-top:18px;">
                                        <div class="promo-wrap" style="height: 60px;">
                                            <div class="promo-info">
                                                <div class="form-row row promo-info-container">
                                                    <div class="col-md-6 group-field">
                                                        <div class="group-field-wrap">
                                                            <div class="form-field float-label-wrapper">
                                                                <label for="name"
                                                                    class="promo_code_enter">&#x623;&#x62F;&#x62E;&#x644;
                                                                    &#x627;&#x644;&#x631;&#x645;&#x632;
                                                                    &#x627;&#x644;&#x62A;&#x631;&#x648;&#x64A;&#x62C;&#x64A;</label>
                                                                <input id="flight_search_muticity_promo_code"
                                                                    type="text" class="form-control input-invert"
                                                                    autocomplete="off" value=""
                                                                    placeholder="&#x623;&#x62F;&#x62E;&#x644; &#x627;&#x644;&#x631;&#x645;&#x632; &#x627;&#x644;&#x62A;&#x631;&#x648;&#x64A;&#x62C;&#x64A;"
                                                                    tabindex="3" maxlength="20">
                                                                <span class="validate success">
                                                                    <i class="icon icon-correct"></i>
                                                                </span>
                                                                <span class="validate loading">
                                                                    <i class="icon icon-load-more"></i>
                                                                </span>
                                                                <span class="validate error">
                                                                    <i class="icon icon-wrong"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 promocode-message-container">
                                                        <span class="promocode-message" style="display:none"><i
                                                                class="icon icon-load-info"></i>InvalidPromotionalCode</span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="PassengerDiscount form-row row passenger_type">
                                            <div class="form-field float-label-wrapper">
                                                <label for="PaxType_multi">&#x623;&#x633;&#x639;&#x627;&#x631;
                                                    &#x62E;&#x627;&#x635;&#x629;</label>
                                                <select name="Paxs" id="PaxTypes_multi">
                                                    <option value="">None</option>
                                                </select>
                                                <span class="dropdown-arrow">
                                                    <i class="icon icon-arrow-down"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!--multi-city-->

                    </div>

                    <!--manage-booking-->
                    <a href="#manage-booking" class="btn btn-switch" id="mngBookingHomePage"
                        data-collapse>&#x625;&#x62F;&#x627;&#x631;&#x629;
                        &#x627;&#x644;&#x62D;&#x62C;&#x632;</a>
                    <div class="panel-data-wrapper" id="manage-booking" data-panel>
                        <form action="" id="manageBookingForm">
                            <div class="form-wrap">
                                <div class="form-row row">
                                    <div class="col-md-6">
                                        <div class="form-field float-label-wrapper">
                                            <label for="pnr_manage_boking"
                                                class="booking_conf_manage_booking">&#x631;&#x642;&#x645;
                                                &#x627;&#x644;&#x62D;&#x62C;&#x632;</label>
                                            <input id="pnr_manage_boking" name="pnr_manage_boking" type="text"
                                                class="form-control input-invert" autocomplete="off"
                                                placeholder="&#x631;&#x642;&#x645; &#x627;&#x644;&#x62D;&#x62C;&#x632;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field float-label-wrapper">
                                            <label for="email_manage_booking"
                                                class="booking_conf_manage_booking">&#x627;&#x644;&#x628;&#x631;&#x64A;&#x62F;
                                                &#x627;&#x644;&#x625;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A;
                                                / &#x627;&#x633;&#x645;
                                                &#x627;&#x644;&#x639;&#x627;&#x626;&#x644;&#x629;</label>
                                            <input id="email_manage_booking" name="email_manage_booking" type="text"
                                                class="form-control input-invert" autocomplete="off"
                                                placeholder="&#x627;&#x644;&#x628;&#x631;&#x64A;&#x62F; &#x627;&#x644;&#x625;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; / &#x627;&#x633;&#x645; &#x627;&#x644;&#x639;&#x627;&#x626;&#x644;&#x629;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row row" style="margin-left: 18px;display:none"
                                    id="Invalid_pnr_email_manage_booking">
                                    <label>InvalidPNROrEmailOrLastname</label>
                                </div>
                            </div>
                            <div class="form-btn-wrap hidden">
                                <div class="btn-wrap align-right">
                                    <button
                                        class="btn btn-primary btn-lg manageBookingHome">&#x625;&#x62F;&#x627;&#x631;&#x629;
                                        &#x627;&#x644;&#x62D;&#x62C;&#x632;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--manage-booking-->
                    <!--check-ins-->
                    <a href="#check-in" class="btn btn-switch" id="check-in-url"
                        data-collapse>&#x62A;&#x633;&#x62C;&#x64A;&#x644; &#x635;&#x639;&#x648;&#x62F;
                        &#x627;&#x644;&#x637;&#x627;&#x626;&#x631;&#x629;</a>
                    <div class="panel-data-wrapper" id="check-in" data-panel>
                        <form action="" id="searchcheckInForm">
                            <div class="form-wrap">
                                <div class="form-row row">
                                    <div class="col-md-6">
                                        <div class="form-field float-label-wrapper">
                                            <label for="pnr_checkin"
                                                class="booking_conf_check-in_booking">&#x631;&#x642;&#x645;
                                                &#x627;&#x644;&#x62D;&#x62C;&#x632;</label>
                                            <input id="pnr_checkin" name="pnr_checkin" type="text"
                                                class="form-control input-invert" autocomplete="off"
                                                placeholder="&#x631;&#x642;&#x645; &#x627;&#x644;&#x62D;&#x62C;&#x632;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field float-label-wrapper">
                                            <label for="email_checkin"
                                                class="booking_conf_check-in_booking">&#x627;&#x644;&#x628;&#x631;&#x64A;&#x62F;
                                                &#x627;&#x644;&#x625;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A;
                                                / &#x627;&#x633;&#x645;
                                                &#x627;&#x644;&#x639;&#x627;&#x626;&#x644;&#x629;</label>
                                            <input id="email_checkin" name="email_checkin" type="text"
                                                class="form-control input-invert" autocomplete="off"
                                                placeholder="&#x627;&#x644;&#x628;&#x631;&#x64A;&#x62F; &#x627;&#x644;&#x625;&#x644;&#x643;&#x62A;&#x631;&#x648;&#x646;&#x64A; / &#x627;&#x633;&#x645; &#x627;&#x644;&#x639;&#x627;&#x626;&#x644;&#x629;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row row" style="margin-left: 18px;display:none"
                                    id="Invalid_pnr_email_checkIn_booking">
                                    <label>InvalidPNROrEmailOrLastname</label>
                                </div>
                            </div>
                            <div class="form-btn-wrap hidden">
                                <div class="btn-wrap align-right">
                                    <button class="btn btn-primary btn-lg olcheckin"
                                        onclick="clevertapCheckIn()">OnlineCheckIn</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--check-ins-->
                    <!--Hotels-->
                    <a href="#hotels" class="btn btn-switch" data-collapse>Hotels</a>
                    <div id="hotels" class="panel-data-wrapper green-theme-hotels" data-panel>
                        <div id='b_container'></div>
                    </div>
                    <!--End hotels-->


                </div>
            </div>
        </section>
        <div id="traveladvisory_Body" class="container" style="display:none;">
            <div class="terms_applicable_modal-div-div maindiv">
                <h3 class="mt-3" style="margin-left:30px;"></h3>
                <div class="travel-advisory-scroller">
                    <div class="modal-body terms_applicable_modal_body travel-advisory advisory-space">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal login-message hide" tabindex="-1" role="dialog">
            <div class="modal-body">
                <h4>&#x647;&#x644; &#x623;&#x646;&#x62A; &#x648;&#x643;&#x64A;&#x644;
                    &#x633;&#x641;&#x631;&#x61F; &#x64A;&#x631;&#x62C;&#x649;
                    &#x627;&#x644;&#x636;&#x63A;&#x637; &#x647;&#x646;&#x627;
                    &#x644;&#x62A;&#x633;&#x62C;&#x64A;&#x644; &#x627;&#x644;&#x62F;&#x62E;&#x648;&#x644;</h4>
            </div>
            <div class="modal-footer">
                <button class="btn ta_modalclose" data-dismiss="modal"
                    aria-hidden="true">&#x625;&#x63A;&#x644;&#x627;&#x642;</button>
            </div>
        </div>


        <div id="from_termsApplyModal" class="modal hide terms_applicable_modal" tabindex="-1" role="dialog">
            <div class="terms_applicable_modal-div">
                <div class="terms_applicable_modal-div-div">
                    <a class="close" data-dismiss="modal"><i class="icon icon-wrong"></i></a>
                    <div class="modal-body terms_applicable_modal_body" id="from_termsApplyModal_Body">
                    </div>
                    <div class="modal-footer">
                        <button class="btn ta_modalclose" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal sameOrigin-message hide" tabindex="-1" role="dialog">
            <div class="modal-body ">
                <p style="text-align:center;"><b>Arrival city must be in country of origin.</b></p>
            </div>
            <div class="modal-footer">
                <button class="btn ta_modalclose" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- Overlay background for the popup -->
        <div id="overlaysaver" class="overlayclub"></div>
        <!-- Popup container -->

        <div id="popups" class="popup adults_popup" style="z-index: 999">
            <i onclick="cancel()" class="icon-wrong"></i>
            <i class="icon-exclamation" style="font-size: 30px; color: #184B92;"></i>
            <h2 class="adults_popup_heading">&#x644;&#x627; &#x64A;&#x645;&#x643;&#x646;
                &#x645;&#x62A;&#x627;&#x628;&#x639;&#x629; &#x627;&#x644;&#x62D;&#x62C;&#x632;</h2>
            <div class="adults_popup_para">
                <p>&#x62E;&#x637;&#x629; &#x633;&#x64A;&#x641;&#x631;&#x632; &#x643;&#x644;&#x648;&#x628;
                    &#x627;&#x644;&#x62E;&#x627;&#x635;&#x629; &#x628;&#x643; &#x647;&#x64A; <b id="detailsmem">
                    </b>. &#x64A;&#x631;&#x62C;&#x649; &#x627;&#x644;&#x62A;&#x623;&#x643;&#x62F; &#x645;&#x646;
                    &#x623;&#x646;&#x647; &#x62A;&#x645;&#x62A; &#x625;&#x636;&#x627;&#x641;&#x629;
                    &#x628;&#x64A;&#x627;&#x646;&#x627;&#x62A; &#x627;&#x644;&#x623;&#x639;&#x636;&#x627;&#x621;
                    &#x625;&#x644;&#x649; &#x642;&#x627;&#x626;&#x645;&#x629;
                    &#x627;&#x644;&#x645;&#x633;&#x627;&#x641;&#x631;&#x64A;&#x646;&#x60C; &#x623;&#x648;
                    &#x625;&#x646; &#x643;&#x627;&#x646;&#x62A; &#x628;&#x627;&#x642;&#x62A;&#x643;
                    &#x62A;&#x633;&#x645;&#x62D; &#x628;&#x639;&#x62F;&#x62F;
                    &#x627;&#x644;&#x623;&#x639;&#x636;&#x627;&#x621; &#x627;&#x644;&#x630;&#x64A;&#x646;
                    &#x62A;&#x645;&#x62A; &#x625;&#x636;&#x627;&#x641;&#x62A;&#x647;&#x645;
                    &#x623;&#x62B;&#x646;&#x627;&#x621; &#x627;&#x644;&#x62D;&#x62C;&#x632;.
                    &#x644;&#x625;&#x636;&#x627;&#x641;&#x629; &#x627;&#x644;&#x645;&#x632;&#x64A;&#x62F;
                    &#x645;&#x646; &#x627;&#x644;&#x645;&#x633;&#x627;&#x641;&#x631;&#x64A;&#x646;&#x60C;
                    &#x642;&#x645; &#x628;&#x62A;&#x633;&#x62C;&#x64A;&#x644;
                    &#x627;&#x644;&#x62E;&#x631;&#x648;&#x62C; &#x648;&#x627;&#x644;&#x62D;&#x62C;&#x632;
                    &#x643;&#x636;&#x64A;&#x641;&#x60C; &#x623;&#x648; &#x642;&#x645;
                    &#x628;&#x627;&#x644;&#x62A;&#x639;&#x62F;&#x64A;&#x644; &#x639;&#x644;&#x649;
                    &#x628;&#x627;&#x642;&#x62A;&#x643; &#x644;&#x644;&#x645;&#x632;&#x64A;&#x62F;
                    &#x645;&#x646; &#x627;&#x644;&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;.</p>
            </div>
            <div class="adults_popup_btn">
                <a href="https://booking.jazeeraairways.com/ar/?logout&amp;culture=ar-jo">
                    <button class="popup-btn btn-saverlogout adults_popup_btn1">
                        &#x62A;&#x633;&#x62C;&#x64A;&#x644; &#x62E;&#x631;&#x648;&#x62C;
                    </button>
                </a>
                <div>


                    <a href="/ar-kw/j9/subscriptions/spa/private-page/wallets" target="_blank">
                        <button class="popup-btn btn-saverlogout adults_popup_btn2">
                            &#x62A;&#x639;&#x62F;&#x64A;&#x644; &#x627;&#x644;&#x628;&#x627;&#x642;&#x629;
                        </button>
                    </a>
                </div>

            </div>
        </div>




        <script type="text/javascript">
        $(document).ready(function() {

            //$('#pnr_manage_boking').on("cut copy paste", function (e) {
            //    e.preventDefault();
            //});
            //$('#pnr_checkin').on("cut copy paste", function (e) {
            //    e.preventDefault();
            //});

            $("#IsSameLocation").change(function() {
                isSameAsDeparture();
            })

            function isSameAsDeparture() {
                if ($("#IsSameLocation").is(":checked")) {
                    $("#car_dropoff_panel").hide();
                } else {
                    $("#car_dropoff_panel").show();
                }
            }
            $("#hotelperpartoftrip").change(function() {
                ishotelperpartoftrip();
            })

            function ishotelperpartoftrip() {
                if ($("#hotelperpartoftrip").is(":checked")) {
                    $("#round-checkin-checkout").show();
                } else {
                    $("#round-checkin-checkout").hide();
                }
            }
            $("#oneWayhotelperpartoftrip").change(function() {
                ishotelperpartoftripforoneway();
            })

            function ishotelperpartoftripforoneway() {
                if ($("#oneWayhotelperpartoftrip").is(":checked")) {
                    $("#oneWay-checkin-checkout").show();
                } else {
                    $("#oneWay-checkin-checkout").hide();
                }
            }
        })
        </script>
        <script type="text/javascript">
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            //return "en-kw";
            return null;
        }

        function getDateInformat(date) {
            var d = new Date(date);
            return d.getFullYear() + "-" + d.getMonth() + "-" + d.getDate();
        }
        var userType = document.cookie.includes("agent_dashboardCookie") ? 'agent' : document.cookie.includes(
            "loggedInUser") ? 'member' : 'guest';
        var language = window.location.href.indexOf('/ar-') > 0 ? 'ar' : 'en';
        </script>


        <style>
        .overlayclub {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black background */
            z-index: 1;
        }

        /* Styles for the popup container */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            z-index: 2;
        }

        /* Close button style */
        .close-button {
            display: block;
            margin-top: 10px;
            cursor: pointer;
        }

        .iconsize {
            color: white;
            font-size: 20px;
        }

        /*.divp {
                                padding-top: 15px;
                                display: block !important;
                            }*/

        .divCenter1 {
            text-align: center;
            padding-top: 10px;
            line-height: 20px;
        }

        .divCenter {
            text-align: center;
            padding-top: 10px;
            line-height: 20px;
            color: rgb(0, 74, 151);
            margin-bottom: -5px !important;
            display: block !important;
        }

        .imgicon {
            text-align: center;
        }

        .imgicon img {
            width: 100px;
        }

        .divspace a {
            color: rgb(0, 74, 151) !important;
        }

        .newbody {
            padding-left: 11px;
            padding-right: 11px;
            /*padding-bottom: 18px;*/
        }

        .maindiv {
            padding: 0px !important;
            display: block !important;
        }

        .imgsize img {
            width: 110px;
        }

        .divspace {
            text-align: center;
            padding-top: 10px;
            line-height: 20px;
            color: rgb(0, 74, 151);
            display: block !important;
        }

        .imgsize {
            text-align: center;
            background-image: url(/assets/images/iconimg2.png);
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .cms-holiday-label {
            flex-flow: initial !important;
        }

        .cms-holiday-label-minwidth {
            min-width: 0px !important;
        }

        .dropdown-menu.g-custom-scroll {
            max-height: 450px;
            overflow: hidden;
            overflow-y: auto;
        }

        .dropdown-menu {
            width: 100%;
            border-radius: 0;
            margin: 0;
            border-top: 1px solid #c2b098;
            padding: 5px;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
            background: #fff;
            position: absolute;
            margin-bottom: 20px;
        }

        .open>.dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            top: 100%;
            left: 0;
            z-index: 1000;
            float: left;
            min-width: 160px;
            font-size: 14px;
            text-align: left;
            list-style: none;
            border: 1px solid rgba(0, 0, 0, 0.15);
        }

        .select-pax label {
            float: left;
            margin-top: 6px;
            margin-bottom: 2px;
            text-align: left;
            min-width: 100%;
            width: 100%;
        }

        .select-pax .ct-select-wrapper {
            width: 85px;
        }

        .select-pax .ct-select-wrapper {
            -webkit-box-flex: 1;
            flex: 1 1 auto;
            margin-left: 0;
        }

        .ct-select-wrapper {
            /*float: left;*/
            display: inline-block;
        }

        .select-pax .ct-select-wrapper label {
            font-size: 11px;
        }

        .select-pax label {
            float: left;
            margin-top: 6px;
            margin-bottom: 2px;
            text-align: left;
            min-width: 100%;
            width: 100%;
        }

        select.form-control {
            border: 1px solid #DED4C5;
            /*background: linear-gradient(to bottom, #fefefe 0%, #fcfcfc 12%, #e6e6e6 68%, #dcdcdc 100%);*/
            border-radius: 0;
        }

        .form-control1 {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 6px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }



        .add-more-rooms {
            float: left;
            width: 100%;
        }

        .add-more-rooms .remove-room {
            margin: 3px 0 6px 0;
            float: right;
            clear: both;
            font-size: 12px;
        }

        .add-more-rooms .add-room-btn {
            float: left;
            margin-top: 18px;
            margin-left: 10px;
            clear: both;
            text-decoration: underline;
        }

        .add-more-rooms .btn {
            display: block;
            margin-top: 10px;
            width: 100px;
            float: right;
        }

        .btn:visited,
        .btn:hover,
        .btn:visited:hover {
            color: #fff !important;
        }

        .btn:visited {
            color: #ffffff !important;
        }

        a:visited {
            color: #004a97;
        }

        a {
            color: #004a97;
        }

        .btn.btn-rounded a {
            background-color: var(--main-bg-color)
        }

        a:link {
            border-bottom-width: 1px;
            border-bottom-color: rgba(65, 78, 134, 0.3);
        }

        .page_home .btn {
            background: #40B4E5;
            color: #f4f4f4;
            text-align: center;
            margin: 0 auto;
            font-size: 14px;
            margin-bottom: 1px;
            line-height: 22px;
        }




        .form-group input {
            padding: 0;
            height: initial;
            width: initial;
            margin-bottom: 0;
            display: none;
            cursor: pointer;
        }

        .form-group label {
            position: relative;
            cursor: pointer;
        }

        .form-group label:before {
            content: '';
            -webkit-appearance: none;
            background-color: transparent;
            border: 2px solid #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
            padding: 8px;
            display: inline-block;
            position: relative;
            vertical-align: middle;
            cursor: pointer;
            margin-right: 5px;
            margin-top: -8px;
        }

        .form-group input:checked+label:after {
            content: '';
            display: block;
            position: absolute;
            top: 2px;
            left: 9px;
            width: 6px;
            height: 14px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }



        select.form-control:not([size]):not([multiple]) {
            height: calc(4.25rem + 2px) !important;
        }

        .holiday-dropdown {
            padding: 12px;
        }

        .dropdown-option .tooltip {
            position: relative;
            display: inline-block;
            opacity: 1;
        }

        .dropdown-option .tooltip .tooltiptext {
            visibility: hidden;
            width: 250px;
            background-color: #071c2c;
            color: #fff;
            text-align: center;
            border-radius: 0px;
            padding: 15px;
            /* Position the tooltip */
            position: absolute;
            z-index: 1;
            top: 150%;
            left: 50%;
            margin-left: -125px;
        }

        .dropdown-option .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent black transparent;
        }

        .dropdown-option .tooltip:hover .tooltiptext {
            visibility: visible;
            /*opacity: 1;*/
        }

        .agree-button {
            padding: 35px 85px;
            line-height: 6px;
            background: #ffce00;
            border-color: #ffce00;
            color: white;
            border-top: none;
            justify-content: center;
            height: 40px !important;
            font-size: 16px !important;
            padding: 6px 14px !important;
            line-height: 24px !important;
            color: #071C2C !important;
        }

        .agree-button:hover {
            background: #ffe166;
            border-color: #ffe166;
        }

        .login-message {
            max-width: 400px;
            max-height: 133px;
            overflow-y: auto;
            overflow-x: hidden;
            background: #fff;
            margin: 0 auto;
            top: 40%;
            text-align: center;
        }

        .login-message .modal-footer {
            justify-content: center;
        }

        .login-message .modal-footer .btn {
            background: #ffce00;
            border-color: #ffce00;
            color: #034992;
        }




        /*.termsagree-button{
                    display:none;
                }*/
        /*.isFlexibleCheckbox {
                                        position: absolute;
                                        top: 100px;
                                        z-index: 9999;
                                        left: 25%;
                                        display: none;
                                    }
                                    .isFlexibleCheckbox.active {
                                        display: block !important;
                                    }*/
        .sameOrigin-message {
            max-width: 400px;
            max-height: 138px;
            overflow-y: auto;
            overflow-x: hidden;
            background: #fff;
            margin: 0 auto;
            top: 30%;
        }
        </style>

        <script type="text/javascript">
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            //return "en-kw";
            return null;
        }

        function getDateInformat(date) {
            var d = new Date(date);
            return d.getFullYear() + "-" + d.getMonth() + "-" + d.getDate();
        }
        var userType = document.cookie.includes("agent_dashboardCookie") ? 'agent' : document.cookie.includes(
            "loggedInUser") ? 'member' : 'guest';
        var language = window.location.href.indexOf('/ar-') > 0 ? 'ar' : 'en';
        $(function() {
            var dataLayerOnLoad = {
                'BookingSectionPage': 'Home',
                'BookingSectionPanel': '', //Flights/holidays
                'TravelType': '', //Return/Oneway
                'Destination': '',
                'CheckInDate': '',
                'CheckOutate': '',
                'From': '',
                'To': '',
                'DepartureDate': '',
                'ReturnDate': '',
                'NoOfTickets': '',
                'Adults': '',
                'Kids': '',
                'Infants': '',
                'EventType': 'OnLoad',
                'CultureCode': getCookie('CultureInfo'),
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry ? localStorage.pageCountry.toUpperCase() : "",
                'channel': 'Web',
                'pos': 'J9WEB'

            };
            dataLayer = window.dataLayer = window.dataLayer || [];
            dataLayer.push(dataLayerOnLoad);
        });
        var bookingDate = new Date();

        function loadAnalyticsDataForFlightsReturnType() {

            var departDate = ($('#departure_flight_search').val());
            var returnDate = ($('#return_flight_search').val());
            var fromFlightReturn = $("#from_flight_search").val();
            var toFlightReturn = $("#to_flight_search").val();
            var dataLayerFlightSearchReturn = {
                'event': 'flight_search',
                'journeyRoute': /\(([^)]*)\)/.exec(fromFlightReturn)[1] + '-' + /\(([^)]*)\)/.exec(toFlightReturn)[
                    1], //Flights/holidays
                'journeyTripType': 'RoundTrip', //Return/Oneway
                'journeySource': /\(([^)]*)\)/.exec(fromFlightReturn)[1],
                'journeyDestination': /\(([^)]*)\)/.exec(toFlightReturn)[1],
                'journeyDepartDate': moment(departDate).format("YYYY-MM-DD"),
                'journeyReturnDate': moment(returnDate).format("YYYY-MM-DD"),
                'journeyBookingDate': moment(bookingDate).format("YYYY-MM-DD"), //Booking Date
                'noOfAdult': $("#roundAdult").val(),
                'noOfChild': $("#roundChild").val(),
                'noOfInfant': $("#roundInfant").val(),
                'noOfDuoSeat': $('#roundExtra').val(),
                'promoCode': $('#flight_search_promo_code').val(),
                'noOfStops': '0',
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry ? localStorage.pageCountry.toString().toUpperCase() : '',
                'channel': 'Web',
                'pos': 'J9WEB'


            };
            dataLayer.push(dataLayerFlightSearchReturn);
            //var departDate = new Date($('#departure_flight_search').val());
            //departDate.setMinutes(150);
            //var returnDate = ($('#return_flight_search').val());
            //returnDate.setMinutes(150);
            //            clevertap.event.push("FlightSearch", {
            //    "Trip Type": "Return",
            //    "Origin": /\(([^)]*)\)/.exec(fromFlightReturn)[1],
            //    "Destination": /\(([^)]*)\)/.exec(toFlightReturn)[1],
            //    "Departure Date": departDate,
            //    "Return Date": returnDate,
            //    "Adult": $("#roundAdult").val(),
            //    "Children": $("#roundChild").val(),
            //    "Infant": $("#roundInfant").val(),
            //                "Promo Code": $('#flight_search_promo_code').val(),
            //                "Duo Seat": $('#roundExtra').val(),
            //});

        }

        function loadAnalyticsDataForFlightsOneWayType() {
            // debugger;

            var departDate = ($('#departure_flight_search_oneway').val());
            var fromFlightOneway = $("#from_flight_search_oneway").val();
            var toFlightOneway = $("#to_flight_search_oneway").val();
            var dataLayerFlightSearchOneway = {

                'event': 'flight_search',
                'journeyRoute': /\(([^)]*)\)/.exec(fromFlightOneway)[1] + ' - ' + /\(([^)]*)\)/.exec(
                    toFlightOneway)[1], //Flights/holidays
                'journeyTripType': 'OneWay', //Return/Oneway
                'journeySource': /\(([^)]*)\)/.exec(fromFlightOneway)[1],
                'journeyDestination': /\(([^)]*)\)/.exec(toFlightOneway)[1],
                'journeyDepartDate': moment(departDate).format("YYYY-MM-DD"),
                'journeyBookingDate': moment(bookingDate).format("YYYY-MM-DD"), //Booking Date
                'noOfAdult': $("#oneWayAdult").val(),
                'noOfChild': $("#oneWayChild").val(),
                'noOfInfant': $("#oneWayInfant").val(),
                'noOfDuoSeat': $('#oneWayExtra').val(),
                'promoCode': $('#flight_search_promo_code_oneway').val(),
                'noOfStops': '0',
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry.toUpperCase(),
                'channel': 'Web',
                'pos': 'J9WEB'
                //$('#flight_search_promo_code').val()

            };
            dataLayer.push(dataLayerFlightSearchOneway);
            var departDate = new Date($('#departure_flight_search_oneway').val());
            departDate.setMinutes(150);
            //clevertap.event.push("FlightSearch", {
            //    "Trip Type": "One Way",
            //    "Origin": /\(([^)]*)\)/.exec(fromFlightOneway)[1],
            //    "Destination": /\(([^)]*)\)/.exec(toFlightOneway)[1],
            //    "Departure Date": departDate,
            //    "Adult": $("#OneWayAdult").val(),
            //    "Children": $("#OneWayChild").val(),
            //    "Infant": $("#OneWayInfant").val(),
            //    "Promo Code": $('#flight_search_promo_code_oneway').val(),
            //    "Duo Seat": $('#oneWayExtra').val()
            //});
        }

        function loadAnalyticsDataForFlightsMultiCityType() {
            var departDate = ($('#departure_flight_search_muticity1').val());
            var departDate2 = ($('#departure_flight_search_muticity2').val());
            var fromFlightMultiway1 = $("#from_flight_search_muticity1").val();
            var toFlightMultiway1 = $("#to_flight_search_muticity1").val();
            var fromFlightMultiway2 = $("#from_flight_search_muticity2").val();
            var toFlightMultiway2 = $("#to_flight_search_muticity2").val();
            //if ($("#from_flight_search_muticity1").val().split(',')[1] != $("#to_flight_search_muticity2").val().split(',')[1]) {
            //    preventDefault();
            //    $('.sameOrigin-message').modal('show');
            //}
            var dataLayerFlightSearchMultiway = {

                'event': 'flight_search',
                'journeyRoute': /\(([^)]*)\)/.exec(fromFlightMultiway1)[1] + '-' + /\(([^)]*)\)/.exec(
                        toFlightMultiway1)[1] + ',' + /\(([^)]*)\)/.exec(fromFlightMultiway2)[1] + '-' +
                    /\(([^)]*)\)/.exec(toFlightMultiway2)[1], //Flights/holidays
                'journeyTripType': 'MultiCity', //Return/Oneway
                'journeySource': /\(([^)]*)\)/.exec(fromFlightMultiway1)[1] + ',' + /\(([^)]*)\)/.exec(
                    fromFlightMultiway2)[1],
                'journeyDestination': /\(([^)]*)\)/.exec(toFlightMultiway1)[1] + ',' + /\(([^)]*)\)/.exec(
                    toFlightMultiway2)[1],
                'journeyDepartDate': moment(departDate).format("YYYY-MM-DD") + ',' + moment(departDate2).format(
                    "YYYY-MM-DD"),
                'journeyBookingDate': moment(bookingDate).format("YYYY-MM-DD"), //Booking Date
                'noOfAdult': $("#multiWayAdult").val(),
                'noOfChild': $("#multiWayChild").val(),
                'noOfInfant': $("#multiWayInfant").val(),
                'noOfDuoSeat': $('#multiWayExtra').val(),
                'promoCode': $('#flight_search_muticity_promo_code').val(),
                'noOfStops': '0',
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry.toUpperCase(),
                'channel': 'Web',
                'pos': 'J9WEB'
                //$('#flight_search_promo_code').val()

            };
            dataLayer.push(dataLayerFlightSearchMultiway);

            //var departDate = new Date($('#departure_flight_search_muticity1').val());
            //departDate.setMinutes(150);
            //var departDate2 = new Date($('#departure_flight_search_muticity2').val());
            //departDate2.setMinutes(150);
            //clevertap.event.push("FlightSearch", {
            //    "Trip Type": "Multi City",
            //    "Origin": /\(([^)]*)\)/.exec(fromFlightMultiway1)[1],
            //    "Destination": /\(([^)]*)\)/.exec(toFlightMultiway1)[1],
            //    "Departure Date": departDate,
            //    "Adult": $("#multiWayAdult").val(),
            //    "Children": $("#multiWayChild").val(),
            //    "Infant": $("#multiWayInfant").val(),
            //    "Promo Code": $('#flight_search_promo_code').val(),
            //    "Duo Seat": $('#multiWayExtra').val(),
            //});
            //clevertap.event.push("FlightSearch", {
            //    "Trip Type": "Multi City",
            //    "Origin": /\(([^)]*)\)/.exec(fromFlightMultiway2)[1],
            //    "Destination": /\(([^)]*)\)/.exec(toFlightMultiway2)[1],
            //    "Departure Date": departDate2,
            //    "Adult": $("#multiWayAdult").val(),
            //    "Children": $("#multiWayChild").val(),
            //    "Infant": $("#multiWayInfant").val(),
            //    "Promo Code": $('#flight_search_promo_code').val(),
            //    "Duo Seat": $('#multiWayExtra').val(),
            //});
        }

        $(".b-aff__submit--button").click(function() {
            loadAnalyticsDataForHotels();
        });

        function loadAnalyticsDataForHotels() {
            //debugger;
            var dataLayerHotels = {
                'BookingSectionPage': 'Home',
                'BookingSectionPanel': 'Hotels', //Flights/holidays
                'TravelType': '', //Return/Oneway
                'Destination': $("#b_destination").val(),
                'CheckInDate': $("#checkInDate").val(),
                'CheckOutate': $("#checkOutDate").val(),
                'From': '',
                'To': '',
                'DepartureDate': '',
                'ReturnDate': '',
                'NoOfTickets': '',
                'Adults': '',
                'Kids': '',
                'Infants': '',
                'EventType': 'OnClick',
                'CultureCode': getCookie('CultureInfo'),
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry.toUpperCase(),
                'channel': 'Web',
                'pos': 'J9WEB'


            };
            dataLayer.push(dataLayerHotels);

        }


        //var country = getCookie('CultureInfo').split("-")
        //clevertap.event.push("WebLanded", {
        //    "Landed on home page": "Yes",
        //    "Country": country[1].toUpperCase(),
        //    "Consent for Browser Push Notification": "Yes",
        //});
        $('.slideshow').click(function() {


            dataLayer.push({
                'event': 'ctaClick',
                'ctaName': 'slider click',
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry.toUpperCase(),
                'channel': 'Web',
                'pos': 'J9WEB'
            });
        });
        $('.manageBookingHome').click(function() {
            dataLayer.push({
                'event': 'ctaClick',
                'ctaName': 'Manage Booking',
                'section': 'Manage Booking Widget',
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry.toUpperCase(),
                'channel': 'Web',
                'pos': 'J9WEB'
            });
        });
        $('.olcheckin').click(function() {
            dataLayer.push({
                'event': 'ctaClick',
                'ctaName': 'Online Check-in',
                'section': 'Online Check-in Widget',
                'userType': userType,
                'language': language,
                'country': localStorage.pageCountry.toUpperCase(),
                'channel': 'Web',
                'pos': 'J9WEB'
            });
        });
        $('.flighttabs').click(function(e) {
            var target = $(e.target);
            var homeTabsClick;
            if (target.is('.flighttabs a')) {
                homeTabsClick = {
                    'event': 'ctaClick',
                    'ctaName': e.target.innerText,
                    'section': 'Booking Widget',
                    'userType': userType,
                    'language': language,
                    'country': (localStorage.pageCountry != undefined && localStorage.pageCountry != '') ?
                        localStorage.pageCountry.toUpperCase() : "",
                    'channel': 'Web',
                    'pos': 'J9WEB'
                };
            }
            dataLayer.push(homeTabsClick);
        });
        const popup = document.getElementById('popups');
        const overlay = document.getElementById('overlaysaver');
        // Function to show the popup
        function showPopup() {
            popup.style.display = 'block';
            overlay.style.display = 'block';
            userdetails();
        }

        // Function to close the popup
        function cancel() {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        }

        function userdetails() {
            var storedSaversData;
            if (sessionStorage.getItem('saveersList')) {
                storedSaversData = JSON.parse(sessionStorage.getItem('saveersList'));
            }
            console.log(storedSaversData);
            let paln = storedSaversData.plan.membership;
            let memberCount = storedSaversData.plan.maxBeneficiaries;
            document.getElementById("detailsmem").innerHTML = paln == 1 ?
                '&#x627;&#x644;&#x628;&#x627;&#x642;&#x629; &#x627;&#x644;&#x641;&#x631;&#x62F;&#x64A;&#x629;' : paln ==
                2 ?
                '&#x627;&#x644;&#x628;&#x627;&#x642;&#x629; &#x627;&#x644;&#x62B;&#x646;&#x627;&#x626;&#x64A;&#x629;' :
                paln == 3 ?
                '&#x627;&#x644;&#x628;&#x627;&#x642;&#x629; &#x627;&#x644;&#x639;&#x627;&#x626;&#x644;&#x64A;&#x629; &#x623;' :
                '&#x627;&#x644;&#x628;&#x627;&#x642;&#x629; &#x627;&#x644;&#x639;&#x627;&#x626;&#x644;&#x64A;&#x629; &#x628;';
            //document.getElementById("passengerNum").innerHTML = memberCount;
        }
        </script>






        <style>
        @media(min-width:1200px) {
            #feature-deal-main-home.book-card-wrap.carousel-wrap .slick-item {
                max-width: 300px !important;
            }
        }
        </style>








        <section class="strip-panel get-little-extra">
            <div class="container">
                <div class="title block-title">
                    <h2> <strong><strong> &#x627;&#x644;&#x62E;&#x62F;&#x645;&#x627;&#x62A;
                                &#x627;&#x644;&#x625;&#x636;&#x627;&#x641;&#x64A;&#x629; &#x639;&#x646;&#x62F;
                                &#x627;&#x644;&#x633;&#x641;&#x631; </strong> </strong></h2>
                </div>
                <div class="panel-items-wrap">
                    <div class="panel-item">
                        <a href="{{ route('seat-selection') }}">
                            <div class="icon-wrap">
                                <i class="icon-seat"></i>
                            </div>
                            <div class="title-inner">
                                <h4 style="justify-content: center;">&#x627;&#x62D;&#x62C;&#x632;
                                    &#x645;&#x642;&#x639;&#x62F;&#x643;</h4>
                            </div>
                        </a>
                    </div>
                    <div class="panel-item">
                        <a href="{{ route('baggage-allowance') }}">
                            <div class="icon-wrap">
                                <i class="icon-suitcase"></i>
                            </div>
                            <div class="title-inner">
                                <h4 style="justify-content: center;">&#x634;&#x631;&#x627;&#x621;
                                    &#x648;&#x632;&#x646; &#x625;&#x636;&#x627;&#x641;&#x64A;</h4>
                            </div>
                        </a>
                    </div>
                    <div class="panel-item">
                        <a href="{{ route('jazeera-lounge') }}">
                            <div class="icon-wrap">
                                <i class="icon-lounge"></i>
                            </div>
                            <div class="title-inner">
                                <h4 style="justify-content: center;">&#x642;&#x627;&#x639;&#x629; Pearl</h4>
                            </div>
                        </a>
                    </div>
                    <div class="panel-item">
                        <a href="{{ route('flights-duty-free-onboard-shop') }}">
                            <div class="icon-wrap">
                                <i class="icon-tag"></i>
                            </div>
                            <div class="title-inner">
                                <h4 style="justify-content: center;">&#x627;&#x644;&#x633;&#x648;&#x642;
                                    &#x627;&#x644;&#x62D;&#x631;&#x651;&#x629;
                                    &#x648;&#x645;&#x62A;&#x62C;&#x631; &#x637;&#x64A;&#x631;&#x627;&#x646;
                                    &#x627;&#x644;&#x62C;&#x632;&#x64A;&#x631;&#x629;</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="features-scroller cards-grid-3">
                    <div class="carousel-wrap">
                        <div class="carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
                            <div class="slick-item promotionalItem" data-value="J Caf&#xE9;" style="height:578px">
                                <div class="card feature-card">
                                    <a href="{{ route('jazeeracafe') }}">
                                        <div class="card-img-wrap">
                                            <img class="card-img-top lazyload" src="/images/jazeera-cafe.jpg" alt="">
                                        </div>
                                        <div class="card-body" style="height:200px">
                                            <h2 class="card-title">J Caf&#xE9;</h2>
                                            <p>&#x64A;&#x645;&#x643;&#x646;&#x643; &#x637;&#x644;&#x628;
                                                &#x648;&#x62C;&#x628;&#x62A;&#x643;
                                                &#x645;&#x64F;&#x633;&#x628;&#x642;&#x627;&#x64B; &#x645;&#x646;
                                                &#x642;&#x627;&#x626;&#x645;&#x629;
                                                &#x627;&#x644;&#x637;&#x639;&#x627;&#x645;
                                                &#x627;&#x644;&#x62A;&#x64A; &#x62A;&#x648;&#x641;&#x651;&#x631;
                                                &#x644;&#x643; &#x62E;&#x64A;&#x627;&#x631;&#x627;&#x62A;
                                                &#x645;&#x62A;&#x646;&#x648;&#x639;&#x629; &#x645;&#x646;
                                                &#x627;&#x644;&#x645;&#x623;&#x643;&#x648;&#x644;&#x627;&#x62A;
                                                &#x648;&#x627;&#x644;&#x645;&#x631;&#x637;&#x628;&#x627;&#x62A;
                                                &#x628;&#x623;&#x633;&#x639;&#x627;&#x631;
                                                &#x645;&#x646;&#x627;&#x633;&#x628;&#x629;
                                                &#x648;&#x62A;&#x631;&#x636;&#x64A; &#x62C;&#x645;&#x64A;&#x639;
                                                &#x627;&#x644;&#x623;&#x630;&#x648;&#x627;&#x642;.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="slick-item promotionalItem"
                                data-value="&#x62C;&#x648;&#x644;&#x627;&#x62A; &#x648;&#x641;&#x639;&#x627;&#x644;&#x64A;&#x627;&#x62A; &#x633;&#x64A;&#x627;&#x62D;&#x64A;&#x629;"
                                style="height:578px">
                                <div class="card feature-card">
                                    <a href="https://jazeera.tripadmit.com/">
                                        <div class="card-img-wrap">
                                            <img class="card-img-top lazyload" src="/images/tripadmit-home-img.jpg"
                                                alt="">
                                        </div>
                                        <div class="card-body first_card_body" style="height:200px">
                                            <h2 class="card-title">&#x62C;&#x648;&#x644;&#x627;&#x62A;
                                                &#x648;&#x641;&#x639;&#x627;&#x644;&#x64A;&#x627;&#x62A;
                                                &#x633;&#x64A;&#x627;&#x62D;&#x64A;&#x629;</h2>
                                            <p>&#x627;&#x62E;&#x62A;&#x631; &#x645;&#x627;
                                                &#x64A;&#x646;&#x627;&#x633;&#x628;&#x643; &#x645;&#x646;
                                                &#x628;&#x64A;&#x646; &#x628;&#x627;&#x642;&#x629;
                                                &#x645;&#x645;&#x64A;&#x632;&#x629; &#x645;&#x646;
                                                &#x627;&#x644;&#x623;&#x646;&#x634;&#x637;&#x629;
                                                &#x627;&#x644;&#x645;&#x645;&#x62A;&#x639;&#x629;
                                                &#x627;&#x644;&#x645;&#x62A;&#x627;&#x62D;&#x629;
                                                &#x644;&#x62A;&#x62D;&#x638;&#x649;
                                                &#x628;&#x631;&#x62D;&#x644;&#x629; &#x644;&#x627;
                                                &#x62A;&#x646;&#x633;&#x649;</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="slick-item promotionalItem" data-value="VIV" style="height:578px">
                                <div class="card feature-card">
                                    <a href="https://viv.com.kw/?lang=ar">
                                        <div class="card-img-wrap">
                                            <img class="card-img-top lazyload" src="/images/viv-arabic.jpg" alt="">
                                        </div>
                                        <div class="card-body first_card_body" style="height:200px">
                                            <h2 class="card-title">VIV</h2>
                                            <p>&#x627;&#x630;&#x627; &#x643;&#x646;&#x62A;
                                                &#x62A;&#x628;&#x62D;&#x62B; &#x639;&#x646;
                                                &#x627;&#x644;&#x62A;&#x645;&#x64A;&#x632;
                                                &#x648;&#x627;&#x644;&#x62E;&#x635;&#x648;&#x635;&#x64A;&#x629;
                                                &#x623;&#x62B;&#x646;&#x627;&#x621;
                                                &#x633;&#x641;&#x631;&#x643;&#x60C;
                                                &#x641;&#x628;&#x648;&#x627;&#x628;&#x62A;&#x643;
                                                &#x627;&#x644;&#x62E;&#x627;&#x635;&#x629; VIV&#x647;&#x64A;
                                                &#x627;&#x644;&#x62D;&#x644;
                                                &#x627;&#x644;&#x623;&#x645;&#x62B;&#x644;
                                                &#x644;&#x62A;&#x62C;&#x631;&#x628;&#x629; &#x633;&#x641;&#x631;
                                                &#x641;&#x631;&#x64A;&#x62F;&#x629; &#x645;&#x646;
                                                &#x646;&#x648;&#x639;&#x647;&#x627; &#x633;&#x648;&#x627;&#x621;
                                                &#x644;&#x631;&#x62D;&#x644;&#x627;&#x62A;
                                                &#x627;&#x644;&#x631;&#x627;&#x62D;&#x629;
                                                &#x648;&#x627;&#x644;&#x627;&#x633;&#x62A;&#x62C;&#x645;&#x627;&#x645;
                                                &#x623;&#x648; &#x644;&#x631;&#x62D;&#x644;&#x627;&#x62A;...</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <script>
        $(function() {

            var slidesCount = $(".promotionalItem").length;
            if (slidesCount < 4) {
                $(".carousel-prev").hide();
                $(".carousel-next").hide();
            } else {
                $(".carousel-prev").show();
                $(".carousel-next").show();
            }
        });
        $('.promotionalItem').click(function() {
            var a = $(this).data('value');
            dataLayer.push({
                'event': 'ctaClick',
                'ctaName': 'promotional slider',
                'productName': a,
                'userType': document.cookie.includes("agent_dashboardCookie") ? 'agent' : document
                    .cookie.includes("loggedInUser") ? 'member' : 'guest',
                'language': window.location.href.indexOf('/ar-') > 0 ? 'ar' : 'en',
                'country': localStorage.pageCountry.toUpperCase(),
                'channel': 'Web',
                'pos': 'J9WEB'
            })
        });
        </script>
        <style>
        @media(min-width:768px) {
            .card-body {
                min-height: 200px !important;
            }
        }
        </style>
        <section class="about-jazeera" style="background-image: url(/images/jazeera-cropped-1.jpg);">
            <div class="mobile-wall">
                <img src="/images/jazeera-cropped-1.jpg" alt=" " class="lazyload" />
            </div>

            <div class="overlay">
                <div class="overlay-inner">
                    <div class="title multi-line">
                        <div style="flex-direction: row;">
                            <h2 style="text-align: right;"><strong class="spl">اكتشف خدمات مبنى ركاب الجزيرة
                                    T5</strong></h2>
                            <p style="text-align: right;">يخدم مبنى ركاب الجزيرة T5 جميع ركاب طيران الجزيرة
                                ليستمتعوا بتجربة السفر من نقطة وصولهم إلى المطار وحتى عودتهم.</p>
                        </div>

                    </div>
                    <div class="list-with-icon">
                        <ul>
                            <li>
                                <span class="icon-wrap">
                                    <i class="icon-suitcase"></i>
                                </span>
                                <p>22 كاونتر لتسجيل الدخول، 6 أجهزة للخدمة الذاتية</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="icon-wrap">
                                    <i class="icon-parking"></i>
                                </span>
                                <p>350 مواقف للسيارات</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="icon-wrap">
                                    <i class="fa fa-wifi"></i>
                                </span>
                                <p style="white-space: nowrap;">خدمة الإنترنت المجاني في جميع أنحاء المبنى</p>
                            </li>
                        </ul>
                        <a href='{{ route('jazeera-terminal') }}'
                            class="btn btn-default btn-arrow">&#x642;&#x631;&#x627;&#x621;&#x629;
                            &#x627;&#x644;&#x645;&#x632;&#x64A;&#x62F;</a>



                    </div>
                </div>
            </div>
        </section>

    </div>
    <script type="text/javascript">
    $(".passengercount").change(function() {
        if ($(this).val() == "Student") {
            $("#roundChild_btn_up").prop("disabled", true);
            $("#roundInfant_btn_up").prop("disabled", true);
        }
    })
    $("#PaxTypes_return").change(function() {
        var PaxPromo = $('#PaxTypes_return').find(":selected").val();
        //if (PaxPromo == 'Student' || PaxPromo == 'Marine Fare')
        if (PaxPromo == 'Student') {
            $("#roundChild").prop("disabled", true);
            $("#roundInfant").prop("disabled", true);
            if (PaxPromo == 'Student') {
                $("#roundExtra").prop("disabled", true);
                $("#roundExtra").val(0);
            }
            $("#roundChild").val(0);
            $("#roundInfant").val(0);
            var adultcount = parseInt($("#roundAdult").val());
            var extracount = parseInt($("#roundExtra").val());
            var paxcount = parseInt($("#roundAdult").val()) + parseInt($("#roundExtra").val());
            if (paxcount > 8) {
                $('#roundAdult_btn_down').click();
                setTimeout(() => {
                    $('#roundAdult_btn_up').click();
                }, 100);
            } else {
                $('#roundAdult_btn_down').click();
                $('#roundAdult_btn_up').click();
            }
            if (adultcount != parseInt($("#roundAdult").val())) {
                $('#roundAdult').val(adultcount + 1);
                $('#roundAdult_btn_down').click();
            }
            if (extracount != parseInt($("#roundExtra").val())) {
                $('#roundExtra').val(extracount + 1);
                $('#roundExtra_btn_down').click();
            }
        } else {
            $("#roundAdult").prop("disabled", false);
            $("#roundChild").prop("disabled", false);
            $("#roundInfant").prop("disabled", false);
            $("#roundExtra").prop("disabled", false);
        }
        if (PaxPromo == 'Marine Fare') {
            $("#roundExtra").prop("disabled", false);
        }

    });
    $("#PaxTypes_oneway").change(function() {
        var PaxPromo = $('#PaxTypes_oneway').find(":selected").val();
        //if (PaxPromo == 'Student' || PaxPromo == 'Marine Fare')
        if (PaxPromo == 'Student') {
            $("#oneWayChild").prop("disabled", true);
            $("#oneWayInfant").prop("disabled", true);
            if (PaxPromo == 'Student') {
                $("#oneWayExtra").prop("disabled", true);
                $("#oneWayExtra").val(0);
            }
            $("#oneWayChild").val(0);
            $("#oneWayInfant").val(0);
            var adultcount = parseInt($("#oneWayAdult").val());
            var extracount = parseInt($("#oneWayExtra").val());
            var paxcount = parseInt($("#oneWayAdult").val()) + parseInt($("#oneWayExtra").val());
            if (paxcount > 8) {
                $('#oneWayAdult_btn_down').click();
                setTimeout(() => {
                    $('#oneWayAdult_btn_up').click();
                }, 100);
            } else {
                $('#oneWayAdult_btn_up').click();
                $('#oneWayAdult_btn_down').click();
            }
            if (adultcount != parseInt($("#oneWayAdult").val())) {
                $('#oneWayAdult').val(adultcount + 1);
                $('#oneWayAdult_btn_down').click();
            }
            if (extracount != parseInt($("#oneWayExtra").val())) {
                $('#oneWayExtra').val(extracount + 1);
                $('#oneWayExtra_btn_down').click();
            }
        } else {
            $("#oneWayAdult").prop("disabled", false);
            $("#oneWayChild").prop("disabled", false);
            $("#oneWayInfant").prop("disabled", false);
            $("#oneWayExtra").prop("disabled", false);
        }
        if (PaxPromo == 'Marine Fare') {
            $("#oneWayExtra").prop("disabled", false);
        }
    });
    $("#PaxTypes_multi").change(function() {
        var PaxPromo = $('#PaxTypes_multi').find(":selected").val();
        //if (PaxPromo == 'Student' || PaxPromo == 'Marine Fare')
        if (PaxPromo == 'Student') {
            $("#multiWayChild").prop("disabled", true);
            $("#multiWayInfant").prop("disabled", true);
            if (PaxPromo == 'Student') {
                $("#multiWayExtra").prop("disabled", true);
                $("#multiWayExtra").val(0);
            }
            $("#multiWayChild").val(0);
            $("#multiWayInfant").val(0);
            var adultcount = parseInt($("#multiWayAdult").val());
            var extracount = parseInt($("#multiWayExtra").val());
            var paxcount = parseInt($("#multiWayAdult").val()) + parseInt($("#multiWayExtra").val());
            if (paxcount > 8) {
                $('#multiWayAdult_btn_down').click();
                setTimeout(() => {
                    $('#multiWayAdult_btn_up').click();
                }, 100);
            } else {
                $('#multiWayAdult_btn_up').click();
                $('#multiWayAdult_btn_down').click();
            }
            if (adultcount != parseInt($("#multiWayAdult").val())) {
                $('#multiWayAdult').val(adultcount + 1);
                $('#multiWayAdult_btn_down').click();
            }
            if (extracount != parseInt($("#multiWayExtra").val())) {
                $('#multiWayExtra').val(extracount + 1);
                $('#multiWayExtra_btn_down').click();
            }
        } else {
            $("#multiWayAdult").prop("disabled", false);
            $("#multiWayChild").prop("disabled", false);
            $("#multiWayInfant").prop("disabled", false);
            $("#multiWayExtra").prop("disabled", false);
        }
        if (PaxPromo == 'Marine Fare') {
            $("#multiWayExtra").prop("disabled", false);
        }
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        reverseGeocode(latitude, longitude)
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert("User denied the request for Geolocation.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Location information is unavailable.");
                break;
            case error.TIMEOUT:
                alert("The request to get user location timed out.");
                break;
            case error.UNKNOWN_ERROR:
                alert("An unknown error occurred.");
                break;
        }
    }

    function reverseGeocode(latitude, longitude) {
        const apiEndpoint = 'https://nominatim.openstreetmap.org/reverse';
        const apiUrl = `${apiEndpoint}?format=json&lat=${latitude}&lon=${longitude}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.address) {
                    const city = data.address.city || data.address.town;
                    const country = data.address.country;
                    console.log([city , country])

                } else {
                    alert('Location not found.');
                }
            })
            .catch(error => {
                console.error('Error fetching geolocation data:', error);
            });
    }
    $(document).ready(function(){
        getLocation()
    })
    </script>
</main>
@endsection
