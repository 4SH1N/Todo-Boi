<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

Route::get('/', function () {
    # return view('welcome');
    return 'Todo-Boi';
});

# Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

# Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

# Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');

# Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

# Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

# Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');

# Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

Route::resource('todos', TodoController::class)->middleware('todo.access');
