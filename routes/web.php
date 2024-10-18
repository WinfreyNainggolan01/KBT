<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/payment', function () {
    return view('payment');
});