<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public $categories = [
        [
            'id' => 1,
            'category' => 'Ban linh',
            'user_id' => 1,
            'color' => '#4478ab',
        ],
        [
            'id' => 2,
            'category' => 'Binh tinh',
            'user_id' => 1,
            'color' => '#78169D',
        ],
        [
            'id' => 3,
            'category' => 'Buong',
            'user_id' => 1,
            'color' => '#78149D',
        ],
    ];

    private function getCategories()
    {
        return $this->categories;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getCategories() as $category) {
            Category::create($category);
        }
    }
}