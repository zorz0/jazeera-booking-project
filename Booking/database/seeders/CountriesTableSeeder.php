<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data from the table
        DB::table('countries')->truncate();

        // Fetch countries from the REST Countries API
        $response = Http::get('https://restcountries.com/v2/all');
        $countries = $response->json();
        // Insert countries into the database
        
        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country['name'],
                'currency' => isset($country['currencies'][0]['code']) ? $country['currencies'][0]['code'] : null,
            ]);
        }
    }
}









