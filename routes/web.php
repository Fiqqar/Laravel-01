<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});
Route::get('/student', function () {
    return view('student', [
        'title' => 'Student'
    ]);
});

