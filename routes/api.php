<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PriceLevelController;
//use Illuminate\Http\Request;
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

Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {

    // 查詢所有餐廳
    Route::get('restaurants', [RestaurantController::class, 'api_restaurants']);

    // 修改指定餐廳
    Route::patch('restaurants', [RestaurantController::class, 'api_update']);

    // 刪除指定餐廳
    Route::delete('restaurants', [RestaurantController::class, 'api_delete']);

    // 查詢所有餐點類型
    Route::get('genres', [GenreController::class, 'api_genres']);

    // 修改指定餐點類型
    Route::patch('genres', [GenreController::class, 'api_update']);

    // 刪除指定餐點類型
    Route::delete('genres', [GenreController::class, 'api_delete']);

    // 查詢所有價格等級
    Route::get('price_levels', [PriceLevelController::class, 'api_price_levels']);

    // 修改指定價格等級
    Route::patch('price_levels', [PriceLevelController::class, 'api_update']);

    // 刪除指定價格等級
    Route::delete('price_levels', [PriceLevelController::class, 'api_delete']);

});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
