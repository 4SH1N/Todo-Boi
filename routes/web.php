<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

Route::get('/', function () {
    # return view('welcome');
    return 'Todo-Boi';
});

Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
