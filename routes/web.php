<?php

use App\Http\Controllers\HealthCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::singleton('ping', HealthCheck::class);
