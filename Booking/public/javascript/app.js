var windowHeight = $(window).height();
var viewportWidth = $(window).width();

function isArabic(language) {
    if (language == $('html').attr('lang')) {
        return true;
    } else {
        return false;
    }
}

function noscroll() {
    window.scrollTo(0, 0);
}

function bodyFreezeScroll() {
    window.addEventListener('scroll', noscroll);
    $('body').css({ 'overflow': 'auto', 'max-height': 'inherit' });
    $('body').addClass('scroll-disabled');
}

function bodyUnfreezeScroll() {
    window.removeEventListener('scroll', noscroll);
    $('body').css({ 'overflow': 'auto', 'max-height': 'inherit' });
    $('body').removeClass('scroll-disabled');
}

function isheaderActive() {
    if ($('.btn-dropdown-menu').hasClass('show') || $('.main-nav > li').hasClass('active')) {
        $('.jazeera_overlay, header').addClass('active');
        bodyFreezeScroll();
    } else {
        $('.jazeera_overlay, header').removeClass('active');
        bodyUnfreezeScroll();
    }
}

function issearchActive() {
    if ($('.search-box-wrap').hasClass('active')) {
        bodyFreezeScroll();
    } else {
        bodyUnfreezeScroll();
    }
}

function isModifySearchActive() {
    if ($('.modify-search-wrap').hasClass('active')) {
        bodyFreezeScroll();
    } else {
        bodyUnfreezeScroll();
    }
}


$.fn.pVal = function () {
    var $this = $(this),
        val = $this.eq(0).val();
    if (val == $this.attr('placeholder'))
        return '';
    else
        return val;
}

//bodyFreezeScroll();
$(window).load(function () {
    //bodyUnfreezeScroll();
    if (window.location.search.match("mngbooking") && window.location.search.match("mngbooking").length > 0) {
        $("#mngBookingHomePage").trigger('click');
    }
});
$(document).ready(function () {
    localStorage.from_flight_search = "";
    localStorage.to_flight_search = "";
    localStorage.from_flight_searchmulticity1 = "";
    localStorage.to_flight_searchmulticity1 = "";
    localStorage.from_flight_searchmulticity2 = "";
    localStorage.to_flight_searchmulticity2 = "";
    localStorage.calender_available_dates = "";

    //recent search based on cookies
    //var recentsearchcookie = getCookie('Recentsearch');
    //if (recentsearchcookie != null && recentsearchcookie != undefined && recentsearchcookie.length > 10) {
    //    const recentsearchvalues = JSON.parse(recentsearchcookie);
    //    if (recentsearchvalues != undefined && recentsearchvalues != null) {
    //        localStorage.from_flight_search = recentsearchvalues.Origin;
    //        localStorage.to_flight_search = recentsearchvalues.Destination;
    //        setTimeout(function () {
    //            $("#from_flight_search").focus().typeahead('val', recentsearchvalues.Origin);

    //            $("#from_flight_search").siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + recentsearchvalues.Origin + ']').click();
    //            $("#from_flight_search").blur();
    //            $("#to_flight_search").focus().typeahead('val', recentsearchvalues.Destination);
    //            $("#to_flight_search").siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + recentsearchvalues.Destination + ']').click();
    //            $("#to_flight_search").blur();
    //            $('#to_flight_search').attr('data-selected', recentsearchvalues.Destination);

    //            if (localStorage.departure_flight_date != undefined) {
    //                $("#departure_flight_search").val(localStorage.departure_flight_date);
    //                //$("#departure_flight_search").trigger('blur');
    //            }
    //            if (localStorage.return_flight_date != undefined) {
    //                $('#return_flight_search').val(localStorage.return_flight_date);
    //                //$('#return_flight_search').trigger('blur');
    //            }
    //            $(".range-picker-wrap, .first-grid").removeClass("active");
    //            $(".close-popup").click();
    //            //$('.isFlexibleCheckbox').toggleClass('active');
    //        }, 2500);
    //    }
    //}
    //Promo code autofill
    //if (moment().format('YYYY-MM-DDTHH:MM:ss') > "2020-02-28T17:02:04" && moment().format('YYYY-MM-DDTHH:MM:ss') < "2020-02-29T17:02:04") {
    //    $("#flight_search_promo_code").val("J9TEST");
    //    $("#flight_search_promo_code_oneway").val("J9TEST");
    //    $("#flight_search_muticity_promo_code").val("J9TEST");
    //}

    $('body').append('<div class="jazeera_overlay" />');
    $('body').append('<div class="jazeera_backdrop" />');

    $('.form-wrap').each(function () {
        $(this).find('.form-field').last().addClass('last-field');
    });

    $('a[data-goto-href]').click(function (e) {
        var scrollto = $(this).attr('href');
        $('body').scrollTo(scrollto, 600);
        e.preventDefault();
    });

    //FloatLabel
    $('.float-label-wrapper').FloatLabel();

    //Match Height
    $('.package-list-item .packages-body').matchHeight();

    //Placeholder for IE
    $('.form-control').placeholder();

    // Custom Select
    var minimumResultsForSearch = -1;
    $('.custom-select').select2({
        minimumResultsForSearch: -1,
        'allowClear': false,
        placeholder: function () {
            $(this).data('placeholder');
        }
    }).on('select2:open', function (e) {
        $('.dropdown-toggle + .dropdown-menu').removeClass('show');
    });

    // phoneCodeSelect
    var phoneCodeSelect = $(".intl-tel-input").intlTelInput({
        //autoFormat: false,
        //autoHideDialCode: false,
        //defaultCountry: "jp",
        nationalMode: false,
        preventInvalidDialCodes: true
    });

    $('body.scroll-disabled').bind('touchmove', function (e) {
        e.preventDefault();
    });
    $('.sub-panel-data .from').click(function () {
        $('html,body').animate({
            scrollTop: $(".panel-data-wrapper .active").offset().top
        },
            'slow');
    });
    var departure_calender = $('#calendar-departure');
    var return_calender = $('#calendar-return');

    var selectedDateDeparture = new Date();
    var selectedDateReturn = new Date();
    //Cookie
    function setRecentsearchCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function setAgreeCookie(name, value, time) {
        var expire = new Date();
        expire.setTime(expire.getTime() + time);
        var expires = "expires=" + expire.toUTCString();
        document.cookie = name + "=" + value + "; expires=" + expires;
    }
    var reload = false;
    $('#btnDarkToRegular').click(function () {
        var CookieTimeout = setCookieTimeOut;
        setAgreeCookie("DarkSite", "True", parseInt(CookieTimeout));
        reload = true;
        location.reload();
    });
    //function deleteCookie() {
    //    setAgreeCookie("DarkSite", "", -1);
    //}
    //window.onbeforeunload = function () {
    //    debugger;
    //    if (!reload) {
    //        deleteCookie();
    //    }
    //};
    /*Departure Selector*/
    departure_calender.fullCalendar({

        header: {
            left: '',
            center: '',
            right: ''
        },
        prev: '.left-single-arrow',
        next: '.right-single-arrow',

        height: 94,
        contentHeight: 'auto',

        fixedWeekCount: false,
        weekMode: 'liquid',

        //defaultDate: '2018-11-12',
        defaultView: 'month',
        navLinks: true, // can click day/week names to navigate views
        editable: true,

        selectable: true,
        selectHelper: false,
        unselectAuto: false,
        selectAllow: function (selectInfo) {
            return moment().diff(selectInfo.start) <= 0
        },

        navLinks: false,
        themeSystem: 'standard',
        inline: true,



        select: function (dateText, inst) {

            selectedDateDeparture = new Date(dateText);
            var selectedNextDate = moment(selectedDateDeparture, "YYYY-MM-DD").add(0, 'days');
            return_calender.fullCalendar('gotoDate', selectedNextDate);

            $('.flexible-dates-picker.return .fc-month-view table td').each(function (e) {
                if ($(this).data('date') >= moment(selectedDateDeparture).format('YYYY-MM-DD')) {
                    $(this).removeClass('inactive');
                } else {
                    $(this).addClass('inactive');
                }
            });

            if (moment(selectedDateDeparture, "YYYY-MM-DD") < moment(selectedDateReturn, "YYYY-MM-DD")) {
                $('#calendar-return .fc-day').removeClass('fc-cell-selected');
            }

        },

        dayRender: function (date, cell) {

            var moment = departure_calender.fullCalendar('getDate');
            var currentMonth = moment.format('MMM');

            if (date.format('DD') == 1 || date.format('DD') == 12) {
                cell.html('<div class="date-cell-wrap"><div class="hightlight bg-info">Recommended</div>' + '<div class="date">' + date.format('MMM DD') + '</div>' + '<div class="price">INR <strong>8,329.00</strong> </div> </div>');
            } else {
                cell.html('<div class="date-cell-wrap"><div class="date">' + date.format('MMM DD') + '</div>' + '<div class="price">INR <strong>8,329.00</strong> </div> </div>');
            }

        },

        dayClick: function (date, allDay, jsEvent, view) {
            $(this).parents('.flexible-dates-picker').find(".fc-cell-selected").removeClass("fc-cell-selected");
            $(this).addClass('fc-cell-selected');
        },

        viewRender: function (view, element) {

            var intervalStart = view.intervalStart;
            var currentMonth = intervalStart.format('YYYY-MM-DD');

            var lastMonthStart = moment(currentMonth).subtract(1, 'months').format('DD MMM');
            var lastMonthEnd = moment(currentMonth).subtract(1, 'months').endOf('month').format('DD MMM');

            var nextMonthStart = moment(currentMonth).add(1, 'months').format('DD MMM');
            var nextMonthEnd = moment(currentMonth).add(1, 'months').endOf('month').format('DD MMM');

            departure_calender.parents('.date-picker-wrap').find('.calender-switcher .calender-switch-btn.left .dates-btwn').empty().append('<strong>' + lastMonthStart + '</strong> to <strong>' + lastMonthEnd + '</strong>');
            departure_calender.parents('.date-picker-wrap').find('.calender-switcher .calender-switch-btn.right .dates-btwn').empty().append('<strong>' + nextMonthStart + '</strong> to <strong>' + nextMonthEnd + '</strong>');

        }

    });

    /*Returing Selector*/
    return_calender.fullCalendar({

        header: {
            left: '',
            center: '',
            right: ''
        },
        prev: '.left-single-arrow',
        next: '.right-single-arrow',

        height: 94,
        contentHeight: 'auto',

        fixedWeekCount: false,
        weekMode: 'liquid',

        //defaultDate: '2018-12-12',
        defaultView: 'month',
        navLinks: true, // can click day/week names to navigate views
        editable: true,

        selectable: true,
        selectHelper: false,
        unselectAuto: false,
        selectAllow: function (selectInfo) {
            return moment().diff(selectInfo.start) <= 0
        },

        navLinks: false,
        themeSystem: 'standard',
        inline: true,

        select: function (dateText, inst) {
            selectedDateReturn = new Date(dateText);
        },

        dayRender: function (date, cell) {

            var moment = return_calender.fullCalendar('getDate');
            var currentMonth = moment.format('MMM');

            if (date.format('DD') == 1 || date.format('DD') == 12) {
                cell.html('<div class="date-cell-wrap"><div class="hightlight bg-info">Recommended</div>' + '<div class="date">' + date.format('MMM DD') + '</div>' + '<div class="price">INR <strong>8,329.00</strong> </div> </div>');
            } else {
                cell.html('<div class="date-cell-wrap"><div class="date">' + date.format('MMM DD') + '</div>' + '<div class="price">INR <strong>8,329.00</strong> </div> </div>');
            }

        },

        dayClick: function (date, allDay, jsEvent, view) {
            $(this).parents('.flexible-dates-picker').find(".fc-cell-selected").removeClass("fc-cell-selected");
            $(this).addClass('fc-cell-selected');
        },

        viewRender: function (view, element) {

            var intervalStart = view.intervalStart;
            var currentMonth = intervalStart.format('YYYY-MM-DD');

            var lastMonthStart = moment(currentMonth).subtract(1, 'months').format('DD MMM');
            var lastMonthEnd = moment(currentMonth).subtract(1, 'months').endOf('month').format('DD MMM');

            var nextMonthStart = moment(currentMonth).add(1, 'months').format('DD MMM');
            var nextMonthEnd = moment(currentMonth).add(1, 'months').endOf('month').format('DD MMM');

            return_calender.parents('.date-picker-wrap').find('.calender-switcher .calender-switch-btn.left .dates-btwn').empty().append('<strong>' + lastMonthStart + '</strong> to <strong>' + lastMonthEnd + '</strong>');
            return_calender.parents('.date-picker-wrap').find('.calender-switcher .calender-switch-btn.right .dates-btwn').empty().append('<strong>' + nextMonthStart + '</strong> to <strong>' + nextMonthEnd + '</strong>');

        }

    });

    $('#calendar-departure-prev').click(function (e) {
        departure_calender.fullCalendar('prev');
        return_calender.fullCalendar('prev');

        $('#calendar-departure .fc-day').removeClass('fc-cell-selected');
        $('#calendar-departure .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        $('#calendar-return .fc-day').removeClass('fc-cell-selected');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateReturn).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').parents('.fc-widget-content').prevAll().find('td').addClass('inactive');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').prevAll().addClass('inactive');

        e.preventDefault();
    });

    $('#calendar-departure-next').click(function (e) {
        departure_calender.fullCalendar('next');
        return_calender.fullCalendar('next');

        $('#calendar-departure .fc-day').removeClass('fc-cell-selected');
        $('#calendar-departure .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        $('#calendar-return .fc-day').removeClass('fc-cell-selected');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateReturn).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').parents('.fc-widget-content').prevAll().find('td').addClass('inactive');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').prevAll().addClass('inactive');

        e.preventDefault();
    });

    $('#calendar-return-prev').click(function (e) {
        departure_calender.fullCalendar('prev');
        return_calender.fullCalendar('prev');

        $('#calendar-departure .fc-day').removeClass('fc-cell-selected');
        $('#calendar-departure .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        $('#calendar-return .fc-day').removeClass('fc-cell-selected');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateReturn).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').parents('.fc-widget-content').prevAll().find('td').addClass('inactive');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').prevAll().addClass('inactive');

        e.preventDefault();
    });

    $('#calendar-return-next').click(function (e) {
        departure_calender.fullCalendar('next');
        return_calender.fullCalendar('next');

        $('#calendar-departure .fc-day').removeClass('fc-cell-selected');
        $('#calendar-departure .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        $('#calendar-return .fc-day').removeClass('fc-cell-selected');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateReturn).format('YYYY-MM-DD') + '"]').addClass('fc-cell-selected');

        // departure_calender.fullCalendar( 'select', moment(selectedDateDeparture).format('YYYY-MM-DD') );
        // return_calender.fullCalendar( 'select', moment(selectedDateReturn).format('YYYY-MM-DD') );

        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').parents('.fc-widget-content').prevAll().find('td').addClass('inactive');
        $('#calendar-return .fc-day[data-date="' + moment(selectedDateDeparture).format('YYYY-MM-DD') + '"]').prevAll().addClass('inactive');

        e.preventDefault();
    });

    $('.flexible-dates-picker.return .fc-month-view table td').on('click', function (e) {
        e.preventDefault();
    });
    // Validate Form
    function validateForm(id) {
        var valid = $(id).validate().checkForm();
        if (valid) {
            $(id).find('.form-btn-wrap').removeClass('hidden');
            $(id).find('.btn-wrap .btn').removeAttr('disabled');


        } else {
            $(id).find('.form-btn-wrap').addClass('hidden');
            $(id).find('.btn-wrap .btn').attr("disabled", "true");
        }
    }

    $.validator.addMethod('checkValidFormat', function (value, element) {
        var stringPattern = new RegExp("(0[123456789]|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31)([/])(0[123456789]|10|11|12)([/])([1-2][0-9][0-9][0-9])");
        if (stringPattern.test(value)) { return true; }
        else { return false; }
    }, "Please enter valid date.");

    $.validator.addMethod("namefield", function (value, element) {
        return this.optional(element) || /^[a-z\'\s]+$/i.test(value);
    }, "Invalid Characters");

    $.validator.addMethod("phonefield", function (value, element) {
        return this.optional(element) || /^[0-9\+\s]+$/i.test(value);
    }, "Invalid phone number");

    $.validator.addMethod("msgfield", function (value, element) {
        return this.optional(element) || /^[a-z\0-9\,.'"!()+@\s]+$/i.test(value);
    }, "Invalid Characters");

    $.validator.addMethod("monthYear", function (value, element) {
        return this.optional(element) || /^\d{2}\/\d{2}$/.test(value);
    }, "Please enter MM/YY format only.");

    $.validator.addMethod("noSpace", function (value, element) {
        return value.indexOf(" ") < 0 && value != "";
    }, "The format doesn't seem right");

    $.validator.addMethod("monthLimit", function (value, element) {
        var myRegexp = /^(\d{2})(.*?)$/;
        var match = myRegexp.exec(value);
        var bValid;
        bValid = false;
        if (match[1] > 0 && match[1] < 13) {
            bValid = true;
        }
        return this.optional(element) || bValid;
    }, "Please enter month between 1 and 12");

    $.validator.addMethod("yearLimit", function (value, element) {
        var myRegexp = /^(.*?)(\d{2})$/;
        var match = myRegexp.exec(value);
        var bValid;
        bValid = false;
        if (match[2] >= moment().format('YY')) {
            bValid = true;
        }
        return this.optional(element) || bValid;
    }, "Please enter valid Year.");

    $.validator.addMethod("emailValidate", function (value, element) {
        var myRegexp = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
        var bValid;
        if (value.indexOf('@') != -1) {
            bValid = false;
            var match = myRegexp.test(value);
            if (match) {
                bValid = true;
            }
        } else {
            bValid = true;
        }
        return this.optional(element) || bValid;
    }, "Please enter valid email address.");

    $.validator.addMethod("passengerCountRoundWay", function (value, element) {
        if (parseInt($("#roundAdult").val()) == parseInt($("#roundInfant").val())) {
            $("#roundInfant_btn_up").prop("disabled", true);
            return true;
        }
        else if (parseInt($("#roundAdult").val()) > parseInt($("#roundInfant").val())) {
            $("#roundInfant_btn_up").prop("disabled", false);
        }
        else {
            $("#roundInfant_btn_up").prop("disabled", true);
        }
        return parseInt($("#roundAdult").val()) > parseInt($("#roundInfant").val());
    }, "Invalid passenger entry adults should be more than infants.");

    $.validator.addMethod("passengerCountOneWay", function (value, element) {
        if (parseInt($("#oneWayAdult").val()) == parseInt($("#oneWayInfant").val())) {
            $("#oneWayInfant_btn_up").prop("disabled", true);
            return true;
        }
        else if (parseInt($("#oneWayAdult").val()) > parseInt($("#oneWayInfant").val())) {
            $("#oneWayInfant_btn_up").prop("disabled", false);
        }
        else {
            $("#oneWayInfant_btn_up").prop("disabled", true);
        }
        return parseInt($("#oneWayAdult").val()) > parseInt($("#oneWayInfant").val());
    }, "Invalid passenger entry adults should be more than infants.");

    $.validator.addMethod("passengerCountMultiWay", function (value, element) {
        if (parseInt($("#multiWayAdult").val()) == parseInt($("#multiWayInfant").val())) {
            $("#multiWayInfant_btn_up").prop("disabled", true);
            return true;
        }
        else if (parseInt($("#multiWayAdult").val()) > parseInt($("#multiWayInfant").val())) {
            $("#multiWayInfant_btn_up").prop("disabled", false);
        }
        else {
            $("#multiWayInfant_btn_up").prop("disabled", true);
        }
        return parseInt($("#multiWayAdult").val()) > parseInt($("#multiWayInfant").val());
    }, "Invalid passenger entry adults should be more than infants.");

    $.validator.addMethod("passengerTotCountMultiway", function (value, element) {
        if ((parseInt($("#multiWayAdult").val()) + parseInt($("#multiWayChild").val()) + parseInt($("#multiWayExtra").val())) == 9) {
            $("#multiWayAdult_btn_up,#multiWayChildren_btn_up,#multiWayExtra_btn_up").prop("disabled", true);
        }
        else {
            $("#multiWayAdult_btn_up,#multiWayChildren_btn_up,#multiWayExtra_btn_up").prop("disabled", false);
        }
        return (parseInt($("#multiWayAdult").val()) + parseInt($("#multiWayChild").val()) + parseInt($("#multiWayExtra").val())) <= 9;
    }, "Adults and childrens count should be less than 9");

    $.validator.addMethod("passengerTotCountOneWay", function (value, element) {
        if ((parseInt($("#oneWayAdult").val()) + parseInt($("#oneWayChild").val()) + parseInt($("#oneWayExtra").val())) == 9) {
            $("#oneWayAdult_btn_up,#oneWayChild_btn_up,#oneWayExtra_btn_up").prop("disabled", true);
        }
        else {
            $("#oneWayAdult_btn_up,#oneWayChild_btn_up,#oneWayExtra_btn_up").prop("disabled", false);
        }
        return (parseInt($("#oneWayAdult").val()) + parseInt($("#oneWayChild").val()) + parseInt($("#oneWayExtra").val())) <= 9;
    }, "Adults and childrens count should be less than 9");

    $.validator.addMethod("passengerTotCountReturn", function (value, element) {
        if ((parseInt($("#roundAdult").val()) + parseInt($("#roundChild").val()) + parseInt($("#roundExtra").val())) == 9) {
            $("#roundAdult_btn_up,#roundChild_btn_up,#roundExtra_btn_up").prop("disabled", true);
        }
        else {
            $("#roundAdult_btn_up,#roundChild_btn_up,#roundExtra_btn_up").prop("disabled", false);
        }
        return (parseInt($("#roundAdult").val()) + parseInt($("#roundChild").val()) + parseInt($("#roundExtra").val())) <= 9;
    }, "Adults and childrens count should be less than 9");

    var defaultOptions = {
        errorElement: "span",
        errorClass: "help-block",
        focusInvalid: true,
        //onkeyup: true,
        onblur: true,
        highlight: function (element, errorClass, validClass) {
            var elm = $(element);
            var group = elm.closest('.form-field');
            if (group.length) {
                group.addClass('has-error');
                group.removeClass('populated');
            }
        },
        unhighlight: function (element, errorClass, validClass) {
            var elm = $(element);
            var group = elm.closest('.form-field');

            if (group.length) {
                group.removeClass('has-error');
                group.addClass('populated');
            }
        },
        errorPlacement: function (error, element) {

            //console.log('errorPlacement... this never gets called :(', error, element);

            var elm = $(element);

            if (elm.parent('.form-field').length) {
                //error.insertAfter(elm);
                elm.parent('.form-field').prepend(error);
            }

        }
    };

    $.validator.setDefaults(defaultOptions);
    var manageBookingForm = $("#manageBookingForm");
    manageBookingForm.validate({
        rules: {
            pnr_manage_boking: {
                required: true,
                minlength: 2,
                maxlength: 25,
                //namefield: true
            },
            email_manage_booking: {
                required: true,
                maxlength: 35,
                emailValidate: true
            }
        },
        messages: {
            pnr_manage_boking: {
                required: Js_PNRNumber
            },
            email_manage_booking: {
                required: Js_EmailOrLastName
            }
        },
        submitHandler: function (form) {
            var pnr_manage_boking = $('#pnr_manage_boking').val();
            var email_manage_booking = $('#email_manage_booking').val();
            //var dataUrl = $('#hdnManageBookingUrl').text() +
            var dataUrl = basePortalUrlWithoutSearchFlight +
                '/manage-booking?pnr=' + pnr_manage_boking +
                '&lastname=' + email_manage_booking + '&Flowtype=ModifyBooking';

            if (!settings.token || 0 === settings.token) {
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", settings.middleWareUrl + "/api/nsk/v1/token", false);
                xhttp.setRequestHeader("Content-type", "application/json");
                xhttp.send();
                var response = JSON.parse(xhttp.responseText);

                var response={
                    "data": {
                        "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkb3RSRVogQVBJIiwianRpIjoiZDgyZmUyYjYtZDY4OS05OTg4LTc5M2MtNGM2ZjM0MDQxMWQ2IiwiaXNzIjoiZG90UkVaIEFQSSJ9.rirB1ohC18caSLOpybT8vnUXFTQU6BuvyERX8IY2VaU",
                        "idleTimeoutInMinutes": 15
                    },
                    "metadata": {
                        "documentation_url": "http://developer.navitaire.com/documentation/dotrezapi/nsktoken"
                    }
                }

                
                settings.token = response.data.token;
            }

            var apiData = {};
            if (email_manage_booking.indexOf("@") !== -1) {
                apiData = { Recordlocator: pnr_manage_boking, Emailaddress: email_manage_booking, FlowType: 'ModifyBooking' }
            } else {
                apiData = { Recordlocator: pnr_manage_boking, LastName: email_manage_booking, FlowType: 'ModifyBooking' }
            }

            $.ajax({
                url: apiURL + "/api/jz/v1/BookingCheckForRestriction" + "?Recordlocator=" + pnr_manage_boking + "&LastName=" + email_manage_booking + "&retriveBookingFlowType=" + "ModifyBooking",
                //data: apiData,
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': settings.token,
                },
                type: "GET",
                success: function (data, textStatus, XMLHttpRequest) {
                    $("#Invalid_pnr_email_manage_booking").hide();
                    window.location.assign(dataUrl);
                }, error: function (textStatus, errorThrown) {
                    $("#Invalid_pnr_email_manage_booking").show();
                }
            });

            // window.location.assign(dataUrl);


        }
    });

    manageBookingForm.on('blur keyup change', 'input', function (event) {
        validateForm('#manageBookingForm');
    });
    var searchcheckInForm = $("#searchcheckInForm");
    searchcheckInForm.validate({
        rules: {
            pnr_checkin: {
                required: true,
                minlength: 2,
                maxlength: 25,
                //namefield: true
            },
            email_checkin: {
                required: true,
                maxlength: 35,
                emailValidate: true
            }
        },
        messages: {
            pnr_manage_boking: {
                required: Js_PNRNumber
            },
            email_manage_booking: {
                required: Js_EmailOrLastName
            }
        },
        submitHandler: function (form) {
            var pnr_checkin = $('#pnr_checkin').val();
            var email_checkin = $('#email_checkin').val();
            //var dataUrl = $('#hdnCheckInUrl').text() +
            var dataUrl = basePortalURL +
                '?pnr=' + pnr_checkin +
                '&lastname=' + email_checkin + '&Flowtype=CheckIn';
            $.ajax({
                type: "POST",
                async: false,
                url: settings.middleWareDomainUrl + "/api/jz/v1/Token",
                data: '{ "credentials": { "userName": "OLCHECKIN", "alternateIdentifier": "", "password": "Olche-12", "domain": "WW2", "location": "", "channelType": "API" }, "applicationName": "" }',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },

                success: function (data, textStatus, XMLHttpRequest) {

                    var response = JSON.parse(XMLHttpRequest.responseText);
                    settings.token = response.data.token;
                }
            });


            var apiData = {};
            if (email_checkin.indexOf("@") !== -1) {
                apiData = { Recordlocator: pnr_checkin, Emailaddress: email_checkin, FlowType: 'CheckIn' }
            } else {
                apiData = { Recordlocator: pnr_checkin, LastName: email_checkin, FlowType: 'CheckIn' }
            }

            $.ajax({
                //url: apiURL + "/api/jz/v1/Booking/Retreive",
                //data: apiData,
                url: apiURL + "/api/jz/v1/BookingCheckForRestriction?RecordLocator" + "&Recordlocator=" + pnr_checkin + "&LastName=" + email_checkin + "&FlowType=" + "CheckIn",
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': settings.token,
                },
                type: "GET",
                success: function (data, textStatus, XMLHttpRequest) {
                    $("#Invalid_pnr_email_checkIn_booking").hide();
                    window.location.assign(dataUrl);
                }, error: function (textStatus, errorThrown) {
                    $("#Invalid_pnr_email_checkIn_booking").show();
                }
            });
        }
    });

    searchcheckInForm.on('blur keyup change', 'input', function (event) {
        validateForm('#searchcheckInForm');
    });
    var searchHotelsForm = $("#searchHotelsForm");
    searchHotelsForm.validate({
        rules: {
            landmark_hotel_from: {
                required: true,
                minlength: 2,
                //maxlength: 25
            },
            landmark_hotel_to: {
                required: true,
                minlength: 2,
                //maxlength: 25
            },
            checkin_hotel_search:
            {
                required: function (element) {
                    return $("#hotelperpartoftrip").is(":checked");
                }

            },
            checkout_hotel_search:
            {
                required: function (element) {
                    return $("#hotelperpartoftrip").is(":checked");
                }

            },
            departure_hotel_search: {
                required: true
            },
            return_hotel_search: {
                required: true,
            },
            return_nationality:
            {
                required: true,
                min: 1
            },

        },
        messages: {
            landmark_hotel_from: {
                required: Js_CountryCityDistrictOrLandmark
            },
            landmark_hotel_to: {
                required: Js_CountryCityDistrictOrLandmark
            },
            departure_hotel_search: {
                required: Js_DepartureDate
            },
            return_hotel_search: {
                required: Js_ReturnDate
            },
            return_nationality: {
                min: Js_Nationality
            }
        },
        submitHandler: function (form) {
            if (ValidateHolidayPassengerSelection()) {
                var origin = $("#landmark_hotel_from").attr('data-selected');
                var destination = $("#landmark_hotel_to").attr('data-selected');
                var depDate = $('#departure_hotel_search').val();
                depDate = moment(depDate).format("DD/MM/YYYY");
                var retDate = $('#return_hotel_search').val();
                retDate = moment(retDate).format("DD/MM/YYYY");
                var cabinClass = $("#return_economy").val();
                var nationality = $("#return_nationality").val();
                var roomsCount = $("#divMainRoomsCount").text();

                var dataUrl = $('#hdnHolidayReturn').text() +
                    '&Origin=' + origin +
                    '&Destination=' + destination +
                    '&DepDate=' + depDate +
                    '&RetDate=' + retDate +
                    '&CabinClass=' + cabinClass +
                    '&Nationality=' + nationality +
                    '&RoomsCount=' + roomsCount +
                    '&Adults=1-1&Childs=1-0&Infants=1-0&ChildAges=0'

                window.location.assign(dataUrl);

            }
            else {
                $('.holiday-passanger').addClass('show');
                return false;
            }
        }
    });

    searchHotelsForm.on('blur keyup change', 'input,select', function (event) {
        validateForm('#searchHotelsForm');
    });

    var searchHotelsOneWayForm = $("#searchHotelsOneWayForm");
    searchHotelsOneWayForm.validate({
        rules: {
            landmark_hotelOneWay_from: {
                required: true,
                minlength: 2,
                //maxlength: 25
            },
            landmark_hotelOneWay_to: {
                required: true,
                minlength: 2,
                //maxlength: 25
            },
            checkin_hotelOneWay_search:
            {
                required: function (element) {
                    return $("#oneWayhotelperpartoftrip").is(":checked");
                }

            },
            checkout_hotelOneWay_search:
            {
                required: function (element) {
                    return $("#oneWayhotelperpartoftrip").is(":checked");
                }

            },
            departure_hotelOneWay_search: {
                required: true
            },
            oneWay_nationality:
            {
                required: true,
                min: 1
            }
        },
        messages: {
            landmark_hotelOneWay_from: {
                required: Js_CountryCityDistrictOrLandmark
            },
            landmark_hotelOneWay_to: {
                required: Js_CountryCityDistrictOrLandmark
            },
            departure_hotelOneWay_search: {
                required: Js_DepartureDate
            },
            oneWay_nationality: {
                min: Js_Nationality
            }
        },
        submitHandler: function (form) {
            if (HolOneWayValidateHolidayPassengerSelection()) {
                var origin = $("#landmark_hotelOneWay_from").attr('data-selected');
                var destination = $("#landmark_hotelOneWay_to").attr('data-selected');
                var depDate = $('#departure_hotelOneWay_search').val();
                depDate = moment(depDate).format("DD/MM/YYYY");
                var cabinClass = $("#oneWay_economy").val();
                var nationality = $("#oneWay_nationality").val();
                var roomsCount = $("#divMainRoomsCount").text();

                var dataUrl = $('#hdnHolidayOneWay').text() +
                    '&Origin=' + origin +
                    '&Destination=' + destination +
                    '&DepDate=' + depDate +
                    '&CabinClass=' + cabinClass +
                    '&Nationality=' + nationality +
                    '&RoomsCount=' + roomsCount +
                    '&Adults=1-1&Childs=1-0&Infants=1-0&ChildAges=0'

                window.location.assign(dataUrl);

            }
            else {
                $('#HolOneWay_holiday_passanger').addClass('show');
                return false;
            }

        }
    });

    searchHotelsOneWayForm.on('blur keyup change', 'input,select', function (event) {
        validateForm('#searchHotelsOneWayForm');
    });
    var passengerInfoForm = $("#passengerInfoForm");
    passengerInfoForm.validate({
        rules: {
            passengerCollapseAdult1Title: {
                required: true
            },
            passengerCollapseAdult1FirstName: {
                required: true
            },
            passengerCollapseAdult1LastName: {
                required: true,
                noSpace: true
            },
            passengerCollapseAdult1Nationality: {
                required: true
            },
            passengerCollapseAdult1FrequentflyerAirline: {
                required: true
            },
            passengerCollapseAdult1Frequentflyer: {
                required: true
            },

            passengerCollapseAdult2Title: {
                required: true
            },
            passengerCollapseAdult2FirstName: {
                required: true
            },
            passengerCollapseAdult2LastName: {
                required: true,
                noSpace: true
            },
            passengerCollapseAdult2Nationality: {
                required: true
            },
            passengerCollapseAdult2FrequentflyerAirline: {
                required: true
            },
            passengerCollapseAdult2Frequentflyer: {
                required: true
            },

            passengerCollapseChild1TravelingWith: {
                required: true
            },
            passengerCollapseChild1Title: {
                required: true
            },
            passengerCollapseChild1FirstName: {
                required: true
            },
            passengerCollapseChild1LastName: {
                required: true,
                noSpace: true
            },
            passengerCollapseChild1Nationality: {
                required: true
            },
            passengerCollapseChild1FrequentDOB: {
                required: true,
                checkValidFormat: true
            },
            passengerCollapseChild1FrequentflyerAirline: {
                required: true
            },
            passengerCollapseInfant1Frequentflyer: {
                required: true
            },

            passengerCollapseInfant1TravelingWith: {
                required: true
            },
            passengerCollapseInfant1Title: {
                required: true
            },
            passengerCollapseInfant1FirstName: {
                required: true
            },
            passengerCollapseInfant1LastName: {
                required: true,
                noSpace: true
            },
            passengerCollapseInfant1Nationality: {
                required: true
            },
            passengerCollapseInfant1FrequentDOB: {
                required: true,
                checkValidFormat: true
            },
            passengerCollapseInfant1FrequentflyerAirline: {
                required: true
            },
            passengerCollapseInfant1Frequentflyer: {
                required: true
            },

            contactDetailsPhoneCode: {
                required: true
            },
            contactDetailsPhoneNumber: {
                required: true,
                phonefield: true
            },
            contactDetailsFirstName: {
                required: true
            },
            contactDetailsEmailAddress: {
                required: true,
                email: true
            },
            contactDetailsNationality: {
                required: true
            },
            contactDetailsAutoCheckinsName: {
                namefield: true
            },
            contactDetailsAutoCheckinsPassportNumber: {
                // number: false
            },
            contactDetailsAutoCheckinsVisaNumber: {
                number: true
            },
            contactDetailsAutoCheckinsDateofExpiry: {
                checkValidFormat: true
            },
            contactDetailsAutoCheckinsDateofIssue: {
                checkValidFormat: true
            },
            contactDetailsAutoCheckinsVisaIssueDate: {
                checkValidFormat: true
            },
            contactDetailsAutoCheckinsVisaExpiryDate: {
                checkValidFormat: true
            },
            passengerCollapseInfant1DOB: {
                checkValidFormat: true
            }

        },
        messages: {
            contactDetailsAutoCheckinsName: {
                namefield: Js_NameAsOnPassport
            },
            contactDetailsPhoneNumber: {
                phonefield: Js_MobileNumber
            }
        },
        submitHandler: function (form) {
            console.log('Valid form submited.');
            form.submit();
        }
    });

    $('#contactDetailsAutoCheckinsDateofExpiry').mask("00/00/0000");
    $('#contactDetailsAutoCheckinsDateofIssue').mask("00/00/0000");
    $('#contactDetailsAutoCheckinsVisaIssueDate').mask("00/00/0000");
    $('#contactDetailsAutoCheckinsVisaExpiryDate').mask("00/00/0000");

    passengerInfoForm.on('blur keyup change', 'input', function (event) {
        validateForm('#passengerInfoForm');
    });
    //CreditCardForm Validation
    var CreditCardForm = $("#CreditCardForm");
    CreditCardForm.validate({
        rules: {
            creditCardStreetAddress: {
                required: true,
                minlength: 2,
                maxlength: 250
            },
            creditCardTownCity: {
                required: true,
                maxlength: 35
            },
            creditCardCountry: {
                required: true
            },
            creditCardZip: {
                required: true
            },
            creditCardNumber: {
                required: true,
                //number: true,
            },
            creditCardHolderName: {
                required: true,
                namefield: true
            },
            creditCardHolderCountry: {
                required: true
            },
            creditCardHolderRelationship: {
                required: true
            },
            creditCardExpiration: {
                required: true,
                monthYear: true,
                monthLimit: true,
                yearLimit: true,
            },
            creditCardCVV: {
                required: true,
                number: true,
                minlength: 2,
                maxlength: 4
            }
        },
        messages: {
            creditCardStreetAddress: {
                required: Js_StreetAddress
            },
            creditCardTownCity: {
                required: Js_TownorCity
            },
            creditCardCountry: {
                required: Js_CountryRegion
            },
            creditCardZip: {
                required: Js_ZipPostal
            },
            creditCardNumber: {
                required: "Please enter Card Number"
            },
            creditCardHolderName: {
                required: "Please enter Card Holder Name",
                namefield: "Enter Name as indicated on your Card"
            },
            creditCardHolderCountry: {
                required: "Please enter Card Holder Country"
            },
            creditCardHolderRelationship: {
                required: "Enter Card holder relationship to Traveler"
            },
            creditCardExpiration: {
                required: "Please enter Expiration Date"
            },
            creditCardCVV: {
                required: "Please enter CVV"
            }
        },
        submitHandler: function (form) {
            console.log('Valid form submited.');
            form.submit();
        }
    });

    CreditCardForm.on('blur keyup change', 'input', function (event) {
        validateForm('#CreditCardForm');
    });

    //Field Formats
    $('#creditCardNumber').mask("0000 0000 0000 0000");
    $('#creditCardExpiration').mask("00/00");
    $('#creditCardCVV').mask("0000");
    var searchReturnFlight = $("#searchReturnFlight");
    searchReturnFlight.validate({
        rules: {
            from_flight_search: {
                required: true
            },
            to_flight_search: {
                required: true
            },
            departure_flight_search: {
                required: true
            },
            return_flight_search: {
                required: true
            },
            passengers_flight_search: {
                required: true,
                passengerTotCountReturn: true,
                passengerCountRoundWay: true
            }


        },
        messages: {
            from_flight_search: {
                required: Js_FromLocation
            },
            to_flight_search: {
                required: Js_DestinationFlight
            },
            departure_flight_search: {
                required: Js_DepartureDate
            },
            return_flight_search: {
                required: Js_ReturnDate
            },
            passengers_flight_search: {
                required: Js_PassengersDetails
            }
        },

         // Roundtrip deeplink construction

        submitHandler: function (form) {
            let cmsIsTrue = false;

            var storedSaversData = JSON.parse(sessionStorage.getItem('saveersList'))


            var departDate = ($('#departure_flight_search').val());
            var passengerTypes = {
                adult: $("#roundAdult").val(),
                children: $("#roundChild").val(),
                infant: $("#roundInfant").val()
            };

            var plan = storedSaversData;
            let saversPassengers = { adult: 0, children: 0, infant: 0 };
            let travelPassengersCount = Number(passengerTypes.adult) + Number(passengerTypes.children);
            if (plan?.actingRole == 'WWWC') {


                if (travelPassengersCount > plan?.beneficiaries?.length) {

                    cmsIsTrue = true; // Stop processing further
                }
                else {
                    plan.beneficiaries.forEach(function (passengerTypeBenificiaries) {
                        var dDate = new Date(departDate);
                        var dob = new Date(passengerTypeBenificiaries.dateOfBirth);
                        var timeDiff = Math.abs(dDate.getTime() - dob.getTime());
                        var age = Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 365.25));

                        if (age < 2) { //infant
                            ++saversPassengers.infant;
                        } else if (age >= 2 && age < 12) { //children
                            ++saversPassengers.children;
                        } else { //adult
                            ++saversPassengers.adult;
                        }
                    });
                    if (!(passengerTypes.adult <= saversPassengers.adult && passengerTypes.children <= saversPassengers.children)) {
                        cmsIsTrue = true;   // Stop processing further
                    }

                }
            }
            if (cmsIsTrue) {

                showPopup();
                $('#showPopupButton').css('display', 'block')
                // Show error message
                return false
            }
            //if (cultureData != null && cultureData != undefined && cultureData != String.empty) {
            //    if (cultureData.split('-')[0] == "ru")
            //        cultureData = "en-kw";
            //}
            //var cultureData = $('html').attr('lang'); moved this variable to webbase.cshtml
            var culture = $('html').attr('lang');
            if (parseInt($("#roundExtra").val()) >= 1) {
                $("#flight_search_promo_code").val("PEXST");
            }
            var querystringData = true;
            var flexibleDatesRoundDepartureData = $("#flexibleDatesRoundDeparture").is(":checked");
            var flexibleDatesRoundReturnData = $('#flexibleDatesRoundReturn').val();
            var tripType = 'RoundTrip';
            var Origin1Data = $('#from_flight_search').attr('data-selected');
            var Destination1Data = $('#to_flight_search').attr('data-selected');
            var Day1Data = $('#departure_flight_search').val();
            localStorage.departure_flight_date = $('#departure_flight_search').val();
            var Day2Data = $('#return_flight_search').val();
            localStorage.return_flight_date = $('#return_flight_search').val();
            var ADTdata = $('#roundAdult').val();
            var CHDdata = $('#roundChild').val();
            var INFdata = $('#roundInfant').val();
            var EXTRAdata = $('#roundExtra').val();
            var prmocode = $('#flight_search_promo_code').val().toUpperCase();
            var Day1 = moment(Day1Data).format("DD");
            var MonthYear1 = moment(Day1Data).format("YYYY-MM");
            var Day2 = moment(Day2Data).format("DD");
            var MonthYear2 = moment(Day2Data).format("YYYY-MM");
            //Promo code autofill with Duo seat
            var PaxPromo = $('#PaxTypes_return').find(":selected").val();
            var IsDohop = false;
            var recentsearch = JSON.stringify({ Origin: Origin1Data, Destination: Destination1Data, DepDate: Day1Data, ArrDate: Day2Data });
            setRecentsearchCookie("Recentsearch", recentsearch,1);
            $.ajax({
                url: settings.middleWareDomainUrl + "/api/jz/v1/external/travelsearchengine/stationmarkets",
                async: true,
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': settings.token,
                },
                success: function (res) {
                    var stations = res.data.stations.values;
                    IsDohop = !!stations.find(st => st.code == Origin1Data || st.code == Destination1Data);
                    if (IsDohop) {
                        $.ajax({
                            url: settings.middleWareDomainUrl + "/api/jz/v1/external/travelsearchengine/constructDeeplink?searchEngineType=dohop",
                            method: 'POST',
                            async: true,
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'Authorization': settings.token,
                            },
                            data: JSON.stringify({
                                "origin": Origin1Data,
                                "destination": Destination1Data,
                                "depatureDate": MonthYear1 + "-" + Day1,
                                "returnDate": MonthYear2 + "-" + Day2,
                                "adultCount": ADTdata,
                                "childCount": CHDdata || 0,
                                "infantCount": INFdata || 0,
                                "promoCode": prmocode || '',
                                "language": culture || 'en'
                            }),
                            success: function (res) {
                                return window.location.href = res.data.res.url;
                            }
                        });
                    } else {
                        var dataUrl = basePortalURL +
                            '?culture=' + cultureData +
                            '&querystring=' + querystringData +
                            '&RadioButtonMarketStructure=' + tripType +
                            '&Origin1=' + Origin1Data +
                            '&Destination1=' + Destination1Data +
                            '&Day1=' + Day1 + '&MonthYear1=' + MonthYear1 +
                            '&Day2=' + Day2 + '&MonthYear2=' + MonthYear2 +
                            '&ADT=' + ADTdata +
                            '&INFANT=' + INFdata +
                            '&CHD=' + CHDdata +
                            '&promoCode=' + prmocode +
                            '&isflexible=' + flexibleDatesRoundDepartureData +
                            '&EXTRASEAT=' + EXTRAdata +
                            '&PAXDIS=' + PaxPromo;
                        window.location.assign(dataUrl);
                    }
                }
            });
        }
    });

    searchReturnFlight.on('blur keyup change', 'input', function (event) {
        validateForm('#searchReturnFlight');
        ValidatePromoCodeLogic($('#flight_search_promo_code'));
    });

    var searchOneWayFlight = $("#searchOneWayFlight");
    searchOneWayFlight.validate({
        rules: {
            from_flight_search_oneway: {
                required: true
            },
            to_flight_search_oneway: {
                required: true
            },
            departure_flight_search_oneway: {
                required: true
            },
            passengers_flight_search_oneway: {
                required: true,
                passengerTotCountOneWay: true,
                passengerCountOneWay: true
            }
        },
        messages: {
            from_flight_search_oneway: {
                required: Js_FromLocation
            },
            to_flight_search_oneway: {
                required: Js_DestinationFlight
            },
            departure_flight_search_oneway: {
                required: Js_DepartureDate
            },
            passengers_flight_search_oneway: {
                required: Js_PassengersDetails
            }
        },

        // oneway way deeplink construction

        submitHandler: function (form) {
            let cmsIsTrue = false;

            var storedSaversData = JSON.parse(sessionStorage.getItem('saveersList'))


            var departDate = ($('#departure_flight_search_oneway').val());
            var passengerTypes = {
                adult: $("#oneWayAdult").val(),
                children: $("#oneWayChild").val(),
                infant: $("#oneWayInfant").val()
            };

            var plan = storedSaversData;
            let saversPassengers = { adult: 0, children: 0, infant: 0 };
            let travelPassengersCount = Number(passengerTypes.adult) + Number(passengerTypes.children);
            if (plan?.actingRole == 'WWWC') {


                if (travelPassengersCount > plan?.beneficiaries?.length) {

                    cmsIsTrue = true; // Stop processing further
                }
                else {
                    plan.beneficiaries.forEach(function (passengerTypeBenificiaries) {
                        var dDate = new Date(departDate);
                        var dob = new Date(passengerTypeBenificiaries.dateOfBirth);
                        var timeDiff = Math.abs(dDate.getTime() - dob.getTime());
                        var age = Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 365.25));

                        if (age < 2) { //infant
                            ++saversPassengers.infant;
                        } else if (age >= 2 && age < 12) { //children
                            ++saversPassengers.children;
                        } else { //adult
                            ++saversPassengers.adult;
                        }
                    });
                    if (!(passengerTypes.adult <= saversPassengers.adult && passengerTypes.children <= saversPassengers.children)) {
                        cmsIsTrue = true;   // Stop processing further
                    }

                }
            }
            if (cmsIsTrue) {

                showPopup(); // Show error message
                return false
            }
            if (parseInt($("#oneWayExtra").val()) >= 1) {
                $("#flight_search_promo_code_oneway").val("PEXST");
            }
            //var cultureData = $('html').attr('lang');
            //if (cultureData != null && cultureData != undefined && cultureData != String.empty) {
            //    if (cultureData.split('-')[0] == "ru")
            //        cultureData = "en-kw";
            //}
            var culture = $('html').attr('lang');
            var querystringData = true;
            var flexibleDatesOneWayDeparture = $('#flexibleDatesOneWayDeparture').is(":checked");
            var tripType = 'OneWay';
            var Origin1Data = $('#from_flight_search_oneway').attr('data-selected');
            var Destination1Data = $('#to_flight_search_oneway').attr('data-selected');
            var Day1Data = $('#departure_flight_search_oneway').val();
            localStorage.departure_flight_date = $('#departure_flight_search_oneway').val();
            var ADTdata = $('#oneWayAdult').val();
            var CHDdata = $('#oneWayChild').val();
            var INFdata = $('#oneWayInfant').val();
            var EXTRAdata = $('#oneWayExtra').val();
            var promocode = $('#flight_search_promo_code_oneway').val().toUpperCase();

            var Day1 = moment(Day1Data).format("DD");
            var MonthYear1 = moment(Day1Data).format("YYYY-MM");
            var PaxPromo = $('#PaxTypes_oneway').find(":selected").val();
            var IsDohop = false;
            var recentsearch = JSON.stringify({ Origin: Origin1Data, Destination: Destination1Data, DepDate: Day1Data, ArrDate: "" });
            setRecentsearchCookie("Recentsearch", recentsearch, 1);
            $.ajax({
                url: settings.middleWareDomainUrl + "/api/jz/v1/external/travelsearchengine/stationmarkets",
                async: true,
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': settings.token,
                },
                success: function (res) {
                    var stations = res.data.stations.values;
                    IsDohop = !!stations.find(st => st.code == Origin1Data || st.code == Destination1Data);
                    if (IsDohop) {
                        $.ajax({
                            url: settings.middleWareDomainUrl + "/api/jz/v1/external/travelsearchengine/constructDeeplink?searchEngineType=dohop",
                            method: 'POST',
                            async: true,
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                                'Authorization': settings.token,
                            },
                            data: JSON.stringify({
                                "origin": Origin1Data,
                                "destination": Destination1Data,
                                "depatureDate": MonthYear1 + "-" + Day1,
                                "returnDate": "",
                                "adultCount": ADTdata,
                                "childCount": CHDdata || 0,
                                "infantCount": INFdata || 0,
                                "promoCode": promocode || '',
                                "language": culture || 'en'
                            }),
                            success: function (res) {
                                return window.location.href = res.data.res.url;
                            }
                        });
                    } else {
                        var dataUrl = basePortalURL +
                            '?culture=' + cultureData +
                            '&querystring=' + querystringData +
                            '&RadioButtonMarketStructure=' + tripType +
                            '&Origin1=' + Origin1Data +
                            '&Destination1=' + Destination1Data +
                            '&Day1=' + Day1 + '&MonthYear1=' + MonthYear1 +
                            '&ADT=' + ADTdata +
                            '&INFANT=' + INFdata +
                            '&CHD=' + CHDdata +
                            '&promoCode=' + promocode +
                            '&isflexible=' + flexibleDatesOneWayDeparture +
                            '&EXTRASEAT=' + EXTRAdata +
                            '&PAXDIS=' + PaxPromo;
                        window.location.assign(dataUrl);
                    }
                }
            });

        }
    });

    searchOneWayFlight.on('blur keyup change', 'input', function (event) {
        validateForm('#searchOneWayFlight');
        ValidatePromoCodeLogic($('#flight_search_promo_code_oneway'));
    });

    var searchFlightStatus = $("#searchFlightStatus");
    searchFlightStatus.validate({
        rules: {
            from_flight_search_flightstatus: {
                required: true
            },
            to_flight_search_flightstatus: {
                required: true
            },
            departure_flight_search_flightstatus: {
                required: true
            },
            passengers_flight_search_flightstatus: {
                required: true,
            }
        },
        messages: {
            from_flight_search_flightstatus: {
                required: Js_FromLocation
            },
            to_flight_search_flightstatus: {
                required: Js_DestinationFlight
            },
            departure_flight_search_flightstatus: {
                required: Js_DepartureDate
            },
            passengers_flight_search_flightstatus: {
                required: Js_PassengersDetails
            }
        },
        submitHandler: function (form) {

            var querystringData = true;
            var flexibleDatesFlightStatuDeparture = $('#flexibleDatesFlightStatuDeparture').is(":checked");
            var Origin1Data = $('#from_flight_search_flightstatus').attr('data-selected');
            var Destination1Data = $('#to_flight_search_flightstatus').attr('data-selected');
            var Day1Data = $('#departure_flight_search_flightstatus').val();
            var DepDate = moment(Day1Data).format("YYYY-MM-DD");
            //var domainCulture = $("#flightStatusDomainCulture").text();
            var adddate = (moment(Day1Data).add(1, 'days')).format("YYYY-MM-DD");
            //if (domainCulture.indexOf("http://") != -1) {
            //    domainCulture = domainCulture.replace("http://", "https://");
            //}

            var dataUrl = domainCulture +
                '/getflightstatus/' + Origin1Data + '/' + Destination1Data + '/' + DepDate;
            //var url = domainCulture.toLowerCase() + "/plan/getting-to-the-airport/flight-status";

            var domainCulture = $("#flightscheduleDomainCulture").text();

            if (domainCulture.indexOf("http://") != -1) {
                domainCulture = domainCulture.replace("http://", "https://");
            }
            //var url = location.protocol + '//' + location.host + location.pathname;

            $('.xtable #addeddata').remove();

            $.ajax({
                url: "" + domainCulture + "/Umbraco/Surface/FlightSchedule/GetFlightStatus/?origin=" + Origin1Data + "&destination=" + Destination1Data + "&departuredate=" + DepDate,
                data: { DepartureStation: Origin1Data, ArrivalStation: Destination1Data, BeginDate: DepDate, EndDate: adddate },
                cache: false,
                type: "GET",

                success: function (data) {
                    var Flight = '';
                    $('#flightStatusResultContainer').show();
                    $('.jazeera_backdrop').removeClass('active');
                    $('.tab-panel').removeClass('active');
                    $("#flight_status_results_inner").detach();
                    $("#flightStatusResultContainer").html(data); // HTML DOM replace

                }
            });
        }
    });

    searchFlightStatus.on('blur keyup change', 'input', function (event) {
        validateForm('#searchFlightStatus');
    });



    var searchflightschedule = $("#searchflightschedule");
    searchflightschedule.validate({
        rules: {
            from_flight_search_flightschedule: {
                required: true
            },
            to_flight_search_flightschedule: {
                required: true
            },
            departure_flight_search_flightschedule: {
                required: true
            },
            passengers_flight_search_flightschedule: {
                required: true,
            }
        },
        messages: {
            from_flight_search_flightschedule: {
                required: Js_FromLocation
            },
            to_flight_search_flightschedule: {
                required: Js_DestinationFlight
            },
            departure_flight_search_flightschedule: {
                required: Js_DepartureDate
            },
            passengers_flight_search_flightschedule: {
                required: Js_PassengersDetails
            }
        },
        submitHandler: function (form) {

            var querystringData = true;
            var flexibleDatesFlightStatuDeparture = $('#flexibleDatesFlightStatuDeparture').is(":checked")
            //var tripType = 'OneWay';
            var Origin1Data = $('#from_flight_search_flightschedule').attr('data-selected');
            var Destination1Data = $('#to_flight_search_flightschedule').attr('data-selected');
            var Day1Data = $('#departure_flight_search_flightschedule').val();

            var DepDate = moment(Day1Data).format("YYYY-MM-DD");

            var domainCulture = $("#flightscheduleDomainCulture").text();
            if (domainCulture.indexOf("http://") != -1) {
                domainCulture = domainCulture.replace("http://", "https://");
            }
            $('.xtable #addeddata').remove();
            $.ajax({
                url: "" + domainCulture + "/Umbraco/Surface/FlightSchedule/GetFlightSchedules/?origin=" + Origin1Data + "&destination=" + Destination1Data + "&departuredate=" + DepDate,
                data: { origin: Origin1Data, destination: Destination1Data, departureDate: DepDate },
                cache: false,
                type: "GET",
                //dataType: "html",

                success: function (data) {
                    $('.jazeera_backdrop').removeClass('active');
                    $('.tab-panel').removeClass('active');
                    $("#flight_schedule_results_inner").detach();
                    $("#flightStatusResultContainerNew").html(data); // HTML DOM replace
                    //$('.xtable').append(data);
                    $('#flightStatusResultContainerNew').show();
                }
            });
            //$.ajax({
            //    //url: "" + domainCulture + "/getflightschedule/" + Origin1Data + "/" + Destination1Data + "/" + DepDate,
            //    url: "https://stg-mapi.jazeeraairways.com/api/jz/v1/FlightSchedule?",
            //    headers: {
            //        'Accept': 'application/json',
            //        'Content-Type': 'application/json',
            //        'Authorization': settings.token,
            //    },
            //    data: { ArrivalStation: Origin1Data, DepartureStation: Destination1Data, TravelDate: DepDate },
            //    type: "GET",
            //        success: function (data, textStatus, XMLHttpRequest) {
            //        $('.jazeera_backdrop').removeClass('active');
            //            $('.tab-panel').removeClass('active');
            //            var Flight = '';
            //            $.each(data.flightScheduleData, function (key, value) {

            //                //CONSTRUCTION OF ROWS HAVING
            //                // DATA FROM JSON OBJECT
            //                Flight += '<tr id="addeddata">';
            //                Flight += '<td>' +
            //                    moment(value.effectiveFrom).format("DD-MMM-YYYY") + '</td>';

            //                Flight += '<td>' +
            //                    moment(value.effectiveTill).format("DD-MMM-YYYY")  + '</td>';

            //                Flight += '<td>' +
            //                    value.arrivalStationName + '</td>';

            //                Flight += '<td>' +
            //                    value.departureStationName + '</td>';
            //                Flight += '<td>' +
            //                    value.flightNo + '</td>';
            //                Flight += '<td>' +
            //                    value.departureTime + '</td>';
            //                Flight += '<td>' +
            //                    value.arrivalTime + '</td>';
            //                //Flight += '<td>' +
            //                //    value.daysOfOperations + '</td>';
            //                Flight += '<td>';
            //                Flight += '<table><tr>';

            //                if (value.daysOfOperations.indexOf("1") > -1) {
            //                    Flight += '<td style="padding: 3px 5px 0px 5px;background: #C1C1C1;"> <img src="https://www.jazeeraairways.com/images/available.gif" style="width: 12px;"> </td>';
            //                } else {
            //                    Flight +='<td style="padding: 3px 5px 0px 5px;width:23px;"> </td>'
            //                }
            //                if (value.daysOfOperations.indexOf("2") > -1) {
            //                    Flight += '<td style="padding: 3px 5px 0px 5px;background: #C1C1C1;"> <img src="https://www.jazeeraairways.com/images/available.gif" style="width: 12px;"> </td>';
            //                } else {
            //                    Flight +='<td style="padding: 3px 5px 0px 5px;width:23px;"> </td>'
            //                }
            //                if (value.daysOfOperations.indexOf("3") > -1) {
            //                    Flight += '<td style="padding: 3px 5px 0px 5px;background: #C1C1C1;"> <img src="https://www.jazeeraairways.com/images/available.gif" style="width: 12px;"> </td>';
            //                } else {
            //                    Flight +='<td style="padding: 3px 5px 0px 5px;width:23px;"> </td>'
            //                }
            //                if (value.daysOfOperations.indexOf("4") > -1) {
            //                    Flight += '<td style="padding: 3px 5px 0px 5px;background: #C1C1C1;"> <img src="https://www.jazeeraairways.com/images/available.gif" style="width: 12px;"> </td>';
            //                } else {
            //                    Flight +='<td style="padding: 3px 5px 0px 5px;width:23px;"> </td>'
            //                }
            //                if (value.daysOfOperations.indexOf("5") > -1) {
            //                    Flight += '<td style="padding: 3px 5px 0px 5px;background: #C1C1C1;"> <img src="https://www.jazeeraairways.com/images/available.gif" style="width: 12px;"> </td>';
            //                } else {
            //                    Flight +='<td style="padding: 3px 5px 0px 5px;width:23px;"> </td>'
            //                }
            //                if (value.daysOfOperations.indexOf("6") > -1) {
            //                    Flight += '<td style="padding: 3px 5px 0px 5px;background: #C1C1C1;"> <img src="https://www.jazeeraairways.com/images/available.gif" style="width: 12px;"> </td>';
            //                } else {
            //                    Flight +='<td style="padding: 3px 5px 0px 5px;width:23px;"> </td>'
            //                }
            //                if (value.daysOfOperations.indexOf("7") > -1) {
            //                    Flight += '<td style="padding: 3px 5px 0px 5px;background: #C1C1C1;"> <img src="https://www.jazeeraairways.com/images/available.gif" style="width: 12px;"> </td>';
            //                } else {
            //                    Flight +='<td style="padding: 3px 5px 0px 5px;width:23px;"> </td>'
            //                }
            //                Flight += '</tr></table>';
            //                //$("#scheduletable").append(days);
            //                Flight += '</td>';
            //                Flight += '</tr>';
            //            });
            //            //INSERTING ROWS INTO TABLE 
            //            $('.xtable').append(Flight);
            //            $('#flightStatusResultContainer').show();
            //    }
            //});
        }
    });

    searchflightschedule.on('blur keyup change', 'input', function (event) {
        validateForm('#searchflightschedule');
    });


    var searchMultiCityFlight = $("#searchMultiCityFlight");
    searchMultiCityFlight.validate({
        rules: {

            from_flight_search_muticity1: {
                required: true
            },
            to_flight_search_muticity1: {
                required: true
            },
            departure_flight_search_muticity1: {
                required: true
            },

            from_flight_search_muticity2: {
                required: true
            },
            to_flight_search_muticity2: {
                required: true
            },
            departure_flight_search_muticity2: {
                required: true
            },

            from_flight_search_muticity3: {
                //required: true
            },
            to_flight_search_muticity3: {
                //required: true
            },
            departure_flight_search_muticity3: {
                //required: true
            },

            from_flight_search_muticity4: {
                //required: true
            },
            to_flight_search_muticity4: {
                //required: true
            },
            departure_flight_search_muticity4: {
                //required: true
            },

            from_flight_search_muticity5: {
                //required: true
            },
            to_flight_search_muticity5: {
                //required: true
            },
            departure_flight_search_muticity5: {
                //required: true
            },

            from_flight_search_muticity6: {
                //required: true
            },
            to_flight_search_muticity6: {
                //required: true
            },
            departure_flight_search_muticity6: {
                //required: true
            },

            from_flight_search_muticity7: {
                //required: true
            },
            to_flight_search_muticity7: {
                //required: true
            },
            departure_flight_search_muticity7: {
                //required: true
            },

            from_flight_search_muticity8: {
                //required: true
            },
            to_flight_search_muticity8: {
                //required: true
            },
            departure_flight_search_muticity8: {
                //required: true
            },

            from_flight_search_muticity9: {
                //required: true
            },
            to_flight_search_muticity9: {
                //required: true
            },
            departure_flight_search_muticity9: {
                //required: true
            },

            from_flight_search_muticity10: {
                //required: true
            },
            to_flight_search_muticity10: {
                //required: true
            },
            departure_flight_search_muticity10: {
                //required: true
            },

            passengers_flight_search_multi_city: {
                required: true,
                passengerTotCountMultiway: true,
                passengerCountMultiWay: true
            }
        },
        messages: {
            from_flight_search_muticity1: {
                required: Js_FromLocation
            },
            to_flight_search_muticity1: {
                required: Js_DestinationFlight
            },
            departure_flight_search_muticity1: {
                required: Js_DepartureDate
            },
            from_flight_search_muticity2: {
                required: Js_FromLocation
            },
            to_flight_search_muticity2: {
                required: Js_DestinationFlight
            },
            departure_flight_search_muticity2: {
                required: Js_DepartureDate
            }
        },

         // Multi City deeplink construction

        submitHandler: function (form) {
            let cmsIsTrue = false;

            var storedSaversData = JSON.parse(sessionStorage.getItem('saveersList'))


            var departDate = ($('#departure_flight_search_muticity1').val());
            var passengerTypes = {
                adult: $("#multiWayAdult").val(),
                children: $("#multiWayChild").val(),
                infant: $("#multiWayInfant").val()
            };

            var plan = storedSaversData;
            let saversPassengers = { adult: 0, children: 0, infant: 0 };
            let travelPassengersCount = Number(passengerTypes.adult) + Number(passengerTypes.children);
            if (plan?.actingRole == 'WWWC') {


                if (travelPassengersCount > plan?.beneficiaries?.length) {
                    cmsIsTrue = true; // Stop processing further
                }
                else {
                    plan.beneficiaries.forEach(function (passengerTypeBenificiaries) {
                        var dDate = new Date(departDate);
                        var dob = new Date(passengerTypeBenificiaries.dateOfBirth);
                        var timeDiff = Math.abs(dDate.getTime() - dob.getTime());
                        var age = Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 365.25));

                        if (age < 2) { //infant
                            ++saversPassengers.infant;
                        } else if (age >= 2 && age < 12) { //children
                            ++saversPassengers.children;
                        } else { //adult
                            ++saversPassengers.adult;
                        }
                    });
                    if (!(passengerTypes.adult <= saversPassengers.adult && passengerTypes.children <= saversPassengers.children)) {
                        cmsIsTrue = true;   // Stop processing further
                    }

                }
            }
            if (cmsIsTrue) {

                showPopup(); // Show error message
                return false
            }
            if (parseInt($("#multiWayExtra").val()) >= 1) {
                $("#flight_search_muticity_promo_code").val("PEXST");
            }
            //if (cultureData != null && cultureData != undefined && cultureData != String.empty) {
            //    if (cultureData.split('-')[0]=="ru")
            //        cultureData = "en-kw";
            //}
            var querystringData = true;
            var tripType = 'MultiCity';


            var flexibleDatesMultiCityDeparture1 = $('#flexibleDatesMultiCityDeparture1').is(":checked");
            var flexibleDatesMultiCityDeparture2 = $('#flexibleDatesMultiCityDeparture2').is(":checked");
            var flexibleDatesMultiCityDeparture3 = $('#flexibleDatesMultiCityDeparture3').is(":checked");
            var flexibleDatesMultiCityDeparture4 = $('#flexibleDatesMultiCityDeparture4').is(":checked");
            var flexibleDatesMultiCityDeparture5 = $('#flexibleDatesMultiCityDeparture5').is(":checked");
            var flexibleDatesMultiCityDeparture6 = $('#flexibleDatesMultiCityDeparture6').is(":checked");
            var flexibleDatesMultiCityDeparture7 = $('#flexibleDatesMultiCityDeparture7').is(":checked");
            var flexibleDatesMultiCityDeparture8 = $('#flexibleDatesMultiCityDeparture8').is(":checked");
            var flexibleDatesMultiCityDeparture9 = $('#flexibleDatesMultiCityDeparture9').is(":checked");
            var flexibleDatesMultiCityDeparture10 = $('#flexibleDatesMultiCityDeparture10').is(":checked");

            var Origin1Data = $('#from_flight_search_muticity1').attr('data-selected');
            var Origin2Data = $('#from_flight_search_muticity2').attr('data-selected');
            var Origin3Data = $('#from_flight_search_muticity3').attr('data-selected');
            var Origin4Data = $('#from_flight_search_muticity4').attr('data-selected');
            var Origin5Data = $('#from_flight_search_muticity5').attr('data-selected');
            var Origin6Data = $('#from_flight_search_muticity6').attr('data-selected');
            var Origin7Data = $('#from_flight_search_muticity7').attr('data-selected');
            var Origin8Data = $('#from_flight_search_muticity8').attr('data-selected');
            var Origin9Data = $('#from_flight_search_muticity9').attr('data-selected');
            var Origin10Data = $('#from_flight_search_muticity10').attr('data-selected');

            var Destination1Data = $('#to_flight_search_muticity1').attr('data-selected');
            var Destination2Data = $('#to_flight_search_muticity2').attr('data-selected');
            var Destination3Data = $('#to_flight_search_muticity3').attr('data-selected');
            var Destination4Data = $('#to_flight_search_muticity4').attr('data-selected');
            var Destination5Data = $('#to_flight_search_muticity5').attr('data-selected');
            var Destination6Data = $('#to_flight_search_muticity6').attr('data-selected');
            var Destination7Data = $('#to_flight_search_muticity7').attr('data-selected');
            var Destination8Data = $('#to_flight_search_muticity8').attr('data-selected');
            var Destination9Data = $('#to_flight_search_muticity9').attr('data-selected');
            var Destination10Data = $('#to_flight_search_muticity10').attr('data-selected');

            var Day1Data = $('#departure_flight_search_muticity1').val();
            var Day2Data = $('#departure_flight_search_muticity2').val();
            var Day3Data = $('#departure_flight_search_muticity3').val();
            var Day4Data = $('#departure_flight_search_muticity4').val();
            var Day5Data = $('#departure_flight_search_muticity5').val();
            var Day6Data = $('#departure_flight_search_muticity6').val();
            var Day7Data = $('#departure_flight_search_muticity7').val();
            var Day8Data = $('#departure_flight_search_muticity8').val();
            var Day9Data = $('#departure_flight_search_muticity9').val();
            var Day10Data = $('#departure_flight_search_muticity10').val();

            var ADTdata = $('#multiWayAdult').val();
            var CHDdata = $('#multiWayChild').val();
            var INFdata = $('#multiWayInfant').val();
            var EXTRAdata = $('#multiWayExtra').val();


            var Day1 = moment(Day1Data).format("D"); var MonthYear1 = moment(Day1Data).format("YYYY-M");
            var Day2 = moment(Day2Data).format("D"); var MonthYear2 = moment(Day2Data).format("YYYY-M");
            var Day3 = moment(Day3Data).format("D"); var MonthYear3 = moment(Day3Data).format("YYYY-M");
            var Day4 = moment(Day4Data).format("D"); var MonthYear4 = moment(Day4Data).format("YYYY-M");
            var Day5 = moment(Day5Data).format("D"); var MonthYear5 = moment(Day5Data).format("YYYY-M");
            var Day6 = moment(Day6Data).format("D"); var MonthYear6 = moment(Day6Data).format("YYYY-M");
            var Day7 = moment(Day7Data).format("D"); var MonthYear7 = moment(Day7Data).format("YYYY-M");
            var Day8 = moment(Day8Data).format("D"); var MonthYear8 = moment(Day8Data).format("YYYY-M");
            var Day9 = moment(Day9Data).format("D"); var MonthYear9 = moment(Day9Data).format("YYYY-M");
            var Day10 = moment(Day10Data).format("D"); var MonthYear10 = moment(Day10Data).format("YYYY-M");
            var PaxPromo = $('#PaxTypes_multi').find(":selected").val();
            var flight2 = '';
            if (flexibleDatesMultiCityDeparture2 && Origin2Data && Destination2Data && MonthYear2) {
                flight2 =
                    '&Origin2=' + Origin2Data +
                    '&Destination2=' + Destination2Data +
                    '&Day2=' + Day2 + '&MonthYear2=' + MonthYear2;
            }

            var flight3 = '';
            if (flexibleDatesMultiCityDeparture3 && Origin3Data && Destination3Data && MonthYear3) {
                flight3 =
                    '&Origin3=' + Origin3Data +
                    '&Destination3=' + Destination3Data +
                    '&Day3=' + Day3 + '&MonthYear3=' + MonthYear3;
            }

            var flight4 = '';
            if (flexibleDatesMultiCityDeparture4 && Origin4Data && Destination4Data && MonthYear4) {
                flight4 =
                    '&Origin4=' + Origin4Data +
                    '&Destination4=' + Destination4Data +
                    '&Day4=' + Day3 + '&MonthYear4=' + MonthYear4;
            }

            var flight5 = '';
            if (flexibleDatesMultiCityDeparture5 && Origin5Data && Destination5Data && MonthYear5) {
                flight5 =
                    '&Origin5=' + Origin5Data +
                    '&Destination5=' + Destination5Data +
                    '&Day5=' + Day3 + '&MonthYear5=' + MonthYear5;
            }

            var flight6 = '';
            if (flexibleDatesMultiCityDeparture6 && Origin6Data && Destination6Data && MonthYear6) {
                flight6 =
                    '&Origin6=' + Origin6Data +
                    '&Destination6=' + Destination6Data +
                    '&Day6=' + Day3 + '&MonthYear6=' + MonthYear6;
            }

            var flight7 = '';
            if (flexibleDatesMultiCityDeparture7 && Origin7Data && Destination7Data && MonthYear7) {
                flight7 = '&isflexible=' + flexibleDatesMultiCityDeparture7 +
                    '&Origin7=' + Origin7Data +
                    '&Destination7=' + Destination7Data +
                    '&Day7=' + Day3 + '&MonthYear7=' + MonthYear7;
            }

            var flight8 = '';
            if (flexibleDatesMultiCityDeparture8 && Origin8Data && Destination8Data && MonthYear8) {
                flight8 = '&isflexible=' + flexibleDatesMultiCityDeparture8 +
                    '&Origin8=' + Origin8Data +
                    '&Destination8=' + Destination8Data +
                    '&Day8=' + Day3 + '&MonthYear8=' + MonthYear8;
            }

            var flight9 = '';
            if (flexibleDatesMultiCityDeparture9 && Origin9Data && Destination9Data && MonthYear9) {
                flight9 = '&isflexible=' + flexibleDatesMultiCityDeparture9 +
                    '&Origin9=' + Origin9Data +
                    '&Destination9=' + Destination9Data +
                    '&Day9=' + Day3 + '&MonthYear9=' + MonthYear9;
            }

            var flight10 = '';
            if (flexibleDatesMultiCityDeparture10 && Origin10Data && Destination10Data && MonthYear10) {
                flight10 = '&isflexible=' + flexibleDatesMultiCityDeparture10 +
                    '&Origin10=' + Origin10Data +
                    '&Destination10=' + Destination10Data +
                    '&Day10=' + Day3 + '&MonthYear10=' + MonthYear10;
            }

            var promocode = $("#flight_search_muticity_promo_code").val().toUpperCase();
            var dataUrl = basePortalURL +
                '?culture=' + cultureData +
                '&querystring=' + querystringData +
                '&RadioButtonMarketStructure=' + tripType +
                '&Origin1=' + Origin1Data +
                '&Destination1=' + Destination1Data +
                '&Day1=' + Day1 + '&MonthYear1=' + MonthYear1 +
                '&isflexible=' + flexibleDatesMultiCityDeparture1 +
                flight2 + flight3 + flight4 + flight5 + flight6 + flight7 + flight8 + flight9 + flight10 +
                '&ADT=' + ADTdata +
                '&INFANT=' + INFdata +
                '&CHD=' + CHDdata +
                '&promoCode=' + promocode +
                '&Origin2=' + Origin2Data +
                '&Destination2=' + Destination2Data +
                '&Day2=' + Day2 + '&MonthYear2=' + MonthYear2 +
                '&EXTRASEAT=' + EXTRAdata +
                '&PAXDIS=' + PaxPromo;
            if ($("#from_flight_search_muticity1").val().split(',')[1] != $("#to_flight_search_muticity2").val().split(',')[1] && Destination1Data == Origin2Data) {
                //$('.multicity-same-sector-message').modal('show');
                $('.sameOrigin-message').modal('show');
            }
            else {
                window.location.assign(dataUrl);
            }
        }
    });

    searchMultiCityFlight.on('blur keyup change', 'input', function (event) {
        validateForm('#searchMultiCityFlight');
        ValidatePromoCodeLogic($('#flight_search_muticity_promo_code'));
    });


    /*car departure date picker*/
    if ($('#car_departure_date').length) {
        $('#car_departure_date').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#car_departure_date_range',
            showTopbar: false,
            singleDate: true,
            startDate: new Date(),
            hoveringTooltip: false,
            alwaysOpen: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            console.log(obj.value);
            $('#car_departure_date').val(obj.value);
            $('#car_departure_date').parent('.form-field').addClass('populated');
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#car_dropoff_date').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#car_dropoff_date').data('dateRangePicker').setStart(obj.value);
            $('#car_dropoff_date').val(obj.value);
            $('#car_dropoff_date').parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');
            $('#car_departure_date').trigger('blur');
            //fixRangeSelection();
        }).click(function (evt) {
            evt.stopPropagation();
            console.log('clicked');
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            $('#car_dropoff_date').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');
        });
    }
    /*car departure date end*/


    /*car drop off date picker*/
    if ($('#car_dropoff_date').length) {
        $('#car_dropoff_date').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#car_dropoff_date_range',
            showTopbar: false,
            hoveringTooltip: false,
            alwaysOpen: true,
            //startDate: departure_formated_date,
            selectForward: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $('#car_departure_date').data('dateRangePicker').setDateRange(obj.date1, obj.date2, true);
            var departure_formated_date = moment(new Date(obj.date1)).format("ddd MMM DD YYYY");
            var return_formated_date = moment(new Date(obj.date2)).format("ddd MMM DD YYYY");
            $('#car_dropoff_date').val(departure_formated_date);
            $('#car_dropoff_date').val(return_formated_date);
            $('#car_dropoff_date').trigger('blur');
            $(this).parents('.daterangepicker-group').removeClass('show-popup');
        }).click(function (evt) {
            evt.stopPropagation();
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            $('#car_dropoff_date').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            var departure_formated_date = moment(new Date($('#car_departure_date').val())).format("ddd MMM DD YYYY");
            if (departure_formated_date != 'Invalid date') {
                $('#car_dropoff_date').data('dateRangePicker').setStart(departure_formated_date);
            }
            $('#car_departure_date').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');
        });
    }
    /*car drop off date picker*/
    //cars section home page validation starts here
    var searchCarsForm = $("#searchCarsForm");
    searchCarsForm.validate({
        rules: {
            car_departure_place: {
                required: true
            },
            car_departure_date: {
                required: true
            },
            car_dropoff_date: {
                required: true
            },
            car_dropoff_place:
            {
                required: function (element) {
                    return $("#IsSameLocation").is(":checked");
                }

            },
            car_pickuptime_hrs:
            {
                required: true,
                min: 1
            },
            car_dropofftime_hrs:
            {
                required: true,
                min: 1
            },
        },
        messages: {
            car_departure_place: {
                required: Js_FromLocation
            },
            car_departure_date: {
                required: Js_DepartureDate
            },
            car_dropoff_date: {
                required: Js_ReturnDate
            },
            car_dropoff_place: {
                required: Js_ReturnDate
            },
            car_pickuptime_hrs:
            {
                min: "Please select pickup time"
            },
            car_dropofftime_hrs:
            {
                min: "Please select drop off time"
            },
        },
        submitHandler: function (form) {


            var querystringData = true;
            var car_departure_place = $('#car_departure_place').val();
            var car_dropoff_place = $('#car_dropoff_place').val();
            var Day1Data = $('#car_departure_date').val();
            var Day2Data = $('#car_dropoff_date').val();
            var time1 = $('#car_pickuptime_hrs').val() + "-" + $('#car_pickuptime_mns').val();
            var time2 = $('#car_dropofftime_hrs').val() + "-" + $('#car_dropofftime_mns').val();
            if ($("#IsSameLocation").is(":checked")) {
                car_dropoff_place = car_departure_place
            }
            var Day1 = moment(Day1Data).format("D");
            var MonthYear1 = moment(Day1Data).format("YYYY-M");
            var Day2 = moment(Day2Data).format("D");
            var MonthYear2 = moment(Day2Data).format("YYYY-M");
            var dataUrl = basePortalURL +
                '?culture=' + cultureData +
                '&querystring=' + querystringData +
                '&Origin1=' + car_departure_place +
                '&Destination1=' + car_dropoff_place +
                '&Day1=' + Day1 + '&MonthYear1=' + MonthYear1 +
                '&Day2=' + Day2 + '&MonthYear2=' + MonthYear2 +
                '&time1=' + time1 +
                '&time2=' + time2;
            window.location.assign(dataUrl);
        }
    });
    searchCarsForm.on('blur keyup change', 'input,select', function (event) {
        validateForm('#searchCarsForm');
    });
    //cars section home page validation ends here
    //Banner Slideshow
    var $bannerSlider = $('.slideshow-wrapper .slideshow').on('init', function (slick) {
        $('.slideshow-wrapper').addClass('loaded');
    }).slick({
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 6000,
        dots: true,
        arrows: false,
        centerMode: false,
        infinite: true,
        speed: 4000,
        fade: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        draggable: true,
        appendDots: ".slideshow-controls .container",
        prevArrow: $('.banner-prev'),
        nextArrow: $('.banner-next'),
        rtl: isArabic('ar')
    });

    //boxed-slider
    $(document).ready(function () {
        $('.boxed-slider').slick({
            dots: true,
            prevArrow: "<button type='button' class='slick-prev btn-slick'><i class='icon icon-arrow-left'></i></button>",
            nextArrow: "<button type='button' class='slick-next btn-slick'><i class='icon icon-arrow-right'></i></button>"
        });

    });
    //Carousel Slideshow
    if (viewportWidth > 768) {

        var $carouselSlider = $('.carousel-wrap .carousel').on('init', function (slick) {
            $('.carousel-wrap').addClass('loaded');
        }).slick({
            lazyLoad: 'ondemand',
            autoplay: false,
            autoplaySpeed: 5000,
            dots: false,
            arrows: true,
            infinite: false,
            speed: 800,
            fade: false,
            pauseOnHover: false,
            pauseOnFocus: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
            centerPadding: '15px',
            prevArrow: $('.carousel-prev'),
            nextArrow: $('.carousel-next'),
            rtl: isArabic('ar'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    }
    // carousel basic card slideshow
    if (viewportWidth > 768) {

        var $carouselSlider_4 = $('.carousel-wrap .carousel_4').on('init', function (slick) {
            $('.carousel-wrap').addClass('loaded');
        }).slick({
            lazyLoad: 'ondemand',
            autoplay: false,
            autoplaySpeed: 5000,
            dots: false,
            arrows: true,
            infinite: false,
            speed: 800,
            fade: false,
            pauseOnHover: false,
            pauseOnFocus: false,
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: false,
            centerPadding: '15px',
            prevArrow: $('.carousel-prev_4'),
            nextArrow: $('.carousel-next_4'),
            rtl: isArabic('ar'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    }
    // $('.scroll-panel').scrollbar();

    $(".scroll-panel").mCustomScrollbar({
        axis: "y",
        theme: "minimal",
        autoHideScrollbar: false
    });
    function sysnTabs(selectedTab) {
        $('.payment-methods-tabs .panel-switch input:radio').prop('checked', false);
        $('.payment-methods-tabs .panel-switch input:radio#' + selectedTab).prop('checked', true);
    }

    function sysnMobileTabs(selectedTab) {
        $('.payment-wrap .mobile-panel-switch input:radio').prop('checked', false);
        $('.payment-wrap .mobile-panel-switch input:radio#' + selectedTab + "Mobile").prop('checked', true);
    }

    function activateTab() {
        var selectedTab = $('.payment-methods-tabs .panel-switch input:radio:checked').attr('id');
        $('section.payment-wrap form').removeClass('show');
        $('section.payment-wrap form[id="' + selectedTab + 'Form"]').addClass('show');
        sysnMobileTabs(selectedTab);
    }

    function activateMobileTab() {
        var selectedTab = $('.payment-wrap .mobile-panel-switch input:radio:checked').attr('id');
        $('section.payment-wrap form').removeClass('show');
        $('section.payment-wrap form[id="' + selectedTab.split('Mobile')[0] + 'Form"]').addClass('show');
        sysnTabs(selectedTab.split('Mobile')[0]);
    }

    $('.payment-methods-tabs .panel-switch input:radio').change(function (e) {
        activateTab();
        e.preventDefault();
    });

    $('.payment-wrap .mobile-panel-switch input:radio').change(function (e) {
        activateMobileTab();
        e.preventDefault();
    });

    activateTab();
    $('.passenger-details.details-form-wrap .card').each(function () {

        var title = $(this).find('[data-dynamic-title]').val();
        var firstname = $(this).find('[data-dynamic-firstname]').val();
        var lastname = $(this).find('[data-dynamic-lastname]').val();

        var passerger_name = '';
        if (firstname != '' || lastname != '') {
            var passerger_name = title + ' ' + firstname + ' ' + lastname;
            $(this).find('.grp-label').empty().append(passerger_name);
        } else {
            $(this).find('.grp-label').empty().append('Enter Passenger Details:');
        }

    });

    function primaryContact() {
        var primaryContactName = $('.passenger-details .card-header-wrap .radio-wrap input:checked').parents('.card-header-wrap').find('.card-header .grp-label').text();
        if (primaryContactName) {
            $('.contact-details .panel-label .title h3 strong').text(primaryContactName);
        }
    }

    function appendChanges(selectedElem) {
        var title = selectedElem.parents('.accordion-item').find('[data-dynamic-title]').val();
        var firstname = selectedElem.parents('.accordion-item').find('[data-dynamic-firstname]').val();
        var lastname = selectedElem.parents('.accordion-item').find('[data-dynamic-lastname]').val();

        var passerger_name = '';
        if (firstname != '' || lastname != '') {
            var passerger_name = title + ' ' + firstname + ' ' + lastname;
            selectedElem.parents('.accordion-item').find('.grp-label').empty().append(passerger_name);
        } else {
            selectedElem.parents('.accordion-item').find('.grp-label').empty().append('Enter Passenger Details:');
        }

        primaryContact();

    }

    $('[data-dynamic-title], [data-dynamic-firstname], [data-dynamic-lastname]').keyup(function (e) {
        var selectedElem = $(this);
        appendChanges(selectedElem)
    });

    $('[data-dynamic-title], [data-dynamic-firstname], [data-dynamic-lastname]').change(function (e) {
        var selectedElem = $(this);
        appendChanges(selectedElem);
    });


    $('.change-primary-contact').click(function (e) {
        $('body, html').scrollTo('.passenger-details-wrap', 500);
        e.preventDefault();
    });


    $('.check-group input:checkbox').change(function (e) {
        if ($(this).prop("checked") == true) {
            $(this).parents('.check-group').find('.form-grp').removeClass('hidden');
        } else {
            $(this).parents('.check-group').find('.form-grp').addClass('hidden');
        }
    });

    $('.card-header-wrap .radio-wrap input:radio').change(function (e) {
        primaryContact();
    });

    primaryContact();
    //Mobile Header
    //$('.header-inner .main-nav> .header-home-icon').clone().prependTo('.mobile-agent-menu');
    $('.header-inner > .brand').clone().prependTo('.mobile-header');

    $('.header-inner .main-nav').clone().appendTo('.mobile-header .mobile-menu-wrap');
    $('header .mobile-header .mobile-menu-wrap ul.main-nav > li >i').click(function (e) {
        $(this).parent('li').siblings().find('.sub-menu').removeClass('active');
        $(this).next('.sub-menu').toggleClass('active');
        e.preventDefault();
    });
    $("header .header-inner .main-nav > li").each(function () {
        if ($(this).find('i').next('.sub-menu').length) {
            $(this).addClass('has-submenu');
        }
    });

    $("header .header-inner .main-nav > li").hover(
        function () {
            if ($(this).find('i').next('.sub-menu').length) {
                $('.btn-dropdown-menu').removeClass('show').parent().removeClass('active');
                $(this).find('a').parent().addClass('active');
                //isheaderActive();
                bodyFreezeScroll();
            }
        },
        function () {
            if ($(this).find('i').next('.sub-menu').length) {
                $(this).find('a').parent().removeClass('active');
                $('.jazeera_overlay, header').removeClass('active');
                bodyUnfreezeScroll();
            }
        });
    $('.mobile-menu-toggle, .close-mobile-header').click(function () {
        $('.mobile-menu-toggle').toggleClass('active');
        $('.mobile-menu-wrap').toggleClass('active');
        $('.mobile-login-toggle').removeClass('active');
        $('.newly_added_mobile_class').toggleClass('active');
    });

    $('.mobile-login-toggle').click(function (e) {

        $('.mobile-menu-wrap').removeClass('active');
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.dropdown-login-register').prev('.btn').addClass('active');
            $('.dropdown-login-register').addClass('show');
            $('.jazeera_overlay, header').addClass('active');
            bodyFreezeScroll();
        } else {
            $('.dropdown-login-register').prev('.btn').removeClass('active');
            $('.dropdown-login-register').removeClass('show');
            $('.jazeera_overlay, header').removeClass('active');
            bodyUnfreezeScroll();
        }

        e.preventDefault();
    });
    $("header .header-inner .header-login-menu").hover(
        function () {
            $('.btn-dropdown-menu').removeClass('show').parent().removeClass('active');
            $(this).find('login-btn-dropdown').toggleClass('active');
            $(this).parents('li').siblings().find('.dropdown-language-switcher').removeClass('show');
            $('.header-login-menu .btn-dropdown-menu').toggleClass('show');
            $('header .header-inner .main-nav > li').removeClass('active');
            isheaderActive();
        },
        function () {
            if ($(this).find('a').next('.btn-dropdown-menu').length) {
                $(this).find('login-btn-dropdown').removeClass('active');
                $(this).find('.btn-dropdown-menu').removeClass('show');
                $('.jazeera_overlay, header').removeClass('active');
                bodyUnfreezeScroll();
            }
        });
    if ($('.main-nav').parent().hasClass('agency-header-menu')) {
        $('header .header-inner .main-nav>li .sub-menu').css('top', '125px');
        $('header .header-inner .toggle-btns li .btn-dropdown-menu').css('top', '85px');
        //$('header .header-inner .main-nav>li>a').addClass('yellowDrop');
        $('header .mobile-header .mobile-menu-wrap ul.main-nav li:nth-child(4) a').addClass('dropdown-icon-mobile');
        $('header .mobile-header .mobile-menu-wrap ul.main-nav li:nth-child(1) a').addClass('dropdown-icon-mobile1');
    }

    $('.login-switcher-btns .radio-wrap').click(function () {
        $('.login-form-wrap div').removeClass('active');
        var selectedform = $(this).find('input').attr('id');
        $('.login-form-wrap div[data-form="' + selectedform + '"]').addClass('active');
    });
    //Tab Switch
    $('a[data-switch]').click(function (e) {

        var selectedTab = $(this).attr('href');
        $(this).parent().find('a[data-switch]').removeClass('active');
        $(this).addClass('active');
        $(this).parent().siblings('[data-panel]').removeClass('active');
        $(this).parent().siblings('[data-panel][id$=' + selectedTab.split('#')[1] + ']').addClass('active');
        $('.tt-menu .tt-dataset').find('.tt-suggestion').show();
        //$('.tab-panel input, .tab-panel .tt-input').val('').trigger('click');
        $('.tab-panel .form-field').removeClass('populated');
        $('.tab-panel input').removeAttr('data-selected');
        $('.daterangepicker-group').removeClass('show-popup');
        e.preventDefault();
    });

    $('.btn-switch').click(function (e) {
        var selectedTab = $(this).attr('href');
        $('.daterangepicker-group').removeClass('show-popup');
        function addBackDrop() {
            if (selectedTab != '') {
                if ($('[data-panel][id$=' + selectedTab.split('#')[1] + ']').hasClass('active')) {
                    if ($("#traveladvisory_Body").hasClass("active")) {
                        removeBackDrop();
                    } else {
                        $('.jazeera_backdrop, .tab-panel').addClass('active');
                    }
                } else {
                    $('.jazeera_backdrop, .tab-panel').removeClass('active');
                }
            } else {
                // $('.jazeera_backdrop').removeClass('active');
            }
        }

        if (selectedTab == '#manage-booking' || selectedTab == '#check-in' || selectedTab == '#hotels' || selectedTab == '#one-way' || selectedTab == '#multi-city' || selectedTab == '#cars') {
            //addBackDrop();
            removeBackDrop();
        }
        populatePreviousTabData(selectedTab);
    });
    if (window.location.href.indexOf("#manage-booking") > -1) {
        $('#mngBookingHomePage').click();
        $('html, body').animate({
            scrollTop: $("#mngBookingHomePage").offset().top
        }, 'slow');
    }
    if (window.location.href.indexOf("#check-in") > -1) {
        $('#check-in-url').click();
        $('html, body').animate({
            scrollTop: $("#check-in-url").offset().top
        }, 'slow');
    }
    if (window.location.href.indexOf("#flights") > -1) {
        $('#flights-in-url').click();
        $('html, body').animate({
            scrollTop: $("#flights-in-url").offset().top
        }, 'slow');

    }

    $('.new-booking').click(function () {
        window.location.assign(window.location.origin + "/partners#flights")
    });
    $(".clsnew-booking").click(function () {
        $('html, body').animate({
            scrollTop: $("#flights-in-url").offset().top
        }, 30);
    });
    $('.jazeera_backdrop').click(function () {
        $(this).removeClass('active');
        $('.tab-panel').removeClass('active');
    });

    function populatePreviousTabData(selectedTab) {

        if (selectedTab == "#one-way") {
            if (!isEmpty(localStorage.from_flight_search)) {
                var fromFligthSearch = localStorage.from_flight_search;
                $("#from_flight_search_oneway").focus().typeahead('val', localStorage.from_flight_search);
                $("#from_flight_search_oneway").siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + localStorage.from_flight_search + ']').click();
                localStorage.from_flight_search = fromFligthSearch;
            }

            if (!isEmpty(localStorage.to_flight_search)) {
                setTimeout(function () {
                    var toFligthSearch = localStorage.to_flight_search;

                    if (viewportWidth < 990) {
                        $("#to_flight_search_oneway").focus().typeahead('val', toFligthSearch);
                    }
                    $("#to_flight_search_oneway").siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + localStorage.to_flight_search + ']').click();
                    $("#to_flight_search_oneway").blur();
                    $('#to_flight_search_oneway').attr('data-selected', toFligthSearch);

                    localStorage.to_flight_search = toFligthSearch;
                }, 1000)

            }

            if (!isEmpty($('#departure_flight_search').val())) {
                setTimeout(function () {
                    $('#departure_flight_search_oneway').val($('#departure_flight_search').val());
                    $("#departure_flight_search_oneway").parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
                    $("#departure_flight_search_oneway").parents('.daterangepicker-single').removeClass('show-popup');
                    $('#departure_flight_search_oneway').blur();
                    removeBackDrop();
                }, 600)
            }

            $('#oneWayAdult').val("1");
            $('#oneWayChild').val("0");
            $('#oneWayInfant').val("0");
            $('#oneWayExtra').val("0");

            if (!isEmpty($('#roundAdult').val()) && $('#roundAdult').val() != "1") {
                for (i = 1; i < $('#roundAdult').val(); i++) {
                    $('#oneWayAdult_btn_up').click();
                }
            }

            if (!isEmpty($('#roundChild').val()) && $('#roundChild').val() != "0") {
                for (i = 0; i < $('#roundChild').val(); i++) {
                    $('#oneWayChild_btn_up').click();
                }
            }

            if (!isEmpty($('#roundInfant').val()) && $('#roundInfant').val() != "0") {
                for (i = 0; i < $('#roundInfant').val(); i++) {
                    $('#oneWayInfant_btn_up').click();
                }
            }
            if (!isEmpty($('#roundExtra').val()) && $('#roundExtra').val() != "0") {
                for (i = 0; i < $('#roundExtra').val(); i++) {
                    $('#oneWayExtra_btn_up').click();
                }
            }

            if (!isEmpty($('#flight_search_promo_code').val())) {
                $('#flight_search_promo_code_oneway').val($('#flight_search_promo_code').val());
            }

            if ($("#flexibleDatesRoundDeparture").is(":checked")) {
                $('#flexibleDatesOneWayDeparture').prop('checked', true);
            }
            else {
                $('#flexibleDatesOneWayDeparture').prop('checked', false);
            }
        }

        if (selectedTab == "#return") {
            if (!isEmpty(localStorage.from_flight_search)) {
                var fromFligthSearch = localStorage.from_flight_search;

                $("#from_flight_search").focus().typeahead('val', localStorage.from_flight_search);

                $("#from_flight_search").siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + localStorage.from_flight_search + ']').click();
                localStorage.from_flight_search = fromFligthSearch;
            }

            if (!isEmpty(localStorage.to_flight_search)) {
                setTimeout(function () {
                    var toFligthSearch = localStorage.to_flight_search;
                    if (viewportWidth < 990) {
                        $("#to_flight_search").focus().typeahead('val', toFligthSearch);
                    }
                    $("#to_flight_search").siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + localStorage.to_flight_search + ']').click();
                    $("#to_flight_search").blur();
                    $('#to_flight_search').attr('data-selected', toFligthSearch);

                    localStorage.to_flight_search = toFligthSearch;
                }, 750)
            }

            if (!isEmpty($('#departure_flight_search_oneway').val())) {
                setTimeout(function () {
                    $('#departure_flight_search').val($('#departure_flight_search_oneway').val());
                    $("#departure_flight_search").parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
                    $("#departure_flight_search").parents('.daterangepicker-group').removeClass('show-popup');
                    //daterangepicker-group
                    $('#departure_flight_search').blur();
                    removeBackDrop();
                }, 600)
            }

            $('#roundAdult').val("1");
            $('#roundChild').val("0");
            $('#roundInfant').val("0");
            $('#roundExtra').val("0");

            if (!isEmpty($('#oneWayAdult').val()) && $('#oneWayAdult').val() != "1") {
                for (i = 1; i < $('#oneWayAdult').val(); i++) {
                    $('#roundAdult_btn_up').click();
                }
            }

            if (!isEmpty($('#oneWayChild').val()) && $('#oneWayChild').val() != "0") {
                for (i = 0; i < $('#oneWayChild').val(); i++) {
                    $('#roundChild_btn_up').click();
                }
            }

            if (!isEmpty($('#oneWayInfant').val()) && $('#oneWayInfant').val() != "0") {
                for (i = 0; i < $('#oneWayInfant').val(); i++) {
                    $('#roundInfant_btn_up').click();
                }
            }
            if (!isEmpty($('#oneWayExtra').val()) && $('#oneWayExtra').val() != "0") {
                for (i = 0; i < $('#oneWayExtra').val(); i++) {
                    $('#roundExtra_btn_up').click();
                }
            }

            if (!isEmpty($('#flight_search_promo_code_oneway').val())) {
                $('#flight_search_promo_code').val($('#flight_search_promo_code_oneway').val());
            }

            if ($("#flexibleDatesOneWayDeparture").is(":checked")) {
                $('#flexibleDatesRoundDeparture').prop('checked', true);
            }
            else {
                $('#flexibleDatesRoundDeparture').prop('checked', false);
            }
        }

    }

    function isEmpty(value) {
        return (value == null || value.length === 0);
    }

    function removeBackDrop() {
        if ($('.jazeera_backdrop').hasClass('active')) {
            $('.jazeera_backdrop').removeClass('active');
        }
    }

    //Collapsing panel
    $('.collapsing-panel .panel-head h6').prepend('<i class="icomoon icon-toggle"></i> ');
    $('.collapsing-panel .panel-head').click(function (e) {
        $('.panel-details').slideUp();
        $(this).next('.panel-details').slideDown();
        e.preventDefault();
    });


    //Mobile Collapse Panel
    $('a[data-collapse]').click(function (e) {
        $(this).siblings('[data-collapse]').removeClass('active');
        $(this).toggleClass('active');
        $('.daterangepicker-group').removeClass('show-popup');
        $(this).next('.panel-data-wrapper[data-panel]').siblings('[data-panel]').removeClass('active');
        $(this).next('.panel-data-wrapper[data-panel]').toggleClass('active');
        e.preventDefault();
    });

    //Collapse Expand*/
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
    });
    //Collapse Expand*/

    $('.accordion-wrapper .accordion-item .card-header h5.grp-label').each(function (e) {
        var titleToClone = $(this).text();
        $(this).parents('.accordion-item').find('.card-body .panel-label .title p').prepend('<span class="cloned">' + titleToClone + '</span>');
    });


    var tabSelector = $('.custom-nav-tabs-filled .nav-tabs a, .custom-nav-tabs-filled .tab-content .tab-select-mobile');
    var tabPanel = $('.custom-nav-tabs-filled .tab-content .tab-pane');

    $(tabSelector).click(function (e) {
        var selectedTabId = $(this).attr('href');


        $(tabPanel.selector).removeClass('active');
        $(tabSelector).removeClass('active');

        $(tabPanel.selector + selectedTabId).addClass('active');
        $(this).addClass('active');

        e.preventDefault();
    });

    $('.custom-accordian .panel-title').click(function (e) {
        $(this).parents('.panel').siblings().find('.collapse').removeClass('in show');
        $(this).parents('.panel').siblings().find('.panel-heading').removeClass('active');
        e.preventDefault();
    });

    $('.th-head').hover(function () {
        $(this).toggleClass("active");
        var currentIndex = $(this).index() + 1;
        $(this).parents('.custom-nested-table').find('.week-table > tbody > tr > td:nth-child(' + currentIndex + ')').toggleClass("active").siblings().removeClass('active');
    });

    var nestedTabSelector = $('.nested-tab-nav ul.tab-nav li a');
    $(nestedTabSelector).click(function (e) {
        var selectedTabId = $(this).attr('href');
        $(this).parent().addClass('active').siblings().removeClass('active');
        $(this).parents('.nested-tab').find('.nested-tab-panel' + selectedTabId).addClass('active').siblings().removeClass('active');
        e.preventDefault();
    });


    $(".btn-group > .btn").click(function () {
        $(".btn-group > .btn").removeClass("active");
        $(this).addClass("active");
    });

    $(".btn-group > .btn-default:first-child").click(function () {
        $(this).siblings().toggleClass("btn-default-active");
    });

    // responsive javascripts
    if ($(window).width() < 768) {
        $("section.featured-flight-booking .title .btn").appendTo(".featured-flight-booking-inner");
    }

    // map slider
    $(".map-data-control").click(function () {
        $(".map-data-list.map-data-strip, .map-data-list").toggleClass("active").stop();
    })

    // .generate-dynamic-booking-urls
    $('.generate-dynamic-booking-urls .card').each(function () {


        var querystringData = true;
        var flexibleDatesOneWayDeparture = $('#flexibleDatesOneWayDeparture').val();
        var tripType = 'OneWay';
        var Origin1Data = $(this).data('origin');
        var Destination1Data = $(this).data('destination');

        var Day1Data = new Date();

        var Day1 = moment(Day1Data).format("D");
        var MonthYear1 = moment(Day1Data).format("YYYY-M");

        if (flexibleDatesOneWayDeparture) {
            flexibleDatesOneWayDeparture = true;
        } else {
            flexibleDatesOneWayDeparture = false;
        }
        var dataUrl = basePortalURL +
            '?culture=' + cultureData +
            '&querystring=' + querystringData +
            '&isflexible=false' +
            '&RadioButtonMarketStructure=' + tripType +
            '&Origin1=' + Origin1Data +
            '&Destination1=' + Destination1Data +
            '&Day1=' + Day1 + '&MonthYear1=' + MonthYear1 +
            '&ADT=1' +
            '&INFANT=0' +
            '&CHD=0';

        $(this).find('.btn').attr('href', dataUrl);

    });
    var Airports = new Bloodhound({
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name', 'country', 'code'),
        identify: function (obj) { return obj.code; },
        //prefetch: '/assets/json/airports.json'
    });


    function suggestionsWithDefaultsCurrentLocation(q, sync, async) {
        if (q === '') {

            sync(Airports.get('DXB', 'SHJ'));
        }
    }

    function suggestionsWithDefaultsAirports(q, sync, async) {
        if (q === '') {
            Airports.search('a', sync);
        } else {
            Airports.search(q, sync);
        }
    }


    function fixRangeSelection() {
        $('.month-wrapper').find('table .day.nextMonth, table .day.lastMonth').parent().addClass('invalid-date-td');
        $('.month-wrapper').find('table .first-date-selected.checked.lastMonth').parent().removeClass('first-date-selected-td');
        $('.month-wrapper').find('table .last-date-selected.checked.lastMonth').parent().removeClass('last-date-selected-td');
    }

    $('.datepicker-dropdown').mask("00/00/0000");

    /*single-date-picker*/
    if ($('.single-date-picker-schedule').length) {
        $('.single-date-picker-schedule').on("focus", function () {
            var currentId = $(this).attr('id');
            var contanerID = '#' + currentId + '_range_picker';
            var currentIdDom = '#' + currentId;

            //console.log(currentId, contanerID, currentIdDom);

            var defaultStartDate = new Date();

            if ($(this).parents().hasClass('hidden-field-group')) {
                if ($(this).parents('.form-wrap').index() != 0) {
                    var previewsDateSelected = $(this).parents('.form-wrap').prev().find('.single-date-picker').val();
                    if (previewsDateSelected != '') {
                        defaultStartDate = previewsDateSelected;
                    }
                } else {
                    var firstSelectedDate = $('.sub-panel-data#multi-city .form-wrap.active').find('.single-date-picker').val();
                    if (firstSelectedDate != '') {
                        defaultStartDate = firstSelectedDate;
                    }
                }
            }

            //console.log(defaultStartDate);

            $(currentIdDom).dateRangePicker({
                format: 'ddd MMM DD YYYY',
                inline: true,
                stickyMonths: true,
                container: contanerID,
                showTopbar: false,
                singleDate: true,

                startDate: defaultStartDate,
                hoveringTooltip: false,
                //singleMonth: true,
                alwaysOpen: true,
                customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
                customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>',

                //beforeShowDay: function (date) {

                //    let isValidDate = true;
                //    if (localStorage.calender_available_dates? !localStorage.calender_available_dates.find(x => {
                //        let date1 = new Date(x);
                //        alert(date1)
                //        let date2 = new Date(date);
                //        return date1.getDate() == date2.getDate() && date1.getMonth() == date2.getMonth() && date1.getFullYear() == date2.getFullYear();
                //    }) : false) {
                //        isValidDate = false;
                //    } else {
                //    }
                //    return [isValidDate, '', '']

                //}

            }).bind('datepicker-change', function (evt, obj) {

                $('#' + currentId).val(obj.value);
                $(currentIdDom).parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
                $(currentIdDom).parents('.daterangepicker-single').find('.float-label-wrapper').addClass('populated');
                $(currentIdDom).parents('.daterangepicker-single').removeClass('show-popup');
                var nextTabIndex = evt.currentTarget.tabIndex + 1;
                $(this).parents('.sub-panel-data').find('input[tabindex="' + nextTabIndex + '"]').focus();
                if ($(this).parents('.sub-panel-data').find('input[tabindex="' + nextTabIndex + '"]').hasClass('dropdown-toggle')) {
                    if (!navigator.userAgent.match(/iPad|iPhone|Android|BlackBerry|Windows Phone|webOS/i)) {
                        $(this).parents('.sub-panel-data').find('input[tabindex="' + nextTabIndex + '"]').next('.dropdown-menu').toggleClass('show');
                    }
                }

                $(this).parents('.form-wrap').nextAll().find('.single-date-picker-schedule').val('');
                $(this).parents('.form-wrap').nextAll().find('.daterangepicker-single').find('.float-label-wrapper').removeClass('populated');
                checkValid();
                $(currentIdDom).blur();
            }).click(function (evt) {

                // $(currentIdDom).data('dateRangePicker').setStart( moment(defaultStartDate).format("ddd MMM DD YYYY") );

                $('.dropdown-toggle + .dropdown-menu').removeClass('show');
                $('.daterangepicker-single').find('.range-picker-wrap').removeClass('active');
                $(currentIdDom).parents('.daterangepicker-single').find('.range-picker-wrap').addClass('active');
                $('.isFlexibleCheckbox').addClass('active');
                $(currentIdDom).parents('.daterangepicker-single').addClass('show-popup');
                evt.stopPropagation();



            });

            $(currentIdDom).data('dateRangePicker').setStart(moment(defaultStartDate).format("ddd MMM DD YYYY"));


        });
    }
    /*single-date-picker*/
    /*departure flight date picker*/
    //if ($('#departure_flight_search').length) {
    //    $('#departure_flight_search').dateRangePicker({
    //        format: 'ddd MMM DD YYYY',
    //        inline: true,
    //        stickyMonths: true,
    //        container: '#departure_flight_date_range',
    //        showTopbar: false,
    //        singleDate: true,
    //        startDate: new Date(),
    //        hoveringTooltip: false,
    //        alwaysOpen: true,
    //        customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
    //        customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>',
    //        //beforeShowDay: function (date) {
    //        //    let isValidDate = true;
    //        //    if ((localStorage.calender_available_dates)? !(localStorage.calender_available_dates).find(x => {
    //        //        let date1 = new Date(x);
    //        //        let date2 = new Date(date);
    //        //        return date1.getDate() == date2.getDate() && date1.getMonth() == date2.getMonth() && date1.getFullYear() == date2.getFullYear();
    //        //    }) : false) {
    //        //        isValidDate = false;
    //        //    } else {
    //        //    }
    //        //    return [isValidDate, '', '']
    //        //}
    //    }).bind('datepicker-change', function (evt, obj) {


    //        $('#departure_flight_search').val(obj.value);
    //        if (obj.value != null || obj.value != "") {
    //            $('#departure_flight_search-error').hide();
    //            $('#departure_flight_search').parent('.form-field').removeClass('has-error');
    //        }
    //        $('#departure_flight_search').parent('.form-field').addClass('populated');

    //        $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
    //        $('#return_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
    //        //$('.isFlexibleCheckbox').toggleClass('active');

    //        $('#return_flight_search').data('dateRangePicker').setStart(obj.value);
    //        $('#return_flight_search').parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');

    //        var new_date = moment(new Date(obj.value), "ddd MMM DD YYYY").add(7, 'days');
    //        var udpatedDate = moment(new_date._d).format("ddd MMM DD YYYY");

    //        $('#return_flight_search').parents('.group-field-wrap').find('.float-label-wrapper').removeClass('populated');

    //        // if($('#return_flight_search').val() == ''){
    //        $('#return_flight_search').val(udpatedDate);

    //        //$('#return_flight_search').data('dateRangePicker').setEnd(udpatedDate);
    //        // }

    //        $('#departure_flight_search').trigger('change');

    //        fixRangeSelection();
    //        checkFlightLocationInputStatus();



    //    }).bind('datepicker-closed', function (evt, obj) {
    //        $('#departure_flight_search').trigger('change');
    //    }).bind('datepicker-first-date-selected', function (evt, obj) {

    //        fixRangeSelection();

    //    }).click(function (evt) {

    //        evt.stopPropagation();
    //        $('.dropdown-toggle + .dropdown-menu').removeClass('show');

    //        if (viewportWidth > 991) {
    //            $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
    //            $('.isFlexibleCheckbox').toggleClass('active');
    //        } else {
    //            $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
    //            $('.isFlexibleCheckbox').addClass('active');
    //        }

    //        $('#return_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
    //        //$('.isFlexibleCheckbox').removeClass('active');

    //        $(this).parents('.daterangepicker-group').addClass('show-popup');

    //        checkFlightLocationInputStatus();

    //    });
    //}
    /*flight-status-datepicker*/
    if ($('.flight-status-datepicker').length) {
        $('.flight-status-datepicker').on("focus", function () {
            var currentId = $(this).attr('id');
            var contanerID = '#' + currentId + '_range_picker';
            var currentIdDom = '#' + currentId;

            var defaultStartDate = new Date();
            defaultStartDate.setDate(defaultStartDate.getDate() - 1);
            var enddate = new Date();
            enddate.setDate(enddate.getDate() + 1);

            var curDate = new Date();

            if ($(this).parents().hasClass('hidden-field-group')) {
                if ($(this).parents('.form-wrap').index() != 0) {
                    var previewsDateSelected = $(this).parents('.form-wrap').prev().find('.daterangepicker-single').val();
                    if (previewsDateSelected != '') {
                        defaultStartDate = previewsDateSelected;
                    }
                } else {
                    var firstSelectedDate = $('.sub-panel-data#multi-city .form-wrap.active').find('.daterangepicker-single').val();
                    if (firstSelectedDate != '') {
                        defaultStartDate = firstSelectedDate;
                    }
                }
            }


            $(currentIdDom).dateRangePicker({
                format: 'ddd MMM DD YYYY',
                inline: true,
                stickyMonths: true,
                container: contanerID,
                showTopbar: false,
                singleDate: true,
                startDate: defaultStartDate,
                endDate: enddate,
                minDate: defaultStartDate,
                maxDate: enddate,
                hoveringTooltip: false,
                //singleMonth: true,
                alwaysOpen: true,
                customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
                customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
            }).bind('datepicker-change', function (evt, obj) {

                //sfsdfsfsfd
                $('#' + currentId).val(obj.value);
                $(currentIdDom).parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
                $(currentIdDom).parents('.daterangepicker-single').find('.float-label-wrapper').addClass('populated');
                $(currentIdDom).parents('.daterangepicker-single').removeClass('show-popup');

                $(this).parents('.form-wrap').nextAll().find('.single-date-picker').val('');
                $(this).parents('.form-wrap').nextAll().find('.daterangepicker-single').find('.float-label-wrapper').removeClass('populated');
                checkValid();
                $(currentIdDom).blur();
                //sfsdfdsfsddfs


            }).click(function (evt) {
                $('.dropdown-toggle + .dropdown-menu').removeClass('show');
                $(currentIdDom).parents('.daterangepicker-single').find('.range-picker-wrap').addClass('active');
                $(currentIdDom).parents('.daterangepicker-single').addClass('show-popup');
                evt.stopPropagation();

            });

            $(currentIdDom).data('dateRangePicker').setStart(moment(curDate).format("ddd MMM DD YYYY"));


        });
    }
    /*flight-status-datepicker*/



    /*return flight date picker*/
    //var departure_formated_date = moment(new Date($('#departure_flight_search').val())).format("YYYY-MM-DD");
    //if ($('#return_flight_search').length) {
    //    $('#return_flight_search').dateRangePicker({
    //        format: 'ddd MMM DD YYYY',
    //        inline: true,
    //        stickyMonths: true,
    //        container: '#return_flight_date_range',
    //        showTopbar: false,
    //        hoveringTooltip: false,
    //        alwaysOpen: true,
    //        startDate: new Date(),
    //        selectForward: true,
    //        customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
    //        customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'

    //    }).bind('datepicker-change', function (evt, obj) {

    //        $('#departure_flight_search').data('dateRangePicker').setDateRange(obj.date1, obj.date2, true);

    //        $(this).parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');

    //        //Departure and Return date updating on check-in and out fields.
    //        var departure_formated_date = moment(new Date(obj.date1)).format("ddd MMM DD YYYY");
    //        var return_formated_date = moment(new Date(obj.date2)).format("ddd MMM DD YYYY");
    //        $('#checkin_hotel_search').val(departure_formated_date);
    //        $('#checkout_hotel_search').val(return_formated_date);

    //        //Updating the new dates on fields.
    //        $('#departure_flight_search').val(departure_formated_date);
    //        $('#return_flight_search').val(return_formated_date);
    //        if ($('#return_flight_search').val(return_formated_date) != null || $('#return_flight_search').val(return_formated_date) != "") {
    //            $('#return_flight_search-error').hide();
    //            $('#return_flight_search').parent('.form-field').removeClass('has-error');
    //        }
    //        fixRangeSelection();
    //        checkFlightLocationInputStatus();

    //        //Triggering changes on fields and hiding popup.
    //        $('#return_flight_search').trigger('change');
    //        $('#return_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
    //        $('.isFlexibleCheckbox').removeClass('active');
    //        $('#return_flight_search').parents('.daterangepicker-group').removeClass('show-popup');

    //        //Changing focus to next field.
    //        if ($('#departure_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').hasClass('active') == false) {
    //            $('#passengers_flight_search').focus();

    //            if (!navigator.userAgent.match(/iPad|iPhone|Android|BlackBerry|Windows Phone|webOS/i)) {
    //                $('#passengers_flight_search').next('.dropdown-menu').toggleClass('show');
    //            }
    //        }

    //        $('#return_flight_search').data('dateRangePicker').close();

    //    }).bind('datepicker-first-date-selected', function (evt, obj) {

    //        fixRangeSelection();

    //    }).bind('datepicker-closed', function (evt, obj) {


    //    }).click(function (evt) {
    //        evt.stopPropagation();

    //        $('.dropdown-toggle + .dropdown-menu').removeClass('show');
    //        $('#departure_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');

    //        if (viewportWidth > 991) {
    //            $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
    //            $('.isFlexibleCheckbox').toggleClass('active');
    //        } else {
    //            $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
    //            $('.isFlexibleCheckbox').addClass('active');
    //        }

    //        var departure_formated_date = moment(new Date($('#departure_flight_search').val())).format("ddd MMM DD YYYY");
    //        var return_flight_search = moment(new Date($('#return_flight_search').val())).format("ddd MMM DD YYYY");
    //        if (departure_formated_date != 'Invalid date') {
    //            $('#return_flight_search').data('dateRangePicker').setStart(departure_formated_date);
    //        }

    //        $(this).parents('.daterangepicker-group').addClass('show-popup');

    //        fixRangeSelection();
    //        checkFlightLocationInputStatus();



    //    });
    //}
    /*return flight date picker*/


    /*check-in hotel round way date picker*/
    if ($('#checkin_hotel_search').length) {
        $('#checkin_hotel_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#checkin_hotel_search_date_range',
            showTopbar: false,
            singleDate: true,
            startDate: new Date(),
            hoveringTooltip: false,
            alwaysOpen: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            console.log(obj.value);
            $('#checkin_hotel_search').val(obj.value);
            $('#checkin_hotel_search').parent('.form-field').addClass('populated');
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#checkout_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#checkout_hotel_search').data('dateRangePicker').setStart(obj.value);
            $('#checkout_hotel_search').parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');
            $('#checkin_hotel_search').trigger('blur');
            fixRangeSelection();
        }).click(function (evt) {
            evt.stopPropagation();
            console.log('clicked');
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            $('#checkout_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');
        });
    }
    /*check-in hotel date picker*/


    /*check-out hotel round way date picker*/
    if ($('#checkout_hotel_search').length) {
        $('#checkout_hotel_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#checkout_hotel_search_date_range',
            showTopbar: false,
            hoveringTooltip: false,
            alwaysOpen: true,
            //startDate: departure_formated_date,
            selectForward: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $('#checkin_hotel_search').data('dateRangePicker').setDateRange(obj.date1, obj.date2, true);
            var departure_formated_date = moment(new Date(obj.date1)).format("ddd MMM DD YYYY");
            var return_formated_date = moment(new Date(obj.date2)).format("ddd MMM DD YYYY");
            $('#checkout_hotel_search').val(departure_formated_date);
            $('#checkout_hotel_search').val(return_formated_date);
            $('#checkout_hotel_search').trigger('blur');
            $(this).parents('.daterangepicker-group').removeClass('show-popup');
            fixRangeSelection();
        }).click(function (evt) {
            evt.stopPropagation();
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            $('#checkout_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            var departure_formated_date = moment(new Date($('#checkin_hotel_search').val())).format("ddd MMM DD YYYY");
            if (departure_formated_date != 'Invalid date') {
                $('#checkout_hotel_search').data('dateRangePicker').setStart(departure_formated_date);
            }
            $('#checkin_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');
        });
    }
    /*check-out hotel date picker*/

    /*check-in hotel round way date picker*/
    if ($('#checkin_hotelOneWay_search').length) {
        $('#checkin_hotelOneWay_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#checkin_hotelOneWay_search_date_range',
            showTopbar: false,
            singleDate: true,
            startDate: new Date(),
            hoveringTooltip: false,
            alwaysOpen: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            console.log(obj.value);
            $('#checkin_hotelOneWay_search').val(obj.value);
            $('#checkin_hotelOneWay_search').parent('.form-field').addClass('populated');
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#checkout_hotelOneWay_search').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#checkout_hotelOneWay_search').data('dateRangePicker').setStart(obj.value);
            $('#checkout_hotelOneWay_search').parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');
            $('#checkin_hotelOneWay_search').trigger('blur');
            fixRangeSelection();
        }).click(function (evt) {
            evt.stopPropagation();
            console.log('clicked');
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            $('#checkout_hotelOneWay_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');
        });
    }
    /*check-in hotel one way date picker*/


    /*check-out hotel one way date picker*/
    if ($('#checkout_hotelOneWay_search').length) {
        $('#checkout_hotelOneWay_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#checkout_hotelOneWay_search_date_range',
            showTopbar: false,
            hoveringTooltip: false,
            alwaysOpen: true,
            //startDate: departure_formated_date,
            selectForward: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $('#checkin_hotelOneWay_search').data('dateRangePicker').setDateRange(obj.date1, obj.date2, true);
            var departure_formated_date = moment(new Date(obj.date1)).format("ddd MMM DD YYYY");
            var return_formated_date = moment(new Date(obj.date2)).format("ddd MMM DD YYYY");
            $('#checkout_hotelOneWay_search').val(departure_formated_date);
            $('#checkout_hotelOneWay_search').val(return_formated_date);
            $('#checkout_hotel_search').trigger('blur');
            $(this).parents('.daterangepicker-group').removeClass('show-popup');
            fixRangeSelection();
        }).click(function (evt) {
            evt.stopPropagation();
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            $('#checkout_hotelOneWay_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            var departure_formated_date = moment(new Date($('#checkin_hotel_search').val())).format("ddd MMM DD YYYY");
            if (departure_formated_date != 'Invalid date') {
                $('#checkout_hotelOneWay_search').data('dateRangePicker').setStart(departure_formated_date);
            }
            $('#checkout_hotelOneWay_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');
        });
    }
    /*check-out hotel one way date picker*/

    /*departure roundway hotel date picker*/
    if ($('#departure_hotel_search').length) {
        $('#departure_hotel_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#departure_hotel_date_range',
            showTopbar: false,
            singleDate: true,
            startDate: new Date(),
            hoveringTooltip: false,
            alwaysOpen: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            console.log(obj.value);
            $('#departure_hotel_search').val(obj.value);
            $('#departure_hotel_search').parent('.form-field').addClass('populated');
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#return_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#return_hotel_search').data('dateRangePicker').setStart(obj.value);
            $('#return_hotel_search').parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');
            $('#departure_hotel_search').trigger('blur');
            fixRangeSelection();
        }).click(function (evt) {
            evt.stopPropagation();
            console.log('clicked');
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            $('#return_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');
        });
    }
    /*check-in hotel date picker*/


    /*return roundway hotel date picker*/
    if ($('#return_hotel_search').length) {
        $('#return_hotel_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#return_hotel_date_range',
            showTopbar: false,
            hoveringTooltip: false,
            alwaysOpen: true,
            //startDate: departure_formated_date,
            selectForward: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>'
        }).bind('datepicker-change', function (evt, obj) {
            $(this).parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $('#departure_hotel_search').data('dateRangePicker').setDateRange(obj.date1, obj.date2, true);
            var departure_formated_date = moment(new Date(obj.date1)).format("ddd MMM DD YYYY");
            var return_formated_date = moment(new Date(obj.date2)).format("ddd MMM DD YYYY");
            $('#return_hotel_search').val(departure_formated_date);
            $('#return_hotel_search').val(return_formated_date);
            $('#return_hotel_search').trigger('blur');
            $(this).parents('.daterangepicker-group').removeClass('show-popup');
            fixRangeSelection();
        }).click(function (evt) {
            evt.stopPropagation();
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            $('#return_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
            }
            var departure_formated_date = moment(new Date($('#checkin_hotel_search').val())).format("ddd MMM DD YYYY");
            if (departure_formated_date != 'Invalid date') {
                $('#return_hotel_search').data('dateRangePicker').setStart(departure_formated_date);
            }
            $('#departure_hotel_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $(this).parents('.daterangepicker-group').addClass('show-popup');


        });
    }



    /*check-out hotel date picker*/

    /* daterangepicker selection fixes*/
    $('.date-picker-wrapper').on('click', 'table .caption', function () {
        fixRangeSelection();
    });

    if (viewportWidth < 992) {
        $('.range-picker-wrap .date-picker-wrapper').css('max-height', windowHeight - 150);
    }
    $('.panel-table-wrap input[type=radio]').change(function () {
        var samecheckststus = $(this).parents('.panel-table-wrap').find('.checkbox-wrap input').is(':checked');
        if (samecheckststus) {

            var currentIndex = $(this).parents('td').index();
            $(this).parents('.panel-table-row').siblings().find('td').find('input[type=radio]').prop('checked', false);
            $(this).parents('.panel-table-row').siblings().each(function () {
                $(this).find('td').eq(currentIndex).find('input[type=radio]').prop('checked', true);
            });

        }
    });

    $('.panel-table-wrap input[type=checkbox]').change(function () {
        var samecheckststus = $(this).parents('.panel-table-wrap').find('.checkbox-wrap input').is(':checked');
        if (samecheckststus) {
            var selectIndex = 3;

            $(this).parents('thead').next('tbody').find('.panel-table-row').each(function () {
                var checkSlect = $(this).find('input[type=radio]:checked').parents('td').index();
                if (checkSlect != 3) {
                    selectIndex = checkSlect;
                }
            });

            $(this).parents('thead').next('tbody').find('.panel-table-row td').find('input[type=radio]').prop('checked', false);
            $(this).parents('thead').next('tbody').find('.panel-table-row').each(function () {
                $(this).find('td').eq(selectIndex).find('input[type=radio]').prop('checked', true);
            });
        }
    });

    //Mobile cloning


    $('.add-ons-baggage-wrap .accordion-item').each(function () {
        var blockLabel = $(this).find('.panel-table-wrap .panel-table thead .panel-table-row td:nth-child(2) .panel-table-data').text();
        $(this).find('.panel-table-wrap .panel-table tbody .panel-table-row').each(function () {
            $(this).find('td:first').append('<div class="table-data-label">' + blockLabel + '</div>');
        });
    });
    $('#dountryDropdownCountry').click(function () {
        $(this).parents('li').siblings().find('.btn-dropdown').removeClass('active');
        $(this).toggleClass('active');
        $(this).parents('li').siblings().find('.btn-dropdown-menu').removeClass('show');
        $(this).next('.btn-dropdown-menu').toggleClass('show');
        $('header .header-inner .main-nav > li').removeClass('active');
        isheaderActive();
    });
    $('#dountryDropdownCountryMobile').click(function () {
        $(this).parents('li').siblings().find('.btn-dropdown').removeClass('active');
        $(this).toggleClass('active');
        $(this).parents('li').siblings().find('.btn-dropdown-menu').removeClass('show');
        $(this).next('.btn-dropdown-menu').toggleClass('show');
        $('header .header-inner .main-nav > li').removeClass('active');
        isheaderActive();
    });

    $('#closeSearch').click(function () {
        $('.search-box-wrap').removeClass('active');
        issearchActive();
    });

    $('#showSearchPanel').click(function () {
        $('.btn.btn-dropdown').removeClass('active');
        $('.search-box-wrap').addClass('active');
        issearchActive();
    });


    $('#closeModifySearch').click(function () {
        $('.modify-search-wrap').removeClass('active');
        isModifySearchActive();
    });

    $('#showModifySearchPanel').click(function (e) {
        $('.btn.btn-dropdown').removeClass('active');
        $('.modify-search-wrap').addClass('active');
        isModifySearchActive();
        e.preventDefault();
    });
    $(".btn-dropdown-menu").on('click', function () {
        if ($(this).hasClass('show')) {
            $('.jazeera_overlay').addClass('active');
            bodyFreezeScroll();
        } else {
            $('.jazeera_overlay').removeClass('active');
            bodyUnfreezeScroll();
        }
    });
    $(".mdropdown").on('click', function () {

        if ($(this).hasClass('active')) {
            $('.mdropdownOptions').addClass('show');

        } else {
            $('.mdropdownOptions').removeClass('show');

        }
    });
    $(".search-panel").on('click', function () {
        if ($(this).parent().hasClass('active')) {
            bodyFreezeScroll();
        } else {
            bodyUnfreezeScroll();
        }
    });

    $(".main-nav > li .sub-menu").on('click', function () {
        if ($(this).parent().hasClass('active')) {
            $('.jazeera_overlay').addClass('active');
            bodyFreezeScroll();
        } else {
            $('.jazeera_overlay').removeClass('active');
            bodyUnfreezeScroll();
        }
    });

    $('.dropdown-wrap').click(function (e) {
        $(this).toggleClass('show');
        e.preventDefault();
    });

    $('.dropdown-toggle').click(function () {
        var dropmenu = $(this).attr('data-toggle');
        $(this).next('.' + dropmenu).toggleClass('show');
    });
    $('.dropdown-arrow').click(function () {
        $(this).prev('.dropdown-menu').toggleClass('show');
    });


    $('.dropdown-menu .dropdown-option').click(function () {
        $(this).parents('.dropdown-wrap').find('.dropdown').empty().append($(this).find('h5').html());
    });


    $('.custom-select').each(function (e) {
        if ($(this).val() == '') {
            $(this).parents('.form-field').removeClass('populated');
        } else {
            $(this).parents('.form-field').addClass('populated');
        }
    });

    $('.custom-select').change(function (e) {
        if ($(this).val() == '') {
            $(this).parents('.form-field').removeClass('populated');
        } else {
            $(this).parents('.form-field').addClass('populated');
        }
    });

    if (viewportWidth < 769) {
        $('.footer-menu li a strong').click(function (e) {
            if (!$(this).parents('.footer-menu').hasClass('default-active')) {
                $(this).parents('.colmd3').siblings().find('.footer-menu').removeClass('active');
                $(this).parents('.footer-menu').toggleClass('active');
                e.preventDefault();
            }
        });
    }

    $(".custom-nested-table .table-data-head .dropdown").click(function () {
        $(this).parents('.table-data-head').siblings().removeClass('active');
        $(this).parents('.table-data-head').siblings().next('.table-data-detail').removeClass('active');
        $(this).parents('.table-data-head').next('.table-data-detail').toggleClass('active');
        $(this).parents('.table-data-head').toggleClass('active');
    });

    $(".mobile-nested-table").click(function () {
        $(this).toggleClass('active').siblings().removeClass('active');
    });


    // country city names

    //$(".type-in-country-city").easyAutocomplete(options);
    $('[data-toggle="tooltip"]').tooltip({
        template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    });

    $('[data-tooltip="tooltip"]').tooltip({
        template: '<div class="tooltip-flight-seat" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    });
    $('.flight-info-wrap.departure .packages-footer a.btn').click(function (e) {
        $('.flight-info-wrap.departure').addClass('hide');

        if ($('.flight-summary-main-wrap.return').hasClass('show')) {
            $('.flight-summary-main-wrap.departure').removeClass('show');
        } else {
            $('.flight-summary-main-wrap.departure').addClass('show');
        }

        $('body').scrollTo('section.flight-summary-main-wrap.departure', 0);

        setTimeout(function () {
            $('.flight-summary-main-wrap.departure a[data-goto-href]').trigger('click');
        }, 1000);

        e.preventDefault();
    });

    $('.flight-info-wrap.return .packages-footer a.btn').click(function (e) {
        $('.flight-info-wrap.departure').addClass('hide');
        $('.flight-summary-main-wrap.departure').removeClass('show');
        $('.flight-info-wrap.return').addClass('hide');
        $('.flight-summary-main-wrap.return').addClass('show');
        e.preventDefault();
    });

    $('.add-ons-status-info-panel .summary-dropdown-wrap').click(function (e) {
        $(this).parents('.add-ons-status-info-panel').siblings().removeClass('show');
        $(this).parents('.add-ons-status-info-panel').toggleClass('show');
        e.preventDefault();
    });

    //$('.switch-flight-info-wrap .date-range-list .date-tab-wrap').click(function(){
    $(document).on("click", ".switch-flight-info-wrap .date-range-list .date-tab-wrap", function () {
        $(this).siblings().removeClass('selected');
        $(this).addClass('selected');
    });

    $('.selected-flight-item .modify-flight1 a').click(function (e) {
        var modify_flight = $(this).attr('href');
        if (modify_flight == '#departing_flight') {
            $('.flight-info-wrap.departure').removeClass('hide');
            $('.flight-summary-main-wrap.departure').removeClass('show');
        }
        if (modify_flight == '#return_flight') {
            $('.flight-info-wrap.return').removeClass('hide');
            $('.flight-summary-main-wrap.return').removeClass('show');
        }
        e.preventDefault();
    });

    $('.flight-search-result-item .view-detail-btn').click(function (e) {
        $(this).parents('.flight-search-result-item').siblings().find('.flight-info-container .expanded').removeClass('active');
        $(this).parents('.flight-search-result-item').siblings().find('.flight-info-container .collapsed').addClass('active');
        $(this).parents('.flight-search-result-item').find('.flight-info-container .collapsed').toggleClass('active')
        $(this).parents('.flight-search-result-item').find('.flight-info-container .expanded').toggleClass('active')
        e.preventDefault();
    });
    $('.flight-class-item .expand-arrow').click(function (e) {

        $(this).parents('.flight-search-result-item').siblings().find('.expand-arrow').removeClass('active');
        $(this).parents('.flight-search-result-item').siblings().find('.flight-class-additional-wrap').removeClass('active');

        var currentExp = $(this).attr('data-class');
        if (currentExp == 'economy-class') {
            $(this).toggleClass('active');
            $(this).parents('.flight-search-result-item').find('.expand-arrow[data-class="business-class"]').removeClass('active');
            $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.economy-class').toggleClass('active');
            $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.business-class').removeClass('active');
        }

        if (currentExp == 'business-class') {
            $(this).toggleClass('active');
            $(this).parents('.flight-search-result-item').find('.expand-arrow[data-class="economy-class"]').removeClass('active');
            $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.business-class').toggleClass('active');
            $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.economy-class').removeClass('active');
        }

        e.preventDefault();
    });


    //Mobile
    $('.flight-class-item').click(function (e) {
        if (viewportWidth < 992) {
            $(this).parents('.flight-search-result-item').siblings().removeClass('show-popup');
            $(this).parents('.flight-search-result-item').siblings().find('.flight-class-item').removeClass('active');
            $(this).parents('.flight-search-result-item').siblings().find('.flight-class-additional-wrap').removeClass('active');
            bodyFreezeScroll();
            var currentExp = $(this).find('.expand-arrow').attr('data-class');
            if (currentExp == 'economy-class') {
                $(this).addClass('active');
                $(this).parents('.flight-search-result-item').siblings().removeClass('show-popup');
                $(this).parents('.flight-search-result-item').addClass('show-popup');
                $(this).parents('.flight-search-result-item').find('.expand-arrow[data-class="business-class"]').parent('.flight-class-item').removeClass('active');
                $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.economy-class').addClass('active');
                $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.business-class').removeClass('active');
            }

            if (currentExp == 'business-class') {
                $(this).addClass('active');
                $(this).parents('.flight-search-result-item').siblings().removeClass('show-popup');
                $(this).parents('.flight-search-result-item').addClass('show-popup');
                $(this).parents('.flight-search-result-item').find('.expand-arrow[data-class="economy-class"]').parent('.flight-class-item').removeClass('active');
                $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.business-class').addClass('active');
                $(this).parents('.flight-search-result-item').find('.flight-class-additional-wrap.economy-class').removeClass('active');
            }

        }
        e.preventDefault();
    });

    if ($('.expand-arrow.active').length == 1) {
        if (viewportWidth < 992) {
            $('.expand-arrow.active').parents('.flight-class-item').trigger('click');
        }
    }

    /*Dates tabs*/
    var flightDates = [
        {
            'recommend': false,
            'cost': '<div class="cost-info"> <div class="cost-label">From</div> <div class="cost"> INR <strong>5,898.00 </div></div>',
        },
        {
            'recommend': false,
            'cost': '<div class="cost-info"> <div class="cost-label">From</div> <div class="cost"> INR <strong>5,238.00 </div></div>',
        },
        {
            'recommend': false,
            'cost': '<div class="cost-info"> <div class="cost-label">From</div> <div class="cost"> INR <strong>5,768.00 </div></div>',
        },
        {
            'recommend': false,
            'cost': '<div class="cost-info"> <div class="cost-label">From</div> <div class="cost"> INR <strong>5,498.00 </div></div>',
        },
        {
            'recommend': true,
            'cost': '<div class="cost-info"> <div class="cost-label">From</div> <div class="cost"> INR <strong>3,898.00 </div></div>',
        },
        {
            'recommend': false,
            'cost': '<div class="cost-info"> <div class="cost-label">From</div> <div class="cost"> INR <strong>7,898.00 </div></div>',
        },
        {
            'recommend': false,
            'cost': '',
        }
    ];

    var dataDates = [];
    var datesArr = [];

    function prepareDate(lastWeek, nextWeek, load, isDesktop) {

        if (isDesktop) {

            var out = '';
            for (var i = 1; i < 8; i++) {

                var item = flightDates[Math.floor(Math.random() * flightDates.length)];

                out = '';
                if (item.recommend) {
                    out += '<div class="hightlight bg-success">Lowest Fair</div>';
                }

                out += '<div class="date"><strong>' + moment(datesArr[i - 1], 'DD-MM-YYYY').format("DD MMM") + ',</strong> ' + moment(datesArr[i - 1], 'DD-MM-YYYY').format("ddd") + '</div>';;

                if (item.cost != '') {
                    out += item.cost;
                } else {
                    out += '<div class="msg">No Flights <br>Available</div>';
                }

                if (load == 'initLoad') {
                    if (i == 4) {
                        dataDates.push('<div class="date-tab-wrap selected"> ' + out + ' </div>');
                    } else {
                        if (item.cost != '') {
                            dataDates.push('<div class="date-tab-wrap"> ' + out + ' </div>');
                        } else {
                            dataDates.push('<div class="date-tab-wrap inactive"> ' + out + ' </div>');
                        }
                    }
                } else {

                    if (i == 1) {
                        dataDates.push('<div class="date-tab-wrap selected"> ' + out + ' </div>');
                    } else {
                        if (item.cost != '') {
                            dataDates.push('<div class="date-tab-wrap"> ' + out + ' </div>');
                        } else {
                            dataDates.push('<div class="date-tab-wrap inactive"> ' + out + ' </div>');
                        }
                    }

                }

            }

            $('.dynamic-dates').empty().append(dataDates);

            $('.flight-info-wrap.action .select-date-range.prev-date-range').empty().html('<div class="hidden-date">' + moment(lastWeek, 'DD-MM-YYYY').subtract(1, 'days').format('DD-MM-YYYY') + '</div> ' + '<strong>' + moment(lastWeek, 'DD-MM-YYYY').subtract(7, 'days').format('DD MMM') + '</strong> to <strong>' + moment(lastWeek, 'DD-MM-YYYY').subtract(1, 'days').format('DD MMM') + '</strong>');
            $('.flight-info-wrap.action .select-date-range.next-date-range').empty().html('<div class="hidden-date">' + moment(nextWeek, 'DD-MM-YYYY').add(1, 'days').format('DD-MM-YYYY') + '</div> ' + '<strong>' + moment(nextWeek, 'DD-MM-YYYY').add(1, 'days').format('DD MMM') + '</strong> to <strong>' + moment(nextWeek, 'DD-MM-YYYY').add(7, 'days').format('DD MMM') + '</strong>');

        } else {

            var out = '';
            for (var i = 1; i < 4; i++) {

                var item = flightDates[Math.floor(Math.random() * flightDates.length)];

                out = '';
                if (item.recommend) {
                    out += '<div class="hightlight bg-success">Lowest Fair</div>';
                }

                out += '<div class="date"><strong>' + moment(datesArr[i - 1], 'DD-MM-YYYY').format("DD MMM") + ',</strong> ' + moment(datesArr[i - 1], 'DD-MM-YYYY').format("ddd") + '</div>';;

                if (item.cost != '') {
                    out += item.cost;
                } else {
                    out += '<div class="msg">No Flights <br>Available</div>';
                }

                if (load == 'initLoad') {
                    if (i == 2) {
                        dataDates.push('<div class="date-tab-wrap selected"> ' + out + ' </div>');
                    } else {
                        if (item.cost != '') {
                            dataDates.push('<div class="date-tab-wrap"> ' + out + ' </div>');
                        } else {
                            dataDates.push('<div class="date-tab-wrap inactive"> ' + out + ' </div>');
                        }
                    }
                } else {

                    if (i == 1) {
                        dataDates.push('<div class="date-tab-wrap selected"> ' + out + ' </div>');
                    } else {
                        if (item.cost != '') {
                            dataDates.push('<div class="date-tab-wrap"> ' + out + ' </div>');
                        } else {
                            dataDates.push('<div class="date-tab-wrap inactive"> ' + out + ' </div>');
                        }
                    }

                }

            }

            $('.dynamic-dates').empty().append(dataDates);

            $('.flight-info-wrap.action .select-date-range.prev-date-range').empty().html('<div class="hidden-date">' + lastWeek + '</div>');
            $('.flight-info-wrap.action .select-date-range.next-date-range').empty().html('<div class="hidden-date">' + nextWeek + '</div>');

        }


    }

    function getWeekDates(startDate, weekOf, isDesktop) {


        if (isDesktop) {

            if (startDate == moment().format('DD-MM-YYYY')) {

                datesArr = [];
                dataDates = [];

                datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(3, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(2, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(1, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').add(0, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').add(1, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').add(2, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').add(3, 'days').format('DD-MM-YYYY'));

                prepareDate(moment(startDate, 'DD-MM-YYYY').subtract(3, 'days').format('DD-MM-YYYY'), moment(startDate, 'DD-MM-YYYY').add(3, 'days').format('DD-MM-YYYY'), 'initLoad', true);

            } else {

                if (weekOf == 'getNextWeek') {

                    datesArr = [];
                    dataDates = [];

                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(0, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(1, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(2, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(3, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(4, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(5, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(6, 'days').format('DD-MM-YYYY'));

                    prepareDate(moment(startDate, 'DD-MM-YYYY').add(0, 'days').format('DD-MM-YYYY'), moment(startDate, 'DD-MM-YYYY').add(6, 'days').format('DD-MM-YYYY'), 'nextLoad', true);

                }

                if (weekOf == 'getLastWeek') {

                    datesArr = [];
                    dataDates = [];

                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(6, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(5, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(4, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(3, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(2, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(1, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(0, 'days').format('DD-MM-YYYY'));

                    prepareDate(moment(startDate, 'DD-MM-YYYY').subtract(6, 'days').format('DD-MM-YYYY'), moment(startDate, 'DD-MM-YYYY').subtract(0, 'days').format('DD-MM-YYYY'), 'prevLoad', true);

                }

            }

        } else {

            if (startDate == moment().format('DD-MM-YYYY')) {

                datesArr = [];
                dataDates = [];

                datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(1, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').add(0, 'days').format('DD-MM-YYYY'));
                datesArr.push(moment(startDate, 'DD-MM-YYYY').add(1, 'days').format('DD-MM-YYYY'));

                prepareDate(moment(startDate, 'DD-MM-YYYY').subtract(3, 'days').format('DD-MM-YYYY'), moment(startDate, 'DD-MM-YYYY').add(3, 'days').format('DD-MM-YYYY'), 'initLoad', false);

            } else {

                if (weekOf == 'getNextWeek') {

                    datesArr = [];
                    dataDates = [];

                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(1, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(0, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(1, 'days').format('DD-MM-YYYY'));

                    prepareDate(moment(startDate, 'DD-MM-YYYY').subtract(3, 'days').format('DD-MM-YYYY'), moment(startDate, 'DD-MM-YYYY').add(3, 'days').format('DD-MM-YYYY'), 'nextLoad', false);

                }

                if (weekOf == 'getLastWeek') {

                    datesArr = [];
                    dataDates = [];

                    datesArr.push(moment(startDate, 'DD-MM-YYYY').subtract(1, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(0, 'days').format('DD-MM-YYYY'));
                    datesArr.push(moment(startDate, 'DD-MM-YYYY').add(1, 'days').format('DD-MM-YYYY'));

                    prepareDate(moment(startDate, 'DD-MM-YYYY').subtract(3, 'days').format('DD-MM-YYYY'), moment(startDate, 'DD-MM-YYYY').add(3, 'days').format('DD-MM-YYYY'), 'prevLoad', false);

                }

            }

        }

    }

    if (viewportWidth > 991) {
        getWeekDates(moment().format('DD-MM-YYYY'), '', true);
        $('.action .select-date-range.next-date-range').click(function () {
            var setdate = $(this).find('.hidden-date').html();
            getWeekDates(setdate, 'getNextWeek', true);
        });
        $('.action .select-date-range.prev-date-range').click(function () {
            var setdate = $(this).find('.hidden-date').html();
            getWeekDates(setdate, 'getLastWeek', true);
        });
    } else {
        getWeekDates(moment().format('DD-MM-YYYY'), '', false);
        $('.action .select-date-range.next-date-range').click(function () {
            var setdate = $(this).find('.hidden-date').html();
            getWeekDates(setdate, 'getNextWeek', false);
        });
        $('.action .select-date-range.prev-date-range').click(function () {
            var setdate = $(this).find('.hidden-date').html();
            getWeekDates(setdate, 'getLastWeek', false);
        });
    }

    //clear location select
    $('.location-select').parent().append('<span class="clearInput"><i class="icon-wrong"></i></span>');

    $('.clearInput').click(function () {

        //$('body').css('background', '');
        //$('footer').css('background', '');
        //$('#header').css('background', 'white');
        //$('.footer-base').css('background', '');
        //$('#Booking-fixed').removeClass('overlay-screen');
        //$('#multicity-sticky').removeClass('search_flight_multy_booking');
        //$('#OnewayToInputReset').removeClass('search_flight_oneway_booking');
        if ($('#from_flight_search')) {
            $('#fromDirect_' + localStorage.from_flight_search).removeClass('active');
        }
        if ($('#to_flight_search')) {
            $('#toDirect_' + localStorage.to_flight_search).removeClass('active');
        }
        if ($('#to_flight_search')) {
            $('#fromDirect1_' + localStorage.to_flight_search).removeClass('active');
        }
        if ($('#from_flight_search')) {
            $('#toDirect1_' + localStorage.from_flight_search).removeClass('active');
        }
        if ($('#from_flight_search_oneway')) {
            $('#fromDirect_' + localStorage.from_flight_search).removeClass('active');
        }
        if ($('#to_flight_search_oneway')) {
            $('#toDirect_' + localStorage.to_flight_search).removeClass('active');
        }
        if ($('#from_flight_search_muticity2')) {
            $('#fromDirect1_' + localStorage.from_flight_searchmulticity2).removeClass('active');
        }
        if ($('#to_flight_search_muticity2')) {
            $('#toDirect1_' + localStorage.to_flight_searchmulticity2).removeClass('active');
        }
        if ($('#from_flight_search_muticity1')) {
            $('#fromDirect_' + localStorage.from_flight_searchmulticity1).removeClass('active');
        }
        if ($('#to_flight_search_muticity1')) {
            $('#toDirect_' + localStorage.to_flight_searchmulticity1).removeClass('active');
        }
        var selectedCode = $(this).parents('.form-field').find('input').attr('data-selected');
        $('.tt-menu .tt-dataset').find('.tt-suggestion[data-code="' + selectedCode + '"]').show();
        $(this).parents('.form-field').find('input').removeAttr('data-selected');

        $(this).parents('.form-field').removeClass('populated');
        $(this).parents('.form-field').find('input').focus().val("").trigger("input").parents('.locations').addClass('show-popup');
        $('.switchLocations').removeClass('active');
        checkFlightLocationInputStatus();
        $('.range-picker-wrap.active').removeClass('active');
        $('.daterangepicker-single.show-popup').removeClass('show-popup');
        $('.inline-message').hide();
        $(".to_terms_activate").removeClass('active');
        $('#traveladvisory_Body').hide();
        $("#traveladvisory_Body").removeClass('active');
        //$('#departure_flight_search_muticity1').val('');
        //$('#addmulticity2sticky').css('display', 'none');
        //$('#hidemulticity').css('display', 'none');
        //$('#hidingPromo2').css('display', 'none');
        //$('#OnewayClickHide').css('display', 'none');
    });

    $('.close-popup').click(function () {
        $(this).parents().removeClass('show-popup');
    });
    $('.switch-sub-panel a').click(function () {

        if ($('#from_flight_search')) {
            $('#fromDirect_' + localStorage.from_flight_search).removeClass('active');
        }
        if ($('#to_flight_search')) {
            $('#toDirect_' + localStorage.to_flight_search).removeClass('active');
        }
        if ($('#to_flight_search')) {
            $('#fromDirect1_' + localStorage.to_flight_search).removeClass('active');
        }
        if ($('#from_flight_search')) {
            $('#toDirect1_' + localStorage.from_flight_search).removeClass('active');
        }
        if ($('#from_flight_search_oneway')) {
            $('#fromDirect_' + localStorage.from_flight_search).removeClass('active');
        }
        if ($('#to_flight_search_oneway')) {
            $('#toDirect_' + localStorage.to_flight_search).removeClass('active');
        }
        if ($('#from_flight_search_muticity2')) {
            $('#fromDirect1_' + localStorage.from_flight_searchmulticity2).removeClass('active');
        }
        if ($('#to_flight_search_muticity2')) {
            $('#toDirect1_' + localStorage.to_flight_searchmulticity2).removeClass('active');
        }
        if ($('#from_flight_search_muticity1')) {
            $('#fromDirect_' + localStorage.from_flight_searchmulticity1).removeClass('active');
        }
        if ($('#to_flight_search_muticity1')) {
            $('#toDirect_' + localStorage.to_flight_searchmulticity1).removeClass('active');
        }
        $('.inline-message').hide();
        $(".to_terms_activate").removeClass('active');
        $('#traveladvisory_Body').hide();
        $("#traveladvisory_Body").removeClass('active');
    });
    if ($("#traveladvisory_Body").hasClass("active")) {
        $('section.destination-banner').css('margin-top', "0px");
    }
    else {
        $('section.destination-banner').css('margin-top', "-80px");
    }
    //Inline message code
    $('.passengercount').focus(function () {
        if ($("#traveladvisory_Body").hasClass("active")) {
            $('.jazeera_backdrop').removeClass('active');
        }
    })
    $('.travel-backdrop').focus(function () {

        if ($("#traveladvisory_Body").hasClass("active")) {
            $('.jazeera_backdrop').removeClass('active');
        }
    })
    $('.travel-backdrop1').focus(function () {
        if ($("#traveladvisory_Body").hasClass("active")) {
            $('.jazeera_backdrop').removeClass('active');
        }
    })
    $('.travel-backdrop1').blur(function () {
        if ($("#traveladvisory_Body").hasClass("active")) {
            $('.jazeera_backdrop').removeClass('active');
        }
    })
    /*switch location button*/
    $('.switchLocations').click(function (e) {
        var locations = [];
        var codes = [];
        var from = $(this).parents('.form-row').find('.locations:first-child').find('.tt-input').val();
        var from_code = $(this).parents('.form-row').find('.locations:first-child').find('.tt-input').attr('data-selected');
        var to = $(this).parents('.form-row').find('.locations:last-child').find('.tt-input').val();
        var to_code = $(this).parents('.form-row').find('.locations:last-child').find('.tt-input').attr('data-selected');

        if (from != '' && to != '') {
            locations.push(from, to);
            codes.push(from_code, to_code);
        }
        localStorage.from_flight_search = to_code;
        localStorage.to_flight_search = from_code;
        if (locations.length > 1) {
            $(this).prev().find('input').val(locations[1]);
            $(this).prev().find('input').attr('data-selected', codes[1]);
            $(this).next().find('input').val(locations[0]);
            $(this).next().find('input').attr('data-selected', codes[0]);
        }
        setTimeout(() => {
            bindlowfare().then(() => {
                $('.next,.prev').on('click', function () {
                    bindlowfare()
                })
            });
        }, 200)
        initDepartureDatePicker();
        e.preventDefault();
    });
    /*switch location button*/


    //Close button - flight rows
    $('.form-row.row + .hidden-field-group .form-row').each(function () {
        $(this).append('<div class="close-row"><i class="icon icon-wrong"></i></div>');
    });


    $('.form-row.row + .hidden-field-group .form-row .close-row').click(function () {

        $(this).parent('.form-row').removeClass('active');

        if ($(".form-row.row.form-wrap.active").length <= 2) {
            $('#addFlight').show();
        }
        $(this).parent('.form-row').find('.single-date-picker').data('dateRangePicker').clear();
        // $(this).parent('.form-row').find('.flight-status-datepicker').data('dateRangePicker').clear();
        $(this).parent('.form-row').find('.float-label-wrapper').removeClass('populated');
        $(this).parent('.form-row').nextAll().find('.float-label-wrapper').removeClass('populated');

        $(this).parent('.form-row').find('input').val('');
        $(this).parent('.form-row').nextAll().find('input').val('');
        $(this).parents('.form-row').find('.locations input').removeAttr('data-selected');
        $(this).parents('.form-row').nextAll().find('.locations input').removeAttr('data-selected');
        $(this).parents('.form-row').find('.location-select').typeahead('val', '');
        $(this).parents('.form-row').nextAll().find('.location-select').typeahead('val', '');

        if ($('.form-row.row + .hidden-field-group .form-row:not(.active)').length >= 1) {
            $('#addFlight').removeClass('disabled');
        } else {
            $('#addFlight').addClass('disabled');
        }
    });

    $("[data-trigger='spinner']")
        .spinner('delay', 0) //delay in ms
        .spinner('changed', function (e, newVal, oldVal) {
            var passengersList = [];
            $($(this).parents('.dropdown-menu').find('.dropdown-option')).each(function (i) {
                var dataLabel = $(this).find('.spinner-wrap').attr('data-label');
                var dataValue = $(this).find('.spinner-wrap input').val();
                if (dataValue != 0) {
                    passengersList.push([dataValue + ' ' + dataLabel]);
                    $(this).find('.spinner-wrap input').addClass('active');
                } else {
                    $(this).find('.spinner-wrap input').removeClass('active');
                }
                $(this).parents('.form-field').find('.form-control').parent().addClass('populated');
                $(this).parents('.form-field').find('.form-control').val(passengersList.join(", "));
                $(this).parents('.form-field').find('.form-control').trigger('change');
                $(this).parents('.form-field').find('.form-control').trigger('keyup');
            });
        });
    //Toggle Promo
    $('.promo-wrap .add-promo').click(function () {
        // window.location.assign("https://book.jazeeraairways.com/search.aspx");
        // return;
        $(this).toggleClass('hide');
        $(this).next('.promo-info').addClass('show');
    });
    $('.flight-mockup-wrap input:checkbox').change(function (e) {
        var selectedSeats = [];
        $(this).parents('.flight-mockup-wrap').find('input:checked').each(function () {
            var seatNumber = $(this).attr('id');
            selectedSeats.push(seatNumber)
        });
        console.log(selectedSeats)
        e.preventDefault();
    });

    $('.selected-seat-info-wrap .modify-seat').click(function (e) {
        var modifySeat = $(this).attr('href');
        if ($(modifySeat).length) {
            $('section.seat-selection .panel-seat-selection .seat-selection-outer-wrap .scroll-panel .mCustomScrollBox').scrollTo(modifySeat, 500, {
                offset: -100
            });
        } else {
            console.log('Error, please match the selected seat id and modify button href.');
        }
        e.preventDefault();
    });


    if (viewportWidth < 991) {
        $('.selected-passengers .modify-seat, .select-seat-msg .select-seat-btn').click(function (e) {
            $('.accordion-item').removeClass('show-active');
            $(this).parents('.accordion-item').addClass('show-active');
            //bodyFreezeScroll();
            e.preventDefault();
        });
        $('.form-file-label .close-popup').click(function (e) {
            $('.accordion-item').removeClass('show-active');
            e.preventDefault();
        });
    }

    $('section.seat-type-listing-wrap .flight-seat-selection-mockup-wrap .scroll-panel .mCustomScrollBox').scrollTo('.flight-mockup-wrap .flight-inside-wrap .flight-select-seat-wrap.active', 500, {
        offset: -200
    });

    $('.flight-class-listing-group .group-wrapper .group-item').click(function (e) {
        var selectedGroup = $(this).data('seat-class');
        var positionElem = '.flight-mockup-wrap .flight-inside-wrap .flight-select-seat-wrap.' + selectedGroup;
        $('.flight-class-listing-group .group-wrapper .group-item').removeClass('active');
        $(this).addClass('active');
        $('.flight-mockup-wrap .flight-inside-wrap .flight-select-seat-wrap').removeClass('active');
        $('.flight-mockup-wrap .flight-inside-wrap .flight-select-seat-wrap.' + selectedGroup).addClass('active');

        $('section.seat-type-listing-wrap .flight-seat-selection-mockup-wrap .scroll-panel .mCustomScrollBox').scrollTo(positionElem, 500, {
            offset: -200
        });
        e.preventDefault();
    });

    $(".flight-scrollbar").draggable({
        containment: ".custom-scrollbar-wrapper",
        axis: "y",
        drag: function (event, ui) {
            var flightWrapperHeight = $('.flight-seat-selection-mockup-wrap .flight-mockup-wrap').height();
            var scrollToPos = Math.round(event.target.offsetTop / 350 * 100);
            var scrollPercentage = scrollToPos + '%';
            // console.log(scrollPercentage);
            $('section.seat-type-listing-wrap .flight-seat-selection-mockup-wrap .scroll-panel .mCustomScrollBox').scrollTop(scrollToPos * 30);

        }
    });

    $("select.priority-seat").change(function () {
        var selectedSeat = $(this).children("option:selected").val();
        if (selectedSeat == 'economic-class') {
            $('#economic-class').addClass('wrapper-active');
            $('#business-class').removeClass('wrapper-active');
        } else {
            $('#economic-class').removeClass('wrapper-active');
            $('#business-class').addClass('wrapper-active');
        }
        // alert("You have selected the country - " + selectedCountry);
    });
});

$(document).mouseup(function (e) {

    var container = $(".group-field-wrap");
    if (!container.is(e.target) && container.has(e.target).length === 0 && e.target != $('html').get(0)) {
        $('.range-picker-wrap').removeClass('active');
        $('.isFlexibleCheckbox').removeClass('active');
    }

    var dropdownMenu = $(".dropdown-wrap");
    if (!dropdownMenu.is(e.target) && dropdownMenu.has(e.target).length === 0) {
        dropdownMenu.removeClass('show');
    }

    var container2 = $(".form-field");
    if (!container2.is(e.target) && container2.has(e.target).length === 0) {
        $('.dropdown-menu').removeClass('show');
    }

    var headerMenu = $("header .header-inner .main-nav > li");
    if (!headerMenu.is(e.target) && headerMenu.has(e.target).length === 0) {
        $(".sub-menu").parent().removeClass('active');
    }

    var SearchPanel = $(".search-box-wrap .search-panel");
    if (!SearchPanel.is(e.target) && SearchPanel.has(e.target).length === 0) {
        $(".search-box-wrap").removeClass('active');
    }

    var ModifySearchPanel = $(".modify-search-wrap .search-panel");
    if (!ModifySearchPanel.is(e.target) && ModifySearchPanel.has(e.target).length === 0) {
        $(".modify-search-wrap").removeClass('active');
    }

    var container3 = $("header .header-inner .toggle-btns li");
    if (!container3.is(e.target) && container3.has(e.target).length === 0) {
        $(".btn-dropdown-menu").removeClass('show');
        $(".btn.btn-dropdown").removeClass('active');
        isheaderActive();
    }

});

// The cursor gets into the menu area
$('#menu').mouseenter(function () {
    bodyFreezeScroll();
});

// The cursor leaves the menu area
$('.mCustomScrollBox').mouseleave(function () {
    bodyUnfreezeScroll();
});


$(".isFlexibleCheckbox").click(function () {
    if (!$(this).next('.group-field-wrap').find('.range-picker-wrap').hasClass('active')) {
        $(this).next('.group-field-wrap').find('.range-picker-wrap').addClass('active');
    }
    if (!$('.isFlexibleCheckbox').hasClass('active')) {
        $('.isFlexibleCheckbox').toggleClass('active');
    }
})
setTimeout(function () {
$("#oneWayAdult_btn_down").click(function () {

    var adult = parseInt($("#oneWayAdult").val() - 1);
    var child = parseInt($("#oneWayChild").val());
    var infant = parseInt($("#oneWayInfant").val());
    var extra = parseInt($("#oneWayExtra").val());
    if (infant >= adult && infant > 1) {

        $("#oneWayInfant").val(adult);
    }
    if (extra >= (adult + child) && extra > 1) {

        $("#oneWayExtra").val(adult + child);
    }
})

$("#roundAdult_btn_down").click(function () {

    var adult = parseInt($("#roundAdult").val() - 1);
    var child = parseInt($("#roundChild").val());
    var infant = parseInt($("#roundInfant").val());
    var extra = parseInt($("#roundExtra").val());
    if (infant >= adult && infant > 1) {

        $("#roundInfant").val(adult);
    }
    if (extra >= adult + child && extra > 1) {

        $("#roundExtra").val(adult + child);
    }
})

$("#multiWayAdult_btn_down").click(function () {
    var adult = parseInt($("#multiWayAdult").val() - 1);
    var child = parseInt($("#multiWayChild").val());
    var infant = parseInt($("#multiWayInfant").val());
    var extra = parseInt($("#multiWayExtra").val());
    if (infant >= adult && infant > 1) {
        $("#multiWayInfant").val(adult);
    }
    if (extra >= adult + child && extra > 1) {

        $("#multiWayExtra").val(adult + child);
    }
})

$("#oneWayChild_btn_down").click(function () {

    var adult = parseInt($("#oneWayAdult").val() - 1);
    var child = parseInt($("#oneWayChild").val());
    var extra = parseInt($("#oneWayExtra").val());
    if (extra >= adult + child && extra > 2) {

        $("#oneWayExtra").val(adult + child);
    }
})
$("#roundChild_btn_down").click(function () {

    var adult = parseInt($("#roundAdult").val() - 1);
    var child = parseInt($("#roundChild").val());
    //var infant = parseInt($("#roundInfant").val());
    var extra = parseInt($("#roundExtra").val());
    if (extra >= adult + child && extra > 2) {

        $("#roundExtra").val(adult + child);
    }
})
$("#multiWayChildren_btn_down").click(function () {
    var adult = parseInt($("#multiWayAdult").val() - 1);
    var child = parseInt($("#multiWayChild").val());
    var extra = parseInt($("#multiWayExtra").val());
    if (extra >= adult + child && extra > 2) {

        $("#multiWayExtra").val(adult + child);
    }
})
$("#oneWayExtra_btn_up").click(function () {

    var adult = parseInt($("#oneWayAdult").val() - 1);
    var child = parseInt($("#oneWayChild").val());
    var extra = parseInt($("#oneWayExtra").val());
    if (extra >= adult + child && extra > 0) {

        $("#oneWayExtra").val(adult + child);
    }
})
$("#roundExtra_btn_up").click(function () {

    var adult = parseInt($("#roundAdult").val() - 1);
    var child = parseInt($("#roundChild").val());
    var extra = parseInt($("#roundExtra").val());
    if (extra >= (adult + child) && extra > 0) {

        $("#roundExtra").val(adult + child);
    }
})
$("#multiWayExtra_btn_up").click(function () {

    var adult = parseInt($("#multiWayAdult").val() - 1);
    var child = parseInt($("#multiWayChild").val());
    var extra = parseInt($("#multiWayExtra").val());
    if (extra >= adult + child && extra > 0) {

        $("#multiWayExtra").val(adult + child);
    }
})
}, 1000);
setTimeout(function () {
    //$("#PaxTypes_oneway").change(function () {
    //    var n = $("#PaxTypes_oneway").find(":selected").val();
    //    if (n == "Student" || n == "Marine Fare") {
    //        $("#oneWayChild").prop("disabled", !0);
    //        $("#oneWayInfant").prop("disabled", !0);
    //        n == "Student" && ($("#oneWayExtra").prop("disabled", !0),
    //            $("#oneWayExtra").val(0));
    //        $("#oneWayChild").val(0);
    //        $("#oneWayInfant").val(0);
    //        var t = parseInt($("#oneWayAdult").val())
    //            , i = parseInt($("#oneWayExtra").val())
    //            , r = parseInt($("#oneWayAdult").val()) + parseInt($("#oneWayExtra").val());
    //        r > 8 ? ($("#oneWayAdult_btn_down").click(),
    //            setTimeout(() => {
    //                $("#oneWayAdult_btn_up").click()
    //            }
    //                , 100)) : ($("#oneWayAdult_btn_down").click(),
    //                    $("#oneWayAdult_btn_up").click());
    //        t != parseInt($("#oneWayAdult").val()) && ($("#oneWayAdult").val(t),
    //            $("#oneWayAdult_btn_up").click());
    //        i != parseInt($("#oneWayExtra").val()) && ($("#oneWayExtra").val(i),
    //            $("#oneWayExtra_btn_down").click())
    //    } else
    //        $("#oneWayAdult").prop("disabled", !1),
    //            $("#oneWayChild").prop("disabled", !1),
    //            $("#oneWayInfant").prop("disabled", !1),
    //            $("#oneWayExtra").prop("disabled", !1);
    //    n == "Marine Fare" && $("#oneWayExtra").prop("disabled", !1)
    //});
    $("#PaxTypes_oneway").change(function () {
        var PaxPromo = $('#PaxTypes_oneway').find(":selected").val();
        if (PaxPromo == 'Student' || PaxPromo == 'Marine Fare') {
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
    $("#PaxTypes_return").change(function () {
        var n = $("#PaxTypes_return").find(":selected").val();
        if (n == "Student" || n == "Marine Fare") {
            $("#roundChild").prop("disabled", !0);
            $("#roundInfant").prop("disabled", !0);
            n == "Student" && ($("#roundExtra").prop("disabled", !0),
                $("#roundExtra").val(0));
            $("#roundChild").val(0);
            $("#roundInfant").val(0);
            var t = parseInt($("#roundAdult").val())
                , i = parseInt($("#roundExtra").val())
                , r = parseInt($("#roundAdult").val()) + parseInt($("#roundExtra").val());
            r > 8 ? ($("#roundAdult_btn_down").click(),
                setTimeout(() => {
                    $("#roundAdult_btn_up").click()
                }
                    , 100)) : ($("#roundAdult_btn_down").click(),
                        $("#roundAdult_btn_up").click());
            t != parseInt($("#roundAdult").val()) && ($("#roundAdult").val(t + 1),
                $("#roundAdult_btn_down").click());
            i != parseInt($("#roundExtra").val()) && ($("#roundExtra").val(i + 1),
                $("#roundExtra_btn_down").click())
        } else
            $("#roundAdult").prop("disabled", !1),
                $("#roundChild").prop("disabled", !1),
                $("#roundInfant").prop("disabled", !1),
                $("#roundExtra").prop("disabled", !1);
        n == "Marine Fare" && $("#roundExtra").prop("disabled", !1)
    });
    $("#PaxTypes_multi").change(function () {
        var PaxPromo = $('#PaxTypes_multi').find(":selected").val();
        if (PaxPromo == 'Student' || PaxPromo == 'Marine Fare') {
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
}, 1000);


