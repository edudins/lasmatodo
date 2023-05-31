<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

//Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
Route::get('/', function () { return view('home.index'); });
Route::get('/archived', [TasksController::class, 'archived'])->name('tasks.archived');
Route::post('/tasks/archive/{id}', [TasksController::class, 'archive'])->name('tasks.archive');
Route::post('/tasks/restore/{id}', [TasksController::class, 'restore'])->name('tasks.restore');
Route::post('/tasks/finish/{id}', [TasksController::class, 'finish'])->name('tasks.finish');

Route::resource('tasks', TasksController::class);
