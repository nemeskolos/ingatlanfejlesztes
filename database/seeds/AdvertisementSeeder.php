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
            'price' => '13400000',
            'rooms' => '1',
            'city' => 'Hegyeshalom',
            'county' => 'GyMS',
            'user_id' => '12',
        ]);
    }
}
