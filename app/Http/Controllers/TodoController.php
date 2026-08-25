<?php

namespace App\Http\Controllers;

use App\Models\Todo;
# use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function show(Todo $todo)
    {
        return view('todos.show', ['todo' => $todo]);
    }
}
