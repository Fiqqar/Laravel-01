<?php

use App\Http\Controllers\Api\ApiStudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students', [ApiStudentController::class,'index']);
Route::get('/students/{id}', [ApiStudentController::class,'show']);