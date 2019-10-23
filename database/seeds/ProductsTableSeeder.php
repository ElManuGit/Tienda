<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 4)->create();

        DB::table('category_product')->insert([
            'product_id' => '1',
            'category_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('category_product')->insert([
            'product_id' => '2',
            'category_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('category_product')->insert([
            'product_id' => '3',
            'category_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('category_product')->insert([
            'product_id' => '4',
            'category_id' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
