<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');;

Route::get('/user_list', [ UserController::class, 'index'])->name('user_list');
Route::get('/user_form', [ UserController::class, 'create'])->name('user_form');
Route::post('/user_add', [ UserController::class, 'store'])->name('user_add');

Route::get('/task_list', [ TaskController::class, 'index'])->name('task_list');
Route::get('/task_form', [ TaskController::class, 'create'])->name('task_form');
Route::post('/task_add', [ TaskController::class, 'store'])->name('task_add');
