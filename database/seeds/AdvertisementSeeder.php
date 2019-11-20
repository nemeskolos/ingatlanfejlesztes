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
            'price' => '28500000',
            'rooms' => '2',
            'city' => 'Győrzámoly',
            'county' => 'GyMS',
            'user_id' => '15',
        ]);
    }
}
