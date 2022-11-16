<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StationController;
use App\http\controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('add' ,[AdminController::class,'create']);
Route::get('get' ,[AdminController::class,'show']);
Route::get('getstation' ,[StationController::class,'showstation']);
Route::post('addstation' ,[StationController::class,'insertintostation']);
Route::post('adduser' ,[UserController::class,'create']);
Route::put('update/{id}' ,[StationController::class,'updatestation']);
Route::put('delete/{id}' ,[StationController::class,'deletestation']);
Route::get('showpeople' ,[UserController::class,'showpeople']);