<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::resource('/users',[UserController::class]);
Route::post("/add",[UserController::class,'store']);
Route::post("/edit/{id}",[UserController::class,'update']);
Route::get("/get_users",[UserController::class,'index']);
Route::get("/delete/{id}",[UserController::class,'destroy']);