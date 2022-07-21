<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiProductController;

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
Route::apiResource('products', ApiProductController::class);
// Route::apiResource('products', ApiProductController::class, ['except' => ['create', 'edit','index']]);


//  // Using PHP callable syntax...
//  Route::get('/products', [ApiProductController::class, 'index']);

//  // Using string syntax...
//  Route::get('/products', 'App\Http\Controllers\Api\ApiProductController@index');