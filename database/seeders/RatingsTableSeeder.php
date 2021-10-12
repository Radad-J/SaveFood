<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsTableSeeder extends Seeder
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
        DB::table('ratings')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Fill data
        DB::table('ratings')->insert([
            [
                'created_at' => '2021-10-08 20:00:00',
                'updated_at' => null,
                'user_id' => 2,
                'pack_id' => 1,
                'title'=> 'Loved it',
                'comment'=>null,
                'rate' => 4,
            ],
            [
                'created_at' => '2021-10-08 20:30:00',
                'updated_at' => null,
                'user_id' => 5,
                'pack_id' => 1,
                'title'=> 'Medium',
                'comment'=>'It\'s pretty good that\'s all i can say',
                'rate' => 3,
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 7,
                'pack_id' => 2,
                'title'=> 'Exellent',
                'comment'=>'Can\'t be better !Absolutely delicious',
                'rate' => 5,
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 4,
                'pack_id' => 2,
                'title'=> 'Very good',
                'comment'=>'Loved it will buy it again',
                'rate' => 4,
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 3,
                'pack_id' => 2,
                'title'=> 'Good price',
                'comment'=>'For the price i think it\'s good',
                'rate' => 3,
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 7,
                'pack_id' => 3,
                'title'=> 'Delicious',
                'comment'=>'Didn\'t think i\'ll be that good it deserves 5 but i give 4 till next time!',
                'rate' => 4,
            ],
        ]);
    }
}
