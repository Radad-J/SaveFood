<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacksTableSeeder extends Seeder
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
        DB::table('packs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Fill data
        DB::table('packs')->insert([
            [
                'store_id' => 1,
                'created_at' => '2021-10-08 00:00:00',
                'updated_at' => null,
                'title' => 'Croissants',
                'description' => '8 freshly baked crossiants',
                'price' => 3.50,
                'sale_price' => null,
                'available_day_from' => '2021-10-08 17:00:00',
                'available_day_to' => '2021-10-08 18:00:00',
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'croissants.jpg',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Pizza BBQ & Bacon',
                'description' => 'Freshly baked BBQ & Bacon pizza size M',
                'price' => 5.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'pizza-d.jpg',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Chicken & salad sandwich',
                'description' => 'Freshly prepared chicken & salad sandwish',
                'price' => 4.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'sandwich-poulet.jpg',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => '3 Baguettes',
                'description' => 'Freshly baked baguettes x3',
                'price' => 5.90,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'baguettes.jpeg',
            ],
            [
                'store_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Tomatoes',
                'description' => '2kg of Fresh tomatoes',
                'price' => 3.99,
                'sale_price' => 2.99,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '18:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 18,
                'picture' => 'tomatoes.jpg',
            ],
            [
                'store_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Iced tea',
                'description' => '6 pack of Iced tea cans (6 x 330ml)',
                'price' => 3.99,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '18:00:00',
                'available_hour_to' => '21:00:00',
                'stock' => 15,
                'picture' => 'iced_tea.jpg',
            ],
            [
                'store_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Bananas',
                'description' => 'Fresh organic bananas approximately 1kg (4-6 Bananas)',
                'price' => 2.99,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '19:00:00',
                'stock' => 20,
                'picture' => 'bananas.jpg',
            ],
            [
                'store_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Strawberries',
                'description' => '250g of fresh spanish strawberries',
                'price' => 2.50,
                'sale_price' => 1.99,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 7,
                'picture' => 'strawberries.webp',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Apples',
                'description' => 'Fresh organic apples (approximately 2kg)',
                'price' => 4.99,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '18:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 5,
                'picture' => 'apples.png',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Blueberries',
                'description' => '500g of fresh blueberries',
                'price' => 2.99,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 3,
                'picture' => 'blueberries500g.jpg',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'CocaCola light',
                'description' => '6 pack of CocaCola light cans (6 x 330ml)',
                'price' => 4.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '18:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 10,
                'picture' => 'coke-cans.jpg',
            ],
            [
                'store_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Milka Caramel',
                'description' => 'Milka caramel chocolate bar of 100g',
                'price' => 1.50,
                'sale_price' => 1,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '17:00:00',
                'available_hour_to' => '19:00:00',
                'stock' => 20,
                'picture' => 'milka_caramel.jpg',
            ],

            //more packs to create
            [
                'store_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Pizza margarita',
                'description' => 'Ready to bake italian margarita pizza for 2 (250g)',
                'price' => 2.99,
                'sale_price' => 1.99,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '19:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 5,
                'picture' => 'pizza-margarita.png',
            ],

            [
                'store_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Fanta Orange',
                'description' => '16 cans of Fanta Orange (16 x 330ml)',
                'price' => 12.99,
                'sale_price' => 10.99,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 16,
                'picture' => 'fanta_orange.jpeg',
            ],

            [
                'store_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Italian spaghetti',
                'description' => '1kg of High quality italian spaghetti',
                'price' => 3.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '18:00:00',
                'stock' => 25,
                'picture' => 'spaghetti.jpg',
            ],
            [
                'store_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Bananas',
                'description' => 'Fresh organic bananas approximately 1kg (4-6 Bananas)',
                'price' => 2.99,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '17:00:00',
                'stock' => 3,
                'picture' => 'bananas1kg.jpeg',
            ],
            [
                'store_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Cheese cake kit (mix)',
                'description' => 'Duncan Hines Cheese cake filling and graham cracker crust mix approx. 174g',
                'price' => 5.50,
                'sale_price' => 3.99,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'cheesecake.jpg',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Red apples',
                'description' => 'High quality red apples approx.1kg',
                'price' => 2.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 10,
                'picture' => 'red-apples.png',
            ],
            [
                'store_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Low-fat milk',
                'description' => 'Nestle low-fat milk (1L)',
                'price' => 3.50,
                'sale_price' => 3.00,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'low-fat-milk.webp',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Vegetable oil',
                'description' => 'Vegetable cooking oil (1L)',
                'price' => 3.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'vege-oil.jpeg',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Heinz Tomato Ketchup',
                'description' => 'Heinz tomato ketchup 250g',
                'price' => 2.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'ketchup.webp',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Heinz Mayonnaise',
                'description' => 'Heinz mayonnaise 250g',
                'price' => 2.50,
                'sale_price' => 2.00,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'mayo.jpeg',
            ],
            [
                'store_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Red kidney beans',
                'description' => 'Tropical Sun Red kidney beans 1kg',
                'price' => 2.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'red-beans.jpg',
            ],
            [
                'store_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'title' => 'Organic coconut cooking oil',
                'description' => 'Carrington farms organic coconut cooking oil 1l',
                'price' => 2.50,
                'sale_price' => null,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'coco-oil.jpeg',
            ],
            [
                'store_id' => 9,
                'created_at' => '2021-08-29 15:59:21',
                'updated_at' => null,
                'title' => 'Danone fruits',
                'description' => 'Danone 4 flavors pack of 12p',
                'price' => 4.50,
                'sale_price' => 3.50,
                'available_day_from' => Carbon::now(),
                'available_day_to' => Carbon::tomorrow(),
                'available_hour_from' => '16:00:00',
                'available_hour_to' => '20:00:00',
                'stock' => 20,
                'picture' => 'danone.jpg',
            ],
        ]);
    }
}
