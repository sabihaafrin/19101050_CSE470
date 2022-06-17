<?php

use Illuminate\Support\Facades\Route;

Route::view('/', function () {
    return view('welcome');
});
