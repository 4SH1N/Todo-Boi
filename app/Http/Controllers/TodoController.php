<?php

namespace App\Http\Controllers;

use App\Models\Todo;
# use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        # return view('todos.index', ['todos' => $todos]);
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show', ['todo' => $todo]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        Todo::create($request->validated());
        # return redirect()->route('todos.index');
        return redirect()->route('todos.index')->with('success', 'Todo Created successfuly.');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request, Todo $todo)
    {
        $todo->update($request->validated());
        return redirect()->route('todos.show', $todo)->with('success', 'Todo updated successfuly');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully');
    }
}
