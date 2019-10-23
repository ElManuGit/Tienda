<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('users')->truncate();
        $this->call([PermissionsTableSeeder::class]);
        $this->call([RolesTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        $this->call([CountriesTableSeeder::class]);
        $this->call([ProvincesTableSeeder::class]);
        $this->call([CitiesTableSeeder::class]);
        $this->call([CategoriesTableSeeder::class]);
        $this->call([BrandProductsTableSeeder::class]);
        $this->call([ProductsTableSeeder::class]);
        $this->call([ProvidersTableSeeder::class]);


        //$this->call([IDTypesTableSeeder::class]);
    }
}
