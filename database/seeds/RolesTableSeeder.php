<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Acceso total',
            'special' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'Deshabilitado',
            'slug' => 'deshabilitado',
            'description' => 'Sin acceso',
            'special' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
