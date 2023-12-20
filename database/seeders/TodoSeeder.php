<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{
    
    public $todos = [
        [
            'id' => 1,
            'user_id' => 1,
            'category_id' => 1,
            'todo' => 'Buong',
            'is_completed' => true,
        ],
        [
            'id' => 2,
            'user_id' => 1,
            'category_id' => 2,
            'todo' => 'Ban linh',
            'is_completed' => true,
        ],
        [
            'id' => 3,
            'user_id' => 1,
            'category_id' => 3,
            'todo' => 'Binh tinh',
            'is_completed' => false,
        ],
    ];

    private function getTodos()
    {
        return collect($this->todos);
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getTodos() as $todo) {

            Todo::create($todo);
        }
    }
}