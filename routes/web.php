<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.index');
Route::get('/user/',[RegisterController::class,'showRegistrationForm'])->name('user.register');
Route::get('/memo', function() {
    return view("memo");
})->name('memo.index');

Auth::routes();