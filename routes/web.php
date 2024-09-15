<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});


Route::resource('jobs',JobController::class);

Route::get('/contact', function () {
    return view('contact');
});


