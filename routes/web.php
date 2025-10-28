<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ScheduleController;

Route::get('/', function () {
    return redirect('/classes');
});

Route::resource('classes', ClassroomController::class);
Route::resource('schedules', ScheduleController::class);