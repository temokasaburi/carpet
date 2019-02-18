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
            'google_map_frame' => 'google_map_frame'
            
        ]);
    }
}

