<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'text' => 'about',
            'img1' => 'Image',
            'img2' => 'Image',
        ]);
    }
}
