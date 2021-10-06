<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPackTableSeeder extends Seeder
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
        DB::table('category_pack')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Fill data
        DB::table('category_pack')->insert([
            [
                'category_id' => 2,
                'pack_id' => 1,
            ],
            [
                'category_id' => 3,
                'pack_id' => 2,
            ],
            [
                'category_id' => 4,
                'pack_id' => 3,
            ],
            [
                'category_id' => 3,
                'pack_id' => 3,
            ],
            [
                'category_id' => 3,
                'pack_id' => 4,
            ],
            [
                'category_id' => 4,
                'pack_id' => 4,
            ],
            [
                'category_id' => 3,
                'pack_id' => 5,
            ],
            [
                'category_id' => 3,
                'pack_id' => 6,
            ],
            [
                'category_id' => 1,
                'pack_id' => 7,
            ],
            [
                'category_id' => 3,
                'pack_id' => 8,
            ],
            [
                'category_id' => 3,
                'pack_id' => 9,
            ],
            [
                'category_id' => 4,
                'pack_id' => 9,
            ],
            [
                'category_id' => 3,
                'pack_id' => 10,
            ],
            [
                'category_id' => 3,
                'pack_id' => 11,
            ],
            [
                'category_id' => 4,
                'pack_id' => 11,
            ],
            [
                'category_id' => 3,
                'pack_id' => 12,
            ],
            [
                'category_id' => 3,
                'pack_id' => 13,
            ],
            [
                'category_id' => 3,
                'pack_id' => 14,
            ],
            [
                'category_id' => 3,
                'pack_id' => 15,
            ],
            [
                'category_id' => 3,
                'pack_id' => 16,
            ],
            [
                'category_id' => 3,
                'pack_id' => 17,
            ],
            [
                'category_id' => 3,
                'pack_id' => 18,
            ],
            [
                'category_id' => 3,
                'pack_id' => 19,
            ],
            [
                'category_id' => 3,
                'pack_id' => 20,
            ],
            [
                'category_id' => 3,
                'pack_id' => 21,
            ],
            [
                'category_id' => 3,
                'pack_id' => 22,
            ],
        ]);
    }
}
