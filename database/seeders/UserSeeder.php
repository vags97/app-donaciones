<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombres' => 'Vicente Agustín',
            'apellidos' => 'Gamboa Soto',
            'email' => 'vicente.gamboa@ug.uchile.cl',
            'password' => Hash::make('123456')
        ]);
    }
}
