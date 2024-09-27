<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'carlos',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('123456789'), // Hashea la contraseña "123456789"
        ]);
        
    }
}
