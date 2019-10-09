<?php

use Illuminate\Database\Seeder;
use App\BrandProduct;

class BrandProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandProduct::create([
            'name' => 'Blem',
        ]);

        BrandProduct::create([
            'name' => 'Ace',
        ]);

        BrandProduct::create([
            'name' => 'Higienol',
        ]);

        BrandProduct::create([
            'name' => 'Marolio',
        ]);

        BrandProduct::create([
            'name' => 'Rexona',
        ]);

        BrandProduct::create([
            'name' => 'Bic',
        ]);

        BrandProduct::create([
            'name' => 'Knorr',
        ]);

        BrandProduct::create([
            'name' => 'Favorita',
        ]);

        factory(BrandProduct::class)->create([
            'name' => 'Apple'
        ]);

    }
}
