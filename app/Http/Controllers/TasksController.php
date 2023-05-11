<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class TasksController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $result = Task::where('due_date', '>', $now)
            ->where('is_done', false)
            ->where('is_archived', false)
            ->get();
        return view('tasks.index', [
            'tasks' => $result
        ]);
    }

    public function archived()
    {
        $now = Carbon::now();
        $result = Task::where('due_date', '<', $now)
            ->orWhere('is_done', true)
            ->orWhere('is_archived', true)
            ->get();
        return view('tasks.archived', [
            'tasks' => $result
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

    public function archive(string $id)
    {
        $record = Task::findOrFail($id);
        $record->is_archived = true;
        $record->save();

        return redirect()->route('tasks.archived');
    }

    public function destroy(string $id)
    {
        Task::where('id', $id)->delete();
        return redirect()->route('tasks.archived');
    }
}
