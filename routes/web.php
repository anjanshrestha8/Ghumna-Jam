<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/cre', function () {
    return view('welcome');
});
