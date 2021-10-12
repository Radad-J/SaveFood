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
                'name' => 'Veggie Anderlecht',
                'avatar'=>'store1.jpg',
                'website'=>'https://www.veggie.com',
                'GSM'=>"+32256859876",
                'postal_code'=>'1080',
                'country'=>'Belgium',
                'city'=>'Brussels',
                'street_name'=>'Rue Bel',
                'building_number'=>'2'
            ],
            [
                'name' => 'Gourmet sensations',
                'avatar'=>'store2.jpg',
                'website' => 'https://www.gourmetsensations.com',
                'GSM' => "+32456851427",
                'postal_code' => '1080',
                'country' => 'Belgium',
                'city' => 'Brussels',
                'street_name' => 'Rue Kerraven',
                'building_number' => '15'
            ],
            [
                'name' => 'Al natural',
                'avatar'=>'store3.jpg',
                'website' => 'https://www.alnatural.com',
                'GSM' => "+32456123845",
                'postal_code' => '1080',
                'country' => 'Belgium',
                'city' => 'Brussels',
                'street_name' => 'Rue Mons',
                'building_number' => '23'
            ],

            [
                'name' => 'Go Fresh',
                'avatar'=>'store4.jpg',
                'website' => 'https://www.gofresh.com',
                'GSM' => "+32456123855",
                'postal_code' => '1000',
                'country' => 'Belgium',
                'city' => 'Brussels',
                'street_name' => 'Rue des rois',
                'building_number' => '201'
            ],
            [
                'name' => 'Go Bite',
                'avatar'=>'store5.jpg',
                'website' => 'https://www.gobite.com',
                'GSM' => "+212656127777",
                'postal_code' => '1050',
                'country' => 'Morocco',
                'city' => 'Tangier',
                'street_name' => 'Rue 62',
                'building_number' => '78'
            ],
            [
                'name' => 'Bubble Tea',
                'avatar'=>'store6.jpg',
                'website' => 'https://www.bubbletea.com',
                'GSM' => "+33656127784",
                'postal_code' => '2020',
                'country' => 'France',
                'city' => 'Paris',
                'street_name' => 'Rue Saint-josse',
                'building_number' => '23'
            ],
            [
                'name' => 'Tacos Mexican',
                'avatar'=>'store7.jpg',
                'website' => 'https://www.tacosmexican.com',
                'GSM' => "+33656129564",
                'postal_code' => '2010',
                'country' => 'France',
                'city' => 'Paris',
                'street_name' => 'Rue Marie',
                'building_number' => '3'
            ],
            [
                'name' => 'Delicious burgers',
                'avatar'=>'store8.jpg',
                'website' => 'https://www.burgerdelicious.com',
                'GSM' => "+33656512644",
                'postal_code' => '2000',
                'country' => 'France',
                'city' => 'Paris',
                'street_name' => 'Avenue Rome',
                'building_number' => '74'
            ],
            [
                'name' => 'Ici pizza Paris',
                'avatar'=>'store_avatar.png',
                'website' => 'https://www.icipizzaparis.com',
                'GSM' => "+33656174597",
                'postal_code' => '2020',
                'country' => 'France',
                'city' => 'Paris',
                'street_name' => 'Avenue cinquante',
                'building_number' => '74'
            ],
            [
                'name' => 'Delicious food',
                'avatar'=>'store_avatar.png',
                'website' => 'https://www.deliciousfood.com',
                'GSM' => "+44656127711",
                'postal_code' => '2020',
                'country' => 'United Kingdom',
                'city' => 'London',
                'street_name' => 'Great London Street',
                'building_number' => '56'
            ],
            [
                'name' => 'Green',
                'avatar'=>'green.jpg',
                'website' => 'https://www.green.com',
                'GSM' => "+32256854521",
                'postal_code' => '1080',
                'country' => 'Belgium',
                'city' => 'Brussels',
                'street_name' => 'Rue Fil',
                'building_number' => '8'
            ],
        ]);
    }
}
