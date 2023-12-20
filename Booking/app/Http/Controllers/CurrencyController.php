<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurrencyRequest;
use App\Models\Currency;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CurrencyController extends Controller
{
    public function index(){
        $currencies = Currency::paginate(10);
        return view('dashboard.currencies.index' , compact('currencies'));
    }

    public function create(){
        return view('dashboard.currencies.create');
    }

    public function edit(Currency $currency){
        return view('dashboard.currencies.edit' , compact('currency'));
    }

    public function store(StoreCurrencyRequest $request){

        $inputs = $request->all();
        unset($inputs['_token']);
        Currency::create($inputs);
        Alert::success('Success Title', 'Success Message');

        return redirect()->route('currencies.index');
    }

    public function update(StoreCurrencyRequest $request ,Currency $currency){

        $inputs = $request->all();
        $currency->name = $inputs['name'];
        $currency->value =$inputs['value'];
        $currency->save();
        Alert::success('Success Title', 'Success Message');

        return redirect()->route('currencies.index');
    }
    
    public function destroy(Currency $currency) {
        $currency->delete();
        Alert::success(' العملاء', 'تم حذف العملة بنجاح');
        return redirect()->route('currencies.index');
    }

}
