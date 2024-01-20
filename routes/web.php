<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});


Route::get('/todos', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/store', [TodoController::class, 'store']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::put('/update/{id}', [TodoController::class, 'update']);
Route::delete('/delete/{id}', [TodoController::class, 'delete']);