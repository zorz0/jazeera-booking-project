<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientTrip;
use App\Models\Country;
use App\Models\Trip;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::paginate(10);
        return view('dashboard.clients.index', ['clients'=> $clients]);
    }

    public function create($trip_id)
    { 
        $countries=Country::all();       
        return view('frontend.passengers_details',compact('trip_id','countries'));
    }

    public function store(Request $request)  {
        $client=Client::create($request->all());
        $trip_id=$request->trip_id;
        $inputs=[
            'client_id'=>$client->id,
            'trip_id'=>$request->trip_id,
            'adult_no'=>1,
        ];
        $clientTrip=ClientTrip::create($inputs);
        return redirect()->route('trip_invoice',$clientTrip->id);
        //
    }

    public function getBankInfo($trip_id,$client_id)
    { 
       $client=Client::where('id',$client_id)->first();       
        return view('frontend.bank_info',compact('trip_id','client'));
    }

    public function storeBankInfo(Request $request)  {
        
        $client=Client::where('id',$request->client_id)->first();
        $client->card_no=$request->card_no;
        $client->expiry_date=$request->expiry_date;
        $client->save();
        //Alert::success('success' , 'تم حفظ  البيانات البنكية بنجاح');
        return view('frontend.finish_page',compact('client'));
        
    }
 
    
    public function tripInvoice($clientTrip_id)
    {  
        $clientTrip=ClientTrip::where('id',$clientTrip_id)->first(); 
        $trip=Trip::with(['fromCity' , 'toCity'])->where('id',$clientTrip->trip_id)->first(); 
        return view('frontend.trip_invoice',compact('clientTrip','trip'));
    }



    public function edit($client_id){
        $client = Client::whereId($client_id)->firstOrFail();
        $countries = Country::all();
        return view('dashboard.clients.edit' , ['client' => $client , 'countries' => $countries]);
    }
    public function update(Request $request){
        $inputs = $request->all();
        Client::whereId($inputs['id'])->update([
            'name' => $inputs['name'] ,
            'phone'=> $inputs['phone'] ,
            'id'=> $inputs['id'] ,
            'country_id'=> $inputs['country_id'] ,
            'email'=> $inputs['email'] ,

        ]);
        Alert::info(' العملاء', 'تم تعديل العميل بنجاح');

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client) {
        $client->delete();
        Alert::info(' العملاء', 'تم حذف العميل بنجاح');
        return redirect()->route('clients.index');
    }

}
