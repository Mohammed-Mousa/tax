<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

//صفحة تسجيل الدخول
Route::get('/login', function () {
    return view('login');
});

//صفحة  الرئيسية
Route::get('/main', function () {
    return view('main');
});
