<?php

use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminSubjectController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


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
Route::get('/dashboard/guardian', [AdminGuardianController::class, 'index']);
Route::get('/dashboard/student', [AdminStudentController::class, 'index']);
Route::get('/dashboard/teacher', [AdminTeacherController::class, 'index']);
Route::get('/dashboard/subject', [AdminSubjectController::class, 'index']);