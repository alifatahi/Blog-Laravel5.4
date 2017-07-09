<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('welcome',compact('tasks'));
    }


    public function show(Task $task)
    {
        return view('show',compact('task'));
    }

}
