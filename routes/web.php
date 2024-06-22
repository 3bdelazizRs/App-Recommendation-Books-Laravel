<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\userController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('signup', [AuthController::class,'signup'])->name('signup');
Route::post('signin', [AuthController::class,'signin'])->name('signin');


//For The APIs : 

