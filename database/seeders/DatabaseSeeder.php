<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolesTableSeeder::class,
            CategoriesTableSeeder::class,
            StoresTableSeeder::class,
            UsersTableSeeder::class,
            PacksTableSeeder::class,
            ReservationsTableSeeder::class,
            CategoryPackTableSeeder::class,
            FavouritesTableSeeder::class,
            RatingsTableSeeder::class,
            NewsLettersTableSeeder::class,
        ]);
    }
}
