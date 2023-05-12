<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
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

    public function store(TaskFormRequest $request)
    {
        $data = $request->validated();
        Task::create($data);

        return redirect()->route('tasks.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(TaskFormRequest $request, Task $task)
    {
        $data = $request->validated();
        $task->update($data);

        return redirect()->route('tasks.index');
    }

    public function archive(string $id)
    {
        $record = Task::findOrFail($id);
        $record->is_archived = true;
        $record->save();

        return redirect()->route('tasks.index');
    }

    public function restore(string $id)
    {
        $record = Task::findOrFail($id);
        $record->is_archived = false;
        $record->is_done = false;
        $record->due_date = Carbon::now()->addDay();
        $record->save();

        return redirect()->route('tasks.index');
    }

    public function finish(string $id)
    {
        $record = Task::findOrFail($id);
        $record->is_done = true;
        $record->save();

        return redirect()->route('tasks.archived');
    }

    public function destroy(string $id)
    {
        $sanitizedId = intval($id);
        Task::where('id', $sanitizedId)->delete();

        return redirect()->route('tasks.archived');
    }
}
