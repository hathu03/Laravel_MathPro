<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AuthController::class,'logout']);
//    Route::post('refresh', 'AuthController@refresh');
        Route::post('me', [AuthController::class,'me']);
    });
});
Route::prefix("users")->group(function (){
    Route::get("/",[UserController::class,"index"]);
    Route::post("/create",[UserController::class,"store"]);
});
