<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'email' => 'email@email.com',
            'number' => '000000000',
            'address' => 'address',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'twetter' => 'https://twitter.com/',
            'google_api_key' => 'google_api_key',
            'google_map_lat' => 'google_map_lat',
            'google_map_lag' => 'google_map_lag'
            
        ]);
    }
}

