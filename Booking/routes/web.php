<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

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
    Route::put('/{trip}', 'update')->name('update');
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
