<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Todo::create($validatedData);

        return redirect()->route('todos.index')->with('success', 'To-do created successfully.');
    }


    public function edit(Todo $todo) {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $todo->update($request->all());
        return redirect()->route('todos.index')->with('success', 'To-do updated successfully.');
    }

    public function destroy(Todo $todo) {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'To-do deleted successfully.');
    }
}
