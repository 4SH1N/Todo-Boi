<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    # return view('welcome');
    return 'Todo-Boi';
});

Route::get('/todos', function () {
    return 'Todos';
});

Route::get('/todos/{id}', function ($id) {
    return "Todo #{$id}";
});
