<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
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
        DB::table('reservations')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Fill data
        DB::table('reservations')->insert([
            [
                'user_id' => 2,
                'pack_id' => 2,
                'quantity' => 1,
                'status' => 'not claimed',
            ],
            [
                'user_id' => 2,
                'pack_id' => 1,
                'quantity' => 1,
                'status' => 'not claimed',
            ],
            [
                'user_id' => 2,
                'pack_id' => 4,
                'quantity' => 1,
                'status' => 'claimed',
            ],
            [
                'user_id' => 2,
                'pack_id' => 2,
                'quantity' => 2,
                'status' => 'not claimed',
            ],
            [
                'user_id' => 3,
                'pack_id' => 6,
                'quantity' => 1,
                'status' => 'not claimed',
            ],
            [
                'user_id' => 4,
                'pack_id' => 3,
                'quantity' => 1,
                'status' => 'claimed',
            ],
            [
                'user_id' => 4,
                'pack_id' => 2,
                'quantity' => 3,
                'status' => 'not claimed',
            ],
        ]);
    }
}
