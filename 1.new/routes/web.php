<?php

use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/tasks", taskController::class);
