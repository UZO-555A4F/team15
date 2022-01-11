<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PriceLevelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('restaurants');
});

Route::get('restaurants/search/{name}', [RestaurantController::class, 'search']);

Route::resource("restaurants", RestaurantController::class);
Route::resource("genres", GenreController::class);
Route::resource("price_levels", PriceLevelController::class);
