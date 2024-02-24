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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/insert_task', [TaskController::class, 'create']);
// Route::post('/store_task', [TaskController::class, 'store']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/save_user', [UserController::class, 'save']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/check_user', [UserController::class, 'check']);

// Authentication

Route::get('/', [UserController::class, 'show']);

Route::get('/insert_task', [TaskController::class, 'create'])->middleware('auth');
Route::post('/store_task', [TaskController::class, 'store'])->middleware('auth');

Route::get('task/edit/{id}', [TaskController::class, 'edit'])->middleware('auth');
Route::post('task/update/{id}', [TaskController::class, 'update'])->middleware('auth');
Route::get('task/delete/{id}', [TaskController::class, 'destroy'])->middleware('auth');
Route::get('logout', [UserController::class, 'destroy']);
