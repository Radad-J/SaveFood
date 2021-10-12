<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsLattersTableSeeder extends Seeder
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
        DB::table('newsletters')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Fill data
        DB::table('newsletters')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'email' => 'radad19998@gmail.com',
            ],
            [
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'email' => 'radad19998@gmail.com',
            ],
        ]);
    }
}
