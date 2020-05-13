<?php

use Illuminate\Database\Seeder;
use Psy\Util\Str;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisement')->insert([
            'price' => 'random(2)',
            'rooms' => 'random(2)',
            'city' => 'string',
            'county' => 'cahr',
            'user_id' => 'random(10)',
        ]);
    }
}
