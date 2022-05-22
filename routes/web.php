<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});



Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cadastrar', [App\Http\Controllers\UserController::class, 'create'])->name('create');
Route::post('store', [App\Http\Controllers\UserController::class, 'store'])->name('store');
Route::post('/edite/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
Route::get('/edite/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');
Route::get('edite/{id}', [App\Http\Controllers\UserController::class, 'edite'])->name('edite');
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
