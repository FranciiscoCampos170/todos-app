<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        //fetch all todos  from database
        //display them in the todos.index page
        $todos =  Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoId)
    {
        $todo = Todo::find($todoId);

        return view('todos.show')->with('todo', $todo);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5'
        ]);

        Todo::create($request->all());

        return redirect()->route('todos.index')->with('success', 'Task created succesfuly');
    }
    public function edit($todoId)
    {   $todo = Todo::whereId($todoId)->first();
        return view('todos.edit')->with('todo', $todo);
    }
    public function update(Request $request, $todoId)
    {
        $this->validate($request, [
            'name' => 'required|min:5'
        ]);

        $todo = Todo::FindOrFail($todoId);
        $todo->name = $request->name;
        $todo->description = $request->description;

        $todo->update();

        return redirect()->route('todos.index')->with('info', 'Task updated');
    }
    public function destroy($todoId)
    {
        $todo = Todo::findOrFail($todoId);
        $todo->delete();

        return redirect()->route('todos.index')->with('info', 'Task completed');
    }


}
