<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('/posts', App\Http\Controllers\PostController::class);
Route::resource('/users', App\Http\Controllers\UsersController::class);
Route::resource('/home', App\Http\Controllers\HomeController::class);

//Route::get('/posts','App\Http\Controllers\ApiController@posts')->name('posts.index');
Route::post('/api/initPage','App\Http\Controllers\ApiController@initPage');

