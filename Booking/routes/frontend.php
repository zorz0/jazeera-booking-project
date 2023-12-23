<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;



    Route::controller(HomeController::class)->group(function () {

   
    Route::get('/' ,  'index')->name('home');


    Route::get('/seat-selection' ,  'seat_selection')->name('seat-selection')  ;
    Route::get('/baggage-allowance' ,  'baggage_allowance')->name('baggage-allowance')  ;
    Route::get('/jazeera-lounge' ,  'jazeera_lounge')->name('jazeera-lounge')  ;
    Route::get('/flights-duty-free-onboard-shop' ,  'flights_shop')->name('flights-duty-free-onboard-shop')  ;
    Route::get('/flights-to-{type}' ,  'flights_to_type')->name('flights_to_type')  ;
    Route::get('/flights' ,  'flights')->name('flights')  ;
    Route::get('/liveanimals' ,  'liveanimals')->name('liveanimals')  ;
    Route::get('/fare-options' ,  'fare_options')->name('fare-options')  ;
    Route::get('/visa-information' ,  'visa_information')->name('visa-information')  ;
    Route::get('/jazeera-terminal' ,  'jazeera_terminal')->name('jazeera-terminal')  ;
    Route::get('/jazeeracafe' ,  'jazeeracafe')->name('jazeeracafe')  ;
    Route::get('/priority-service' ,  'priority_service')->name('priority-service')  ;


    Route::get('/special-assistance' ,  'special_assistance')->name('special-assistance')  ;
    Route::get('/baggage-information' ,  'baggage_information')->name('baggage-information')  ;
    Route::get('/booking-and-check-in' ,  'booking_and_check_in')->name('booking-and-check-in')  ;
    Route::get('/travel-advice' ,  'travel_advice')->name('travel-advice')  ;
    Route::get('/kuwait-international-airport' ,  'kuwait_international_airport')->name('kuwait-international-airport')  ;
    Route::get('/travel-extras' ,  'travel_extras')->name('travel-extras')  ;
    Route::get('/travel-insurance' ,  'travel_insurance')->name('travel-insurance')  ;











    Route::get('/duo-seat' ,  'duo_seat')->name('duo-seat')  ;
    Route::get('/your-carbon-foot-print' ,  'your_carbon_foot_print')->name('your-carbon-foot-print')  ;


    Route::get('/jazeera-air-cargo' ,  'jazeera_air_cargo')->name('jazeera-air-cargo')  ;

    Route::get('/terminal-car-park' ,  'terminal_car_park')->name('terminal-car-park')  ;
    Route::get('/early-check-in' ,  'early_check_in')->name('early-check-in')  ;
    Route::get('/flight-status' ,  'flight_status')->name('flight-status')  ;
    Route::get('/flight-schedules' ,  'flight_schedules')->name('flight-schedules')  ;
    Route::get('/jazeera-charter' ,  'jazeera_charter')->name('jazeera-charter')  ;
    Route::get('/meet-assist' ,  'meet_assist')->name('meet-assist')  ;
    Route::get('/offers' ,  'offers')->name('offers')  ;
    Route::get('/tripadmit' ,  'tripadmit')->name('tripadmit')  ;

    Route::get('/flights-savers-club' ,  'flights_savers_club')->name('flights-savers-club')  ;




});
