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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('groupfive', 'App\Http\Controllers\StaffController');
Route::resource('cpu', 'App\Http\Controllers\CpuController');
Route::resource('gpu', 'App\Http\Controllers\GpuController');
Route::resource('ram', 'App\Http\Controllers\RamController');
Route::resource('storage', 'App\Http\Controllers\StorageController');
Route::resource('peripheral', 'App\Http\Controllers\PeripheralController');