<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [ProfileController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/contact', [ProfileController::class, 'contact']);
