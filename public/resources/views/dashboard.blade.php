<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Todo List Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg">
                <div class=" text-gray-900">
                    @livewire('category')
                    @livewire('todo')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
