<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
Route::prefix( 'auth')->group(function () {
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [\App\Http\Controllers\AuthController::class,'logout']);
//    Route::post('refresh', 'AuthController@refresh');
        Route::post('me', [\App\Http\Controllers\AuthController::class,'me']);
    });
});
