<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
Route::get('/archived', [TasksController::class, 'archived'])->name('tasks.archived');

Route::resource('tasks', TasksController::class);
