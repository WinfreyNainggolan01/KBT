<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
});


Route::get('/admin-users', function () {
    return view('admin_users');
});

Route::get('/admin-tiket', function () {
    return view('admin_tiket');
});

Route::get('/admin-baru', function () {
    return view('admin_baru');
});
