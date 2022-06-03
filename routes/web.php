<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web;
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/loginUser', [App\Http\Controllers\Auth\LoginController::class, 'loginUser'])->name('loginUser');

Route::middleware(['auth'])->group(function () {
    Route::get('/teacherDashboard', [TeacherController::class, 'teacherDashboard'])->name('teacherDashboard')->middleware('teacher');
    Route::get('/studentDashboard', [StudentController::class, 'studentDashboard'])->name('studentDashboard')->middleware('student');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout.perform');
});
