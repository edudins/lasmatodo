<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    private static function getTasks() {
        return [
            ['id'=>1, 'title'=>'Clean house.', 'due_date'=>'2023-05-15', 'description'=>"Don't forget to wash the windows.", 'done'=>true],
            ['id'=>2, 'title'=>'Buy groceries', 'due_date'=>'2023-05-20', 'description'=>"", 'done'=>false],
            ['id'=>3, 'title'=>'Take cat to the vet', 'due_date'=>'2023-05-23', 'description'=>"", 'done'=>false],
            ['id'=>4, 'title'=>'Take out trash', 'due_date'=>'2023-05-09', 'description'=>"", 'done'=>false],
        ];
    }

    public function index()
    {
        return view('tasks.index', [
            'tasks'=>self::getTasks()
        ]);
    }

    public function archived()
    {
        return view('tasks.archived', [
            'tasks'=>self::getTasks()
        ]);
    }

    public function create(): string
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        //
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
