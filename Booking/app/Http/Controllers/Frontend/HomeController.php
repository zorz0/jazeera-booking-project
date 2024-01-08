<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $countries=Country::all();
        return view('website.index',compact('countries')) ;
    }

    public function seat_selection()
    {
        return view('website.seat-selection') ;
    }

    public function baggage_allowance()
    {
        return view('website.baggage-allowance') ;
    }
    public function jazeera_lounge()
    {
        return view('website.jazeera-lounge') ;
    }

    public function flights()
    {
        return view('website.flights') ;
    }

    public function liveanimals()
    {
        return view('website.liveanimals') ;
    }
  public function visa_information()
    {
        return view('website.visa-information') ;
    }
public function jazeera_terminal()
    {
        return view('website.jazeera-terminal') ;
    }public function jazeeracafe()
    {
        return view('website.jazeeracafe') ;
    }
public function priority_service()
    {
        return view('website.priority-service') ;
    }

    public function fare_options()
    {
        return view('website.fare-options') ;
    }

    public function special_assistance()
    {
        return view('website.special-assistance') ;
    }
    public function booking_and_check_in()
    {
        return view('website.booking-and-check_in') ;
    }
    public function travel_advice()
    {
        return view('website.travel-advice') ;
    }
    public function travel_insurance()
    {
        return view('website.travel-insurance') ;
    }
    public function jazeera_air_cargo()
    {
        return view('website.jazeera-air-cargo') ;
    }
    public function terminal_car_park()
    {
        return view('website.terminal-car-park') ;
    }
    public function flight_schedules()
    {
        return view('website.flight-schedules') ;
    }
    public function tripadmit()
    {
        return view('website.tripadmit') ;
    }
    public function offers()
    {
        return view('website.offers') ;
    }
    public function meet_assist()
    {
        return view('website.meet-assist') ;
    }
    public function jazeera_charter()
    {
        return view('website.jazeera-charter') ;
    }

    public function early_check_in()
    {
        return view('website.early-check-in') ;
    }
    public function duo_seat()
    {
        return view('website.duo-seat') ;
    }
    public function your_carbon_foot_print()
    {
        return view('website.your-carbon-foot-print') ;
    }
    public function travel_extras()
    {
        return view('website.travel-extras') ;
    }
    public function kuwait_international_airport()
    {
        return view('website.kuwait-international-airport') ;
    }
    public function baggage_information()
    {
        return view('website.baggage-information') ;
    }

    public function flights_savers_club ()
    {
        return view('website.flights-savers-club') ;
    }
    public function flights_shop()
    {
        return view('website.flights-duty-free-onboard-shop') ;
    }

    public function flight_status()
    {
        return view('website.flight-status') ;
    }

    public function flights_to_type($type)
    {
        return view('website.flight-to-'.$type) ;
    }



    public function staticPage($pageUrl)
    {
        return view('website.'.$pageUrl) ;
    }


}
