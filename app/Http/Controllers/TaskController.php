<?php

namespace App\Http\Controllers;

use App\Task;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    //Sample Index for Show Tasks
    public function index()
    {
        $tasks = Task::all();

        return view('welcome',compact('tasks'));
    }


    //Show Simple Task
    public function show(Task $task)
    {
        return view('show',compact('task'));
    }

}
