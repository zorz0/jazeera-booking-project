<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Models\Country;
use App\Models\Trip;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::paginate(10);
        return view('dashboard.trips.index' , compact('trips'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('dashboard.trips.create' ,compact('countries') );
    }

    public function store(StoreTripRequest $request)
    {
        $inputs = $request->all();
        unset($inputs['_token']);
        Trip::create($inputs);
        Alert::success('success' , 'تم حفظ الرحلة بنجاح');
        return redirect()->route('trips.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        $countries = Country::all();

        return view('dashboard.trips.edit' , compact( 'trip' , 'countries' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
