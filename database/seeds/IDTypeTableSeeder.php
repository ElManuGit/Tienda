<?php

use Illuminate\Database\Seeder;
use App\IDType;

class IDTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IDType::create([
            'name'    => 'DNI',
        ]);

        IDType::create([
            'name'    => 'LE',
        ]);

        IDType::create([
            'name'    => 'LC',
        ]);

        IDType::create([
            'name'    => 'Pasaporte',
        ]);

    }
}
