<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts/edit', [ContactController::class, 'edit']);
Route::post('/contacts/store', [ContactController::class, 'store']);
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::delete('/contacts/delete', [ContactController::class, 'destroy']);