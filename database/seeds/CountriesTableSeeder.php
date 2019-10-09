<?php

use Illuminate\Database\Seeder;
use App\Country;
class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'Argentina',
        ]);

        Country::create([
            'name' => 'Brasil',
        ]);

        Country::create([
            'name' => 'Paraguay',
        ]);

        Country::create([
            'name' => 'Chile',
        ]);

        Country::create([
            'name' => 'Uruguay',
        ]);

        Country::create([
            'name' => 'China',
        ]);

        Country::create([
            'name' => 'EEUU',
        ]);

        Country::create([
            'name' => 'Bolivia',
        ]);

        Country::create([
            'name' => 'Perú',
        ]);

        Country::create([
            'name' => 'Jamaica',
        ]);

        Country::create([
            'name' => 'México',
        ]);
    }
}
