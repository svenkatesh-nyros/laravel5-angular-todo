<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use DB;

class TodoController extends Controller
{
    // get todo's onload

    public function index()
    {
        $todo_list = DB::table('todos')->get();
        return view('todo', ['todos' => $todo_list]);
    }

    // save todo
    public function save(Request $request)
    {
        $todo = New Todo;
        $todo->name = $request->todo_input;
        if($todo->save()) {
            return redirect('/');
        }
    }

    // delete todo
    public function delete($id)
    {
        Todo::findOrFail($id)->delete();
        return redirect('/');
    }
}
