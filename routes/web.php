<?php

use App\Http\Controllers\ProfileController;
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

$controller_path = 'App\Http\Controllers';

// login authentication user

Route::get('/', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');

// register user
Route::get('/register', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');

// home
Route::get('/home', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');

//account
Route::get('/account', $controller_path . '\pages\AccountSettings@index')->name('page-account');
// plans 
Route::get('/plans', $controller_path . '\plans\plans@index')->name('plans');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/payment', 'PaymentController@index');
Route::post('/charge', 'PaymentController@charge');
require __DIR__ . '/auth.php';
