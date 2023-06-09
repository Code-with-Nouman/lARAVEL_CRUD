<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('insert');
});
Route::post('store',[PostController::class, 'store']);
Route::get('show',[PostController::class, 'show']);
Route::get('delete/{id}',[PostController::class, 'destroy']);
Route::get('edit/{id}',[PostController::class, 'edit']);
Route::post('update/{id}',[PostController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::get('register', [AuthController::class, 'register_view'])->name('register');





