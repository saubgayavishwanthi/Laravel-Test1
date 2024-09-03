<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/StudentSavePage', function () {
    return view('index');
});

Route::controller(StudentController::class)->group(function () {
    // Define your routes here
    Route::get('/AddStudent','Addstudent');
    Route::post('/saveStudent','save')->name('student.save');
});