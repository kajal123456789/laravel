<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
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
    return view('welcome');
});

// Route::get('/', function (){
//     return view('page-signin');
// });
// Route::get('login', 'App\Http\Controllers\Controller@login');

// Route::get('signup', 'App\Http\Controllers\Controller@signup');

// Route::post('post-login', 'App\Http\Controllers\Controller@postLogin')->name('login.post');

// Route::post('post-registration', [Controller::class, 'postRegistration'])->name('register.post');

// Route::post('post-login', [Controller::class, 'postLogin'])->name('login.post'); 

// Route::get('logout', [Controller::class, 'logout'])->name('logout');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('signup', [AuthController::class, 'signup'])->name('signup');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [AuthController::class, 'dashboard']);

