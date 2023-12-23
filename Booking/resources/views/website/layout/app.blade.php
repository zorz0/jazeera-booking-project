<!DOCTYPE html>
<html>
<head>

    <title> طيران الجزيرة</title>
    <meta name="description"  content="x" />
    <meta http-equiv="x-ua-compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        dataLayer = [{ 'userType': document.cookie.includes("agent_dashboardCookie") ? 'agent' : document.cookie.includes("loggedInUser") ? 'member' : 'guest', 'language': window.location.href.indexOf('/ar-') > 0 ? 'ar' : 'en' }];
    </script>
    <script>
        var cultureData = "ar-jo";
        var apiURL = "https://j9api.jazeeraairways.com";
        var ipServiceURL = "https://extreme-ip-lookup.com/";
        var basePortalURL = "https://booking.jazeeraairways.com/ar/search-flight";
        var basePortalUrlWithoutSearchFlight = "https://booking.jazeeraairways.com/ar";
        var arabicOrEnglish = "ar";
        var Allcookies = document.cookie;
        var Js_PNRNumber = "";
        var Js_EmailOrLastName = "";
        var Js_CountryCityDistrictOrLandmark = "Js_CountryCityDistrictOrLandmark";
        var taFromPopupStationCodes = "BAH || NJF || JED || RUH";
        var taToPopupStationCodes = "BAH || JED || RUH || DXB";
        var taToDirectPopupStationCodes = "HYD || AMD || ATQ || BLR || BBI || CCJ || MAA || COK || DEL || GAY || GAU || JAI || CNN || CCU || LKO || IXE || BOM || PAT || TRZ || TRV || VGA || VTZ|| LHE|| KHI || DXB|| DOH||MCT||JED||RUH||DMM||AMM||DAC||KTM||ADD|| CMB || KWI || TIF || MED|| AHB || RUH";
        var taFromDirectPopupStationCodes = "HYD || AMD || ATQ || BLR || BBI || CCJ || MAA || COK || DEL || GAY || GAU || JAI || CNN || CCU || LKO || IXE || BOM || PAT || TRZ || TRV || VGA || VTZ|| LHE|| KHI || DXB|| DOH||MCT||JED||RUH||DMM||AMM||DAC||KTM||ADD|| CMB || KWI || TIF || MED ||LHR||LGW||SJJ||TAS||FRU";

        var Js_DepartureDate = "&#x64A;&#x631;&#x62C;&#x649; &#x62A;&#x62D;&#x62F;&#x64A;&#x62F; &#x62A;&#x627;&#x631;&#x64A;&#x62E; &#x627;&#x644;&#x645;&#x63A;&#x627;&#x62F;&#x631;&#x629;";
        var Js_ReturnDate = "&#x64A;&#x631;&#x62C;&#x649; &#x62A;&#x62D;&#x62F;&#x64A;&#x62F; &#x62A;&#x627;&#x631;&#x64A;&#x62E; &#x627;&#x644;&#x639;&#x648;&#x62F;&#x629;";
        var Js_Nationality = "&#x627;&#x644;&#x631;&#x62C;&#x627;&#x621; &#x627;&#x62E;&#x62A;&#x64A;&#x627;&#x631; &#x627;&#x644;&#x62C;&#x646;&#x633;&#x64A;&#x629;";
        var Js_NameAsOnPassport = "&#x623;&#x62F;&#x62E;&#x644; &#x627;&#x644;&#x627;&#x633;&#x645; &#x643;&#x645;&#x627; &#x647;&#x648; &#x645;&#x628;&#x64A;&#x646; &#x641;&#x64A; &#x62C;&#x648;&#x627;&#x632; &#x633;&#x641;&#x631;&#x643;";
        var Js_MobileNumber = "&#x64A;&#x631;&#x62C;&#x649; &#x62A;&#x62D;&#x62F;&#x64A;&#x62F; &#x62A;&#x627;&#x631;&#x64A;&#x62E; &#x627;&#x644;&#x639;&#x648;&#x62F;&#x629;";
        var Js_StreetAddress = "&#x627;&#x644;&#x631;&#x62C;&#x627;&#x621; &#x625;&#x62F;&#x62E;&#x627;&#x644; &#x639;&#x646;&#x648;&#x627;&#x646; &#x627;&#x644;&#x634;&#x627;&#x631;&#x639;";
        var Js_TownorCity = "&#x627;&#x644;&#x631;&#x62C;&#x627;&#x621; &#x625;&#x62F;&#x62E;&#x627;&#x644; &#x627;&#x644;&#x645;&#x62F;&#x64A;&#x646;&#x629; &#x623;&#x648; &#x627;&#x644;&#x645;&#x62F;&#x64A;&#x646;&#x629;";
        var Js_CountryRegion = "&#x627;&#x644;&#x631;&#x62C;&#x627;&#x621; &#x625;&#x62F;&#x62E;&#x627;&#x644; &#x627;&#x644;&#x628;&#x644;&#x62F; / &#x627;&#x644;&#x645;&#x646;&#x637;&#x642;&#x629;";
        var Js_ZipPostal = "&#x627;&#x644;&#x631;&#x62C;&#x627;&#x621; &#x625;&#x62F;&#x62E;&#x627;&#x644; &#x627;&#x644;&#x631;&#x645;&#x632; &#x627;&#x644;&#x628;&#x631;&#x64A;&#x62F;&#x64A;";
        //var Js_CardNumber = "Js_CardNumber";
        // var Js_CardHolderName = "Js_CardHolderName";
        //var Js_NameAsOnCard = "Js_NameAsOnCard";
        //var Js_CardHolderCountry = "Js_CardHolderCountry";
        // var Js_CardHolderRelationshipToTraveller = "Js_CardHolderRelationshipToTraveller";
        //var Js_ExpirationDate = "Js_ExpirationDate";
        var Js_CVV = "Js_CVV";
        var Js_VoucherNumber = "Js_VoucherNumber";
        var Js_FromLocation = "Js_FromLocation";
        var Js_DestinationFlight = "&#x627;&#x644;&#x631;&#x62C;&#x627;&#x621; &#x62A;&#x62D;&#x62F;&#x64A;&#x62F; &#x631;&#x62D;&#x644;&#x629; &#x627;&#x644;&#x648;&#x62C;&#x647;&#x629;";
        var Js_PassengersDetails = "Js_PassengersDetails";
        var JS_PassangerCantBeMoreThan9 = "JS_PassangerCantBeMoreThan9";
        var Js_PromoCode = "promocode";
        var Js_PromoCodeValidFrom = "promocode_validfrom";
        var Js_PromoCodeValidTo = "promocode_validTo";
        var Js_UseAlternativeLogo = "SettingsKeyInfoProvider.GetValue(Constants.SettingKeyNames.UseAlternateLogo)";

    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/style-arabic.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/J9FavIcon.ico')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('images/J9FavIcon.ico')}}">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/style-root.min.css">
    <link rel="stylesheet" href="/css/styles.min-20190416.css">
    <link rel="stylesheet" href="/css/styles.min-20190507.css">
    <link rel="stylesheet" href="/css/styles.min-20190510.css">
    <link rel="stylesheet" href="/css/flag-icons.css">
    <link rel="stylesheet" href="/css/styles-custom.css">





    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script src="/javascript/plugins.min.js"></script>
    <script src="/javascript/app.js"></script>
    <script src="/javascript/api.js"></script>
    <script src="/javascript/jquery.floatlabel.js"></script>
    <script src="/javascript/jquery.placeholder.js"></script>
    <script src="/javascript/select2.js"></script>
    <script src="/javascript/international-telephone-input.js"></script>
    <script src="/javascript/tooltip.js"></script>
    <script src="/javascript/fetch.umd.js"></script>
    <script src="/javascript/jquery.matchHeight.js"></script>
    <script src="/javascript/polyfill.min.js"></script>
    <script src="/javascript/jquery.moment.js"></script>
    <script src="/javascript/jquery.fullcalendar.js"></script>
    <script src="/javascript/jquery.validate.js"></script>
    <script src="/javascript/textMaskCore.js"></script>
    <script src="/javascript/jquery.daterangepicker.js"></script>
    <script src="/javascript/slick.js"></script>
    <script src="/javascript/jquery.scrollbar.js"></script>
    <script src="/javascript/typeahead.bundle.js"></script>
    <script src="/javascript/typeahead.jquery.js"></script>
    <script src="/javascript/handlebars.js"></script>
    <script src="/javascript/jquery.easy-autocomplete.js"></script>


    @yield('head')


</head>



<p id="renderingArabicOrEnglish" hidden>ar</p>


<style>
    .user_loged_name {
        position: relative;
        bottom: 10px;
    }

    @media(min-width:992px) {
        .navbar-toggle.toggle-mobile-btns {
            display: none !important;
        }

        .mobile_navigation {
            display: none !important;
        }
    }

    @media(max-width:991px) {
        header .header-inner .main-nav.newly_added_mobile_class {
            display: none !important;
        }

        .desktop_navigation {
            display: none !important;
        }

        header .header-inner .brand.header-logo {
            display: none !important;
        }

        header .header-inner .mobile_header_logo_div .brand.header-logo {
            display: block !important;
        }

        header .header-inner .main-nav>li.active .sub-menu {
            display: flex !important;
        }

        /* .sub-menu.experience-sub-menu.destination-submenu{
            margin:0 !important;
        }*/

        header .header-inner .main-nav .sub-menu {
            position: unset !important;
            display: none;
        }

        .mobile_navigation {
            display: block !important;
        }

        .navbar-toggle.toggle-mobile-btns:focus,
        .navbar-toggle.toggle-mobile-btns:focus-visible {
            outline: unset !important;
        }

        /*.navbar-toggle.toggle-mobile-btns[aria-expanded="true"] {
                position:fixed;
                top:20px;
                right:20px;
                z-index:9999;
                transition: all .45s ease-in-out;
            }*/

        header .mobile-header .mobile-menu-wrap ul.main-nav>li>a:after {
            left: auto;
        }

        .navbar-toggle.toggle-mobile-btns[aria-expanded="true"] .icon-menu,
        .navbar-toggle.toggle-mobile-btns .icon-wrong {
            display: none;
        }

        .navbar-toggle.toggle-mobile-btns[aria-expanded="true"] .icon-wrong {
            color: #ffffff !important;
            /* display:block !important;*/
            background-color: #004A97 !important;
            padding: 5px;
            font-size: 18px;
        }

        .mobile_header_logo.d-flex {
            justify-content: space-between;
            margin-top: 20px;
            align-items: end;
        }

        .navbar-toggle.toggle-mobile-btns {
            border: unset !important;
            background-color: unset !important;
        }

        .mobile_navigation_div {
            width: 35px;
            height: 35px;
        }

        .mobile_header_logo_div .brand.header-logo {
            padding: 0px !important;
            margin: 0px !important;
        }

        header .header-inner .toggle-btns {
            margin-left: auto;
            margin-right: 0px;
            width: fit-content;
            justify-content: end;
        }

        header .header-inner #myNavbar.show .main-nav.newly_added_mobile_class {
            display: block !important;
        }

        #myNavbar.show {
            position: fixed;
            background: #004A97 !important;
            color: #fff;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 999;
            overflow-y: auto;
            display: block !important;
        }

        #myNavbar.show .newly_added_mobile_class {
            display: block !important;
        }

        header .header-inner .main-nav>li {
            color: #ffffff !important;
        }

        header .search-header {
            padding: 15px;
            margin-top: 45px;
        }

        header .header-inner .main-nav>li.has-submenu {
            position: relative;
            display: block;
        }

        header .header-inner .main-nav>li {
            display: block;
        }

        header .mobile-header .mobile-menu-wrap ul.main-nav>li>a:after {
            left: auto !important;
            top: 15px;
        }

        header .search-header .form-field.input-blank .icon+.form-control {
            font-size: 14px;
            max-height: 52px;
            padding-left: 45px;
            border: 1px solid #fff;
            color: #fff;
        }
    }

    /*@media (max-width: 769px) {
            .mobile_header_logo_div {
                display: none;
            }*/

    /*@media (max-width: 769px) {
                .mobile_navigation_div {
                    display: none;
                }*/
    .Savers_Isolation_Mode {
        position: absolute;
        top: 27px;
        width: 46% !important;
        left: 12px;
    }
</style>

@include('website.layout.header')


<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
     "name": "&#x627;&#x644;&#x635;&#x641;&#x62D;&#x629; &#x627;&#x644;&#x631;&#x626;&#x64A;&#x633;&#x64A;&#x629;",
    "item": /;
    },{
    "@type": "ListItem",
    "position": 2,
    "name": "&#x645;&#x633;&#x643;&#x646;"
    }]
    }
</script>
<script type="application/ld+json">
    {  "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Jazeera Airways",
      "url": "https://www.jazeeraairways.com",
      "logo": "https://www.jazeeraairways.com/assets/images/jazeera-logo.svg",
      "sameAs": [  "https://www.facebook.com/Jazeera.Airways/",  "https://www.instagram.com/jazeeraairways/",
      "https://www.linkedin.com/company/jazeera-airways/",  "https://twitter.com/jazeeraairways",  "https://www.youtube.com/channel/UCDZuROfzF_1YPOGjVSdJpLw"  ]  }
</script>
<script>
    $(function () {
        var navMain = $("#myNavbar");
        navMain.on("click", ".close-mobile-header", null, function () {
            navMain.collapse('hide');
        });

    });
    //$(document).ready(function() {
    //       $('.has-submenu').click(function() {
    //            $(this).toggleClass('active');
    //        });
    //    });
</script>
<script>
    function myFunction() {
        var storedSaversData = JSON.parse(sessionStorage.getItem('saveersList'));
        let loggedInUser = "";
        let PartnerPath = "{{ route('home') }}";
        if (!loggedInUser && PartnerPath.includes("/partners")) {
            $('#partnerlogin, #partnerlogin_Mobile').css('display', 'block');
        }
        else if (loggedInUser && loggedInUser.trim() !== "") {
            if (storedSaversData?.actingRole == 'WWWC') {

                $('#saverstrue, #saverstrue_Mobile').css('display', 'block');
                $('#Not_savers, #Not_savers_Mobile').css('display', 'none');
                $('#IfSaversReturn').css('display', 'none');
                $('#IfSaversOneway').css('display', 'none');
                $('#IfSaversMulti').css('display', 'none');
                $('#hidingPromo').css('display', 'none');
                $('#hidingPromo1').css('display', 'none');
                $('#hidingPromo2').css('display', 'none');
            }
            else {

                $('#Not_savers, #Not_savers_Mobile').css('display', 'block');

            }
        }
        else {
            $('#Guest_Normal, #Guest_Normal_Mobile').css('display', 'block');
        }


    }
    jQuery(window).on("load", function () {
        myFunction();  // Call the function when the window is loaded
    });

    setInterval(myFunction, 1000);
</script>







<body dir="rtl" lang="ar">






<div class="overlay-container">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K25FHK5" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>


    @yield('content')

</div>





@include('website.layout.footer')










</body>
</html>
