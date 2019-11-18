<?php

use Illuminate\Database\Seeder;

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
            'price' => '1500000',
            'rooms' => '3',
            'city' => Str::random(10),
            'county' => Str::random(3),
            'user_id' => '1',
        ]);
    }
}
