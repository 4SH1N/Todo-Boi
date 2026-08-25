<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

Route::get('/', function () {
    # return view('welcome');
    return 'Todo-Boi';
});

Route::get('/todos', [TodoController::class, 'index']);

Route::get('/todos/{todo}', function (Todo $todo) {
    return $todo;
});
