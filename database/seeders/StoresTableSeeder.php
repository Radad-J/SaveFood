<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
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
        DB::table('stores')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Fill data
        DB::table('stores')->insert([
            [
                'website'=>'www.veggie.com',
                'GSM'=>"+32256859876",
                'postal_code'=>'1080',
                'country'=>'Belgium',
                'city'=>'Brussels',
                'street_name'=>'Rue Bel',
                'building_number'=>'2'
            ],
            [
                'website'=>'www.green.com',
                'GSM'=>"+32256854521",
                'postal_code'=>'1080',
                'country'=>'Belgium',
                'city'=>'Brussels',
                'street_name'=>'Rue Fil',
                'building_number'=>'8'
            ],
            [
                'website'=>'www.eathealthy.com',
                'GSM'=>"+32456851427",
                'postal_code'=>'1080',
                'country'=>'Belgium',
                'city'=>'Brussels',
                'street_name'=>'Rue Kerraven',
                'building_number'=>'15'
            ],
            [
                'website'=>'www.organic.com',
                'GSM'=>"+32456123845",
                'postal_code'=>'1080',
                'country'=>'Belgium',
                'city'=>'Brussels',
                'street_name'=>'Rue Mons',
                'building_number'=>'23'
            ],
        ]);
    }
}
