<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', 'HomeController@getIndex')->name('home');

Route::get('/portfolio-cmo', [PortfolioController::class, 'getCMO'])->name('portfolio-cmo');
Route::get('/portfolio-cmo/graphic-design', [PortfolioController::class, 'getCMOGD'])->name('portfolio-cmo-gd');
Route::get('/portfolio-cmo/photo-design', [PortfolioController::class, 'getCMOPD'])->name('portfolio-cmo-pd');
Route::get('/portfolio-avd', [PortfolioController::class, 'getAVD'])->name('portfolio-avd');
Route::get('/portfolio-nmd', [PortfolioController::class, 'getNMD'])->name('portfolio-nmd');
Route::get('/portfolio-gmb', [PortfolioController::class, 'getGMB'])->name('portfolio-gmb');

Route::get('/portfolio-cmo/{student}', [PortfolioController::class, 'getCMODetail'])->name('portfolio-cmo-detail');

Route::get('/yearbook/{id?}', [YearbookController::class , 'getIndex'])->name('yearbook');
Route::get('/jobs', [JobController::class, 'getIndex'])->name('jobs');
