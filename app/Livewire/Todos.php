<?php

namespace App\Livewire;

use App\Repo\TodoRepo;
use App\Models\Todo;
use App\Repo\CategoryRepo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class Todos extends Component
{
    protected $repo;
    protected $categoryRepo;
    #[Rule('required|min:3')] public $todo = '';
    public $category_id = null;
    #[Rule('required|min:3')] public $editedTodo;
    public $editedCategory;
    public $selectedCategoryId;
    public $validatedCategory = null;
    public $edit;

    public function boot(TodoRepo $repo, CategoryRepo $categoryRepo) {
        $this->repo = $repo;
        $this->categoryRepo = $categoryRepo;
    }

    public function addTodo() {
        $validated = $this->validate([
            'todo' => 'required|min:3',
            'category_id' => 'exists:categories,id|nullable',
        ]);
        $this->category_id = ($validated['category_id'] == 0) ? null : $validated['category_id'];

        $this->repo->save($validated);
        $this->todo = '';
        $this->category_id = null;
    }
    

    public function editTodo($todoId) {
        $this->edit = $todoId;
        $this->editedTodo = $this->repo->getTodo($todoId)->todo;
        $this->editedCategory = $this->repo->getTodo($todoId)->category_id;
    }

    public function updateTodo($todoId) {
        $validated = $this->validate([
            'editedTodo' => 'required|min:3',
            'editedCategory' => 'nullable|exists:categories,id',
        ]);

        if ($validated['editedCategory'] === '') {
            $validated['editedCategory'] = null;
        }
        
        $this->repo->update($todoId, $validated['editedTodo'], $validated['editedCategory']);
        $this->cancelEdit();
    }

    public function cancelEdit() {
        $this->edit = '';
    }

    public function deleteTodo($todoId) {
        $this->repo->delete($todoId);
    }
    
    public function markCompleted($todoId) {
        return $this->repo->completed($todoId);
    }

    // Function to filter todos based on the selected category
    public function filterByCategory($categoryId)
    {
        $this->selectedCategoryId = $categoryId;
    }

    // Function to retrieve todos based on the selected category
    public function getFilteredTodos()
    {
        if ($this->selectedCategoryId === 'all') {
            return Todo::all();
        } elseif ($this->selectedCategoryId === 'none') {
            return Todo::whereNull('category_id')->get();
        } elseif ($this->selectedCategoryId) {
            return Todo::where('category_id', $this->selectedCategoryId)->get();
        } else {
            return Todo::all();
        }
    }
    
    public function render()
    {
        $todos = $this->getFilteredTodos();
        $categories = $this->categoryRepo->fetchAllCategories();
    
        return view('livewire.todo', compact('todos', 'categories'));
    }

}
