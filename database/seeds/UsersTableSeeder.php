<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@nowui.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('users')->insert([
            'name' => 'Manu',
            'email' => 'manuelk.sv@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
