<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentPersonController;
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
Route::get('/', function () {
    return view('main');
});

//صفحة  الرئيسية
Route::get('/main', function () {
    return view('main');
});
// مكلف
Route::get('/assignment_persons', [AssignmentPersonController::class, 'index']);
Route::post('/assignment_persons/store', [AssignmentPersonController::class, 'store']);
Route::get('/assignment_persons/multyOccupation', [AssignmentPersonController::class, 'create']);
Route::get('/assignment_persons/view/{id}', [AssignmentPersonController::class, 'show']);

// مستخدم
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/roles', [\App\Http\Controllers\RoleController::class, 'index']);
//اعدادت الضريبة
Route::get('/tax_settings', [\App\Http\Controllers\TaxSettingsController::class, 'index']);
Route::post('/tax_settings/addPercentege', [\App\Http\Controllers\TaxSettingsController::class, 'store']);
