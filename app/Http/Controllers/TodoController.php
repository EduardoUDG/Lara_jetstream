<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodo;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.todoIndex', compact('todos'));
    }

    public function create()
    {
        return view('todos.todoCreate');
    }

    public function store(StoreTodo $request, Todo $todo)
    {
        $todo->create( $request->all() );
        return redirect()->route('todos.index');
    }

    public function show(Todo $todo)
    {
        //
    }

    public function edit(Todo $todo)
    {
        //
    }

    public function update(Request $request, Todo $todo)
    {
        //
    }

    public function destroy(Todo $todo)
    {
        //
    }
}
