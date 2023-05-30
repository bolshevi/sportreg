<?php

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

//Домашняя страница
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Роут бронирование мест
Route::get('/register/{sport}', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');

Route::post('/register/{sport}', [App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');

//Роут админин панели
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
//Удаление бронирования
Route::delete('/admin/register/{id}', [App\Http\Controllers\AdminController::class, 'deleteRegister'])->name('admin.deleteRegister');