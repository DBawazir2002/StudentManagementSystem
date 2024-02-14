<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassStudyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PublicNoticeController;
use App\Http\Controllers\UserController;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::controller(HomeController::class)->group(function(){
        Route::get('/','index');
        Route::get('/about','about');
        Route::get('/contact','contact');
        Route::get('/publicNotice/{publicNotice}','publicNotice');
    });

    Route::controller(AuthController::class)->group(function(){
        Route::get('/login','showLogin');
        Route::post('/login','login')->name('login');
        Route::post('/logout','logout')->name('logout');
    });

    Route::prefix('/admin')->middleware('auth')->group(function(){
        Route::get('/dashboard',[AdminController::class,'toAdmin'])->name('admin');
        Route::get('/profile',[AdminController::class,'getAdminProfileForm']);
        Route::put('/profile/{user}',[AdminController::class,'updateAdminProfile'])->name('updateAdminProfile');
        Route::get('/search',[AdminController::class,'getSearchForm']);
        Route::post('/search',[AdminController::class,'search'])->name('search');
        Route::resource('/classStudies',ClassStudyController::class);
        Route::resource('/students',UserController::class);
        Route::resource('/notices',NoticeController::class);
        Route::resource('/publicNotices',PublicNoticeController::class);
    });

    Route::prefix('student')->middleware('auth:student')->group(function(){
        Route::controller(StudentController::class)->group(function(){
        Route::get('/dashboard','index')->name('student');
        Route::get('/showStudentNotices','showStudentNotices')->name('student.notices');
        Route::get('/profile','showStudentProfile')->name('student.profile');
        Route::get('/changePassword','getChangePasswordForm')->name('student.changePasswordForm');
        Route::put('/changePassword/{student}','changePassword')->name('student.changePassword');
    });
});



