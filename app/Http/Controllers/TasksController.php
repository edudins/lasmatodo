<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all()
        ]);
    }

    public function archived()
    {
        return view('tasks.archived', [
            'tasks' => Task::all()
        ]);
    }

    public function create(): string
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $task = new Task();

        $task->title = $request->input('title');
        $task->due_date = $request->input('due_date');
        $task->description = $request->input('description');

        $task->save();

        return redirect()->route('tasks.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
