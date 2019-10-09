<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'name' => 'Misiones',
            'country_id' => '1',
        ]);

        Province::create([
            'name' => 'Corrientes',
            'country_id' => '1',
        ]);

        Province::create([
            'name' => 'Chaco',
            'country_id' => '1',
        ]);

        Province::create([
            'name' => 'Formosa',
            'country_id' => '1',
        ]);

        Province::create([
            'name' => 'Entre Rios',
            'country_id' => '1',
        ]);

        Province::create([
            'name' => 'Buenos Aires',
            'country_id' => '1',
        ]);

        Province::create([
            'name' => 'Santa Fé',
            'country_id' => '1',
        ]);
    }
}
