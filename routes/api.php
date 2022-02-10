<?php

use App\Http\Controllers\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/posts')->group(function (){
    Route::get('/',[PostController::class, 'index']);
    Route::post('/create',[PostController::class, 'store']);
    Route::delete('/delete/{id}',[PostController::class, 'destroy']);
    Route::get('/detail/{id}',[PostController::class, 'show']);
    Route::put('/update/{id}',[PostController::class, 'update']);
});



