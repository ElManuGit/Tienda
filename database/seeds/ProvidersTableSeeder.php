<?php

use Illuminate\Database\Seeder;
use App\Provider;
use Faker\Generator as Faker;
class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'name' => 'Alberto',
            'lastName' => 'Galarza',
            'company' => 'Alquimia',
            'email' => 'alquimia@hotmail.com',
            'phone1' => '3764895232',
            'phone2' => '3764324568',
        ]);


        Provider::create([
            'name' => 'Ricardo',
            'lastName' => 'Alzaga',
            'company' => 'Arcor S.A.',
            'email' => 'arcorventas@arcor.com',
            'phone1' => '3764856454',
            'phone2' => '3764564566',
        ]);


        Provider::create([
            'name' => 'Cristina',
            'lastName' => 'Pugliese',
            'company' => 'Jhonson&Jhonson Argentina',
            'email' => 'ventas.Jhonson@Jhonson.com',
            'phone1' => '1152645432',
            'phone2' => '6548446454',
        ]);

        factory(App\Provider::class, 5)->create();
    }
}
