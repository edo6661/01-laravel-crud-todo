<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    function index() {
        return view('todo');
    }
    function create() {
        return view('create');
    }
    function store(Request $request) {
        $newTodo = Todo::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('/');
    }
    function edit($id) {
        $id = Todo::findOrfail($id);
        return view('actions/todo/edit', ['todo' => $id]);
    }
    function update(Request $request, $id) {
        $id = Todo::findOrFail($id);
        $id->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('/');
    }
    function delete($id) {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/');
    }
}
