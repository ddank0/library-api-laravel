<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//login
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register'])->middleware('auth:sanctum');

//
Route::apiResource('/books', BooksController::class);

//Route::get('/books', [BooksController::class, 'getBooks'])->middleware('auth:sanctum');
//Route::post('/books', [BooksController::class, 'registerBooks'])->middleware('auth:sanctum');

