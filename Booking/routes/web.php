<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;


include_once "frontend.php";


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('dashboard');

Route::controller(ClientController::class)->prefix('clients')->middleware('auth')->name('clients.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{client}', 'edit')->name('edit');
    Route::get('/{client}/event', 'event')->name('event');
    Route::post('/{client}/event', 'doEvent')->name('doEvent');
    Route::put('/{client}', 'update')->name('update');
    Route::delete('destroy/{client}', 'destroy')->name('destroy');
});


Route::controller(TripController::class)->prefix('trips')->middleware('auth')->name('trips.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{trip}', 'edit')->name('edit');
    Route::post('/{trip}', 'update')->name('update');
    Route::delete('destroy/{client}', 'destroy')->name('destroy');
});

Route::controller(CountryController::class)->prefix('countries')->middleware('auth')->name('countries.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{country}', 'edit')->name('edit');
    Route::put('/{country}', 'update')->name('update');
    Route::delete('destroy/{country}', 'destroy')->name('destroy');
});

Route::controller(CurrencyController::class)->prefix('currencies')->middleware('auth')->name('currencies.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{currency}', 'edit')->name('edit');
    Route::put('/{currency}', 'update')->name('update');
    Route::delete('destroy/{currency}', 'destroy')->name('destroy');
});

Route::controller(CityController::class)->prefix('cities')->middleware('auth')->name('cities.')->group(function () {
    Route::post('/getCitiesByCountryAjax', 'getCitiesByCountryAjax')->name('getCitiesByCountryAjax');
});

Route::view('/choose_trip' , 'frontend.choose_trip');
Route::view('/trip_invoice' , 'frontend.trip_invoice');
Route::view('/passengers_details' , 'frontend.passengers_details');
