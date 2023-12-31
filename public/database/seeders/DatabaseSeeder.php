<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TodoSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TodoSeeder::class,
        ]);
    }
}

