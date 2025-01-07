<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            DB::table('users')->insert([
                'user_id' => 1, 
                'username' => 'admin',
                'firstname' => 'Admin',
                'lastname' => 'User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'gender' => null,
                'Contact_Number' => null,
                'Line_Address_1' => null,
                'Line_Address_2' => null,
                'Barangay' => null,
                'Municipality' => null,
                'City' => null,
                'Postal_Code' => null,
                'Role' => 'admin',
                'email_verified_at' => now(),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
