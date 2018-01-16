<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function index(){

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));

    }

    public function show(Task $task){

        return view('tasks.show' ,compact('task'));
;
    }
    public function edit($id){
        if($user->hasrole('Admins')){
        $task = Task::find($id);

        return view('tasks.edit',compact('task'));
    }
        else return view('tasks.index', compact('tasks'));
    }

    public function store(){

        $this->validate(request(),[
            'task' => 'required|max:100',
            'unit' => 'required',
            'status' => 'required',
            'date' => 'required',
            'mainOrg' => 'required',
            'helper'
            ]);
        Task::create(request(['task','unit','status','date','mainOrg','helper']));

    return redirect('/tasks');
    }

    public function update(Request $request, $id){
        $this->validate(request(),[
            'task' => 'required|max:100',
            'unit' => 'required',
            'status' => 'required',
            'date' => 'required',
            'mainOrg' => 'required',
            'helper'
        ]);

        Task::find($id)->update($request->all());
        return redirect('/tasks');
    }
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->route('tasks.index');
    }
}

