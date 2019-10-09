<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Lacteos',
            'description' => 'Derivados de la leche de vaca y de cabra',
        ]);

        Category::create([
            'name' => 'Pastas',
            'description' => 'Ñoquis, fideos, tallarines, ravioles, sorrentinos, tapas para empanadas, tapas pascualinas, lasagna',
        ]);

        Category::create([
            'name' => 'Enlatados',
            'description' => 'Frijoles, choclo, pescado, frutas',
        ]);

        Category::create([
            'name' => 'Perfumería',
            'description' => 'Desodorantes, alcohol, higiene personal',
        ]);

        Category::create([
            'name' => 'Limpieza',
            'description' => 'Limpiadores de piso, detergentes, lustramuebles, escobas, palas, bolsas',
        ]);

        Category::create([
            'name' => 'Bebidas',
            'description' => 'Gaseosas, cervezas, aperitivos',
        ]);

        Category::create([
            'name' => 'Panadería',
            'description' => 'Pan, tortas, facturas, mazas finas',
        ]);
    }
}
