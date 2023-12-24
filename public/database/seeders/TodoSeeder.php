<?php

namespace Database\Seeders;

use App\Models\Todo;

use App\Models\User;

use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = User::all();

        foreach ($users as $user) {
            $categories = $user->categories;

            foreach ($categories as $category) {
                Todo::factory()->count(2)->create([
                    'user_id' => $user->id,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
