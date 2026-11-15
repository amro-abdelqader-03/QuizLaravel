<?php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('lecturers', LecturerController::class);