<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        Todo::create([
            'title' => $request->title,
            'is_done' => false
        ]);

        return redirect()->route('todos.index');
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update([
            'is_done' => !$todo->is_done
        ]);

        return redirect()->route('todos.index');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
