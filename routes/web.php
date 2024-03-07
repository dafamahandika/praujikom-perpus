<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('index');
});

Route::get('/login', [AuthController::class,'indexLogin'])->name('login');
Route::post('/auth/login', [AuthController::class, 'authLogin'])->name('authLogin');
Route::get('/register', AuthController::class,'indexRegister')->name('register');
Route::post('/store/register', AuthController::class, 'storeRegister')->name('storeRegister');
Route::get('/logout', AuthController::class, 'logout')->name('logout');


