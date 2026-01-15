<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminSubjectController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/profile', [HomeController::class, 'profile']);
    Route::get('/contact', [HomeController::class, 'contact']);

    Route::get('/student', [StudentController::class, 'index']);
    Route::resource('/guardian', GuardianController::class);
    Route::resource('/classroom', ClassroomController::class);
    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::get('/subject', [SubjectController::class, 'index']);

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::resource('/dashboard/classroom', AdminClassroomController::class);
    Route::resource('/dashboard/guardian', AdminGuardianController::class);
    Route::resource('/dashboard/student', AdminStudentController::class);
    Route::resource('/dashboard/teacher', AdminTeacherController::class);
    Route::resource('/dashboard/subject', AdminSubjectController::class);
});
