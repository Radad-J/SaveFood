<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavouritesTableSeeder extends Seeder
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
        DB::table('favourites')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Fill data
        DB::table('favourites')->insert([
            [
                'user_id' => 2,
                'pack_id' => 1,
            ],
            [
                'user_id' => 2,
                'pack_id' => 2,
            ],
            [
                'user_id' => 2,
                'pack_id' => 6,
            ],
            [
                'user_id' => 2,
                'pack_id' => 4,
            ],
            [
                'user_id' => 2,
                'pack_id' => 5,
            ],
            [
                'user_id' => 3,
                'pack_id' => 1,
            ],
            [
                'user_id' => 3,
                'pack_id' => 10,
            ],
            [
                'user_id' => 3,
                'pack_id' => 20,
            ],
            [
                'user_id' => 5,
                'pack_id' => 16,
            ],
            [
                'user_id' => 5,
                'pack_id' => 22,
            ],
            [
                'user_id' => 8,
                'pack_id' => 5,
            ],
            [
                'user_id' => 6,
                'pack_id' => 3,
            ],
        ]);
    }
}
