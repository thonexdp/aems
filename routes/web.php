<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CollegesController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/signin', function () {
    return view('auth.signin');
});

Route::get('/', [AttendanceController::class , 'index'] )->name('attendance.index');

Route::group(['prefix' => 'dashboard'], function() { // Route::group(['prefix' => 'dashboard','middleware' => ['authuser']], function() {
    Route::get('/', [DashboardController::class , 'index'] )->name('dashboard.index');
});

Route::group(['prefix' => 'users'], function() { 
    Route::group(['prefix' => 'faculty'], function() { 
        Route::get('/', [UsersController::class , 'f_index'] )->name('users.faculty.index');
    });
    Route::group(['prefix' => 'staff'], function() { 
        Route::get('/', [UsersController::class , 's_index'] )->name('users.staff.index');
    });
    Route::group(['prefix' => 'students'], function() { 
        Route::get('/', [UsersController::class , 'st_index'] )->name('users.students.index');
    });

});


Route::group(['prefix' => 'programs'], function() { 
    Route::get('/', [ProgramController::class , 'index'] )->name('programs.index');
});



Route::group(['prefix' => 'colleges'], function() { 
    Route::get('/', [CollegesController::class , 'index'] )->name('colleges.index');
});



Route::group(['prefix' => 'announcement'], function() { 
    Route::get('/', [AnnouncementController::class , 'index'] )->name('announcement.index');
});


Route::group(['prefix' => 'evaluation'], function() { 
    Route::get('/', [EvaluationController::class , 'index'] )->name('evaluation.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
