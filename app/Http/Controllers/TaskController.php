<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TaskController extends Controller
{
    public function index(){

        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));

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
}

