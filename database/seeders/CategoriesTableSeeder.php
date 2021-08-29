<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Fill data
        DB::table('categories')->insert([
            ['category'=>'Meals'],
            ['category'=>'Bread & pastries'],
            ['category'=>'Groceries'],
            ['category'=>'Other'],
        ]);
    }
}
