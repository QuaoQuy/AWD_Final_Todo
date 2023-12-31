<?php

namespace Database\Seeders;

use App\Models\Category;

use App\Models\User;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Category::factory()->count(2)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
