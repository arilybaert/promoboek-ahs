<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\YearbookController;
use App\Http\Controllers\JobController;
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
Route::redirect('/', '/home');

// FREE ROUTES
Route::get('/home', [HomeController::class, 'getIndex'])->name('home');

Route::get('/changePassword', [HomeController::class, 'getChangePassword'])->name('changePassword-form')->middleware('admin');
Route::post('/changePassword', [HomeController::class,'changePassword'])->name('changePassword')->middleware('admin');

Route::get('/changePassword/student', [HomeController::class, 'getChangePasswordStudent'])->name('changePassword-form-student')->middleware('student');
Route::post('/changePassword/student', [HomeController::class,'changePassword'])->name('changePassword-student')->middleware('student');

// course home
Route::get('/portfolio-cmo', [PortfolioController::class, 'getCMO'])->name('portfolio-cmo');
Route::get('/portfolio-cmo/graphic-design', [PortfolioController::class, 'getCMOGD'])->name('portfolio-cmo-gd');
Route::get('/portfolio-cmo/photo-design', [PortfolioController::class, 'getCMOPD'])->name('portfolio-cmo-pd');
Route::get('/portfolio-avd', [PortfolioController::class, 'getAVD'])->name('portfolio-avd');
Route::get('/portfolio-nmd', [PortfolioController::class, 'getNMD'])->name('portfolio-nmd');
Route::get('/portfolio-gmb', [PortfolioController::class, 'getGMB'])->name('portfolio-gmb');
Route::get('/portfolio-gmb/printmedia', [PortfolioController::class, 'getGMBPM'])->name('portfolio-gmb-pm');
Route::get('/portfolio-gmb/crossmedia', [PortfolioController::class, 'getGMBCM'])->name('portfolio-gmb-cm');

// student detail
Route::get('/portfolio-cmo/{user}', [PortfolioController::class, 'getCMODetail'])->name('portfolio-cmo-detail');
Route::get('/portfolio-gmb/{user}', [PortfolioController::class, 'getCMODetail'])->name('portfolio-gmb-detail');
Route::get('/portfolio-nmd/{user}', [PortfolioController::class, 'getNMDDetail'])->name('portfolio-nmd-detail');
Route::get('/portfolio-avd/{user}', [PortfolioController::class, 'getAVDDetail'])->name('portfolio-avd-detail');

Route::get('/yearbook/{id?}', [YearbookController::class , 'getIndex'])->name('yearbook');
Route::get('/jobs', [JobController::class, 'getIndex'])->name('jobs');
Route::get('/jobs/new', [JobController::class, 'createJob'])->name('jobs-new');
Route::post('job/new', [JobController::class, 'postNewJob'])->name('post-new-job');
Route::get('job/confirmation', [JobController::class, 'jobConfirmation'])->name('job-confirmation');

// AUTHENTICATION
Auth::routes();


// ADMIN BACKOFFICE
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/admin/cmo', [App\Http\Controllers\AdminController::class, 'getCMO'])->name('adminCMO')->middleware('admin');
Route::get('/admin/avd', [App\Http\Controllers\AdminController::class, 'getAVD'])->name('adminAVD')->middleware('admin');
Route::get('/admin/nmd', [App\Http\Controllers\AdminController::class, 'getNMD'])->name('adminNMD')->middleware('admin');
Route::get('/admin/gmb', [App\Http\Controllers\AdminController::class, 'getGMB'])->name('adminGMB')->middleware('admin');

Route::get('/admin/make/admin/{user}', [App\Http\Controllers\AdminController::class, 'makeAdmin'])->name('admin.make')->middleware('admin');
Route::get('/admin/make/user/{user}', [App\Http\Controllers\AdminController::class, 'makeUser'])->name('user.make')->middleware('admin');
Route::get('/admin/toggle-account/{user}', [App\Http\Controllers\AdminController::class, 'toggleUserAccount'])->name('admin.toggle.account')->middleware('admin');

// ADMIN JOBS
Route::get('/admin/jobs', [App\Http\Controllers\AdminController::class, 'getJobs'])->name('admin.jobs')->middleware('admin');
Route::get('/admin/jobs/{job}', [App\Http\Controllers\AdminController::class, 'getJobsDetail'])->name('admin.jobs.detail')->middleware('admin');
Route::post('/admin/jobs/{job}', [App\Http\Controllers\AdminController::class, 'postJobsDetail'])->name('admin.jobs.detail.save')->middleware('admin');
Route::get('/admin/jobs/accept/{job}', [App\Http\Controllers\AdminController::class, 'acceptJob'])->name('admin.jobs.accept')->middleware('admin');
Route::get('/admin/jobs/complete/{job}', [App\Http\Controllers\AdminController::class, 'completeJob'])->name('admin.jobs.complete')->middleware('admin');
Route::get('/admin/jobs/delete/{job}', [App\Http\Controllers\AdminController::class, 'deleteJob'])->name('admin.jobs.delete')->middleware('admin');

// ADMIN STUDENT EDIT
Route::get('/admin/user/edit/{user}', [App\Http\Controllers\AdminController::class, 'getUserInfo'])->name('admin.user.edit')->middleware('admin');
Route::post('/admin/user/edit/save', [App\Http\Controllers\AdminController::class, 'postUserInfo'])->name('admin.user.save')->middleware('admin');

// STUDENT BACKOFFICE
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student')->middleware('student');
Route::post('/student/edit/{user}', [App\Http\Controllers\StudentController::class, 'postUser'])->name('student.edit')->middleware('student');

Route::get('/student/edit/image/{image}', [App\Http\Controllers\StudentController::class, 'getUserImage'])->name('portfolio.image')->middleware('student');
Route::get('/student/edit/video/{video}', [App\Http\Controllers\StudentController::class, 'getUserVideo'])->name('portfolio.video')->middleware('student');

Route::post('/student/edit/image/{image}', [App\Http\Controllers\StudentController::class, 'postUserImage'])->name('portfolio.image.edit')->middleware('student');
Route::post('/student/edit/video/{video}', [App\Http\Controllers\StudentController::class, 'postUserVideo'])->name('portfolio.video.edit')->middleware('student');

Route::get('/student/image/new', [App\Http\Controllers\StudentController::class, 'createUserImage'])->name('portfolio.image.new')->middleware('student');
Route::get('/student/video/new', [App\Http\Controllers\StudentController::class, 'createUserVideo'])->name('portfolio.video.new')->middleware('student');

Route::post('/student/image/new', [App\Http\Controllers\StudentController::class, 'postUserNewImage'])->name('portfolio.image.create')->middleware('student');
Route::post('/student/video/new', [App\Http\Controllers\StudentController::class, 'postUserNewVideo'])->name('portfolio.video.create')->middleware('student');

Route::get('/student/image/delete/{id}', [App\Http\Controllers\StudentController::class, 'imageDelete'])->name('portfolio.image.delete')->middleware('student');
Route::get('/student/video/delete/{id}', [App\Http\Controllers\StudentController::class, 'videoDelete'])->name('portfolio.video.delete')->middleware('student');

// ACCOUNT VERIFICATION
Route::get('/student/pending', [App\Http\Controllers\StudentController::class, 'getPendingVerification'])->name('pending-verification')->middleware('verification');

// EMAIL

Route::get('send-mail/{email}/{name}', [App\Http\Controllers\MailController::class, 'sendAccountActivation'])->name('send-account-activation');
// Route::get('send-mail/account-request/{first_name}/{last_name}', [App\Http\Controllers\MailController::class, 'sendNewAccountRequest'])->name('send-new-account-request');
