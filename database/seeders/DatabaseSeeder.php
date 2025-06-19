<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'user_name' => 'tonet',
            'password' => bcrypt('1234'),
        ]);

        User::create([
            'user_name' => 'lentrix',
            'password' => bcrypt('1234'),
        ]);

        $this->call(OfficeSeeder::class);


    }
}
