<?php

use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * Authenticated
 */
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::get('/registrar', [RegisterController::class, 'index'])->name('auth.register');
Route::get('/esqueceu-a-senha', [ForgetPasswordController::class, 'index'])->name('auth.forget');
Route::get('/resetar-a-senha', [ResetPasswordController::class, 'index'])->name('auth.reset');
