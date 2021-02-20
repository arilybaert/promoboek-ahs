<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ADMIN BACKOFFICE
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/admin/make/admin/{user}', [App\Http\Controllers\AdminController::class, 'makeAdmin'])->name('admin.make')->middleware('admin');
Route::get('/admin/make/user/{user}', [App\Http\Controllers\AdminController::class, 'makeUser'])->name('user.make')->middleware('admin');
Route::get('/admin/toggle-account/{user}', [App\Http\Controllers\AdminController::class, 'makeAdmin'])->name('admin.toggle.account')->middleware('admin');

Route::get('/admin/jobs', [App\Http\Controllers\AdminController::class, 'getJobs'])->name('admin.jobs')->middleware('admin');

// STUDENT BACKOFFICE
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student')->middleware('student');
Route::post('/student/edit/{user}', [App\Http\Controllers\StudentController::class, 'postUser'])->name('student.edit')->middleware('student');
Route::get('/student/edit/image/{image}', [App\Http\Controllers\StudentController::class, 'getUserImage'])->name('portfolio.image')->middleware('student');
Route::post('/student/edit/image/{image}', [App\Http\Controllers\StudentController::class, 'postUserImage'])->name('portfolio.image.edit')->middleware('student');
Route::get('/student/image/new', [App\Http\Controllers\StudentController::class, 'createUserImage'])->name('portfolio.image.new')->middleware('student');
Route::post('/student/image/new', [App\Http\Controllers\StudentController::class, 'postUserNewImage'])->name('portfolio.image.create')->middleware('student');
Route::get('/student/image/delete/{id}', [App\Http\Controllers\StudentController::class, 'imageDelete'])->name('portfolio.image.delete')->middleware('student');

// ACCOUNT VERIFICATION
Route::get('/student/pending', [App\Http\Controllers\StudentController::class, 'getPendingVerification'])->name('pending-verification');
