/* AWS Prod */
var settings = {
    graphApiUrl: apiURL + '/api/Postman',
    middleWareUrl: apiURL + '/api/Postman',
    middleWareDomainUrl: apiURL,
    ipInfoService: 'https://extreme-ip-lookup.com/json/?key=x93RxuKFoWpdv0jkcjpz',
    token: ''
};


/* AWS Stage */
//var settings = {
//    graphApiUrl: apiURL + '/api/Postman',
//    middleWareUrl: apiURL + '/api/Postman',
//    middleWareDomainUrl: apiURL,
//    ipInfoService: ipServiceURL + 'json/?key=Mj0ktVyBJbc5QnP2s27f',
//    token: ''
//};

GeoPoint = function (lon, lat) {
    switch (typeof (lon)) {
        case 'number':
            this.lonDeg = this.dec2deg(lon, this.MAX_LON);
            this.lonDec = lon;
            break;
        case 'string':
            if (this.decode(lon)) {
                this.lonDeg = lon;
            }
            this.lonDec = this.deg2dec(lon, this.MAX_LON);
            break;
    }
    switch (typeof (lat)) {
        case 'number':
            this.latDeg = this.dec2deg(lat, this.MAX_LAT);
            this.latDec = lat;
            break;
        case 'string':
            if (this.decode(lat)) {
                this.latDeg = lat;
            }
            this.latDec = this.deg2dec(lat, this.MAX_LAT);
            break;
    }
};

GeoPoint.prototype = {

    CHAR_DEG: "\u00B0",
    CHAR_MIN: "\u0027",
    CHAR_SEC: "\u0022",
    CHAR_SEP: "\u0020",

    MAX_LON: 180,
    MAX_LAT: 90,

    // decimal
    lonDec: NaN,
    latDec: NaN,

    // degrees
    lonDeg: NaN,
    latDeg: NaN,

    dec2deg: function (value, max) {

        var sign = value < 0 ? -1 : 1;

        var abs = Math.abs(Math.round(value * 1000000));

        if (abs > (max * 1000000)) {
            return NaN;
        }

        var dec = abs % 1000000 / 1000000;
        var deg = Math.floor(abs / 1000000) * sign;
        var min = Math.floor(dec * 60);
        var sec = (dec - min / 60) * 3600;

        var result = "";

        result += deg;
        result += this.CHAR_DEG;
        result += this.CHAR_SEP;
        result += min;
        result += this.CHAR_MIN;
        result += this.CHAR_SEP;
        result += sec.toFixed(2);
        result += this.CHAR_SEC;

        return result;

    },

    deg2dec: function (value) {

        var matches = this.decode(value);

        if (!matches) {
            return NaN;
        }

        var deg = parseFloat(matches[1]);
        var min = parseFloat(matches[2]);
        var sec = parseFloat(matches[3]);

        if (isNaN(deg) || isNaN(min) || isNaN(sec)) {
            return NaN;
        }

        return deg + (min / 60.0) + (sec / 3600);
    },

    decode: function (value) {
        var pattern = "";

        // deg
        pattern += "(-?\\d+)";
        pattern += this.CHAR_DEG;
        pattern += "\\s*";

        // min
        pattern += "(\\d+)";
        pattern += this.CHAR_MIN;
        pattern += "\\s*";

        // sec
        pattern += "(\\d+(?:\\.\\d+)?)";
        pattern += this.CHAR_SEC;

        return value.match(new RegExp(pattern));
    },

    getLonDec: function () {
        return this.lonDec;
    },

    getLatDec: function () {
        return this.latDec;
    },

    getLonDeg: function () {
        return this.lonDeg;
    },

    getLatDeg: function () {
        return this.latDeg;
    }

};

var stationList = [];
var stationListWithMarkets = [];
var marketList = [];
var countriesList = [];
var promoCodeStatus = false;
var countryList = [];
var closestAirportData = [];
var middlewareSectorList = [];
var searchControlStringMatched = false;
var nextTabIndex = "";
var stationsWithLocation = [];
var lowfarecalenderres = [];
var firstdateselected = false;
var firstinitdeparturedate = false;
var lowfares = '';
var lowfaredates = [];
var Paxtypes = [];
var IsDohopStation = false;
var IsMarineAvailable = false;

//var AgencyCreditDetails = "";
//var AgencyName = "";

// Convert Degress to Radians
function Deg2Rad(deg) {
    return deg * Math.PI / 180;
}

function PythagorasEquirectangular(lat1, lon1, lat2, lon2) {
    lat1 = Deg2Rad(lat1);
    lat2 = Deg2Rad(lat2);
    lon1 = Deg2Rad(lon1);
    lon2 = Deg2Rad(lon2);
    var R = 6371; // km
    var x = (lon2 - lon1) * Math.cos((lat1 + lat2) / 2);
    var y = (lat2 - lat1);
    var d = Math.sqrt(x * x + y * y) * R;
    return d;
}

function nearestAirportCity(latitude, longitude, locations, stations) {
    var mindif = 99999;
    var closest;

    for (index = 0; index < locations.length; ++index) {
        var dif = PythagorasEquirectangular(latitude, longitude, locations[index]['lon'], locations[index]['lat']);
        if (dif < mindif) {
            closest = index;
            mindif = dif;
        }
    }

    // return the nearest location
    var closestLocation = (locations && closest) ? stations.find(st => st.code == locations[closest].stationCode) : stations[0];
    return closestLocation != undefined ? closestLocation : stations[0];
}


function convertToDMS(val) {
    var direction = val.slice(-1, val.length);
    var seconds = val.substring(val.length - 3, val.length - 1);
    var minutes = val.substring(val.length - 5, val.length - 3);
    var degrees = val.substring(0, val.length - 5);
    var formated = degrees + '° ' + minutes + '\' ' + seconds + '" ' + direction;
    return formated;
}


function checkValid() {

    var isValid = false;
    $('#multi-city .form-row.active:last').find('input.single-date-picker, input.tt-input').each(function () {
        if ($.trim($(this).val()) != '') {
            isValid = true;
        } else {
            isValid = false;
        }
    });

    if (isValid == true) {
        $('#addFlight').removeClass('disabled');

    } else {
        $('#addFlight').addClass('disabled');
    }

    return isValid;

    $('#addFlight').trigger('click');
}

$('#addFlight').click(function (e) {

    $('#multi-city .hidden-field-group .form-row:not(".active"):first').addClass('active');
    $(this).addClass('disabled');
    if ($(".form-row.row.form-wrap.active").length == 2) {
        $('#addFlight').hide();
    }
    e.preventDefault();

});
var isRowfilled = false;
function checkFlightLocationInputStatus() {

    $('.location-select').trigger('change');

    if ($('#from_flight_search').val() != '' && $('#to_flight_search').val() != '') {
        isRowfilled = true;
    } else {
        isRowfilled = false;
    }
    if (isRowfilled == true) {
        $('#from_flight_search').parents('.form-row').next('.form-row').removeClass('hidden');
        //$('#to-input-reset').addClass('search_flight_booking')

        
        $('.switchLocations').addClass('active');
        if ($("#traveladvisory_Body").hasClass("active")) {
            $('.jazeera_backdrop, .tab-panel').removeClass('active');
        } else {
            $('.jazeera_backdrop, .tab-panel').addClass('active');
        }
    } else {
        $('#from_flight_search').parents('.form-row').next('.form-row').addClass('hidden');
        $('.switchLocations').removeClass('active');
        $('.jazeera_backdrop, .tab-panel').removeClass('active');
    }
    //if ($('#from_flight_search_muticity2').val() != '' && $('#to_flight_search_muticity2').val() != '') {
    //    isRowfilled = true;
    //} else {
    //    isRowfilled = false;
    //}
    //if (isRowfilled == true) {
    //    $('#from_flight_search_muticity2').parents('.form-row').next('.form-row').removeClass('hidden');
    //    $('#addmulticity2sticky').addClass('search_flight_multy_booking')
    //}
    //if ($('#from_flight_search_muticity1').val() != '' && $('#to_flight_search_muticity1').val() != '') {
    //    isRowfilled = true;
    //} else {
    //    isRowfilled = false;
    //}
    //if (isRowfilled == true) {
    //    $('#from_flight_search_muticity1').parents('.form-row').next('.form-row').removeClass('hidden');
    //    $('#multicity-sticky').addClass('search_flight_multy_booking2')
    //}
    //if ($('#from_flight_search_oneway').val() != '' && $('#to_flight_search_oneway').val() != '') {
    //    isRowfilled = true;
    //} else {
    //    isRowfilled = false;
    //}
    //if (isRowfilled == true) {
    //    $('#from_flight_search_oneway').parents('.form-row').next('.form-row').removeClass('hidden');
    //    $('#OnewayToInputReset').addClass('search_flight_oneway_booking')
    //}

    checkValid();

}

function handleErrors(response) {
    if (!response.ok) {
        throw Error(response.statusText);
    }
    return response.json();
}
// check dohop station
function CheckDohop() {
    $.ajax({
        url: settings.middleWareDomainUrl + "/api/jz/v1/external/travelsearchengine/stationmarkets",
        async: false,
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': settings.token,
        },
        success: function (res) {
            var stations = res.data.stations.values;
            IsDohopStation = !!stations.find(st => st.code == localStorage.from_flight_search || st.code == localStorage.to_flight_search);
        },
        error: function () {
            console.log('dohop call error');
        }
    })
    return IsDohopStation;
}
//Get Paxtypes
function getPaxTypes() {
    fetch(settings.middleWareDomainUrl + "/api/jz/v1/GetPassengerDiscountPromoCodes", {
        method: 'get',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': settings.token,
        },
    }).then(res => res.json())
        .then(function (PaxTypes) {
            if (PaxTypes.data.length) {
                fetch(settings.middleWareDomainUrl + "/api/jz/v1/IsMarineFareAvailable", {
                    method: 'get',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'Authorization': settings.token,
                    },
                }).then(res => res.json())
                    .then(function (res) {
                        if (res.statuscode == 500) {
                            IsMarineAvailable = PaxTypes.data.find(x => x.ssrCode != "SEMN") != undefined ? true : false;
                        }
                    }).catch((error) => {
                        console.error('Error:', error);
                    });
                Paxtypes = PaxTypes;
                setTimeout(() => {
                    if (IsMarineAvailable) { PaxTypes.data = PaxTypes.data.filter(x => x.ssrCode != "SEMN"); }
                    $(".passenger_type").css('display', 'block');
                    for (var i = 0; i < PaxTypes.data.length; i++) {
                        var item = PaxTypes.data[i];

                        if (item.isActive) {
                            var selectreturn = document.getElementById("PaxTypes_return");
                            var optionreturn = document.createElement("option");
                            optionreturn.text = item.promoName;
                            optionreturn.value = item.promoName;
                            selectreturn.appendChild(optionreturn);
                            if (item.promoName == 'Student') {
                                $('#studentcode').css('display', 'block');
                            }
                            var selectoneway = document.getElementById("PaxTypes_oneway");
                            var optiononeway = document.createElement("option");
                            optiononeway.text = item.promoName;
                            optiononeway.value = item.promoName;
                            selectoneway.appendChild(optiononeway);
                            var selectmulti = document.getElementById("PaxTypes_multi");
                            var optionmulti = document.createElement("option");
                            optionmulti.text = item.promoName;
                            optionmulti.value = item.promoName;
                            selectmulti.appendChild(optionmulti);
                        }
                    }
                }, 1500);
            } else {
                $(".passenger_type").css('display', 'none');
            }
           
        });
};
 function Availabledates() {
    if (localStorage.from_flight_search && localStorage.to_flight_search && localStorage.to_flight_search.length == 3) {
        if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) var Type = 'OW';
        if ($('#return').hasClass('active')) var Type = 'RT';
    }
    fetch(settings.middleWareDomainUrl + "/api/jz/v2/InventoryLeg?origin=" + localStorage.from_flight_search + "&destination="
        + localStorage.to_flight_search + "&tripType=" + Type, {
        method: 'get',
        headers: {
            'Content-Type': 'application/json'
        }
    })
        //r => { this.availableDatesForCalender = r.filter(x => x.departure == this.searchForm.value.origin && x.arrival == this.searchForm.value.destination).flatMap(x => x.jsonData.dates); this.ref.detectChanges(); this.showFromDate = true }
        .then(res => res.json())
        .then(function (res) {
            if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) {
                var availableDatesForCalender = res.filter(x => x.departure == localStorage.from_flight_search && x.arrival == localStorage.to_flight_search).flatMap(x => x.jsonData.dates);
                localStorage.calender_available_dates = availableDatesForCalender;
                setTimeout(() => {
                    bindlowfare().then(() => {
                        $('.next,.prev').on('click', function () {
                            bindlowfare()
                        })
                    }).then(this.initOneWayDatePicker());
                }, 200)
                //this.initOneWayDatePicker();
            }
            if ($('#return').hasClass('active')) {
                localStorage.availableDatesForCalender = res.filter(x => x.departure == localStorage.from_flight_search && x.arrival == localStorage.to_flight_search).flatMap(x => x.jsonData.dates);
                this.initDepartureDatePicker();
                localStorage.availableDatesForCalenderRT = res.filter(x => x.departure == localStorage.to_flight_search && x.arrival == localStorage.from_flight_search).flatMap(x => x.jsonData.dates);
                setTimeout(() => {
                    bindlowfare().then(() => {
                        $('.next,.prev').on('click', function () {
                            bindlowfare()
                        })
                    }).then(this.initReturnDatePicker());
                }, 200)
                //this.initReturnDatePicker();
            }
            //$('.isFlexibleCheckbox').toggleClass('active');
            $(".range-picker-wrap").show();
        }).catch(function () {
            if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) {
                //var availableDatesForCalender = res.filter(x => x.departure == localStorage.from_flight_search && x.arrival == localStorage.to_flight_search).flatMap(x => x.jsonData.dates);
                localStorage.calender_available_dates = availableDatesForCalender;
                setTimeout(() => {
                    bindlowfare().then(() => {
                        $('.next,.prev').on('click', function () {
                            bindlowfare()
                        })
                    }).then(this.initOneWayDatePicker());
                }, 200)
                //this.initOneWayDatePicker();
            }
            if ($('#return').hasClass('active')) {
                localStorage.availableDatesForCalender = undefined; //res.filter(x => x.departure == localStorage.from_flight_search && x.arrival == localStorage.to_flight_search).flatMap(x => x.jsonData.dates);
                this.initDepartureDatePicker();
                localStorage.availableDatesForCalenderRT = undefined;//res.filter(x => x.departure == localStorage.to_flight_search && x.arrival == localStorage.from_flight_search).flatMap(x => x.jsonData.dates);
                setTimeout(() => {
                    bindlowfare().then(() => {
                        $('.next,.prev').on('click', function () {
                            bindlowfare()
                        })
                    }).then(this.initReturnDatePicker());
                }, 200)
                //this.initReturnDatePicker();
            }
        });
}
var stationAndMarket = {
    init: function () {
        this.getToken();
        this.getMiddlewareStationList();
        this.getStationsWithLocation();
        this.getCountries();
        this.getTokenDetails();
        this.getuserDetails();
    },
    getTokenDetails: function (memberToken) {

        if (!memberToken) return
        fetch(settings.middleWareDomainUrl + "/api/jz/v1/Token", {
            method: 'get',

            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': memberToken,
            },
            credentials: 'omit',
        })
            .then(res => res.json())
            .then(function (res) {
                var roleCode = res;
                //let dateofbirth = new Date(res.data.userPerson.details.dateOfBirth);
                if (roleCode && roleCode.data && roleCode.data.roles && roleCode.data.roles.acting && roleCode.data.roles.acting.roleCode == 'WWWC') {
                    stationAndMarket.getSaversClubDetails(memberToken);
                }

            })


    },
    getSaversClubDetails(memberToken) {

        return fetch(settings.middleWareDomainUrl + "/api/jz/GetSaverClubMemberDetails", {
            method: 'get',

            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': memberToken,
            },
            credentials: 'omit',
        })
            .then(res => res.json())
            .then(function (res) {
                var roleCode = res;
                sessionStorage.setItem('saveersList', JSON.stringify(roleCode))
                console.log(roleCode)
                return res;
            })

    },
    getuserDetails: function () {
        let memberToken = null;
        const cookies = document.cookie.split(';');
        const tokenCookie = cookies.find(t => t?.includes('tokenCookie'));
        if (tokenCookie) {
            const tokenParts = tokenCookie.split('=');
            if (tokenParts.length === 2) {
                memberToken = tokenParts[1];
            }
        }
        let cmsmemberCookie = document.cookie.split(';').find(t => t?.includes('loggedInUser')) ? true : false;
        //cmsmemberCookie = true;
        //memberToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkb3RSRVogQVBJIiwianRpIjoiYjRhOWU0OTgtOTVjMC01MjgzLTlmODUtNDFkNDZmZGQwNjA0IiwiaXNzIjoiZG90UkVaIEFQSSJ9.Hc6Y81ABuXesl8tw87mqwVVPkaYpYPWRjpdwFgipoJE';
        //if (memberToken) {
        if (memberToken && cmsmemberCookie) {
           
            let c_List = JSON.parse(localStorage.getItem("countriesList"))
            fetch(settings.middleWareDomainUrl + "/api/jz/v1/GetUserDetails", {
                method: 'get',

                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': memberToken,
                },
                credentials: 'omit',
            })
                .then(res => res.json())
                .then(function (res) {
                    var reslist = res.data;
                    let dateofbirth = new Date(res.data.userPerson.details.dateOfBirth);
                    if (reslist?.userPerson != null) {
                        dataLayer.push({
                            'event': 'identity',
                            'channel': 'Web',
                            'currency': '',
                            'country': '',
                            'pos': 'J9WEB',
                            'page': window.location.href,
                            'title': reslist.userPerson.name.title,
                            'firstname': reslist.userPerson.name.first,
                            'lastname': reslist.userPerson.name.last,
                            'dob': dateofbirth ? dateofbirth.toISOString().slice(0, 22) : '',
                            'email': reslist.userPerson.emailAddresses[0].email,
                            'City': reslist.userPerson.addresses[0].city,
                            'Nationality': c_List ? c_List.find(t => t.countryCode === reslist.userPerson.details.nationality)?.name ?? '' : '',
                            'Country of Residence': c_List ? c_List.find(t => t.countryCode === reslist.userPerson.details.residentCountry)?.name ?? '' : '',
                            'mobile': reslist.userPerson.phoneNumbers[0].number,
                            'loginMethod': 'member',
                            'userType': 'member',
                            'language': ''
                        });

                    }
                    stationAndMarket.getTokenDetails(memberToken);
                })
        }
        
    },
    getlowfarescalender: function () {
        if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) var Type = 'oneway';
        if ($('#return').hasClass('active')) var Type = 'RT';
        //this.initDepartureDatePicker();
        fetch(settings.middleWareDomainUrl + "/api/jz/v1/LowfareData?Origin=" + localStorage.from_flight_search + "&Destination=" + localStorage.to_flight_search + "&TripType=" + Type, {
            method: 'get',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': settings.token,
            },
        })
            .then(res => res.json())
            .then(res => {
                lowfarecalenderres = res;
            })
    },
    getCountries: function () {
        const getCountriesGraphQAParams = 'query GetCountries {resourceCountriesv2 {values {id: countryCode countryCode name defaultCurrencyCode }}}';

        fetch(settings.graphApiUrl + "/api/v1/Graph", {
            method: 'post',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': settings.token,
            },
            body: JSON.stringify({ query: getCountriesGraphQAParams }),
            credentials: 'omit',
        })
            .then(res => res.json())
            .then(function (res) {
                var reslist = res.data.resourceCountriesv2.values;
                for (var i = 0; i < reslist.length; i++) {
                    var item = reslist[i];
                    // console.log(item);
                    countriesList.push({
                        'id': item.id,
                        'countryCode': item.countryCode,
                        'name': item.name,
                        'defaultCurrencyCode': item.defaultCurrencyCode
                    });
                    localStorage.setItem("countriesList", JSON.stringify(countriesList));
                }
                stationAndMarket.getStation();
            })
    },

    getStation: function () {

        fetch(settings.middleWareDomainUrl + "/api/jz/v1/AvailableStations", {
            method: 'get',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': settings.token,
            },
        }).then(res => res.json())
            .then(function (stationsResp) {
                for (var i = 0; i < stationsResp.length; i++) {
                    var item = stationsResp[i];

                    var airportName = "";
                    var countryNameArabic = "";
                    var dohop = "";
                    var RussianCity = item.cityRussiaName;
                    var RussianCountry = item.countryRussiaName;

                    var matchedMiddlewareSectorItem = middlewareSectorList.find(s => s.stationCode === item.stationcode);
                    if (matchedMiddlewareSectorItem != undefined && matchedMiddlewareSectorItem != "" && $("#renderingArabicOrEnglish").text() == "en") {
                        airportName = matchedMiddlewareSectorItem.stationName;
                    }
                    else if (matchedMiddlewareSectorItem != undefined && matchedMiddlewareSectorItem != "" && $("#renderingArabicOrEnglish").text() == "ar") {
                        airportName = matchedMiddlewareSectorItem.cityArabicName;
                        countryNameArabic = matchedMiddlewareSectorItem.countryArabicName;
                        dohop = "الجزيرة العالمية";
                    }
                    else if (matchedMiddlewareSectorItem != undefined && matchedMiddlewareSectorItem != "" && $("#renderingArabicOrEnglish").text() == "ru") {
                        airportName = RussianCity;
                        countryNameArabic = RussianCountry;
                    }


                    var point = new GeoPoint(0, 0);
                    stationList.push({
                        'name': (airportName != "" && airportName != undefined) ? airportName : item.stationName,
                        'country': (countryNameArabic != "" && countryNameArabic != undefined) ? countryNameArabic : item.countryName,
                        'code': item.stationcode,
                        'cityCode': item.citycode,
                        'lon': point.getLonDec(),
                        'lat': point.getLatDec(),
                        'flag': item.countryCode.toLowerCase(),
                        'markets': item.markets,
                        'dohop': item.externalSearchEngine != undefined ? ((dohop != "" && dohop != undefined) ? "الجزيرة العالمية" : 'Jazeera Global') : '',
                        'football': item.stationcode == 'DOH' ? "src=" + "/assets/images/football-icon.png" : "style=" + "display:none" + "",
                    });
                }
                //stationList = stationList.sort(SortByStationName);
                stationListWithMarkets = stationList;
                stationList = stationList.filter(x => x.markets);
            }).then(function () {
                if (localStorage.myLat == null || localStorage.myLat == "undefined" || localStorage.myLon == null || localStorage.myLon == "undefined" || localStorage.closestAirportData == null || localStorage.closestAirportData == "undefined") {
                    stationAndMarket.getCurrentLocation();
                }
                else {
                    closestAirportData.push(nearestAirportCity(localStorage.myLat, localStorage.myLon, stationsWithLocation, stationList));

                    var closestAirportDataIndex = stationsWithLocation.findIndex(function (st) {
                        st.stationCode == closestAirportData[0].code
                    });
                    if (closestAirportDataIndex !== -1) {
                        stationList.splice(stationsWithLocation.findIndex(closestAirportDataIndex), 1)
                    }

                    stationAndMarket.fillStation();
                }
            });
    },

    getStationsWithLocation: function () {
        const getStationsGraphQLParams = `query getStations {
            resourceStations {
            values {
                fullName
                shortName
                stationCode
                locationDetails {
                  countryCode
                  cityCode
                  zoneCode
                  coordinates{
                    latitude
                    longitude
                  }
                }
              }
            }
        }`;
        Promise.all([
            fetch(settings.graphApiUrl + "/api/v1/Graph", {
                method: 'post',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': settings.token,
                },
                body: JSON.stringify({ query: getStationsGraphQLParams }),
                credentials: 'omit',
            }).then(res => res.json()),
            fetch(settings.middleWareDomainUrl + "/api/jz/v1/external/travelsearchengine/stationmarkets", {
                method: 'get',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': settings.token,
                }
            }).then(res => res.json())
        ])
            .then(function ([oldStationsResp, newStations]) {
                var dataList = oldStationsResp.data.resourceStations.values.sort(SortByShortName);
                for (var i = 0; i < dataList.length; i++) {
                    var item = dataList[i];

                    var lon = this.convertToDMS(item.locationDetails.coordinates.latitude);
                    var lat = this.convertToDMS(item.locationDetails.coordinates.longitude);
                    var point = new GeoPoint(lon, lat);

                    var airportName = "";
                    var countryNameArabic = "";
                    var dohop = "";
                    var matchedMiddlewareSectorItem = middlewareSectorList.find(s => s.stationCode === item.stationcode);
                    if (matchedMiddlewareSectorItem != undefined && matchedMiddlewareSectorItem != "" && $("#renderingArabicOrEnglish").text() == "en") {
                        airportName = matchedMiddlewareSectorItem.stationName;
                    }
                    else if (matchedMiddlewareSectorItem != undefined && matchedMiddlewareSectorItem != "" && $("#renderingArabicOrEnglish").text() == "ar") {
                        airportName = matchedMiddlewareSectorItem.cityArabicName;
                        countryNameArabic = matchedMiddlewareSectorItem.countryArabicName;
                        dohop = "الجزيرة العالمية";
                    }

                    stationsWithLocation.push({
                        'name': (airportName != "" && airportName != undefined) ? airportName : item.shortName,
                        'countryCode': item.locationDetails.countryCode,
                        'stationCode': item.stationCode,
                        'lon': point.getLonDec(),
                        'lat': point.getLatDec(),
                    });
                }
                var newStationList = newStations.data.stations.values;
                for (var i = 0; i < newStationList.length; i++) {
                    var item = newStationList[i];
                    var lon = this.convertToDMS(item.locationDetails.coordinates.latitude);
                    var lat = this.convertToDMS(item.locationDetails.coordinates.longitude);
                    var point = new GeoPoint(lon, lat);

                    stationsWithLocation.push({
                        'name': item.name,
                        'countryCode': item.locationDetails.countryCode,
                        'stationCode': item.code,
                        'lon': point.getLonDec(),
                        'lat': point.getLatDec(),
                    })
                }
            })
    },

    getCurrentLocation: function () {

        fetch(settings.middleWareDomainUrl + '/api/ip/GetIp')
            .then(res => res.json())
            .then(function (res) {
                stationAndMarket.getCurrentLatLog(res.IP);
            })
            .then(function () {
                stationAndMarket.fillStation();
            })


    },

    getCurrentLatLog: function (ip) {
        // fetch(settings.ipInfoService + '/' + ip)
        fetch(settings.ipInfoService)
            .then(handleErrors)
            .then(function (res) {
                if (res != null) {
                    myLat = res.lat;
                    myLon = res.lon;
                    closestAirportData.push(nearestAirportCity(myLat, myLon, stationsWithLocation, stationList));

                    localStorage.myLat = res.lat;
                    localStorage.myLon = res.lon;
                    localStorage.closestAirportData = JSON.stringify(closestAirportData);

                    //stationList.splice(stationList.indexOf(closestAirportData), 1)

                    var closestAirportDataIndex = stationList.findIndex(st => st.stationCode == closestAirportData[0].code);
                    if (closestAirportDataIndex !== -1) {
                        stationList.splice(stationList.findIndex(closestAirportDataIndex), 1)
                    }
                }
            })
            .catch(function (err) {
                // Error :(
            });
    },


    fillStation: function () {
        var ClosestAirports = new Bloodhound({
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name', 'code'),
            identify: function (obj) {
                if (obj != null && obj.code != null) {
                    return obj.code;
                }
            },
            local: closestAirportData
        });

        function closestLocationList(q, sync) {
            if (q === '') {
                var mapped = $.map(closestAirportData, function (item) { return item });
                sync(mapped);
            } else {
                ClosestAirports.search(q, sync);
            }
        }

        var Airports = new Bloodhound({
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name', 'code','country'),
            identify: function (obj) { return obj.code; },
            local: stationList
        });
        Airports.search = function (query, sync, async) {
            local = this.sorter(this.index.search(query));
            var filterdArray = local.reduce((a, b) => {
                if (a.findIndex(e => e.code == b.code) == -1) {
                    stationList.filter(t => t.code == b.code || t.cityCode == b.cityCode)
                        .forEach(p => {
                            a.push(p);
                        })
                }
                return a;
            }, []);
            if (filterdArray && filterdArray.length > 0) {
                local = filterdArray;
            }
            sync(local);
            return this;
        }

        function locationList(q, sync) {
            if (q === '') {
                var mapped = $.map(stationList, function (item) { return item });
                sync(mapped);
            } else {
                Airports.search(q, sync);
            }
        }

        $('.location-select.to').on('typeahead:selected', function (obj, data) {
           
        });

        $('.location-select.from').typeahead(
            {
                minLength: 0,
                highlight: true,
                autoSelect: true,
                showHintOnFocus: true,
                showDefault: true,
                //displayKey: 'name','country', 'code',
                //async: true,
                classNames: {
                    open: 'is-open',
                    empty: 'is-empty',
                    cursor: 'is-active',
                    suggestion: 'Typeahead-suggestion',
                    selectable: 'Typeahead-selectable'
                }
            },
            {
                name: 'current-location',
                display: function (item) { return item.name + ' (' + item.code + '), ' + item.country },
                source: closestLocationList,
                limit: 1,
                templates: {
                    header: '<h5 class="league-name">Current location</h5>',
                    empty: [''],
                    //suggestion: Handlebars.compile('<div class="tt-suggestion" data-code="{{code}}"> <div class="flag-wrap"> <i class="flag-icon flag-icon-{{flag}}"></i></div>   <div class="suggetion-title"> <div class="country-title">{{name}}</div> <div class="country-sub-title">{{country}}</div></div><img class="football" {{football}} alt="football" /><span class="flight-code">{{code}}</span><span class="location_dohop">{{dohop}}</span> </div>')
                    suggestion: Handlebars.compile('<div class="tt-suggestion" data-code="{{code}}"> <div class="flag-wrap"> <i class="flag-icon flag-icon-{{flag}}"></i></div>   <div class="suggetion-title"> <div class="country-title">{{name}}</div> <div class="country-sub-title">{{country}}</div></div><span class="flight-code">{{code}}</span><span class="location_dohop">{{dohop}}</span> </div>')

                },
            },
            {
                name: 'airports-list',
                display: function (item) { return item.name + ' (' + item.code + '), ' + item.country },
                source: locationList,
                limit: 100,
                templates: {
                    header: '<h5 class="league-name">All locations</h5>',
                    empty: [''],
                    //suggestion: Handlebars.compile('<div class="tt-suggestion" data-code="{{code}}"> <div class="flag-wrap"> <i class="flag-icon flag-icon-{{flag}}"></i></div>   <div class="suggetion-title"> <div class="country-title">{{name}}</div> <div class="country-sub-title">{{country}}</div></div><img class="football" {{football}} alt="football" /><span class="flight-code">{{code}}</span><span class="location_dohop">{{dohop}}</span> </div>')
                    suggestion: Handlebars.compile('<div class="tt-suggestion" data-code="{{code}}"> <div class="flag-wrap"> <i class="flag-icon flag-icon-{{flag}}"></i></div>   <div class="suggetion-title"> <div class="country-title">{{name}}</div> <div class="country-sub-title">{{country}}</div></div><span class="flight-code">{{code}}</span><span class="location_dohop">{{dohop}}</span> </div>')

                },
            }
        ).on('typeahead:selected', function (obj, data) {
            var marketSelecterDropdown = $(this).parents('.locations').parent().find('.location-select.to');
            stationAndMarket.getMarket(data.code, marketSelecterDropdown);


            var nextTabIndex = obj.currentTarget.tabIndex + 1;
            $('#' + obj.target.id).attr('data-selected', data.code);

            if ($(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').val() == '') {
                $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').focus().parents('.locations').addClass('show-popup');
            }

            if ($(this).parents('.sub-panel-data').find('input[tabindex="' + nextTabIndex + '"]').hasClass('datepicker')) {
                $('input[tabindex="' + nextTabIndex + '"]').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
                $('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-group').addClass('show-popup');
            }

            $(this).parents('.locations').removeClass('show-popup');
            $(this).parents('.form-row').find('.locations').removeClass('disabled');

            $("#from_termsApplyModal_Body>div").removeClass('active');
            if ((taFromPopupStationCodes != undefined || taFromPopupStationCodes != "") && wordInString(taFromPopupStationCodes, data.code)) {
                //$("#from_terms_applicable").addClass('active');

                if (obj.target.id == "from_flight_search_muticity2") {
                    $(".from_terms_activate1").addClass('active');
                }
                else {
                    $(".from_terms_activate").addClass('active');
                }
                $('#from_' + data.code).addClass('active');
            }
            else {
                //$("#from_terms_applicable").removeClass('active');
                if (obj.target.id == "from_flight_search_muticity2") {
                    $(".from_terms_activate1").removeClass('active');
                }
                else {
                    $(".from_terms_activate").removeClass('active');
                }
            }




            localStorage.from_flight_search = data.code;

        }).on('typeahead:autocomplete', function (obj, datum) {
            $('#' + obj.target.id).attr('data-selected', datum.code);
            if (obj.target.id == 'googleMapTo') {
                $('#destinationMapSearch').submit();
            }
        }).on('click', function () {
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            $('.range-picker-wrap').removeClass('active');
            $(this).parents('.locations').addClass('show-popup');

        }).on('keyup', function (obj) {
            if (viewportWidth > 991) {

                $(".tt-dataset-airports-list").find(".Typeahead-selectable").filter('[data-code=MNL]').detach();
                if ($(".tt-dataset-current-location")) {
                    var currDataCode = $(".tt-dataset-current-location").find(".Typeahead-selectable").attr("data-code");
                    $(".tt-dataset-airports-list").find(".Typeahead-selectable").filter('[data-code=' + currDataCode + ']').detach();
                }


                if (((($(this).siblings(".tt-menu").find(".country-title").text().toLowerCase()).indexOf($(this).val().toLowerCase()) >= 0))
                    || (($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code"))
                        && (($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code")).indexOf($(this).val().toUpperCase()) >= 0))) {
                    datacodeCount = 0;
                    textCount = 0;
                    var matchedelment = "";

                    $($(this).siblings(".tt-menu").find(".Typeahead-selectable")).each(function (i, e) {
                        if (($(this).siblings(".tt-menu").find(".country-title").text().toLowerCase().indexOf($(this).val().toLowerCase()) >= 0)) {
                            textCount++;
                            matchedelment = $(this).closest(".Typeahead-suggestion").attr('data-code');
                        }

                    });
                    if (textCount == 0) {
                        $($(this).siblings(".tt-menu").find(".country-title")).each(function (i, e) {

                            if (($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code")) &&
                                ($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code").indexOf($(this).val().toUpperCase()) >= 0)) {
                                datacodeCount++;
                                matchedelment = $(this).closest(".Typeahead-suggestion").attr('data-code');
                            }
                        });

                    }
                    if (textCount == 1 || datacodeCount == 1) {
                        searchControlStringMatched = true;
                        $(this).blur();
                        var nextTabIndex = obj.currentTarget.tabIndex + 1;
                        //$(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').val("");
                        $(this).siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + matchedelment + ']').trigger('click');
                        $('#' + obj.target.id).attr('data-selected', matchedelment);
                    }

                }
            }
        });
    },

    getMarket: function (station, marketDropdown) {
       

        var markets = stationList.find(function (st) {
            return st.code == station
        }).markets;

        marketList = stationListWithMarkets.filter((st) => markets.includes(st.code));

        stationAndMarket.fillMarket(marketDropdown);

       
    },
    fillMarket: function (dropdown) {
        var Airports = new Bloodhound({
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name', 'code','country'),
            identify: function (obj) { return obj.code; },
            local: marketList
        });
        Airports.search = function (query, sync, async) {
            local = this.sorter(this.index.search(query));
            var filterdArray = local.reduce((a, b) => {
                if (a.findIndex(e => e.code == b.code) == -1) {
                    stationList.filter(t => t.code == b.code || t.cityCode == b.cityCode)
                        .forEach(p => {
                            a.push(p);
                        })
                }
                return a;
            }, []);
            if (filterdArray && filterdArray.length > 0) {
                local = filterdArray;
            }
            sync(local);
            return this;
        }
        function locationList(q, sync) {
            if (q === '') {
                var mapped = $.map(marketList, function (item) { return item });
                sync(mapped);
            } else {
                Airports.search(q, sync);
            }
        }

        $(dropdown).typeahead("destroy");
        $(dropdown).typeahead(
            {
                minLength: 0,
                highlight: true,
                autoSelect: true,
                showHintOnFocus: true,
                showDefault: true,
                //displayKey: 'name','country', 'code',
                //async: true,
                classNames: {
                    open: 'is-open',
                    empty: 'is-empty',
                    cursor: 'is-active',
                    suggestion: 'Typeahead-suggestion',
                    selectable: 'Typeahead-selectable'
                }
            },
            {
                name: 'airports-list',
                display: function (item) { return item.name + ' (' + item.code + '), ' + item.country },
                source: locationList,
                limit: 100,
                templates: {
                    header: '<h5 class="league-name">All locations</h5>',
                    empty: [''],
                    //suggestion: Handlebars.compile('<div class="tt-suggestion" data-code="{{code}}"> <div class="flag-wrap"> <i class="flag-icon flag-icon-{{flag}}"></i></div>   <div class="suggetion-title"> <div class="country-title">{{name}}</div> <div class="country-sub-title">{{country}}</div></div><img class="football" {{football}} alt="football" /><span class="flight-code">{{code}}</span><span class="location_dohop">{{dohop}}</span> </div>')
                    suggestion: Handlebars.compile('<div class="tt-suggestion" data-code="{{code}}"> <div class="flag-wrap"> <i class="flag-icon flag-icon-{{flag}}"></i></div>   <div class="suggetion-title"> <div class="country-title">{{name}}</div> <div class="country-sub-title">{{country}}</div></div><span class="flight-code">{{code}}</span><span class="location_dohop">{{dohop}}</span> </div>')

                }
            }).on('typeahead:selected', function (obj, data) {
                nextTabIndex = obj.currentTarget.tabIndex + 1;
                $('#' + obj.target.id).attr('data-selected', data.code);

                checkFlightLocationInputStatus();
                $(this).parents('.locations').removeClass('show-popup');
                $("#to_termsApplyModal_Body>div").removeClass('active');
                $("#traveladvisory_Body>div").removeClass('active');

                if ((taToPopupStationCodes != undefined || taToPopupStationCodes != "") && wordInString(taToPopupStationCodes, data.code)) {
                    //$("#to_terms_applicable").addClass('active');
                    if (obj.target.id == "to_flight_search_muticity2") {
                        $(".to_terms_activate1").addClass('active');

                    }
                    else {
                        $(".to_terms_activate").addClass('active');
                    }
                    $('#to_' + data.code).addClass('active');
                }
                else {
                    //$("#to_terms_applicable").removeClass('active');
                    if (obj.target.id == "to_flight_search_muticity2") {
                        $(".to_terms_activate1").removeClass('active');
                    }
                    else {
                        $(".to_terms_activate").removeClass('active');
                    }

                }
                if ($('#one-way').hasClass('active') || $('#one-way').hasClass('active')) {
                    $('#Destination_').addClass('active');
                    $('#fromDirect_').addClass('active');
                    //$('#toDirect_').addClass('active');
                }
                else if ($('#return').hasClass('active')) {
                    $('#Destination_').addClass('active');
                    $('#fromDirect_').addClass('active');
                    $('#toDirect_').addClass('active');

                }
                else {
                    $('#Destination_').addClass('active');
                    $('#fromDirect_').addClass('active');
                    $('#toDirect_').addClass('active');
                }
                if ((taToDirectPopupStationCodes != undefined || taToDirectPopupStationCodes != "" || taFromDirectPopupStationCodes != undefined || taFromDirectPopupStationCodes != "")
                    || wordInString(taFromDirectPopupStationCodes, $('#from_flight_search').attr('data-selected'))
                    || wordInString(taToDirectPopupStationCodes, data.code) || wordInString(taToDirectPopupStationCodes, $('#from_flight_search').attr('data-selected'))
                    || wordInString(taToDirectPopupStationCodes, $('#to_flight_search_oneway').attr('data-selected'))
                    || wordInString(taFromDirectPopupStationCodes, data.code)
                    || wordInString(taFromDirectPopupStationCodes, $('#from_flight_search_oneway').attr('data-selected'))
                    || wordInString(taFromDirectPopupStationCodes, $('#from_flight_search_muticity1').attr('data-selected'))
                    || wordInString(taToDirectPopupStationCodes, $('#to_flight_search_muticity1').attr('data-selected'))
                    || wordInString(taFromDirectPopupStationCodes, $('#from_flight_search_muticity2').attr('data-selected'))
                    || wordInString(taToDirectPopupStationCodes, $('#to_flight_search_muticity2').attr('data-selected'))) {

                    if ($('#one-way').hasClass('active') || $('#one-way').hasClass('active')) {
                        $('#fromDirect_' + $('#from_flight_search_oneway').attr('data - selected')).addClass('active');
                        $('#toDirect_' + data.code).addClass('active');
                    }
                    else if ($('#return').hasClass('active')) {
                        $('#fromDirect_' + $('#from_flight_search').attr('data-selected')).addClass('active');
                        $('#toDirect_' + data.code).addClass('active');
                        $('#fromDirect1_' + data.code).addClass('active');
                        $('#toDirect1_' + $('#from_flight_search').attr('data-selected')).addClass('active');
                    }
                    else {

                        $('#fromDirect1_' + $('#from_flight_search_muticity2').attr('data-selected')).addClass('active');
                        $('#toDirect1_' + $('#to_flight_search_muticity2').attr('data-selected')).addClass('active');

                        $('#fromDirect_' + $('#from_flight_search_muticity1').attr('data-selected')).addClass('active');
                        $('#toDirect_' + $('#to_flight_search_muticity1').attr('data-selected')).addClass('active');

                        localStorage.from_flight_searchmulticity1 = $('#from_flight_search_muticity1').attr('data-selected');
                        localStorage.to_flight_searchmulticity1 = $('#to_flight_search_muticity1').attr('data-selected');
                        localStorage.from_flight_searchmulticity2 = $('#from_flight_search_muticity2').attr('data-selected');
                        localStorage.to_flight_searchmulticity2 = $('#to_flight_search_muticity2').attr('data-selected');
                    }
                    if ($('.travel-advisory div').hasClass('active')) {
                        $("#traveladvisory_Body").addClass('active');
                        //$("#to_termsApplyForIndia").modal('show');
                        $('section.destination-banner').css('margin-top', "0px");
                        $('#traveladvisory_Body').show();
                        $('.inline-message').show();
                    }
                    else {
                        $("#traveladvisory_Body").removeClass('active');
                        $('section.destination-banner').css('margin-top', "-80px");
                        $('#traveladvisory_Body').hide();
                        $('.inline-message').hide();
                    }
                    $('.jazeera_backdrop').removeClass('active');
                    if ($('.advisory-space1 div').hasClass('active')) {
                        $('.advisory-space1').show();
                    }
                    else { $('.advisory-space1').hide(); }
                    if ($('.advisory-space div').hasClass('active')) {
                        $('.advisory-space').show();
                    }
                    else { $('.advisory-space').hide(); }
                    if ($('.advisory-space2 div').hasClass('active')) {
                        $('.advisory-space2').show();
                    }
                    else { $('.advisory-space2').hide(); }
                    if ($('.advisory-space3 div').hasClass('active')) {
                        $('.advisory-space3').show();
                    }
                    else { $('.advisory-space3').hide(); }

                    //$('#searchFlightsid').prop('disabled', true);

                }
                else {
                    $('#traveladvisory_Body').hide();
                    $("#traveladvisory_Body").removeClass('active');
                    $('#toDirect_' + data.code).removeClass('active');
                    $('.jazeera_backdrop').removeClass('active');
                    $('#fromDirect_' + localStorage.from_flight_search).removeClass('active');
                    $('.inline-message').hide();

                }

                localStorage.to_flight_search = data.code;
                if (localStorage.from_flight_search && localStorage.to_flight_search && localStorage.to_flight_search.length == 3) {
                    if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) var Type = 'OW';
                    if ($('#return').hasClass('active')) var Type = 'RT';
                    //let data = `Origin=${localStorage.from_flight_search}&Destination=${localStorage.to_flight_search}&tripType=OW`;
                    //Availabledates();
                    fetch(settings.middleWareDomainUrl + "/api/jz/v2/InventoryLeg?origin=" + localStorage.from_flight_search + "&destination="
                        + localStorage.to_flight_search + "&tripType=" + Type, {
                        method: 'get',
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                        //r => { this.availableDatesForCalender = r.filter(x => x.departure == this.searchForm.value.origin && x.arrival == this.searchForm.value.destination).flatMap(x => x.jsonData.dates); this.ref.detectChanges(); this.showFromDate = true }
                        .then(res => res.json())
                        .then(function (res) {
                            if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) {
                                var availableDatesForCalender = res.filter(x => x.departure == localStorage.from_flight_search && x.arrival == localStorage.to_flight_search).flatMap(x => x.jsonData.dates);
                                localStorage.calender_available_dates = availableDatesForCalender;
                                setTimeout(() => {
                                    bindlowfare().then(() => {
                                        $('.next,.prev').on('click', function () {
                                            bindlowfare()
                                        })
                                    }).then(this.initOneWayDatePicker());
                                }, 200)
                                //this.initOneWayDatePicker();
                            }
                            if ($('#return').hasClass('active')) {
                                localStorage.availableDatesForCalender = res.filter(x => x.departure == localStorage.from_flight_search && x.arrival == localStorage.to_flight_search).flatMap(x => x.jsonData.dates);
                                if (!firstinitdeparturedate) { this.initDepartureDatePicker() }
                                localStorage.availableDatesForCalenderRT = res.filter(x => x.departure == localStorage.to_flight_search && x.arrival == localStorage.from_flight_search).flatMap(x => x.jsonData.dates);
                               
                                this.initReturnDatePicker();
                                firstinitdeparturedate = !firstinitdeparturedate ? true : false;
                            }
                            //$('.isFlexibleCheckbox').toggleClass('active');
                            $(".range-picker-wrap").show();
                        })
                        .catch(function () {
                            if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) {
                                //var availableDatesForCalender = res.filter(x => x.departure == localStorage.from_flight_search && x.arrival == localStorage.to_flight_search).flatMap(x => x.jsonData.dates);
                                localStorage.calender_available_dates = '';
                               
                                this.initOneWayDatePicker();
                            }
                            if ($('#return').hasClass('active')) {
                                localStorage.availableDatesForCalender = '';
                                this.initDepartureDatePicker();
                                localStorage.availableDatesForCalenderRT = '';
                               
                                this.initReturnDatePicker();
                            }
                            //$('.isFlexibleCheckbox').toggleClass('active');
                            $(".range-picker-wrap").show();
                        });
                   
                }



                //if ($("#to_termsApplyModal_Body").hasClass('active') == false) {

                if ($(this).parents('.sub-panel-data').find('input[tabindex="' + nextTabIndex + '"]').hasClass('datepicker')) {

                    if ($('input[tabindex="' + nextTabIndex + '"]').parents('.group-field-wrap').find('.range-picker-wrap').hasClass('active')) {
                        $('input[tabindex="' + nextTabIndex + '"]').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
                        $('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-group').removeClass('show-popup')
                    }
                    $('input[tabindex="' + nextTabIndex + '"]').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
                    $('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-group').addClass('show-popup');
                    //$('.isFlexibleCheckbox').toggleClass('active');
                    //$(".range-picker-wrap").hide();
                }
                //}


                if ($(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').hasClass('single-date-picker')
                    || $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').hasClass('flight-status-datepicker') || $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').hasClass('single-date-picker-schedule')) {

                    if ($(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-single').find('.range-picker-wrap').hasClass('active')) {
                        $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-single').find('.range-picker-wrap').removeClass('active');
                        $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-single').removeClass('show-popup');
                    }

                    $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-single').find('.range-picker-wrap').addClass('active');
                    $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-single').parents('.group-field').removeClass('hidden');
                    $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').parents('.daterangepicker-single').addClass('show-popup');
                    $(this).parents('.form-wrap').find('input[tabindex="' + nextTabIndex + '"]').focus().trigger('click');
                    $(".range-picker-wrap").hide();
                }

                //Calendar Dates




            }).on('click', function () {
                $('.dropdown-toggle + .dropdown-menu').removeClass('show');
                $('.range-picker-wrap').removeClass('active');
                $(this).parents('.locations').addClass('show-popup');
            }).on('keyup', function (obj) {
                if (viewportWidth > 991) {
                    $(".tt-dataset-airports-list").find(".Typeahead-selectable").filter('[data-code=MNL]').detach();
                    if (((($(this).siblings(".tt-menu").find(".country-title").text().toLowerCase()).indexOf($(this).val().toLowerCase()) >= 0))
                        || (
                            ($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code"))
                            && (($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code")).indexOf($(this).val().toUpperCase()) >= 0))) {
                        datacodeCount = 0;
                        textCount = 0;
                        var matchedelment = "";
                        $($(this).siblings(".tt-menu").find(".Typeahead-selectable")).each(function (i, e) {
                            if (($(this).siblings(".tt-menu").find(".country-title").text().toLowerCase().indexOf($(this).val().toLowerCase()) >= 0)) {
                                textCount++;
                                matchedelment = $(this).closest(".Typeahead-suggestion").attr('data-code');
                            }

                        });
                        if (textCount == 0) {
                            $($(this).siblings(".tt-menu").find(".country-title")).each(function (i, e) {
                                if (($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code")) && ($(this).siblings(".tt-menu").find(".Typeahead-selectable").attr("data-code").indexOf($(this).val().toUpperCase()) >= 0)) {
                                    datacodeCount++;
                                    matchedelment = $(this).closest(".Typeahead-suggestion").attr('data-code');
                                }
                            });

                        }
                        if (textCount == 1 || datacodeCount == 1) {
                            $(this).blur();
                            $(this).siblings(".tt-menu").find(".Typeahead-selectable").filter('[data-code=' + matchedelment + ']').trigger('click');
                            $('#' + obj.target.id).attr('data-selected', matchedelment);
                        }
                    }
                }
            });
        if (searchControlStringMatched) {
            $((dropdown)[1]).parent().next().trigger('click')
            searchControlStringMatched = false;
        }
        $(dropdown).focus().parents('.locations').addClass('show-popup');

    },

    getToken: function () {

        if (Allcookies.includes("agent_dashboardCookie")) {
            var AgentCookie = getCookie('agent_dashboardCookie');
            settings.token = AgentCookie;
            stationAndMarket.AgentDetails();
            // have cookie
        } else {
            //no cookie
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", settings.middleWareUrl + "/api/nsk/v1/token", false);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send();

            var response={
                "data": {
                    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkb3RSRVogQVBJIiwianRpIjoiZDgyZmUyYjYtZDY4OS05OTg4LTc5M2MtNGM2ZjM0MDQxMWQ2IiwiaXNzIjoiZG90UkVaIEFQSSJ9.rirB1ohC18caSLOpybT8vnUXFTQU6BuvyERX8IY2VaU",
                    "idleTimeoutInMinutes": 15
                },
                "metadata": {
                    "documentation_url": "http://developer.navitaire.com/documentation/dotrezapi/nsktoken"
                }
            }
            // var response = JSON.parse(xhttp.responseText);
            settings.token = response.data.token;
        }

    },
    //getToken: function () {
    //    $.ajax({
    //        url: settings.middleWareUrl + "/api/nsk/v1/token",
    //        async: true,
    //        headers: {
    //            'Accept': 'application/json',
    //            'Content-Type': 'application/json',
    //        },
    //        type: "POST",
    //        success: function (data, textStatus, XMLHttpRequest) {
    //            var http = JSON.stringify(data);
    //            var https = JSON.parse(http);
    //            settings.token = https.data.token;
    //            settings.token = https.data.token;

    //        }, error: function (textStatus, errorThrown) {
    //        },
    //        timeout: 300
    //    });
    //},

    getMiddlewareStationList: function () {
        fetch(settings.middleWareDomainUrl + "/api/jz/v1/AvailableStations", {
            method: 'get',
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(res => res.json())
            .then(function (res) {
                for (var i = 0; i < res.length; i++) {
                    var item = res[i];
                    middlewareSectorList.push({
                        'stationCode': item.stationcode,
                        'stationName': item.stationName,
                        'countryName': item.countryName,
                        'cityArabicName': item.stationCityArabicName,
                        'countryArabicName': item.countryArabicName,
                        'markets': item.markets
                    });

                }
            })
    },
    AgentDetails: function () {

        fetch(settings.middleWareDomainUrl + "/api/jz/v1/Token", {
            method: 'get',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': settings.token,
                //'Authorization': "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkb3RSRVogQVBJIiwianRpIjoiNjExYjZiZDEtNTZhNi05YTI1LWRkNTItMDQxMmVlYWZkZmM5IiwiaXNzIjoiZG90UkVaIEFQSSJ9.3z4ycz6Pv0C_eomydj4GeVQEYTNZXh5nSxEHY-OcyIE",
            },
            credentials: 'omit',
        })
            .then(res => res.json())
            .then(function (res) {
                if (!res.errors) {

                    var organizationCode = res.data.identity.organization;
                    var Userkey = res.data.identity.userKey;
                    fetch(settings.middleWareDomainUrl + "/api/Agent/v1/UserPersonDetails?userKey=" + Userkey, {
                        method: 'get',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': settings.token,
                        },
                        credentials: 'omit',
                    })
                        .then(res => res.json())
                        .then(function (res) {
                            var AgentId = "";
                            if (res.userDetails) {
                                AgentId = res.userDetails.data.users.username;
                            }
                            $('.header-inner  .agent-id').append('<a><img src="/HeaderIcons/ID.png" width="50" height="20"/><b>' + AgentId + '</b></a>');
                            $('.mobile-agent-menu .agent-id').append('<a><img src="/HeaderIcons/ID.png" width="20" height="20" /><b>' + AgentId + '</b></a>');
                        })
                    fetch(settings.middleWareDomainUrl + "/api/Agent/v1/AgencyCreditDetails?OrganizationCode=" + organizationCode, {
                        method: 'get',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': settings.token,
                        },
                        credentials: 'omit',
                    })
                        .then(res => res.json())
                        .then(function (res) {
                            var AgencyCreditDetails = "";
                            if (res.data != undefined && res.data.organizations2Account != undefined) {
                                AgencyCreditDetails = res.data.organizations2Account.currencyCode + " " + res.data.organizations2Account.totalAvailable;
                            }
                            else {
                                AgencyCreditDetails = "0.00";

                            }
                            //var CreditValue = '<style>, .mobile-agent-menu .agency-credit a{content:"' + AgencyCreditDetails + '"!important;transform:scaleX(1);background: none;}</style>';
                            //$('body').append(CreditValue);
                            $('.header-inner .agency-credit').append('<a><img src="/HeaderIcons/Wallet.png" width="20" height="20" /><b>' + AgencyCreditDetails + '</b></a>');
                            $('.mobile-agent-menu .agency-credit').append('<a><img src="/HeaderIcons/Wallet.png" width="20" height="20" /><b>' + AgencyCreditDetails + '</b></a>');
                        })
                    fetch(settings.middleWareDomainUrl + "/api/Agent/v1/GetOrganizationDetails?OrganizationCode=" + organizationCode, {
                        method: 'get',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': settings.token,
                        },
                        credentials: 'omit',
                    })
                        .then(res => res.json())
                        .then(function (res) {
                            var length = 12;
                            var AgencyName = res.data.organization2.company.name;
                            var trimmedAgencyName = "";
                            if (AgencyName.length > 12) {
                                var trimmedAgencyName = AgencyName.substring(0, length) + "...";
                            } else { trimmedAgencyName = AgencyName; }
                            $('.header-inner .top-nav span').append('<b>' + trimmedAgencyName + '</b>');
                            $('.mobile-agent-menu span').append('<b>' + AgencyName + '</b>');
                        })

                }
                else {
                    $('.logout-message').modal('show');
                }
            })



    }
}
this.stationAndMarket.init();
$(document).ready(function () {
    //$.ajax({
    //    url: '/Umbraco/Surface/ContactUs/RenderFeaturedDealsSection',
    //    async: false,
    //    success: function (json) {
    //        if (json != "") {
    //            $(".flight-deals").empty();
    //            $(".flight-deals").html(json);
    //        }

    //    },
    //    error: function (ex) {
    //        console.log('Failed to retrieve' + ex);
    //    }
    //});
    $('.calendar-date-picker').on("click", function () {
        localStorage.multicityId = "departure_flight_search_muticity1"
    })
    $('.calendar-date-picker2').on("click", function () {
        localStorage.multicityId = "departure_flight_search_oneway"
    })
    $('.calendar-date-picker1').on("click", function () {
        localStorage.multicityId = "departure_flight_search_muticity2"
    })
    $("#departure_flight_search").on('click', () => {
        firstdateselected = false;
        setTimeout(() => {
            bindlowfare().then(() => {
                $('.next,.prev').on('click', function () {
                    bindlowfare()
                })
            });
        }, 200)
    })
    $("#return_flight_search").on('click', () => {
        setTimeout(() => {
            firstdateselected = true;
            bindlowfare().then(() => {
                $('.next,.prev').on('click', function () {
                    bindlowfare()
                })
            });
        }, 200)
    })
    //$("#to_flight_search_oneway, #to_flight_search, #to_flight_search_muticity1, #to_flight_search_muticity2").on('blur', () => {
    //    debugger
    //    setTimeout(() => {
    //        bindlowfare().then(() => {
    //            $('.next,.prev').on('click', function () {
    //                bindlowfare()
    //            })
    //        });
    //    }, 200)
    //})
    getPaxTypes();
})
function fixRangeSelection() {
    $('.month-wrapper').find('table .day.nextMonth, table .day.lastMonth').parent().addClass('invalid-date-td');
    $('.month-wrapper').find('table .first-date-selected.checked.lastMonth').parent().removeClass('first-date-selected-td');
    $('.month-wrapper').find('table .last-date-selected.checked.lastMonth').parent().removeClass('last-date-selected-td');
}
function initOneWayDatePicker() {
    var defaultStartDate = new Date();
    //var currentIdDom = "#departure_flight_search_oneway";
    //var contanerID = currentIdDom + '_range_picker';
    var currentId = localStorage.multicityId;
    var contanerID = '#' + currentId + '_range_picker';
    var currentIdDom = '#' + currentId
    if (contanerID === '#departure_flight_search_muticity2_range_picker' & currentIdDom === '#departure_flight_search_muticity2') {
        if ($("#departure_flight_search_muticity1").val() != null && $("#departure_flight_search_muticity1").val() != undefined && $("#departure_flight_search_muticity1").val() != "")
            defaultStartDate = new Date($("#departure_flight_search_muticity1").val());
    }

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

    const dp = $(currentIdDom).data('dateRangePicker');
    if (dp) {
        dp.destroy();
    }
    $(currentIdDom).dateRangePicker({
        format: 'ddd MMM DD YYYY',
        inline: true,
        stickyMonths: true,
        container: contanerID,
        showTopbar: false,
        singleDate: true,
        async: true,
        startDate: defaultStartDate,
        hoveringTooltip: false,
        //singleMonth: window.screen.availWidth < 426 ? true : false,
        singleMonth: false,
        alwaysOpen: true,
        customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
        customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>',

        beforeShowDay: function (date) {
            //if (localStorage.IsAPIWorking == 'true') {
            //if (IsDohopStation) { return [true, '', ''] }
            if (localStorage.calender_available_dates == undefined && localStorage.calender_available_dates.length == 0) { return [false, '', ''] }
            let isValidDate = true;
            if ((localStorage.calender_available_dates) ? !localStorage.calender_available_dates.split(',').find(x => {
                let date1 = new Date(x);
                let date2 = new Date(date);
                return date1.getDate() == date2.getDate() && date1.getMonth() == date2.getMonth() && date1.getFullYear() == date2.getFullYear();
            }) : false) {
                isValidDate = false;
            } else {
            }
            return [isValidDate, '', '']
            //return [isValidDate, '', '']
            //}
            //else {
            //    return [true, '', '']
            //}
        },
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

        $(this).parents('.form-wrap').nextAll().find('.single-date-picker').val('');
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



    })
    $(currentIdDom).data('dateRangePicker').setStart(moment(defaultStartDate).format("ddd MMM DD YYYY"));

}

function initDepartureDatePicker() {
    const dp = $('#departure_flight_search').data('dateRangePicker');
    if (dp) {
        dp.destroy();
    }
    /*departure flight date picker*/
    if ($('#departure_flight_search').length) {
        $('#departure_flight_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#departure_flight_date_range',
            showTopbar: false,
            singleDate: true,
            startDate: new Date(),
            hoveringTooltip: false,
            //singleMonth: window.screen.availWidth < 426 ? true : false,
            singleMonth: false,
            alwaysOpen: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>',
            beforeShowDay: function (date) {
                //if (localStorage.IsAPIWorking == 'true') {
                //if (IsDohopStation) { return [true, '', ''] }
                if (localStorage.availableDatesForCalender == undefined && localStorage.availableDatesForCalender.length == 0) { return [false, '', ''] }
                let isValidDate = true;
                if (localStorage.availableDatesForCalender ? !localStorage.availableDatesForCalender.split(',').find(x => {
                    let date1 = new Date(x);
                    let date2 = new Date(date);
                    return date1.getDate() == date2.getDate() && date1.getMonth() == date2.getMonth() && date1.getFullYear() == date2.getFullYear();
                }) : false) {
                    isValidDate = false;
                } else {
                }
                return [isValidDate, '', '']
                //return [isValidDate, '', '']
                //}
                //else {
                //    return [true, '', '']
                //}
            }
        }).bind('datepicker-change', function (evt, obj) {
            $('#departure_flight_search').val(obj.value);
            if (obj.value != null || obj.value != "") {
                $('#departure_flight_search-error').hide();
                $('#departure_flight_search').parent('.form-field').removeClass('has-error');
                //var departure_date = moment(new Date(obj.value)).format("ddd MMM DD YYYY");
            }
            $('#departure_flight_search').parent('.form-field').addClass('populated');

            $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('#return_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
            $('.isFlexibleCheckbox').toggleClass('active');
            //if ($('#return_flight_search').val(obj.value).hasClass('valid')) {
            $('#return_flight_search').data('dateRangePicker').setStart(obj.value);
            //}
            $('#return_flight_search').parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');

            var new_date = moment(new Date(obj.value), "ddd MMM DD YYYY").add(7, 'days');
            var udpatedDate = moment(new_date._d).format("ddd MMM DD YYYY");

            $('#return_flight_search').parents('.group-field-wrap').find('.float-label-wrapper').removeClass('populated');

            // if($('#return_flight_search').val() == ''){
            $('#return_flight_search').val(udpatedDate);
            //$('#return_flight_search').data('dateRangePicker').setEnd(udpatedDate);
            // }

            $('#departure_flight_search').trigger('change');

            fixRangeSelection();
            checkFlightLocationInputStatus();



        }).bind('datepicker-closed', function (evt, obj) {
            $('#departure_flight_search').trigger('change');
        }).bind('datepicker-first-date-selected', function (evt, obj) {
            //initReturnDatePicker();
            firstdateselected = true;
            //bindlowfare();
            $("#return_flight_search").focus();
            fixRangeSelection();
            //firstdateselected = true;
            //bindlowfare().then(() => {
            //    $("#return_flight_search").focus();
            //    fixRangeSelection();
            //}).catch(() => {
            //    $("#return_flight_search").focus();
            //    fixRangeSelection();
            //});
        }).click(function (evt) {

            evt.stopPropagation();
            $('.dropdown-toggle + .dropdown-menu').removeClass('show');

            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
                $('.isFlexibleCheckbox').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
                $('.isFlexibleCheckbox').addClass('active');
            }

            $('#return_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            //$('.isFlexibleCheckbox').removeClass('active');

            $(this).parents('.daterangepicker-group').addClass('show-popup');

            checkFlightLocationInputStatus();

        })
    }
}
function getlowfarescalender() {
    if ($('#one-way').hasClass('active') || $('#multi-city').hasClass('active')) var Type = 'oneway';
    if ($('#return').hasClass('active')) var Type = 'Round';
    return new Promise((resolve, reject) => {
        fetch(settings.middleWareDomainUrl + "/api/jz/v1/LowfareData?Origin=" + localStorage.from_flight_search + "&Destination=" + localStorage.to_flight_search + "&TripType=" + Type, {
            method: 'get',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': settings.token,
            },
        })
            .then(res => resolve(res.json()))
    })
}
function formatCurrency(number, decPlaces = 2, decSep, thouSep) {
    decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
        decSep = typeof decSep === "undefined" ? "." : decSep;
    thouSep = typeof thouSep === "undefined" ? "," : thouSep;
    var sign = number < 0 ? "-" : "";
    var i = String(parseInt(number = Math.abs(Number(number) || 0).toFixed(decPlaces)));
    var j = (j = i.length) > 3 ? j % 3 : 0;

    return sign +
        (j ? i.substr(0, j) + thouSep : "") +
        i.substr(j).replace(/(\decSep{3})(?=\decSep)/g, "$1" + thouSep) +
        (decPlaces ? decSep + Math.abs(number - i).toFixed(decPlaces).slice(2) : "");
}
function removeTime(date = new Date()) {
    return new Date(
        date.getFullYear(),
        date.getMonth(),
        date.getDate()
    );
}
function bindlowfare() {
    return new Promise((resolve, reject) => {
        //getlowfarescalender().then((res) => {
        //$(".fares_datepicker").css("display", "none");
        //lowfarecalenderres = res;
        lowfarecalenderres = null;
        if (!firstdateselected) {
            setTimeout(() => {
                $('.date-price').remove();
                //if (res != null && res != undefined && res != "") {
                //    $(".fares_datepicker").css("display", "block");
                //    $('.Low_Currency_Code').text(lowfarecalenderres[0].data[0].currencyCode);
                //}
                var realdates = document.getElementsByClassName('toMonth valid');
                Array.from(realdates).forEach(el => {
                    let el2 = document.createElement('span');
                    let elTime = new Date(moment(new Date(+el.getAttribute('time'))));
                    var newdate = removeTime(elTime);
                    //if (elTime > (new Date().getDate() + 1)) {
                    if (lowfarecalenderres != null && lowfarecalenderres.length) {
                        var prices = lowfarecalenderres[0].data[0].fares.find(tt => removeTime(new Date(tt.key)).toString() == newdate.toString())?.value || '';
                        el2.innerText = prices ? Math.round(prices).toLocaleString("en-US") : '';
                        el2.classList.add('date-price');
                        el.append(el2);
                    }
                    //}
                });
            }, 100)
        }
        if ($('#return').hasClass('active') && firstdateselected) {
            setTimeout(() => {
                $('.date-price').remove();
                //if (res != null && res != undefined && res != "") {
                //    $(".fares_datepicker").css("display", "block");
                //    $('.Low_Currency_Code').text(lowfarecalenderres[0].data[0].currencyCode);
                //}
                var realdates = document.getElementsByClassName('toMonth valid');
                Array.from(realdates).forEach(el => {
                    let el2 = document.createElement('span');
                    let elTime = new Date(moment(new Date(+el.getAttribute('time'))));
                    var newdate = removeTime(elTime);
                    //if (elTime > (new Date().getDate() + 1)) {
                    if (lowfarecalenderres != null && lowfarecalenderres.length) {
                        var prices = lowfarecalenderres[0].data[1].fares.find(tt => removeTime(new Date(tt.key)).toString() == newdate.toString())?.value || '';
                        el2.innerText = prices ? Math.round(prices).toLocaleString("en-US") : '';
                        el2.classList.add('date-price');
                        el.append(el2);
                    }
                    //}
                });
                firstdateselected = false;
                this.initDepartureDatePicker();
            }, 100)
        }
        resolve();
        //}).catch(() => reject());
    })
}
function initReturnDatePicker() {
    /*return flight date picker*/
    //var departure_formated_date = moment(new Date($('#departure_flight_search').val())).format("YYYY-MM-DD");
    const dp2 = $('#return_flight_search').data('dateRangePicker');
    if (dp2) {
        dp2.destroy();
    }
    if ($('#return_flight_search').length) {
        $('#return_flight_search').dateRangePicker({
            format: 'ddd MMM DD YYYY',
            inline: true,
            stickyMonths: true,
            container: '#return_flight_date_range',
            showTopbar: false,
            hoveringTooltip: false,
            //singleMonth: window.screen.availWidth < 426 ? true : false,
            singleMonth: false,
            alwaysOpen: true,
            startDate: new Date(),
            selectForward: true,
            customArrowPrevSymbol: '<i class="icon icon-arrow-down"></i>',
            customArrowNextSymbol: '<i class="icon icon-arrow-up"></i>',
            beforeShowDay: function (date) {
                //var isValidDate = true;
                //var lowPrice = '';
                //if (lowfarecalenderres?.length && lowfarecalenderres[0].data[0].fares && lowfarecalenderres[0].data[0].fares.length > 0) {
                //    var data = lowfarecalenderres[0].data[0].fares.filter(t => moment(date).format('L') == moment(t.key).format('L'))
                //    if (data && data.length > 0) {
                //        var currencyCode = lowfarecalenderres[0].data[0].currencyCode;
                //        lowPrice = currencyCode + " " + formatCurrency(data[0].value, (currencyCode == 'KWD' || currencyCode == 'BHD') ? 3 : 2);
                //    } else {
                //        isValidDate = false;
                //    }
                //}
                //return [isValidDate, '', '', lowPrice]
                //if (localStorage.IsAPIWorking == 'true') {

                //if (IsDohopStation) { return [true, '', ''] }
                if (localStorage.availableDatesForCalenderRT == undefined && localStorage.availableDatesForCalenderRT.length == 0) { return [false, '', ''] }
                let isValidDate = true;
                if (localStorage.availableDatesForCalenderRT ? !localStorage.availableDatesForCalenderRT.split(',').find(x => {
                    let date1 = new Date(x);
                    let date2 = new Date(date);
                    return date1.getDate() == date2.getDate() && date1.getMonth() == date2.getMonth() && date1.getFullYear() == date2.getFullYear();
                }) : false) {
                    isValidDate = false;
                } else {
                }
                return [isValidDate, '', '']
                //return [isValidDate, '', '']

                //}
                //else {
                //    return [true, '', '']
                //}
            },

        }).bind('datepicker-change', function (evt, obj) {
            //$('#departure_flight_search').data('dateRangePicker').redraw(obj.month1, obj.month2);
            $('#departure_flight_search').data('dateRangePicker').setDateRange(obj.date1, obj.date2, true);

            $(this).parents('.group-field-wrap').find('.float-label-wrapper').addClass('populated');

            //Departure and Return date updating on check-in and out fields.
            var departure_formated_date = moment(new Date(obj.date1)).format("ddd MMM DD YYYY");
            var return_formated_date = moment(new Date(obj.date2)).format("ddd MMM DD YYYY");
            $('#checkin_hotel_search').val(departure_formated_date);
            $('#checkout_hotel_search').val(return_formated_date);

            //Updating the new dates on fields.
            $('#departure_flight_search').val(departure_formated_date);
            $('#return_flight_search').val(return_formated_date);
            if ($('#return_flight_search').val(return_formated_date) != null || $('#return_flight_search').val(return_formated_date) != "") {
                $('#return_flight_search-error').hide();
                $('#return_flight_search').parent('.form-field').removeClass('has-error');
            }
            fixRangeSelection();
            checkFlightLocationInputStatus();

            //Triggering changes on fields and hiding popup.
            $('#return_flight_search').trigger('change');
            $('#return_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');
            $('.isFlexibleCheckbox').removeClass('active');
            $('#return_flight_search').parents('.daterangepicker-group').removeClass('show-popup');

            //Changing focus to next field.
            if ($('#departure_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').hasClass('active') == false) {
                $('#passengers_flight_search').focus();

                if (!navigator.userAgent.match(/iPad|iPhone|Android|BlackBerry|Windows Phone|webOS/i)) {
                    $('#passengers_flight_search').next('.dropdown-menu').toggleClass('show');
                }
            }

            $('#return_flight_search').data('dateRangePicker').close();

        }).bind('datepicker-first-date-selected', function (evt, obj) {
            //firstdateselected = true;
            //bindlowfare();
            fixRangeSelection();

        }).bind('datepicker-closed', function (evt, obj) {


        }).click(function (evt) {
            evt.stopPropagation();

            $('.dropdown-toggle + .dropdown-menu').removeClass('show');
            $('#departure_flight_search').parents('.group-field-wrap').find('.range-picker-wrap').removeClass('active');

            if (viewportWidth > 991) {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').toggleClass('active');
                $('.isFlexibleCheckbox').toggleClass('active');
            } else {
                $(this).parents('.group-field-wrap').find('.range-picker-wrap').addClass('active');
                $('.isFlexibleCheckbox').addClass('active');
            }

            var departure_formated_date = moment(new Date($('#departure_flight_search').val())).format("ddd MMM DD YYYY");
            var return_flight_search = moment(new Date($('#return_flight_search').val())).format("ddd MMM DD YYYY");
            if (departure_formated_date != 'Invalid date') {
                $('#return_flight_search').data('dateRangePicker').setStart(departure_formated_date);
            }

            $(this).parents('.daterangepicker-group').addClass('show-popup');
            fixRangeSelection();
            checkFlightLocationInputStatus();
            $('.isFlexibleCheckbox').removeClass('active');



        });
    }

    /*return flight date picker*/
}

var validatePromoCode = {
    init: function (elem, code) {
        this.validateCode(elem, code.toUpperCase());
    },

    validateCode: function (elem, code) {
        const promoCodeGraphQAParams = `query promoCodeValidate {
        promotionValidate(promotionCode: "${code}")
      }`;

        fetch(settings.graphApiUrl + "/api/v1/Graph", {
            method: 'post',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': settings.token,
            },
            body: JSON.stringify({ query: promoCodeGraphQAParams }),
            credentials: 'omit',
        })
            .then(res => res.json())
            .then(function (res) {
                //console.log(res.data.promotionValidate);
                //promoCodeStatus = res.data.promotionValidate;
                if (res.data && res.data.promotionValidate) {
                    $(elem).parent().find('.validate.success').show();
                    $(elem).parent().find('.validate.error').hide();
                    $(elem).parent().find('.validate.loading').hide();
                    //$(elem).parents('form').find('.btn-wrap button').removeClass('disabled');
                    $(elem).parents('form').find('.btn-wrap .btn').removeAttr("disabled");
                    $(elem).parents('form').find(".promocode-message").hide();
                } else {
                    $(elem).parent().find('.validate.success').hide();
                    $(elem).parent().find('.validate.error').show();
                    $(elem).parent().find('.validate.loading').hide();
                    //$(elem).parents('form').find('.btn-wrap button').addClass('disabled');

                    $(elem).parents('form').find('.btn-wrap .btn').attr("disabled", "true");

                    $(elem).parents('form').find(".promocode-message").show();
                    return false;
                }
            });
    }
}
$('.promo-info input').keyup(function (e) {
    ValidatePromoCodeLogic($(this));
});

$('.promo-info input').blur(function () {
    ValidatePromoCodeLogic($(this));
});

function ValidatePromoCodeLogic(el) {

    if ($(el).val().length == 0) {
        $(el).parents('.promo-info').removeClass('show');
        $(el).parents('.promo-info').prev('.add-promo').removeClass('hide');
        $(el).parents('form').find('.btn-wrap .btn').removeAttr('disabled');
        $(el).parents('form').find(".promocode-message").hide();
        $(el).parent().find('.validate.error').hide();
        return true;
    }

    if ($(el).val().length != 0 && $(el).val().length >= 2) {
        name = $(el).val();
        name = name.replace(/[^a-zA-Z 0-9.]+/g, '');
        $(el).val(name);
        $(el).parent().find('.validate').hide();
        $(el).parent().find('.validate.loading').show();
        validatePromoCode.init($(el), $(el).val());
    } else {

        //$(el).parents('form').find('.btn-wrap button').removeClass('disabled');

        $(el).parent().find('.validate.success').hide();
        $(el).parent().find('.validate.error').show();
        $(el).parent().find('.validate.loading').hide();
        //$(el).parents('form').find('.btn-wrap button').addClass('disabled');


        $(el).parents('form').find('.btn-wrap .btn').attr("disabled", "true");

        $(el).parents('form').find(".promocode-message").show();
        return false;

    }


}

function SortByStationName(a, b) {
    var aName = a.name.toLowerCase();
    var bName = b.name.toLowerCase();
    return ((aName < bName) ? -1 : ((aName > bName) ? 1 : 0));
}

function SortByShortName(a, b) {
    var aName = a.shortName.toLowerCase();
    var bName = b.shortName.toLowerCase();
    return ((aName < bName) ? -1 : ((aName > bName) ? 1 : 0));
}

function wordInString(s, word) {
    return new RegExp('\\b' + word + '\\b', 'i').test(s);
}
function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(Allcookies); //to be careful
    const cArr = cDecoded.split('; ');
    let res;
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    return res
}