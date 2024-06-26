<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);


Route::get('/user', [App\Http\Controllers\Api\UsersController::class, 'index']);
Route::get('/user/{id}', [App\Http\Controllers\Api\UsersController::class, 'show']);
Route::put('/user/{id}', [App\Http\Controllers\Api\UsersController::class, 'update']);
Route::delete('/user/{id}', [App\Http\Controllers\Api\UsersController::class, 'destroy']);

Route::group(['middleware' => 'auth:api'], function () {
});

Route::post('/book', [App\Http\Controllers\Api\BookingController::class, 'store']);
