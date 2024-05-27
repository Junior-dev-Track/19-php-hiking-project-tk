<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/users', 'App\Http\Controllers\UserController@showUsers');

Route::get('/hikes/add', function () {
    return view('addHike');
});

Route::post('/hikes/add', 'App\Http\Controllers\HikeController@addHike');

Route::get('/hikes', 'App\Http\Controllers\HikeController@showHikes');


