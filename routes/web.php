<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// client

Route::get('client', function () {
    return view('client_index');
});

Route::get('history', function () {
    return view('client_history');
});

Route::get('transfer', function () {
    return view('client_transaction');
});

Route::get('profile', function () {
    return view('client_profile');
});

// admin

Route::get('admin', function () {
    return view('admin_index');
});

Route::get('test', function () {
    return view('test');
});

