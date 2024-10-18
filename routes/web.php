<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
});

Route::get('/login', function () {
    return view('login');
});
