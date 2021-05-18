<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisteredUserController;
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
    return redirect('register');
});

Route::get('/adminreport', [UserController::class, 'index'])->name('adminreport');

Route::get('/register', [RegisteredUserController::class, 'index']);

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

