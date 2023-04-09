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
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('test', [App\Http\Controllers\Api\TestController::class, 'test'])->name('test');

Route::get('/flats', [App\Http\Controllers\Api\ThreeDController::class, 'flats']);
Route::get('/structureSvg', [App\Http\Controllers\Api\ThreeDController::class, 'structureSvg']);
Route::get('/config', [App\Http\Controllers\Api\ThreeDController::class, 'config']);
Route::get('/floor', [App\Http\Controllers\Api\ThreeDController::class, 'floor']);

Route::get('/test', [App\Http\Controllers\Api\DevBaseController::class, 'accessToken']);


