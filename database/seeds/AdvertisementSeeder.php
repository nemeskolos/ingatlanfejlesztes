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
            'price' => '35500000',
            'rooms' => '4',
            'city' => 'Szeged',
            'county' => 'Cs',
            'user_id' => '16',
        ]);
    }
}
