<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }
    public function show($class)
    {
        return view('show', [
            'task' => Task::find($class),
        ]);
    }
    public function delete($id)
    {
        $task=Task::find($id);
        $task->delete();
        return view('success');
    }

    public function order()
    {
        return view('order', [
            'tasks' => \App\Models\Task::orderBy('title')->get(),
        ]);
    }
}
