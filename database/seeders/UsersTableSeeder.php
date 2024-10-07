<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB as FacadesDB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Example data
        FacadesDB::table('users')->insert([
            [
                'name' => 'ganesh singh',
                'email' => 'ganesh@gmail.com',
                'mobile' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'naman ojha',
                'email' => 'naman@gmail.com',
                'mobile' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'prakash tomar',
                'email' => 'prakash@gmail.com',
                'mobile' => '0987654351',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
