<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TaskController::class, 'index']);
Route::Post('/task', [TaskController::class, 'store']);
Route::get('/task/{id}/completed', [TaskController::class, 'completed']);
Route::get('/task/{id}/delete', [TaskController::class, 'delete']);
Route::post('/task/{id}/toggle', [TaskController::class, 'toggleTask'])->name('tasks.toggle');
