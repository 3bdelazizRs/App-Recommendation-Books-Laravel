<?php

use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\userController;

Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'show']);
// ------------- Auth APIs --------------
Route::post('/auth/login', [UserController::class, 'loginUser']);
Route::post('/auth/register', [UserController::class, 'createUser']);

// ------------- Comment Api ---------------

Route::post('/books/comments', [CommentController::class, 'store']);
Route::post('/books/getcomments', [CommentController::class, 'getCommentsByBookId']);





