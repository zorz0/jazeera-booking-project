<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Country;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::paginate(10);
        return view('dashboard.clients.index', ['clients'=> $clients]);
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
