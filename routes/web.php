<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'This is Home Page';
})->name('home');

Route::resource('/posts', App\Http\Controllers\PostController::class);
