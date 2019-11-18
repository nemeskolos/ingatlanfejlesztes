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
            'id' => 'insertadvdata/$id',
            'price' => 'insertadvdata/$price',
            'rooms' => 'insertadvdata/$rooms',
            'city' => 'insertadvdata/$city',
            'county' => 'insertadvdata/$county',
            'user_id' => 'insertadvdata/$user_id',
        ]);
    }
}
