<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [AttendanceController::class , 'index'] )->name('attendance.index');

Route::group(['prefix' => 'dashboard'], function() { // Route::group(['prefix' => 'dashboard','middleware' => ['authuser']], function() {
    Route::get('/', [DashboardController::class , 'index'] )->name('dashboard.index');
});

Route::group(['prefix' => 'users'], function() { // Route::group(['prefix' => 'dashboard','middleware' => ['authuser']], function() {
    Route::get('/faculty', [UsersController::class , 'f_index'] )->name('users.faculty.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
