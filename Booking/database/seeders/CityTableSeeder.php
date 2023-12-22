<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear existing data from the table
        DB::table('cities')->truncate();

        // Fetch countries from the REST Countries API
        $response = Http::get('https://countriesnow.space/api/v0.1/countries');
        $countries = $response->json();
        // Insert countries into the database
        foreach ($countries['data']as $country) {
            $country_id = Country::where('name' , $country['country'])->first()?->id;
            if($country['cities'] && $country_id){
                foreach($country['cities'] as $city){
                    DB::table('cities')->insert([
                        'name' => $city,
                        'country_id' => $country_id,
                    ]);
                }
            }
        }
    }
}
