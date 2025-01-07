<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Don't forget to include this!

class Categories extends Seeder
{
    public function run(): void
    {

        DB::table('categories')->insert([
            ['Category_ID' => 1, 'Category_Name' => 'iPhone'],
            ['Category_ID' => 2, 'Category_Name' => 'iPad'],
            ['Category_ID' => 3, 'Category_Name' => 'MacBook'],
            ['Category_ID' => 4, 'Category_Name' => 'Accessories'],
        ]);
        
    }

}
