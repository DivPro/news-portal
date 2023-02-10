<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'index']);
Route::get('/news/{id}', 'App\Http\Controllers\NewsController@show');
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', 'App\Http\Controllers\CategoryController@show');