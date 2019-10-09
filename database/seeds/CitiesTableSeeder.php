<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Posadas',
            'cp' => '3300',
            'province_id' => '1',
        ]);

        City::create([
            'name' => 'San Pedro',
            'cp' => '3364',
            'province_id' => '1',
        ]);

        City::create([
            'name' => 'Wanda',
            'cp' => '3376',
            'province_id' => '1',
        ]);

        City::create([
            'name' => 'Aristobulo del Valle',
            'cp' => '3364',
            'province_id' => '1',
        ]);
    }
}
