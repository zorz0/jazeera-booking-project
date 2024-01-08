<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTripRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;
use RealRashid\SweetAlert\Facades\Alert;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::with(['fromCity', 'toCity'])->paginate(10);
        return view('dashboard.trips.index', compact('trips'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('dashboard.trips.create', compact('countries'));
    }

    public function store(StoreTripRequest $request)
    {
        // dd($request);
        $inputs = $request->all();
        unset($inputs['_token']);
        Trip::create($inputs);
        Alert::success('success', 'تم حفظ الرحلة بنجاح');
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
        $from_cities = City::where('country_id', $trip->fromCity->country_id)->get();
        $to_cities = City::where('country_id', $trip->toCity->country_id)->get();

        return view('dashboard.trips.edit', compact('trip', 'countries', 'to_cities', 'from_cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $inputs = $request->all();
        $trip->passengers = $inputs['passengers'];
        $trip->leaving_date = $inputs['leaving_date'];
        $trip->arriving_date = $inputs['arriving_date'];
        $trip->to = $inputs['to'];
        $trip->from = $inputs['from'];
        $trip->price_adult = $inputs['price_adult'];
        $trip->price_child = $inputs['price_child'];
        $trip->save();
        Alert::success('success', 'تم تعديل الرحلة بنجاح');
        return redirect()->route('trips.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trip = Trip::find($id);
        $trip->delete();
        Alert::success('success', 'تم حذف الرحلة بنجاح');
        return redirect()->route('trips.index');
    }

    /**
     * choose Trip
     */
    public function chooseTrip(Request $request)
    {
        $trips = Trip::with(['fromCity' , 'toCity'])->paginate(10);
        $countries = Country::all();
        return view('frontend.choose_trip', compact('trips', 'countries'));
    }
}
