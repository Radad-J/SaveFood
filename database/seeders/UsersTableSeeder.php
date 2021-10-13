<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Fill data
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'store_id' => null,
                'name' => 'Radad',
                'email' => 'radad1998@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 2,
                'store_id' => null,
                'name' => 'Bob',
                'email' => 'bob@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('87654321'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 2,
                'store_id' => null,
                'name' => 'Mike',
                'email' => 'mike@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12312312'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 2,
                'store_id' => null,
                'name' => 'Leila',
                'email' => 'leila@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12121212'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 1,
                'name' => 'John',
                'email' => 'John@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('32132132'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 2,
                'name' => 'Sam',
                'email' => 'sam2000@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ], [
                'role_id' => 3,
                'store_id' => 3,
                'name' => 'Maddie',
                'email' => 'maddie_maddie@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ], [
                'role_id' => 3,
                'store_id' => 4,
                'name' => 'Alex',
                'email' => 'Alex1998@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('98765432'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 5,
                'name' => 'Sarah',
                'email' => 'sarah1998@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 6,
                'name' => 'Nora',
                'email' => 'nora2000@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 7,
                'name' => 'Maximus',
                'email' => 'maximus1980@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 8,
                'name' => 'Sarah',
                'email' => 'sarah1999@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 9,
                'name' => 'Jackson',
                'email' => 'jackson1990@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 10,
                'name' => 'Mosas',
                'email' => 'mosas1985@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
            [
                'role_id' => 3,
                'store_id' => 11,
                'name' => 'Maria',
                'email' => 'maria4545@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => null,
                'avatar' => 'default_avatar.png',
            ],
        ]);
    }
}

