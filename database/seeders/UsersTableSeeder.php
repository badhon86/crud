<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
                'name' => 'badhon sarkar',
                'email' => 'dcsoftbd@gmail.com',
                'password' => bcrypt('12345678'),
        ]);
    }
}
