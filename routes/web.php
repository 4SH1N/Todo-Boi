<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

Route::get('/', function () {
    # return view('welcome');
    return 'Todo-Boi';
});

Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
